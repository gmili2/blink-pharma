<?php

namespace App\Http\Controllers;

use App\Pays;
use Illuminate\Http\Request;
use Exception;

class PaysController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        echo('
        <script>localStorage.setItem("select", "produitv");</script>
        ');
         echo('
        <script>localStorage.setItem("select2", "Pays");</script>
        ');
        echo( '
        <script>localStorage.setItem("sousselect", "vpays");</script>
        ');
    }
    public function index(){
        $pays=Pays::all();
          return view('pages.parameters.pays.AjouterPays',['pays'=>$pays]);
    }
    public function AjouterPays(Request $req){

try {
    $pays=new Pays();
    $pays->Nom=$req->Nom_pays;
    $pays->save();
    session()->flash('success', 'Ajouter Avec Success');
    return redirect('AjouterPaysView');
}
        catch (Exception $ex) {
            session()->flash('warning', 'erreur base donnée');
        }
    }
    public function ModifierPays(Request $req){
        try {
            $ville=Pays::find($req->id);
            $ville->Nom=$req->Nom_pays;

            $ville->save();
            session()->flash('success', 'update Avec Success');
            return redirect('AjouterPaysView');
        }
        catch (Exception $ex) {
            session()->flash('warning', 'erreur base donnée');
        }
           }


           public function DeletePays(Request $req){
        try {
            $ville=Pays::find($req->id);
            $ville->delete();
            session()->flash('success', 'Delete Avec Success');
            return redirect('AjouterPaysView');
        }
                catch (Exception $ex) {
                    session()->flash('warning', 'erreur base donnée');
                }

        }
}
