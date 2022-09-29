<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Pays;
use App\Models\Favori;

use Illuminate\Support\Facades\Hash;

use Auth;
class ProfileController extends Controller
{


    
  public function __construct()
  {
      $this->middleware('auth');
   
  }


public function testcode($code){
    if(Hash::check($code, Auth::User()->password)!=true){
        // session()->flash('warning', "votre ancien mot de passe n 'est pas correcte");
        $rep["code"]=300;
    }
    else 
    $rep["code"]=200;
    return $rep;


}

  public function updatefavoris(Request $request)

  { 
 


    $fav = Favori::where('url','organisme')->first();
    $fav->favoris=$request->organisme;
    $fav->update(); $fav = Favori::where('url','addorg')->first();
    $fav->favoris=$request->addorg;
    $fav->update();

    $fav = Favori::where('url','addvente')->first();
    $fav->favoris=$request->addvente;
    $fav->update(); 





     $fav = Favori::where('url','addproduit')->first();
    $fav->favoris=$request->addproduit;
    $fav->update(); 
    
    $fav = Favori::where('url','addfour')->first();
    $fav->favoris=$request->addfour;
    $fav->update(); 
    
    $fav = Favori::where('url','addsortie')->first();
    $fav->favoris=$request->addsortie;

    $fav->update(); 
    
    $fav = Favori::where('url','addentrer')->first();
    $fav->favoris=$request->addentrer;
    $fav->update();
    

    $fav = Favori::where('url','addcloturecaisse')->first();
    $fav->favoris=$request->addcloturecaisse;
    $fav->update();



    $fav = Favori::where('url','inventaire')->first();
    $fav->favoris=$request->inventaire;
    $fav->update();


    
    // $fav = Favori::where('url','addentrer')->first();
    // $fav->favoris=$request->addentrer;
    // $fav->update();


    



    ///

    $fav = Favori::where('url','home')->first();
    $fav->favoris=$request->home;
    $fav->update();
      $fav = Favori::where('url','profile')->first();
    $fav->favoris=$request->profile; 
    $fav->update();
    $fav = Favori::where('url','stock')->first();
    $fav->favoris=$request->input("1stock"); 
    $fav->update();
    $fav = Favori::where('url','caisse')->first();
    $fav->favoris=$request->caisse; 
    $fav->update();
    $fav = Favori::where('url','achat')->first();
    $fav->favoris=$request->achat; 
    $fav->update();
    $fav = Favori::where('url','vente')->first();
    $fav->favoris=$request->vente; 
    $fav->update();
    $fav = Favori::where('url','confrere')->first();
    $fav->favoris=$request->confrere; 
    $fav->update();
    $fav = Favori::where('url','fournisseurs')->first();
    $fav->favoris=$request->input("1fournisseurs");
    $fav->update();
    $fav = Favori::where('url','client')->first();
    $fav->favoris=$request->input("1clients");
    $fav->update();


    
    $fav = Favori::where('url','produit')->first();
    $fav->favoris=$request->produit ;
    $fav->update();
    session()->flash('success', 'Favoris bien modifié');

   return redirect("home");

 
  }
  
    public function index()
    {
     echo( '
        <script>localStorage.setItem("select", "mespar");</script>
        ');
    
        echo( '
        <script>localStorage.setItem("select2", "Profil");</script>
        ');
        echo( '
        <script>localStorage.setItem("sousselect", "vprofil");</script>
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
                $logo = time() . '-logo.' . $request->logo->extension();
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

        echo( '
        <script>localStorage.setItem("sousselect", "vcodesecuritechage");</script>
        ');
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
                $pied = time() . '-logo.' . $request->pied->extension();
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
// dd()
        if($request->image!=null)
        {
        $image = time() . '-' . $request->nom . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image);
        $user->imageprofil = $image;
        } 
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
