<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confrere;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Sortieconfrere;
use App\Produit;

use App\Produitssortieconfrere;


class SortieConfreresController extends Controller
{
    //
    public function index()
    {
        // $confreres = Confrere::all();
        $sortieconfreres= DB::table('sortieconfreres')
        ->select('sortieconfreres.*','confreres.name as confrere_name')
        ->join('confreres','sortieconfreres.confreres_id','=','confreres.id')
        // ->where('sortieconfreres.creer_par',Auth::User()->id)
        ->where('sortieconfreres.type',"0")
        // ->whereNull('sortieconfreres.sortieconfreres')
        ->get(); 
        $sortie=1;
        return view('pages/confreres/liste-sortie-confrere',compact('sortieconfreres'),compact('sortie'));
    }
    public function gettableconfreresortieajax ()
    {
        // $confreres = Confrere::all();
        $sortieconfreres= DB::table('sortieconfreres')
        ->select('sortieconfreres.*','confreres.name as confrere_name')
        ->join('confreres','sortieconfreres.confreres_id','=','confreres.id')
        // ->where('sortieconfreres.creer_par',Auth::User()->id)
        ->where('sortieconfreres.type',"0")
        // ->whereNull('sortieconfreres.sortieconfreres')
        ->get(); 

    return datatables( $sortieconfreres)->make(true) ;

        // $sortie=1;
        // return view('pages/confreres/liste-sortie-confrere',compact('sortieconfreres'),compact('sortie'));
    }
    
    public function gettableconfrereentrerajax()
    {
        // $confreres = Confrere::all();
        $sortieconfreres= DB::table('sortieconfreres')
        ->select('sortieconfreres.*','confreres.name as confrere_name')
        ->join('confreres','sortieconfreres.confreres_id','=','confreres.id')
        // ->where('sortieconfreres.creer_par',Auth::User()->id)
        ->where('sortieconfreres.type',"1")
        // ->whereNull('sortieconfreres.sortieconfreres')
        ->get(); 

    return datatables( $sortieconfreres)->make(true) ;

        // $sortie=1;
        // return view('pages/confreres/liste-sortie-confrere',compact('sortieconfreres'),compact('sortie'));
    }
    

    public function delete_sortieconfrere(Request $req){
    $id=$req->vente_id;
    DB::beginTransaction();
    
    try{
    $vente = Sortieconfrere::find($id);
    $vente->delete();
    DB::commit();
    session()->flash('success','Sortie confrere supprimé avec succés');	
    return redirect('sortie-confrer');}
    catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('sortie-confrer');
    }

}
    public function sortie_confrere_detail($id)
    {
        $facture = DB::table('produitssortieconfreres')
    ->join('sortieconfreres', 'produitssortieconfreres.sortie_confreres_id', '=', 'sortieconfreres.id')
    ->join('produits', 'produitssortieconfreres.produits_id', '=', 'produits.id')
    ->join('confreres', 'sortieconfreres.confreres_id', '=', 'confreres.id')
    ->where('sortieconfreres.id', $id)
    ->whereNull('sortieconfreres.deleted_at')
    ->whereNull('produitssortieconfreres.deleted_at')
    ->select('sortieconfreres.*',"produits.*","produitssortieconfreres.*",'confreres.name as nom_client')
    ->get(); ; 
        $sortie=1;
        // dd($facture);
        return view('pages/confreres/sortie-confrere-detail',
        
        compact('facture'),
        compact('sortie'));
    }

    public function indexentrer()
    {
        $sortieconfreres= DB::table('sortieconfreres')
        ->select('sortieconfreres.*','confreres.name as confrere_name')
        ->join('confreres','sortieconfreres.confreres_id','=','confreres.id')
        // ->where('sortieconfreres.creer_par',Auth::User()->id)
        ->where('sortieconfreres.type',"1")
        ->get(); 
        $sortie=0;
        return view('pages/confreres/liste-sortie-confrere',
        
        compact('sortieconfreres'),
        compact('sortie'));
    }

    
    
