<?php

namespace App\Http\Controllers;

use App\Garde;
use Exception;
use Illuminate\Http\Request;

class GardeController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
        echo( '
        <script>localStorage.setItem("select", "Horaire");</script>
        ');
    }
  public function AjouterGardeView(){
    return view('pages.parameters.Garde.AjouterGarde');
  }
  public function AjouterGarde(Request $req){
    try {
        $Garde=new Garde();
        $Garde->Nom=$req->Nom_garde;
        $Garde->Date_debut=$req->Date_debut;
        $Garde->Date_fin=$req->Date_fin;
        $Garde->debut1=$req->debut1;
        $Garde->debut2=$req->debut2;
        $Garde->fin1=$req->fin1;
        $Garde->fin2=$req->fin2;
        $Garde->save();
        session()->flash('success', 'Ajouter Avec Success');
        return redirect('AfficherGarde');
    }
    catch (Exception $ex) {
        session()->flash('warning', 'erreur base donnée');
    }

}
  public function AfficherGarde(){
    $gardes=Garde::all();
    return view('pages.parameters.Garde.AfficherGarde',['gardes'=>$gardes]);
  }
  public function DeleteGarde(Request $req){

    try {
        Garde::where('id', '=', $req->id)->delete();
        session()->flash('success', 'Delete Avec Success');
        return redirect('AfficherGarde');
    }
    catch (Exception $ex) {
        session()->flash('warning', 'erreur base donnée');
    }

    }





}
