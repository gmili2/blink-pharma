<?php

namespace App\Exports;

use App\sortieconfreres;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;
class EntrerConfrereExport implements FromCollection, WithCustomCsvSettings, WithHeadings
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
        return ['confreresname','methode_echange','total','status','created_at','creer_par','type'];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $Entreconfreres= DB::table('sortieconfreres')
        ->select('confreres.name as confrere_name','sortieconfreres.methode_echange','sortieconfreres.total','sortieconfreres.status','sortieconfreres.created_at','sortieconfreres.creer_par','type')
        ->join('confreres','sortieconfreres.confreres_id','=','confreres.id')
        // ->where('sortieconfreres.creer_par',Auth::User()->id)
        ->where('sortieconfreres.type',"1")
        // ->whereNull('sortieconfreres.sortieconfreres')
        ->get();
        return $Entreconfreres;
    }
}