public function add_sentrerconfrrepage()
{

    $clients= DB::table('confreres')
    ->select('confreres.*')
    // ->where('confreres.creer_par',Auth::User()->id)
    ->whereNull('confreres.deleted_at')
    ->get(); 

    $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')   
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('creer_par',Auth::User()->id)
        ->whereNull('produits.deleted_at')
        ->get();


    return view('pages.confreres.add-entrer-confrer',compact('clients'),compact('produits'));
}
public function modifier_sentrerconfrrepage($id){
        $confrere= DB::table('confreres')
        ->select('confreres.*')
        // ->where('confreres.creer_par',Auth::User()->id)
        ->whereNull('confreres.deleted_at')
        ->get(); 

        $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')   
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('creer_par',Auth::User()->id)
        ->whereNull('produits.deleted_at')
        ->get();
            $produitsdejaselected= DB::table('produitssortieconfreres')
            ->join('sortieconfreres', 'produitssortieconfreres.sortie_confreres_id', '=', 'sortieconfreres.id')
            ->join('produits', 'produitssortieconfreres.produits_id', '=', 'produits.id')
            ->join('confreres', 'sortieconfreres.confreres_id', '=', 'confreres.id')
            ->where('sortieconfreres.id', $id)
            ->whereNull('sortieconfreres.deleted_at')
            ->whereNull('produitssortieconfreres.deleted_at')
            ->select('sortieconfreres.*',"produits.*","produitssortieconfreres.*",'confreres.name as nom_client')
            ->get(); 
            $produitsdejaselected_id= DB::table('produitssortieconfreres')
            ->join('sortieconfreres', 'produitssortieconfreres.sortie_confreres_id', '=', 'sortieconfreres.id')
            ->join('produits', 'produitssortieconfreres.produits_id', '=', 'produits.id')
            ->join('confreres', 'sortieconfreres.confreres_id', '=', 'confreres.id')
            ->where('sortieconfreres.id', $id)
            ->whereNull('sortieconfreres.deleted_at')
            ->select("produits.id")
            ->get(); 
            $ids = array();
            foreach( $produitsdejaselected_id as $id){
                array_push($ids, $id->id);
            }
            return view('pages.confreres.modifier-sortie-confrer', 
            ['produits'=>$produits,
            'ids'=>$ids,
            'clients'=>$confrere,
            'produitsdejaselected'=>$produitsdejaselected]);
    


}
public function add_sortieconfrrepage()
{

    $clients= DB::table('confreres')
    ->select('confreres.*')
    // ->where('confreres.creer_par',Auth::User()->id)
    ->whereNull('confreres.deleted_at')
    ->get(); 

    $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')   
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('creer_par',Auth::User()->id)
        ->whereNull('produits.deleted_at')
        ->get();


    return view('pages.confreres.add-sortie-confrer',compact('clients'),compact('produits'));
}



public function modifier_sortie(Request $req){
    DB::beginTransaction();
    try{
    $quatite_produit= $req->input("qty");
    $listproduit = $req->input("pr_select");
    $p_unitaire = $req->input("p_unitaire");
    $qtyinitiale = $req->input("qtyinitiale");

    $i=0;
    $prd= DB::table('produitssortieconfreres')
    ->select('produitssortieconfreres.*')
    ->where('produitssortieconfreres.sortie_confreres_id',$req->id)
    ->whereNull('produitssortieconfreres.deleted_at')
    ->get();
    foreach($prd as $a)    
    {
      $p1 = Produitssortieconfrere::find($a->id);
      $p1 ->delete();
    }
    $sortie = Sortieconfrere::find($req->id);

    $sortie->confreres_id= $req->client_idsuivant;
    $sortie->methode_echange= $req->methode_echange;
    $sortie->total= $req->montant_PU;
    $sortie->creer_par= Auth::User()->id;
    if( $sortie->confreres_id==null){
        $sortie->confreres_id=1000;
    }
    $sortie->save();
    foreach ($req->input("pr_select") as $pr_id){
        $produit =  Produit::find( $pr_id);
        $venteproduit=new Produitssortieconfrere();
        $venteproduit->qte=$quatite_produit[$i];
        $venteproduit->produits_id=$produit->id;
        $venteproduit->sortie_confreres_id=$sortie->id;
        $venteproduit->type= $sortie->type;
        $venteproduit->prix_AU=$p_unitaire[$i];
        $venteproduit->save();
        $i=$i+1;
    }
    DB::commit();
    return Response()->json(["codeEr"=>"200","msg"=>"bien effetcuie","id_sortie"=>$sortie->id]);  
}
catch(QueryException $ex){
    DB::rollBack();
    $req->session()->flash('warning', 'erreur base donnée');
    return Response()->json(["codeEr"=>"300","msg"=>$ex]);  
}

}
public function store_sortie(Request $req){
    DB::beginTransaction();
    try{
    $quatite_produit= $req->input("qty");
    $listproduit = $req->input("pr_select");
    $p_unitaire = $req->input("p_unitaire");
    $i=0;
    $sortie=new Sortieconfrere();
    $sortie->confreres_id= $req->client_idsuivant;
    $sortie->methode_echange= $req->methode_echange;
    $sortie->total= $req->montant_PU;
    $sortie->type= $req->type;
    $sortie->status=null;
    $sortie->creer_par= Auth::User()->id;
    if( $sortie->confreres_id==null){
        $sortie->confreres_id=1000;
    }
    $sortie->save();
    foreach ($req->input("pr_select") as $pr_id){
        $produit =  Produit::find( $pr_id);
        $venteproduit=new Produitssortieconfrere();
        $venteproduit->qte=$quatite_produit[$i];
        $venteproduit->produits_id=$produit->id;
        $venteproduit->sortie_confreres_id=$sortie->id;
        $venteproduit->type= $req->type;
        $venteproduit->prix_AU=$p_unitaire[$i];
        $venteproduit->save();
        $i=$i+1;
    }
    DB::commit();
    return Response()->json(["codeEr"=>"200","msg"=>"bien effetcuie","id_sortie"=>$sortie->id]);  
}
catch(QueryException $ex){
    DB::rollBack();
    $req->session()->flash('warning', 'erreur base donnée');
    return Response()->json(["codeEr"=>"300","msg"=>$ex]);  
}

}





  


}
