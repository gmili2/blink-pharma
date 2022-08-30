<?php

namespace App\Exports;

use App\Produit;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProduitExport implements FromCollection, WithCustomCsvSettings, WithHeadings
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
        return ['name','code_bare','laboratoire','types_id','classes_id','forms_id','dcis_id','inventaires_id','PPH','PPV', 'created_at'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Produit::select('name','code_bare','laboratoire','types_id','classes_id','forms_id','dcis_id','inventaires_id','PPH','PPV', 'created_at')
        
        ->where('produits.name', 'like', '%'.$this->cherche.'%')
        ->get();
    }
}
