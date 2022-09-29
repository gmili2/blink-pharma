<?php

namespace App\Http\Controllers;

use App\Fidelites;
use App\Produit;
use Exception;
use Illuminate\Http\Request;

class PointController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     
    }

      public function index(){
        $Points=Fidelites::all();
        $produits=Produit::all();
        return view('pages.parameters.PointFidélité.AfficherPointFidelite',['Points'=>$Points,'produits'=>$produits]);
      }
      public function AjouterPoint(Request $req){
try {
    $point=new Fidelites();
    $point->Nom=$req->Nom;

    $point->Type=$req->Type;
    $point->Value=$req->Value;
    $point->status=$req->Status;
    $point->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherPoint');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}

    }

    public function ModifierPoint(Request $req){
        // dd($req);
try {
    $point=Fidelites::find($req->id);
    $point->Nom=$req->Nom;

    $point->Type=$req->Type;
    $point->Value=$req->Value;
    $point->status=$req->Status;
    $point->save();
    session()->flash('success', 'update Avec Success');
    return redirect('AfficherPoint');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
    }
    public function DeletePoint(Request $req){
        // dd($req);
try {
    $point=Fidelites::find($req->id);
    $point->delete();
    $point->save();
    session()->flash('success', 'Delete Avec Success');


    return redirect('AfficherPoint');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}

    }
    public function ModifierPointView(){


        return view('pages.parameters.PointFidélité.ModifierPointFidelite');
    }

}



