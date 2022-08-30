<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Pays;

use Illuminate\Support\Facades\Hash;

use Auth;
class ProfileController extends Controller
{


    
  public function __construct()
  {
      $this->middleware('auth');
    //   echo( '
    //   <script>localStorage.setItem("select", "mespar");</script>
    //   ');
  }

    public function index()
    {
        echo( '
        <script>localStorage.setItem("select", "mespar");</script>
        ');
        $villes=DB::table('villes')
        ->join('pays', 'pays.id', '=','villes.pays_id')
        ->where('villes.pays_id','=',Auth::User()->pays)
        ->whereNull('villes.deleted_at')
        ->select('villes.*')
        ->get();


        $Pays=Pays::all();

        return view('pages.parameters.profile',['Pays'=>$Pays,'villes'=>$villes]);
    }

    public function changelogo(Request $request)

    { 
        // DB::beginTransaction();
        // try{
            DB::beginTransaction();

            try{

                $user =  User::find(Auth::User()->id); 

                if($request->logo!=null)
                {
                $logo = time() . '-logo' . $request->logo->extension();
                $request->logo->move(public_path('images'), $logo);
                $user->logo = $logo;
                } 
            
        
                $user->update();
                DB::commit();

                
                session()->flash('success', 'bien modifier');
                return redirect('logo');
        
            }
            catch(QueryException $ex){
                DB::rollBack();
                session()->flash('warning', 'erreur base donnée');
                return redirect('logo');
        
        
        }
              
    }


    public function changecode(Request $request)

    { 
            DB::beginTransaction();
            $user =  User::find(Auth::User()->id); 
            try{
                
                if($request->confime_passe!=null){
                    if(Hash::check($request->ancien_passe, Auth::User()->password)!=true){
                        session()->flash('warning', "votre ancien mot de passe n 'est pas correcte");
                        return redirect('changecode');
                    }
                    $user->code= Hash::make($request->confime_passe);

                }
        
                $user->update();
                DB::commit();

                
                session()->flash('success', 'code bien modifier');
                return redirect('codesecuritechage');
        
            }
            catch(QueryException $ex){
                DB::rollBack();
                session()->flash('warning', 'erreur base donnée');
                return redirect('codesecuritechage');
        
        
        }
              
    }
    public function changepied(Request $request)

    { 
        // DB::beginTransaction();
        // try{
            DB::beginTransaction();

            try{

                $user =  User::find(Auth::User()->id); 

                if($request->pied!=null)
                {
                $pied = time() . '-logo' . $request->pied->extension();
                $request->pied->move(public_path('images'), $pied);
                $user->pied_pdf = $pied;
                } 
            
        
                $user->update();
                DB::commit();

                
                session()->flash('success', 'bien modifier');
                return redirect('pied-pdf');
        
            }
            catch(QueryException $ex){
                DB::rollBack();
                session()->flash('warning', 'erreur base donnée');
                return redirect('pied-pdf');
        
        
        }
              
    }
    public function chageentete(Request $request)

    { 
        // DB::beginTransaction();
        // try{
            DB::beginTransaction();

            try{

                $user =  User::find(Auth::User()->id); 

                if($request->entete!=null)
                {
                $entete = time() . '-logo' . $request->entete->extension();
                $request->entete->move(public_path('images'), $entete);
                $user->entet_pdf = $entete;
                } 
            
        
                $user->update();
                DB::commit();

                
                session()->flash('success', 'bien modifier');
                return redirect('entet-pdf');
        
            }
            catch(QueryException $ex){
                DB::rollBack();
                session()->flash('warning', 'erreur base donnée');
                return redirect('entet-pdf');
        
        
        }
              
    }
    
    public function modifierprofile(Request $request)


    { 
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            // 'email' => 'required|email',
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
            if(Hash::check($request->ancien_passe, Auth::User()->password)!=true){
                session()->flash('warning', "votre ancien mot de passe n 'est pas correcte");
                return redirect('profile');
            }
            $user->password= Hash::make($request->confime_passe);
        }
        $user->update();
        DB::commit();
        
        session()->flash('success', 'bien modifier');
        return redirect('profile');
    }
    catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
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
