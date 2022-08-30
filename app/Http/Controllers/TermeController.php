<?php

namespace App\Http\Controllers;

use App\Terme;
use Exception;
use Illuminate\Http\Request;

class TermeController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
     
  }
    public function TermeDevis(){
      echo( '
      <script>localStorage.setItem("select", "TermeDevis");</script>
      ');
        $Devis=Terme::find(1);
        return view('pages.parameters.Termes.TermeDevis',['Devis'=>$Devis]);
    }
    public function TermeVente(){
      echo( '
      <script>localStorage.setItem("select", "TermeVente");</script>
      ');
        $Vente=Terme::find(2);
        return view('pages.parameters.Termes.TermeVente',['Vente'=>$Vente]);
    }
    public function TermeFacture(){
      echo( '
      <script>localStorage.setItem("select", "TermeFacture");</script>
      ');
        $Facture=Terme::find(3);
        return view('pages.parameters.Termes.TermeFacture',['Facture'=>$Facture]);
    }
    public function ModifierValueDevis(Request $req){
  try{
        $Devis=Terme::find(1);
        $Devis->Value=$req->ValueDevis;
        $Devis->save();
        session()->flash('success', 'Modifier Avec Success');
      return redirect('TermeDevis');
  }
  catch(Exception $e){
    session()->flash('warning', 'erreur base donnée');
  }
    }
    public function ModifierValueVente(Request $req){
try {
    $Devis=Terme::find(2);
    $Devis->Value=$req->ValueVente;
    $Devis->save();
    session()->flash('success', 'Modifier Avec Success');
    return redirect('TermeVente');

}
catch(Exception $e){
    session()->flash('warning', 'erreur base donnée');
  }


    }
    public function ModifierValueFacture(Request $req){
try {
    $Devis=Terme::find(3);
    $Devis->Value=$req->ValueFacture;
    $Devis->save();
    session()->flash('success', 'Modifier Avec Success');
    return redirect('TermeFacture');
}
catch(Exception $e){
    session()->flash('warning', 'erreur base donnée');
  }

    }
}
