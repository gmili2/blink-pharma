<?php

namespace App\Exports;

use App\Confrere;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ConfrereExport implements FromCollection, WithCustomCsvSettings, WithHeadings
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
        return ['Name','tele','site','adresse','ville','email', 'created_at'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Confrere::select('name','tele','site','adresse','ville','email', 'created_at')
        ->where('confreres.name', 'like', '%'.$this->cherche.'%')

        ->get();
    }
}
