<?php

namespace App\Http\Controllers;

use App\Sequence;
use Illuminate\Http\Request;
use DB;
use Auth;
class SequenceCentroller extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        echo( '
        <script>localStorage.setItem("select", "transactions");</script>
        ');
    }
    public  function AfficherValeur(){
         //$Sequence=Sequence::find(1);
         $Sequence = Sequence::where('creer_par', '=', Auth::User()->id)->firstOrFail();
         return view('pages.parameters.Sequence.AfficherSequence',["Sequence"=>$Sequence]);
    }
    public function ModifierRemiseparCategorie(){
        echo( '
        <script>localStorage.setItem("sousselect", "vremise");</script>
        ');
        return view('pages.parameters.Sequence.ModifierRemiseparCategorie');
    }


    public function ModfierSequence(Request $req){
        DB::beginTransaction();
        try{
        $Sequence = Sequence::where('creer_par', '=', Auth::User()->id)->firstOrFail();
        $Sequence->Facteur_de_vente=$req->facture_de_vente;
        $Sequence->Bon_de_livraison=$req->retour_sur_vente;
        $Sequence->Fournisseur_recu=$req->bon_de_livraison;
        $Sequence->Inventaire_stock=$req-> founi_recu;
        $Sequence->Facture_gobal=$req->inven_stock;
        $Sequence->sequence_devis=$req->devis;
        $Sequence->Bon_de_commande=$req->bon_commande;
        $Sequence->Fournisseur_emis=$req->fourni_emis;
        $Sequence->Adjustement_de_stock=$req->adj_stock;
        $Sequence->N_order=$req->order;
        $Sequence->preparation=$req->prepa;
        $Sequence->creer_par=Auth::User()->id;
        $Sequence->update();
        DB::commit();
          session()->flash('success', 'bien Modifier');
          return redirect('AfficherSequence');
      }
      catch(QueryException $ex){
          DB::rollBack();
          session()->flash('warning', 'erreur base donnée');
          return redirect('AfficherSequence');
        }
    }
}
