<?php

namespace App\Http\Controllers;

use App\Type;
use Exception;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        echo( '
        <script>localStorage.setItem("select", "produitv");</script>
        ');
    }
    public function AfficherType(){
        $Types=Type::all();

         return view('pages.parameters.Types.AfficherType',["Types"=>$Types]);
       }
       public function AjouterType(Request $req){
try {
    $Type= new Type();
    $Type->name=$req->Nom_Type;

    $Type->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AfficherType');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function DeleteType(Request $req){
try {
    $Type=Type::find($req->id);
    $Type->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}

         return redirect('AfficherType');
   }
   public function ModifierType(Request $req){

try {
    $Type=Type::find($req->id);
    $Type->name=$req->Nom_Type;

    $Type->save();
    session()->flash('success', 'Modifier Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
       return redirect('AfficherType');

   }
}
