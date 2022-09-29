<?php

namespace App\Http\Controllers;

use App\Dci;
use Illuminate\Http\Request;
use Exception;

class DciController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        echo('
        <script>localStorage.setItem("sousselect", "vdci");</script>
        ');
          echo('
        <script>localStorage.setItem("select2", "DCI");</script>
        ');
        echo('
        <script>localStorage.setItem("select", "produitv");</script>
        ');
        
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     echo( '
    //     <script>localStorage.setItem("select", "produitv");</script>
    //     ');
    // }
    public function AfficherDci(){
        $Dcis=Dci::all();

         return view('pages.parameters.Dci.AfficherDci',["Dcis"=>$Dcis]);
       }
       public function AjouterDci(Request $req){
try {
    $Dci= new Dci();
    $Dci->name=$req->Nom_Dci;

    $Dci->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherDci');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function DeleteDci(Request $req){
try {
    $Dci=Dci::find($req->id);
    $Dci->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
         return redirect('AfficherDci');
   }
   public function ModifierDci(Request $req){

try {
    $Dci=Dci::find($req->id);
    $Dci->name=$req->Nom_Dci;

    $Dci->save();
    session()->flash('success', 'Modifier Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
       return redirect('AfficherDci');
   }
}
