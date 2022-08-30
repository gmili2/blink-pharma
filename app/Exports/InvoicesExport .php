<?php
namespace App\Exports;

use App\Client;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export implements FromCollection
{

    protected $cherche;
    
    function __construct($cherche) {
       $this->cherche = $cherche;
   }
    public function collection()
    {
        return Client::all();
    }
}
