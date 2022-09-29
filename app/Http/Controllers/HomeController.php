<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;
use App\Models\Favori;
use App\Calendar;
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
        // $this->middleware('isadmin');

    }

public function Addcalendar(Request $req)
{
    

    $cal = new Calendar();
    $cal->date = $req->date;
    $cal->comment = $req->comment;
    $cal->user_id = Auth::User()->id;
    $cal->save();
    
      session()->flash('success','Vous avez programmer un rappel pour '.$req->date);	
    return redirect()->back();
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
   

    $Favoris= DB::table('favoris')
    ->select('favoris.*')
    ->get();


    $favaddproduit = Favori::where('url','addproduit')->first();
    $favaddvente = Favori::where('url','addvente')->first();
    $favaddfour = Favori::where('url','addfour')->first();
    $favaddsortie = Favori::where('url','addsortie')->first();
    $favaddentrer = Favori::where('url','addentrer')->first();
    // dd()
    $favorganisme = Favori::where('url','organisme')->first();
    $favaddorg = Favori::where('url','addorg')->first();
    $favaddcloturecaisse = Favori::where('url','addcloturecaisse')->first();
    $favfactureorganisme = Favori::where('url','addcloturecaisse')->first();
    $favinventaire = Favori::where('url','inventaire')->first();

    


    $favhome = Favori::where('url','home')->first();

   
      $favprofile = Favori::where('url','profile')->first();
    
    $favstock = Favori::where('url','stock')->first();
   
    $favcaisse = Favori::where('url','caisse')->first();
    
    $favachat = Favori::where('url','achat')->first();
    
    $favvente = Favori::where('url','vente')->first();
   
    $favconfrere = Favori::where('url','confrere')->first();
    $favclient = Favori::where('url','client')->first();

    
    $favfournisseurs = Favori::where('url','fournisseurs')->first();
   
    $favproduit = Favori::where('url','produit')->first();
   
// dd($favhome->favoris);
      setlocale(LC_TIME, "fr_FR");
      $date = strftime("%d %B %Y");
       
        $ventes= DB::table('ventes')
        ->select('ventes.*','clients.name as nom_client','ventes.created_at as vc')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        ->whereNull('ventes.deleted_at')
        ->whereDate('ventes.created_at', Carbon::today())
        ->paginate(5);
        $produits= DB::table('produits')
        ->select('produits.*')
        ->whereNull('produits.deleted_at')
        ->count();
         return view('home',['ventes'=>$ventes,'produits'=>$produits,'date'=>$date
         ,'favhome'=>$favhome
         ,'favprofile'=>$favprofile
         ,'favstock'=>$favstock
         ,'favcaisse'=>$favcaisse
         ,'favachat'=>$favachat
         ,'favvente'=>$favvente
         ,'favconfrere'=>$favconfrere
         ,'favfournisseurs'=>$favfournisseurs
         ,'favproduit'=>$favproduit
         ,'favclient'=>$favclient


         ,'favaddproduit'=>$favaddproduit
         ,'favaddvente'=>$favaddvente
         ,'favaddfour'=>$favaddfour,


         'favinventaire'=>$favinventaire

         ,'favaddsortie'=>$favaddsortie
         ,'favaddentrer'=>$favaddentrer
         ,'favaddorg'=>$favaddorg


         ,'favaddcloturecaisse'=>$favaddcloturecaisse
         ,'favfactureorganisme'=>$favfactureorganisme
         ,'favorganisme'=>$favorganisme

          
         

         ]
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
  ->whereDate('ventes.created_at', Carbon::now())
  ->get();
return datatables( $ventes)->make(true) ;

}
    
}
