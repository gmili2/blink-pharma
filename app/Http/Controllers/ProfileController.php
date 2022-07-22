<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

use Auth;
class ProfileController extends Controller
{

    public function index()
    {
        return view('pages.parameters.profile');
    }


    public function modifierprofile(Request $request)

    { 
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'url_internet' => 'required',
            'fax' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'region' => 'required',
            'code_postal' => 'required',
            'Pays' => 'required',
            'telephone'=> 'required|min:10|numeric',
             ]);
        DB::beginTransaction();
        try{
        $user =  User::find(Auth::User()->id); 
        $user->name= $request->nom;
        $user->firstname=$request->prenom;
        $user->date_naissance=$request->date_naissance;
        $user->titre=$request->titre;
        $user->tele=$request->telephone;
        $user->portable=$request->portable;
        $user->site=$request->url_internet;
        $user->fax=$request->fax;
        //adressse infos
        $user->adresse=$request->adresse;
        $user->ville=$request->ville;
        $user->region=$request->region;
        $user->code_postal=$request->code_postal;
        $user->pays=$request->Pays;
        if($request->confime_passe!=null){
            $user->password= Hash::make($request->confime_passe);
        }
        $user->update();
        DB::commit();
        $request->session()->flash('success', 'bien modifier');
        return redirect('profile');
    }
    catch(QueryException $ex){
        DB::rollBack();
        $request->session()->flash('warning', 'erreur base donnée');
        return redirect('profile');


}


    }






    // public function apitest(Request $request)

    // {


    //     $cl = DB::table('users')
    //     ->get();
    //     return response()->json($cl);

    //     // return "hii";
    //     // dd($request->input());
    // }


    
    //
}
