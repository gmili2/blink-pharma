<?php

namespace App\Http\Controllers;
use App\Client;
use App\Exports\ClientExport;
use App\Exports\ProduitExport;
use App\Exports\ConfrereExport;
use App\Exports\FournisseurExport;
use App\Exports\SortieConfrereExport;
use App\Exports\EntrerConfrereExport;
use App\Exports\VenteExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class Exporatation_CSV extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     
    }


    public function Exporter(){
        return view('pages.exportation.exportation');
    }
    public function ExporterData(Request $req){
        $chercher=$req->valuecherche;
        $choix=$req->post('table_choisie');

        if($choix== "client"){
            return Excel::download(new ClientExport($chercher), 'Client.csv');
        }
        else if ($choix=="fournisseur"){
            return Excel::download(new FournisseurExport($chercher), 'Fournisseur.csv');
        }
        else if ($choix=="Confrere"){
            return Excel::download(new ConfrereExport($chercher), 'Confrere.csv');
        }
        else if($choix =="Produit"){
            return Excel::download(new ProduitExport($chercher), 'Produit.csv');
        }
        else if ($choix == "Vente"){
            return Excel::download(new VenteExport($chercher), 'Vente.csv');

        }
        else if ($choix=="EntrerConfere"){
            return Excel::download(new EntrerConfrereExport($chercher) ,'entrerConfrere.csv');
        }
        else if ($choix =="SortieConfere"){
            return Excel::download(new SortieConfrereExport($chercher),'sortieConfrere.csv');
        }
        else {
            echo 'zkmzeff   ahmed';
        }
     return redirect('Exportation.exportation');

    }
}
