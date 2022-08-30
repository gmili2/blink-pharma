<?php

namespace App\Http\Controllers;

use App\Classe;
use Illuminate\Http\Request;
use Exception;

class ClasseController extends Controller
{
    public function AfficherClasse(){
        $Classes=Classe::all();

         return view('pages.parameters.Classes.AfficherClasse',["Classes"=>$Classes]);
       }
       public function AjouterClasse(Request $req){
try {
    $Classe= new Classe();
    $Classe->name=$req->Nom_Classe;

    $Classe->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherClasse');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function DeleteClasse(Request $req){
try {
    $Classe=Classe::find($req->id);
    $Classe->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}

         return redirect('AfficherClasse');
   }
   public function ModifierClasse(Request $req){

try {
    $Classe=Classe::find($req->id);
    $Classe->name=$req->Nom_Classe;

    $Classe->save();
    session()->flash('success', 'Modifier Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
       return redirect('AfficherClasse');

   }
}
