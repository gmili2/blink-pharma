<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaire;
use App\Inventdetail;
use App\Produit;
use Illuminate\Support\Facades\DB;
use Auth;
Use Carbon\Carbon;

class InventaireController extends Controller
{
    //

    public function index()
    {
        // $invents = Inventaire::all();
        $invents= DB::table('inventaires')
        ->select('inventaires.*','users.name as name_user')
        ->join('users', 'inventaires.creer_par', '=', 'users.id')
        ->orderBy('inventaires.id', 'DESC')
        ->get();
        // dd("");
        return view('pages/inventaire/liste',compact('invents'));
    }


    public function store(Request $req)
{


    DB::beginTransaction();
    try{

   // dd($req->input());
    $client = new Inventaire();

   
    $client->nom=$req->nom;
    $client->commentaire=$req->commentaire;
    $client->users_id=Auth::user()->id;
    $client->creer_par=Auth::user()->id;
    $client->save();
    DB::commit();
    
    session()->flash('success','Inventaire ajouté avec succés');	
    return redirect('generateinvent'.$client->id)
    
    ;}
    catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('invent');
    }  
}


public function delete($id)
{

    DB::beginTransaction();
    try{
    $client = Inventaire::find($id);
    $client->delete();
    DB::commit();

    session()->flash('success','Inventaire supprimé avec succés');	
    return redirect('invent');}
    catch(QueryException $ex){
        
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('invent');
    }
}


public function generate($id)
{
    $produits = Produit::all();
    $invent = Inventaire::find($id);
   // dd($invent);
    return view('pages/inventaire/generatedlist',compact(['produits','invent']));
}

public function addinvent()
{
    $produits= DB::table('produits')
    ->join('classes','produits.classes_id','=','classes.id')
    ->join('types','produits.types_id','=','types.id')
    ->join('forms', 'produits.forms_id', '=', 'forms.id')   
    ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
    ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
    ,'dcis.name as namedci')
    ->whereNull('produits.deleted_at')
    ->get();

    return view('pages/inventaire/addinvent',compact(['produits']));
}


// return view('pages/inventaire/addinvent');

public function add(Request $req)
{
    // dd($req->input());
    $idprodui_select= $req->input("idprodui_select");
    $qtesysprodui_selected = $req->input("qtesysprodui_selected");
    $qtephprodui_selected = $req->input("qtephprodui_selected");
    $ppv_produi_selected = $req->input("ppv_produi_selected");
    $nomprodui_selected = $req->input("nomprodui_selected");
    $commentaire = $req->input("commentaire");

    $counter=sizeof($nomprodui_selected);
    $client = new Inventaire();
   
    $client->nom=$req->nom;
    $client->commentaire=$req->commentairei;
    $client->users_id=Auth::user()->id;
    $client->creer_par=Auth::user()->id;
    $client->statut = 1;
    $client->date_inventaire = Carbon::now();
    $client->save();
    // DB::commit();
    DB::beginTransaction();
    try{
    // dd($counter);

    for($i=0;$i<$counter;$i++)
    {     
       $det = new Inventdetail();
       $det->invent_id= $client->id;
       $det->produit_id=$idprodui_select[$i];
       $det->nom=$nomprodui_selected[$i];
       $det->ppv=$ppv_produi_selected[$i];
       $det->qte_sys=$qtesysprodui_selected[$i];
       $det->qte_phys=$qtephprodui_selected[$i];
       $det->ecart=$qtesysprodui_selected[$i]-$qtephprodui_selected[$i];
       $det->commentaire=$commentaire[$i];
       $det->creer_par=Auth::user()->id;
    //    dd( $det);
       $det->save();
    }

    // $inv = Inventaire::find($client->id);
    // $inv->users_id = Auth::User()->id;
   
    // $inv->save();

    DB::commit();

    session()->flash('success','Inventaire Validé avec succés');	
    return redirect('invent');}
    catch(QueryException $ex){
        
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('invent');
    }
}

public function detail($id)
{
    $produits = Inventdetail::where('invent_id',$id)->
    get();

    // $produits= DB::table('inventdetails')
    //     ->select('inventdetails.*','produits.name as produitnom','produits.quantite_disponible as qte_sys')
    //     ->join('produits', 'inventdetails.produit_id', '=', 'produits.id')
    //    ->
    //     where('invent_id',$id)  
    //           ->get();
    $invent = Inventaire::find($id);
//    dd($produits);
    return view('pages/inventaire/detail',compact(['produits','invent']));
}


}
