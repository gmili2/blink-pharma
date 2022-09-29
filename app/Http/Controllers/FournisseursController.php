<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use App\Pays;
use App\User;

use Illuminate\Support\Facades\DB;
use Auth;

class FournisseursController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
     
    }

// public function index()
// {
//     $fournisseurs = Fournisseur::all();
//     $fournisseurs= DB::table('fournisseurs')
//     ->select('fournisseurs.*')
//     // ->where('fournisseurs.creer_par',Auth::User()->id)
//     ->whereNull('fournisseurs.deleted_at')
//     ->paginate(8); 
//     return view('pages/fournisseur/liste',compact('fournisseurs'));
// }

public  function afficherheader()
{
    echo( '
    <script>localStorage.setItem("select", "fournisseurs");</script>
    ');
}






public function getVillesselect($id,$ville){

    $this->afficherheader();
   
    

    $villes=DB::table('villes')
     ->join('pays', 'pays.id', '=','villes.pays_id')
     ->where('villes.pays_id','=',$id)
     ->whereNull('villes.deleted_at')
     ->select('villes.*')




    ->get();




    return view('pages/fournisseur/AllVillesselected',['villes'=>$villes,'id'=>$id,'ville'=>$ville]);
}
public function getvilles($id){

    $this->afficherheader();
   
    

    $villes=DB::table('villes')
     ->join('pays', 'pays.id', '=','villes.pays_id')
     ->where('villes.pays_id','=',$id)
     ->whereNull('villes.deleted_at')
     ->select('villes.*')




    ->get();




    return view('pages/fournisseur/AllVilles',['villes'=>$villes,'id'=>$id]);
}
public function index()
{
$this->afficherheader();
echo( '
<script>localStorage.setItem("sousselect", "tousfourn");</script>
');

    $fournisseurs = Fournisseur::all();

    $fournisseurs= DB::table('fournisseurs')
    ->join('villes','villes.id','=','fournisseurs.ville')
    ->select('fournisseurs.*','villes.Nom as ville')
    // ->where('fournisseurs.creer_par',Auth::User()->id)
    ->whereNull('fournisseurs.deleted_at')
    ->paginate(6);

    
    return view('pages/fournisseur/liste',['fournisseurs'=>$fournisseurs]);
}
public function gettablefournisseurajax()
{

    $fournisseurs= DB::table('fournisseurs')
    ->join('villes','villes.id','=','fournisseurs.ville')
    ->select('fournisseurs.*','villes.Nom as ville')
    // ->where('fournisseurs.creer_par',Auth::User()->id)
    ->whereNull('fournisseurs.deleted_at')
    ->get();

    return datatables( $fournisseurs)->make(true) ;
    
}


////////////:: ahmad
public function gettable_fournisseur()
{
$this->afficherheader();

    $fournisseurs = Fournisseur::all();
    $fournisseurs= DB::table('fournisseurs')
    ->join('villes','villes.id','=','fournisseurs.ville')
    ->select('fournisseurs.*','villes.Nom as ville')
    // ->where('fournisseurs.creer_par',Auth::User()->id)
    ->whereNull('fournisseurs.deleted_at')
    ->get();
    $paginate=0;
    return view('pages/fournisseur/table-fournisseur',compact('fournisseurs'),compact('paginate'));
}
public function  addfornisseurView(){
$this->afficherheader();
echo( '
<script>localStorage.setItem("sousselect", "addfourn");</script>
');
    $Pays=Pays::all();
    
          return view('pages/fournisseur/addfornisseur',['Pays'=>$Pays]);

}


public function modify($id)
{
$this->afficherheader();

    $fournisseurs = Fournisseur::find($id);
    $villes=DB::table('villes')
    ->join('pays', 'pays.id', '=','villes.pays_id')
    ->where('villes.pays_id','=',$fournisseurs->pays)
    ->whereNull('villes.deleted_at')
    ->select('villes.*')
    ->get();


    $Pays=Pays::all();
    return view('pages/fournisseur/modifyfournisseur',compact('fournisseurs','Pays','villes'));
}


public function gettable_fournisseurbynom($nom)
{
    $fournisseurs = Fournisseur::all();
    $fournisseurs= DB::table('fournisseurs')
    ->select('fournisseurs.*')
    // ->where('fournisseurs.creer_par',Auth::User()->id)
    ->whereNull('fournisseurs.deleted_at')
    ->where('fournisseurs.name', 'like', '%'.$nom.'%')
    ->get(); 
    $paginate=1;
    return view('pages/fournisseur/table-fournisseur',compact('fournisseurs'),compact('paginate'));
}




public function store(Request $req)
{


    DB::beginTransaction();
    try{

   // dd($req->input());
    $client = new Fournisseur();
    if($req->image!=null)
    {
    $image = time() . '-' . $req->nom . '.' . $req->image->extension();
    $req->image->move(public_path('images'), $image);
    $client->image = $image;
    } 
   
    $client->name=$req->nom;
    $client->email=$req->email;
    $client->tele=$req->telephone;
    $client->fax=$req->fax;
    $client->site=$req->siteinternet;
    $client->code_postale=$req->codepostal;
    $client->Pays=$req->Pays;
    $client->adresse=$req->adresse;
    $client->ville=$req->ville;
    $client->description=$req->description;
    $client->creer_par=Auth::user()->id;
    $client->save();
    DB::commit();
    
    session()->flash('success','Fournisseur ajouté avec succés');	
    return redirect('fournisseurs');}
    catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('fournisseurs');
    }  
}


public function delete(Request $req)
{
    $id=$req->fr_id;
    DB::beginTransaction();
    try{
    $client = Fournisseur::find($id);
    $client->delete();
    DB::commit();

    session()->flash('success','Fournisseur supprimé avec succés');	
    return redirect('fournisseurs');}
    catch(QueryException $ex){
        
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('fournisseurs');
    }
}

public function update(Request $req,$id)
{
    DB::beginTransaction();
    try{
    $client = Fournisseur::find($id);
    if($req->image!=null)
    {
    $image = time() . '-' . $req->nom . '.' . $req->image->extension();
    $req->image->move(public_path('images'), $image);
    $client->image = $image;
    } 
    $client->name=$req->nom;
    $client->email=$req->email;
    $client->tele=$req->telephone;
    $client->fax=$req->fax;
    $client->site=$req->siteinternet;
    $client->code_postale=$req->codepostal;
    $client->Pays=$req->Pays;
    $client->adresse=$req->adresse;
    $client->ville=$req->ville;
    $client->description=$req->description;
    $client->creer_par=Auth::user()->id;
    $client->save();
    DB::commit();
    
    session()->flash('success','Fournisseur modifié avec succés');	
    return redirect('fournisseurs');}
    catch(QueryException $ex){
        
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('fournisseurs');
    }
}


public function showfournisseur($id)
{
$this->afficherheader();
    $fournisseurs = Fournisseur::find($id);
    $creer_par=User::find( $fournisseurs->creer_par);

    return view('pages/fournisseur/informationfournisseur',['fournisseurs'=>$fournisseurs]);
}



}
