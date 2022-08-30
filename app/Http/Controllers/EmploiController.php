<?php

namespace App\Http\Controllers;

use App\Emploidetemp;
use Illuminate\Http\Request;

class EmploiController extends Controller
{

  

  public function __construct()
  {
      $this->middleware('auth');
      echo( '
      <script>localStorage.setItem("select", "Horaire");</script>
      ');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */


  public  function afficherheader()
  {
    $nom="d'accueil";
   
  }
      public function AfficherEmploi(){
        $data=Emploidetemp::all();
        return view('pages.parameters.horaire',['data'=>$data]);
      }
    public function ModifierEmploi(){

        $data=Emploidetemp::all();
        // dd($data[0]->debut1,4);
        // dd(substr( $data[0]->debut1,0,5),$data[0]->debut1);

        return view('pages.parameters.update-horaire',['data'=>$data]);
    }
    public function updateEmplois(Request $req){
//    dd($req);
    $lundi=Emploidetemp::find(1);

    $mardi=Emploidetemp::find(2);
    $mercredi=Emploidetemp::find(3);
    $jeudi=Emploidetemp::find(4);
    $vendredi=Emploidetemp::find(5);
    $samedi=Emploidetemp::find(6);
    $dimenche=Emploidetemp::find(7);

    $lundi->debut1=$req->debut1lundi;
    $lundi->debut2=$req->debut2lundi;
    $lundi->fin1=$req->fin1lundi;
    $lundi->fin2=$req->fin2lundi;

     $lundi->save();

    $mardi->debut1=$req->debut1mardi;
    $mardi->debut2=$req->debut2mardi;
    $mardi->fin1=$req->fin1mardi;
    $mardi->fin2=$req->fin2mardi;
    $mardi->save();

    $mercredi->debut1=$req->debut1mercredi;
    $mercredi->debut2=$req->debut2mercredi;
    $mercredi->fin1=$req->fin1mercredi;
    $mercredi->fin2=$req->fin2mercredi;
    $mercredi->save();

    $jeudi->debut1=$req->debut1jeudi;
    $jeudi->debut2=$req->debut2jeudi;
    $jeudi->fin1=$req->fin1jeudi;
    $jeudi->fin2=$req->fin2jeudi;
    $jeudi->save();

    $vendredi->debut1=$req->debut1vendredi;
    $vendredi->debut2=$req->debut2vendredi;
    $vendredi->fin1=$req->fin1vendredi;
    $vendredi->fin2=$req->fin2vendredi;
    $vendredi->save();

    $samedi->debut1=$req->debut1samedi;
    $samedi->debut2=$req->debut2samedi;
    $samedi->fin1=$req->fin1samedi;
    $samedi->fin2=$req->fin2samedi;
    $samedi->save();

    $dimenche->debut1=$req->debut1demanche;
    $dimenche->debut2=$req->debut2demanche;
    $dimenche->fin1=$req->fin1demanche;
    $dimenche->fin2=$req->fin2demanche;
    $dimenche->save();

    session()->flash('success','Emplois de temp bien modifier');	

       return redirect('EmploiduTemp');


    }

}
