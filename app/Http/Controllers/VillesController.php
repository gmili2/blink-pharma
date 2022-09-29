<?php

namespace App\Http\Controllers;

use App\Pays;
use App\Ville;
use Exception;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VillesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        echo('
        <script>localStorage.setItem("select", "produitv");</script>
        ');
         echo('
        <script>localStorage.setItem("select2", "Ville");</script>
        ');
        echo( '
        <script>localStorage.setItem("sousselect", "vville");</script>
        ');
    }
   public function index(){
       $Pays=Pays::all();
    //    $villes=Villes::all();
       $villes=DB::table('villes')
       ->join('pays', 'pays.id', '=', 'villes.pays_id')
     ->whereNull('villes.deleted_at')
       ->select('villes.*', 'pays.Nom as pays_Nom','pays.id as pays_id')
       ->get();

    //    dd($villes);
       return view('pages.parameters.Villes.AjouterVilles',['villes'=>$villes,'Pays'=>$Pays]);
   }
   public function AjouterVille(Request $req){
try {
    $ville=new Ville();
    $ville->Nom=$req->Nom_ville;
    $ville->pays_id=$req->Pays;
    $ville->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AjouterVillesView');
}catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }
   public function ModifierVille(Request $req){
try {
    $ville=Ville::find($req->id);
    $ville->Nom=$req->Nom_ville;
    $ville->pays_id=$req->Pays;
    $ville->save();
    session()->flash('success', 'update Avec Success');
    return redirect('AjouterVillesView');
}
catch (Exception $ex) {
    session()->flash('warning', 'erreur base donnée');
}
   }


   public function DeleteVille(Request $req){
try {
    $ville=Ville::find($req->id);
    $ville->delete();
    session()->flash('success', 'Delete Avec Success');
    return redirect('AjouterVillesView');
}
        catch (Exception $ex) {
            session()->flash('warning', 'erreur base donnée');
        }

}
}
