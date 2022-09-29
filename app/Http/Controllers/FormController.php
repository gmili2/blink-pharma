<?php

namespace App\Http\Controllers;

use App\Form;
use Exception;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        echo('
        <script>localStorage.setItem("select", "produitv");</script>
        ');
          echo('
        <script>localStorage.setItem("select", "Forms");</script>
        ');
        echo( '
        <script>localStorage.setItem("sousselect", "vForms");</script>
        ');
    }
  
    public function AfficherForm(){
        $Forms=Form::all();

         return view('pages.parameters.Forms.AfficherForm',["Forms"=>$Forms]);
       }
       public function AjouterForm(Request $req){
try {
    $Form= new Form();
    $Form->name=$req->Nom_Form;

    $Form->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherForm');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function DeleteForm(Request $req){
try {
    $Form=Form::find($req->id);
    $Form->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}

         return redirect('AfficherForm');
   }
   public function ModifierForm(Request $req){

try {
    $Form=Form::find($req->id);
    $Form->name=$req->Nom_Form;

    $Form->save();
    session()->flash('success', 'Modifier Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
       return redirect('AfficherForm');

   }
}
