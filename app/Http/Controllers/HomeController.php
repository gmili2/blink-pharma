<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public  function afficherheader()
    {
      $nom="d'accueil";
        echo( '
        <script>localStorage.setItem("select", "d’acceuil");</script>
        ');
    }
    
    public function getIp(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
          $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
          $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
      }
    public function index()
    {
    $this->afficherheader();

      setlocale(LC_TIME, "fr_FR");
      $date = strftime("%d %B %Y");
       
        $ventes= DB::table('ventes')
        ->select('ventes.*','clients.name as nom_client')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        ->whereNull('ventes.deleted_at')
        ->paginate(5);
        $produits= DB::table('produits')
        ->select('produits.*')
        ->whereNull('produits.deleted_at')
        ->count();
         return view('home',['ventes'=>$ventes,'produits'=>$produits,'date'=>$date]
       );
    }
    public function get_vente(){
    $this->afficherheader();

        $ventes= DB::table('ventes')
        ->select('ventes.*','clients.name as nom_client')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        // ->where('ventes.creer_par',Auth::User()->id)
        ->whereNull('ventes.deleted_at')
        ->paginate(5);
      
        $paginate=1;
         return view('table-produit-home'
         ,compact('ventes'),compact('paginate'));
    }
    public function get_vente_bynom($nom){
        $ventes= DB::table('ventes')
        ->select('ventes.*','clients.name as nom_client')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        // ->where('ventes.creer_par',Auth::User()->id)
        ->where('clients.name', 'like', '%'.$nom.'%')
        ->get();
       
        $paginate=0;

         return view('table-produit-home'
         ,compact('ventes'),compact('paginate'));
    }

public function gettableajax(){

  $ventes= DB::table('ventes')
  ->join('clients', 'ventes.client_id', '=', 'clients.id')
  ->select('clients.name as nom_client','ventes.*')
  ->whereNull('ventes.deleted_at')

  ->get();
return datatables( $ventes)->make(true) ;

}
    
}
