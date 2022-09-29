<?php

namespace App\Http\Controllers;


use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Auth;
class RoleController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        echo('
        <script>localStorage.setItem("select", "rolev");</script>
        ');
       
    }
    public function index()
    {
        echo( '
        <script>localStorage.setItem("sousselect", "addrole");</script>
        ');
        return view('pages.parameters.Role.addrole');
      
    }

    public function addrole( Request $req)
    {

        // dd( $req->input());

        try {
            $role= new Role();
            $role->creer_par= Auth::User()->id;


            $role->nom= $req->nom_role;
    
            $role->produitA= $req->produitA;
            $role->produitM= $req->produitM;
            $role->produitS= $req->produitS;
    
    
            $role->venteA= $req->venteA;
            $role->venteM= $req->venteM;
            $role->venteS= $req->venteS;
    
            $role->achatA= $req->achatA;
            $role->achatM= $req->achatM;
            $role->achatS= $req->achatS;
    
    
            $role->organismeA= $req->organismeA;
            $role->organismeM= $req->organismeM;
            $role->organismeS= $req->organismeS;
    
    
            $role->confrereA= $req->confrereA;
            $role->confrereM= $req->confrereM;
            $role->confrereS= $req->confrereS;
    
    
            $role->fournisseurA= $req->fournisseurA;
            $role->fournisseurM= $req->fournisseurM;
            $role->fournisseurS= $req->fournisseurS;
    
    
            $role->stockA= $req->inventaireA;
            $role->stockM= $req->inventaireM;
            $role->stockS= $req->inventaireS;
    
    
            $role->caisseA= $req->caisseA;
            $role->caisseM= $req->caisseM;
            $role->caisseS= $req->caisseS;
    
    
            $role->importationA= $req->importationA;
            $role->importationM= $req->importationM;
            $role->importationS= $req->importationS;
    
            $role->parametreA= $req->parametreA;
            $role->parametreM= $req->parametreM;
            $role->parametreS= $req->parametreS;
    
            $role->save();
            session()->flash('success', 'Ajouter Avec Success');
            return  redirect('listerole');

        }
        catch (Exception $ex) {
            dd( $ex); 
            session()->flash('warning', 'erreur base donnée');
            return  redirect('listerole');

        }
      
      
    }
 
    public function listerole()
    {
        echo( '
        <script>localStorage.setItem("sousselect", "listerole");</script>
        ');
        $roles=Role::All();
        return view('pages.parameters.Role.listerole'
        ,["roles"=>$roles]);
      
    }


    
    public function detailrole($id)
    {

        $role=Role::find($id);
        return view('pages.parameters.Role.detailrole'
        ,["role"=>$role]);
      
    }
    public function deletrole(Request $req)
    {
        try {
        $role=Role::find($req->idrole);
        $role->delete();
        session()->flash('success', 'Supprimer Avec Success');
        return redirect('listerole');

    }
    catch (Exception $ex) {
        dd( $ex); 
        session()->flash('warning', 'erreur base donnée');
        return   redirect('listerole');

    }
  
      
    }
    
    
    public function modifierrole( Request $req)
    {

        // dd( $req->input());

        try {
            $role=  Role::find($req->id);

            
            $role->creer_par= Auth::User()->id;


            $role->nom= $req->nom_role;
    
            $role->produitA= $req->produitA;
            $role->produitM= $req->produitM;
            $role->produitS= $req->produitS;
    
    
            $role->venteA= $req->venteA;
            $role->venteM= $req->venteM;
            $role->venteS= $req->venteS;
    
            $role->achatA= $req->achatA;
            $role->achatM= $req->achatM;
            $role->achatS= $req->achatS;
    
    
            $role->organismeA= $req->organismeA;
            $role->organismeM= $req->organismeM;
            $role->organismeS= $req->organismeS;
    
    
            $role->confrereA= $req->confrereA;
            $role->confrereM= $req->confrereM;
            $role->confrereS= $req->confrereS;
    
    
            $role->fournisseurA= $req->fournisseurA;
            $role->fournisseurM= $req->fournisseurM;
            $role->fournisseurS= $req->fournisseurS;
    
    
            $role->stockA= $req->inventaireA;
            $role->stockM= $req->inventaireM;
            $role->stockS= $req->inventaireS;
    
    
            $role->caisseA= $req->caisseA;
            $role->caisseM= $req->caisseM;
            $role->caisseS= $req->caisseS;
    
    
            $role->importationA= $req->importationA;
            $role->importationM= $req->importationM;
            $role->importationS= $req->importationS;
    
            $role->parametreA= $req->parametreA;
            $role->parametreM= $req->parametreM;
            $role->parametreS= $req->parametreS;
    
            $role->update();
            session()->flash('success', 'Modifier Avec Success');
            return redirect('listerole');

        }
        catch (Exception $ex) {
            dd( $ex); 
            session()->flash('warning', 'erreur base donnée');
            return   redirect('listerole');

        }
      
      
    }
    
    //
}
