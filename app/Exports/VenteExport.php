<?php

namespace App\Exports;

use App\Vente;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VenteExport implements FromCollection, WithCustomCsvSettings, WithHeadings
{



    protected $cherche;
    
    function __construct($cherche) {
       $this->cherche = $cherche;
   }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    public function headings(): array
    {
        return ['created_at','Nomclient','status','livree','mode_payement','reference','creer_par','montant_credit','montant_rendre','montant_PPV','montant_PU','montant_recu'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
       $data=DB::table('ventes')
        ->join('clients', 'clients.id', '=', 'ventes.client_id')
        ->where('clients.name', 'like', '%'.$this->cherche.'%')
        ->select('ventes.created_at','clients.name as Nomclient','ventes.status','ventes.livree','ventes.mode_payment','ventes.reference','ventes.creer_par','ventes.montant_credit','ventes.montant_rendre','ventes.montant_PPV','ventes.montant_PU','ventes.montant_recu')->get();
        return $data;
    }
}
