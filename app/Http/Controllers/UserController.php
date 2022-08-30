<?php

namespace App\Http\Controllers;

use App\Models\ModelSessions;
use App\Models\sessions;
use App\User;
use Exception;
use Illuminate\Contracts\Session\Session ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        echo( '
        <script>localStorage.setItem("select", "Utilisateur");</script>
        ');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    // public  function afficherheader()
    // {
    //   $nom="d'accueil";
      
    // }

    public function AfficherUser(){
  
        $users = User::select("*")

        ->orderBy('last_seen', 'DESC')
        ->paginate(10);

        return view('pages.parameters.Users.AfficherUser',['users'=>$users]);

    }
    public function AjouterUser(Request $req){
        DB::beginTransaction();
    
try {
    $user=new User();
    $user->name=$req->Nom_user;
    $user->firstname=$req->First_user;
    $user->email=$req->Email_user;
    $user->Role=$req->Role;
    $user->password=Hash::make($req->pass_user);
    // dd( $user);
    $user->save();
    DB::commit();

    session()->flash('success', 'Ajouter Avec Success');
}
catch (Exception $ex) {
    DB::rollBack();
    // dd($ex->getCode());
    if($ex->getCode()==23000)
    session()->flash('warning', 'ce email deja existe');
    else
    session()->flash('warning', 'erreur base donne');

}
return redirect('AfficherUser');


    }
    public  function ModifierUser(Request $req){
        DB::beginTransaction();
       
    
    try {
        $user=User::find($req->id);
        $user->name=$req->Nom_user;
        $user->firstname=$req->first_user;
        $user->email=$req->Email_user;
        $user->Role=$req->Role;
        $user->password=$req->pass_user;
        $user->save();
        DB::commit();

      
        session()->flash('success', 'Modifier Avec Success');
        return redirect('AfficherUser');
    } catch (Exception $ex) {
        DB::rollBack();
        return redirect('AfficherUser');
        session()->flash('warning', 'erreur base donnée');
    }
}
    public function DeleteUser(Request $req){
try {
   $user= User::find($req->id);
   $user->delete();

    session()->flash('success', 'Delete Avec Success');
}
catch (Exception $ex) {
    // dd($ex);
    session()->flash('warning', 'vous ne pouvez pas supprimer ce utilisateur');
}
      return redirect('AfficherUser');
}


public function index(Request $request)
{
    $users = User::select("*")
                    ->whereNotNull('last_seen')
                    ->orderBy('last_seen', 'DESC')
                    ->paginate(10);


    return view('pages.parameters.Users.AfficherUser', ['users'=>$users]);
}
}
