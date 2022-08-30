<?php

namespace App\Exports;

use App\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClientExport implements FromCollection, WithCustomCsvSettings, WithHeadings
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
        return ['name','cin','cnss','email','tele','ville','adresse', 'created_at'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Client::select('name','cin','cnss','email','tele','ville','adresse', 'created_at')
        ->where('clients.name', 'like', '%'.$this->cherche.'%')
        
        ->get();
    }
}
