<?php

namespace App\Http\Controllers;


use App\Zone ;
use Illuminate\Http\Request;
use Exception;

use Auth;   
class ZoneController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        echo('
        <script>localStorage.setItem("select", "produitv");</script>
        ');
       
        echo( '
        <script>localStorage.setItem("sousselect", "vzone");</script>
        ');
          echo('
        <script>localStorage.setItem("select2", "zone");</script>
        ');
    }
    public function afficherZone(){
     $zones=Zone::all();

      return view('pages.parameters.Zone.AfficherZone',["zones"=>$zones]);
    }

public function AjouterZone(Request $req){
    try {
        // dd('');
        $zone= new Zone();
        $zone->Nom_zone=$req->Nom_zone;
        $zone->Ref_zone=$req->Ref_zone;
        $zone->creer_par=Auth::User()->id;
        $zone->save();
        session()->flash('success', 'Ajouter Avec Success');

        return redirect('AfficherZone');
    } catch (Exception $ex) {
        // dd($ex);
        session()->flash('warning', 'erreur base donnée');
    }
    return redirect('AfficherZone');

}
public function DeleteZone(Request $req){
try {
    Zone::where('id', '=', $req->id)->delete();
    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
      return redirect('AfficherZone');
}
public function ModifierZone(Request $req){

try {
    $zone=Zone::find($req->id);
    $zone->Nom_zone=$req->Nom_zone;
    $zone->Ref_zone=$req->Ref_zone;
    $zone->save();
    session()->flash('success', 'Modifier Avec Success');
    return redirect('AfficherZone');
}
 catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}


}
}
