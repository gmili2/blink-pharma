<?php

namespace App\Http\Controllers;

use App\Remise;
use Exception;
use Illuminate\Http\Request;

class RemiseController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
        echo( '
        <script>localStorage.setItem("select", "produitv");</script>
        ');
        echo( '
        <script>localStorage.setItem("sousselect", "vremisee");</script>
        ');
    }
      public function AfficherRemise(){
        $Remise=Remise::all();

         return view('pages.parameters.Remise.AfficherRemise',["Remise"=>$Remise]);
       }
       public function AjouterRemise(Request $req){
try {
    $Remise= new Remise();
    $Remise->Nom_Remise=$req->Nom_Remise;
    $Remise->Valeur=$req->Valeur;

    $Remise->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherRemise');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function DeleteRemise(Request $req){
try {
    $Remise=Remise::find($req->id);
    $Remise->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
         return redirect('AfficherRemise');
   }
   public function ModifierRemise(Request $req){

try {
    $Remise=Remise::find($req->id);
    $Remise->Nom_Remise=$req->Nom_Remise;
    $Remise->Valeur=$req->Valeur;


    $Remise->save();
    session()->flash('success', 'Modifier Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
       return redirect('AfficherRemise');
   }
}



