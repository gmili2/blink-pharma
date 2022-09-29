<?php

namespace App\Http\Controllers;

use App\Tva;
use Exception;
use Illuminate\Http\Request;

class TvaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        echo( '
        <script>localStorage.setItem("select", "produitv");</script>
        ');
        
                echo( '
        <script>localStorage.setItem("select2", "TVA");</script>
        ');
        echo( '
        <script>localStorage.setItem("sousselect", "vtva");</script>
        ');
    }
      public function AfficherTva(){
        $TVA=Tva::all();

         return view('pages.parameters.TVA.AfficherTva',["TVA"=>$TVA]);
       }
       public function AjouterTva(Request $req){
try {

    // dd($req->input());
    $Tva= new Tva();
    $Tva->Nom_Tva=$req->Nom_Tva;
    $Tva->Valeur=$req->Valeur;
    $Tva->Type=$req->Type;


    
    $Tva->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherTva');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function DeleteTva(Request $req){
try {
    $Tva=Tva::find($req->id);
    $Tva->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
         return redirect('AfficherTva');
   }
   public function ModifierTva(Request $req){

try {
    $Tva=Tva::find($req->id);
    $Tva->Nom_Tva=$req->Nom_Tva;
    $Tva->Valeur=$req->Valeur;
    $Tva->Type=$req->Type;
    $Tva->save();
    session()->flash('success', 'Modifier Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
       return redirect('AfficherTva');
   }
}


