<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Vente;
use App\Venteproduit;

use App\Produit;
use App\Retoursurvente;
use App\Retoursurventeproduit;


use Illuminate\Support\Facades\DB;
use Auth;

class RapportController extends Controller
{


    public function journal_produit(){
        echo( '
        <script>localStorage.setItem("select", "rapports");</script>
        ');
        $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')   
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('creer_par',Auth::User()->id)
        ->whereNull('produits.deleted_at')
        ->paginate(4);
        $ventespaye= DB::table('ventes')
        ->select('ventes.*','clients.name as nom_client')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        // ->where('ventes.creer_par',Auth::User()->id)
        ->where('ventes.status',1)
        ->whereNull('ventes.deleted_at')
        ->count();
        $touslesvente= DB::table('ventes')
        ->select('ventes.*','clients.name as nom_client')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        // ->where('ventes.creer_par',Auth::User()->id)
        ->whereNull('ventes.deleted_at')
        ->count();
        $montantnonpaye=
        DB::table("ventes")->where('ventes.creer_par',Auth::User()->id)
        
    ->whereNull('ventes.deleted_at')
    ->get()->sum(("montant_credit"));
    $montantapaye=
    DB::table("ventes")
    // ->where('ventes.creer_par',Auth::User()->id)
->whereNull('ventes.deleted_at')
->get()->sum(("montant_PU"));
$montantpaye=$montantapaye-$montantnonpaye;
    // dd( $montantnonpaye,$montantapaye,$montantpaye);
 
        $ventesnonpaye=$touslesvente-$ventespaye;
        // dd($ventesnonpaye,$ventesnonpaye, $touslesvente,$montantnonpaye,$montantapaye,$montantpaye);
    return view('pages.rapport.journal-produit' , ['produits' => $produits,

    'ventesnonpaye'=>$ventesnonpaye,
    'ventespaye'=>$ventespaye,
    'touslesvente'=>$touslesvente,


'montantnonpaye'=>$montantnonpaye,
'montantpaye'=>$montantpaye,
'montantapaye'=>$montantapaye,
]);
}
    //
}
