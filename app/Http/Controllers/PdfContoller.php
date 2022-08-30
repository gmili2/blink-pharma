<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
class PdfContoller extends Controller
{




    
    public function imprimer_ticket($id){
        $ticket = DB::table('venteproduits')
        ->join('ventes', 'venteproduits.ventes_id', '=', 'ventes.id')
        ->join('produits', 'venteproduits.produits_id', '=', 'produits.id')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        ->where('ventes.id', $id)
        ->whereNull('ventes.deleted_at')
        ->whereNull('venteproduits.deleted_at')
        ->select('ventes.*',"produits.*","venteproduits.*",'clients.name as nom_client','clients.adresse as adressclient')
        ->get();
        $date= date("Y/m/d") ;
                $data = [
                'facture' => $ticket,
                'date'=> $date,
                        ];
          $pdf = PDF::loadView('ticket_vente', $data);
          return $pdf->stream('document.pdf');

    }



    public function facture_vente($id){
        $facture = DB::table('venteproduits')
        ->join('ventes', 'venteproduits.ventes_id', '=', 'ventes.id')
        ->join('produits', 'venteproduits.produits_id', '=', 'produits.id')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        ->where('ventes.id', $id)
        ->whereNull('ventes.deleted_at')
        ->whereNull('venteproduits.deleted_at')
        ->select('ventes.*',"produits.*","venteproduits.*",'clients.name as nom_client','clients.adresse as adressclient')
        ->get();
        $date= date("Y/m/d") ;
                $data = [
                'facture' => $facture,
                'date'=> $date,
                        ];
          $pdf = PDF::loadView('facture', $data);
          return $pdf->stream('document.pdf');

    }

    public function Bonlivraison_sortieconfrere($id){
        $facture = DB::table('produitssortieconfreres')
    ->join('sortieconfreres', 'produitssortieconfreres.sortie_confreres_id', '=', 'sortieconfreres.id')
    ->join('produits', 'produitssortieconfreres.produits_id', '=', 'produits.id')
    ->join('confreres', 'sortieconfreres.confreres_id', '=', 'confreres.id')
    ->where('sortieconfreres.id', $id)
    ->whereNull('sortieconfreres.deleted_at')
    ->whereNull('produitssortieconfreres.deleted_at')
    ->select('sortieconfreres.*',"produits.*","produitssortieconfreres.*",'confreres.name as nom_client')
    ->get(); 
    // dd($facture);
        $date= date("Y/m/d") ;
                $data = [
                'facture' => $facture,
                'date'=> $date,
                        ];
          $pdf = PDF::loadView('bon_livraison_sortie', $data);
          return $pdf->stream('document.pdf');

    }


    public function ticket_sortie_confrere($id){
        $facture = DB::table('produitssortieconfreres')
    ->join('sortieconfreres', 'produitssortieconfreres.sortie_confreres_id', '=', 'sortieconfreres.id')
    ->join('produits', 'produitssortieconfreres.produits_id', '=', 'produits.id')
    ->join('confreres', 'sortieconfreres.confreres_id', '=', 'confreres.id')
    ->where('sortieconfreres.id', $id)
    ->whereNull('sortieconfreres.deleted_at')
    ->whereNull('produitssortieconfreres.deleted_at')
    ->select('sortieconfreres.*',"produits.*","produitssortieconfreres.*",'confreres.name as nom_client')
    ->get(); 
    // dd($facture);
        $date= date("Y/m/d") ;
                $data = [
                'facture' => $facture,
                'date'=> $date,
                        ];
          $pdf = PDF::loadView('ticket_sortie_confrere', $data);
          return $pdf->stream('document.pdf');

    }
    
    
}
