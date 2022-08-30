<?php

namespace App\Http\Controllers;

use App\Modelemails;
use Illuminate\Http\Request;

class ModelEmailController extends Controller
{
     public function AfficherModelEmail(){
       $models=Modelemails::all();
        return view('pages.parameters.Modeles.AfficherModelEmail',['models'=>$models]);
     }

     public function ModifierModelEmai(){
          return view('pages.parameters.Modeles.ModifierModelEmai');
     }
}
