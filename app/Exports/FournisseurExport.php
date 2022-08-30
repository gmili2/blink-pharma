<?php

namespace App\Exports;

use App\Fournisseur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FournisseurExport implements FromCollection, WithCustomCsvSettings, WithHeadings
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
        return ['name','email','site','fax','tele','ville','adresse', 'created_at'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fournisseur::select('name','email','site','fax','tele','ville','adresse', 'created_at')
        ->where('fournisseurs.name', 'like', '%'.$this->cherche.'%')
        
        ->get();
    }
}
