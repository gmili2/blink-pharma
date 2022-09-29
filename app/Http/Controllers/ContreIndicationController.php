<?php

namespace App\Http\Controllers;

use App\ContreIndication;
use Illuminate\Http\Request;
use Exception;

class ContreIndicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        echo('
        <script>localStorage.setItem("sousselect", "vindication");</script>
        ');
         echo('
        <script>localStorage.setItem("select2", "Indication");</script>
        ');
        echo('
        <script>localStorage.setItem("select", "produitv");</script>
        ');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    // public  function afficherheader()
    // {
    //   $nom="d'accueil";
      
    // }

    
    public function AfficherContreIndication(){
        $ContreIndications=ContreIndication::all();

         return view('pages.parameters.ContreIndication.AfficherContreIndication',["ContreIndications"=>$ContreIndications]);
       }
       public function AjouterContreIndication(Request $req){
try {
    $ContreIndication= new ContreIndication();
    $ContreIndication->Nom=$req->Nom_ContreIndication;
    $ContreIndication->Valeur=$req->Valeur;
    $ContreIndication->Type=$req->Type;

    $ContreIndication->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherContreIndication');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function DeleteContreIndication(Request $req){
try {
    $ContreIndication=ContreIndication::find($req->id);
    $ContreIndication->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
         return redirect('AfficherContreIndication');
   }
   public function ModifierContreIndication(Request $req){

try {
    $ContreIndication=ContreIndication::find($req->id);
    $ContreIndication->Nom=$req->Nom_ContreIndication;
    $ContreIndication->Valeur=$req->Valeur;
    $ContreIndication->Type=$req->Type;


    $ContreIndication->save();
    session()->flash('success', 'Modifier Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
       return redirect('AfficherContreIndication');
   }


}
