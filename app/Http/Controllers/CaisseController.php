<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaire;
use App\Inventdetail;
use App\Produit;
use App\Caisse;
use App\Vente;
use App\User;

use Illuminate\Support\Facades\DB;
use Auth;
Use Carbon\Carbon;

class CaisseController extends Controller
{
    //


    public  function afficherheader()
    {
      $nom="d'accueil";
        echo( '
        <script>localStorage.setItem("select", "Caisse");</script>
        ');
    }
    
    
    public function index()
    {
        $this->afficherheader();
        // $caisse = Caisse::all();
        $caisse= DB::table('caisses')
        ->select('caisses.*','users.name as username')
        ->join('users', 'caisses.creer_par', '=', 'users.id')
        ->whereNull('caisses.deleted_at')
        ->get();

        // dd($caisse);
        return view('pages/caisse/listecaisse',compact('caisse'));
    }


    public function store(Request $req)
{


    DB::beginTransaction();
    try{

    $client = new Inventaire();

   
    $client->nom=$req->nom;
    $client->commentaire=$req->commentaire;
    $client->users_id=Auth::user()->id;
    $client->creer_par=Auth::user()->id;
    $client->save();
    DB::commit();
    
    session()->flash('success','Inventaire ajouté avec succés');	
    return redirect('generateinvent/'.$client->id)
    
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


public function generate()
{
    // dd("kjh");
    $this->afficherheader();

    $dernierscaisse= DB::table('caisses')->latest('id')->first();

    $ventes= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->whereNull('ventes.deleted_at')
    ->where('ventes.id','>',$dernierscaisse->dernier_vente_id)
    
    ->get();


    $type_payment = DB::table('typepayments')
    ->select('typepayments.*')
    ->get(); 


    $summventes= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->whereNull('ventes.deleted_at')
    ->where('ventes.id','>',$dernierscaisse->dernier_vente_id)
    ->sum('ventes.montant_recu');

    
    return view('pages/caisse/generatedlistcaisse',compact(['ventes','summventes','type_payment']));
}


public function add(Request $req)
{
    DB::beginTransaction();
    try{
  
       $det = new Caisse();
       $det->premier_vente_id=$req->vente_id_first;
       $det->dernier_vente_id=$req->input('vente_id_last');
       $det->montant_sys=$req->input('montant_sys');
       $det->montant_caisse=$req->input('montant_caisse');
       $det->commentaire=$req->input('commentaire');
       $det->creer_par=Auth::User()->id;

       $det->gane=0;
       $det->save();
    // } 
    DB::commit();

    session()->flash('success','caisse Validé avec succés');	
    return redirect('caisse');}
    catch(QueryException $ex){
        
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('caisse');
    }
}

public function detail($id)
{
    $this->afficherheader();

    $caisse = Caisse::find($id);
    $user = User::find($caisse->creer_par);

    // style="width: 300;"
    $ventes= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->whereNull('ventes.deleted_at')
    ->where('ventes.id','>=',$caisse->premier_vente_id)
    ->where('ventes.id','<=',$caisse->dernier_vente_id)
    ->get();
    $type_payment = DB::table('typepayments')
    ->select('typepayments.*')
    ->get(); 
    // dd($ventes,$caisse);
    return view('pages/caisse/detailcaisse',compact(['ventes','caisse','user']));
}


}
