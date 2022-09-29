<?php

namespace App\Http\Controllers;
use App\Ville;
use App\Pays;
use App\User;


use App\Models\Organisme;
use Auth;
use Illuminate\Http\Request;
use DB;
class OrganismeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
       
      
    }

    public  function afficherheader()
    {
        echo( '
        <script>localStorage.setItem("select", "organismes");</script>
        ');
    }

    public function indexvente()
    {
    $this->afficherheader();
 

    $ventes= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->whereNull('ventes.deleted_at')
    ->paginate(5);
    return view('pages.organisme.listeventeorganisme',compact('ventes'));
    }
    
public function index()
{
    $this->afficherheader();
    $organismes= DB::table('organismes')
   -> join('villes','villes.id','=','organismes.ville')
    ->select('organismes.*','villes.Nom as ville')

    ->whereNull('organismes.deleted_at')
    ->get(); 

    $fournisseurs= DB::table('fournisseurs')
    ->join('villes','villes.id','=','fournisseurs.ville')
    ->select('fournisseurs.*','villes.Nom as ville')
    ->whereNull('fournisseurs.deleted_at')
    ->get();
    return view('pages/organisme/liste',
    compact('organismes'));
}

public function afficherorganisme($id)
{
    $this->afficherheader();
    $organismes= Organisme::find($id);

    $ventes= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->where('ventes.organisme',$id)
    ->get();
// dd( $ventes);
$creer_par=User::find(    $organismes->creer_par);

return view('pages/organisme/informationorganisme',
[
    'organismes' => $organismes,
    'ventes' => $ventes,
    'creer_par' => $creer_par,



]);
   
}





public function deleteorganisme(Request $req)
{
    DB::beginTransaction();
    $id= $req->id_organisme;
    try{
    $client = Organisme::find($id);
    $client->delete();
    DB::commit();
    session()->flash('success','Organisme supprimé avec succés');	
    return redirect('organisme');
}
catch(QueryException $ex){
    DB::rollBack();
session()->flash('warning', 'erreur base donnée');
    return redirect('organisme');
}  
}





public function modifierorganisme(Request $req)
{
    $organisme= Organisme::find( $req->id );
    DB::beginTransaction();
    try{
        if($req->image!=null)
        {
        $image = time() . '-' . $req->nom . '.' . $req->image->extension();
        $req->image->move(public_path('images'), $image);
        $organisme->image = $image;
        } 
        $organisme->nom=$req->nom;
        $organisme->email=$req->email;
        $organisme->tele=$req->tel;
        $organisme->ville=$req->ville;

        // dd($req->pays);
        $organisme->pays=$req->pays;

        $organisme->adresse=$req->adresse;
        $organisme->code_postal=$req->code_postale;
        $organisme->site=$req->site;
        $organisme->description=$req->description;

        $organisme->creer_par=Auth::user()->id;
        $organisme->update();
        DB::commit();
        session()->flash('success','Organisme modifié avec succés');	
        return redirect('organisme');
    }
        catch(QueryException $ex){
            DB::rollBack();
        $req->session()->flash('warning', 'erreur base donnée');
            return redirect('clients');
        }  
}


public function addorganisme(Request $req)
{
    $organisme=new Organisme();
    DB::beginTransaction();
    try{
        if($req->image!=null)
        {
        $image = time() . '-' . $req->nom . '.' . $req->image->extension();
        $req->image->move(public_path('images'), $image);
        $organisme->image = $image;
        } 
        $organisme->nom=$req->nom;
        $organisme->email=$req->email;
        $organisme->tele=$req->tel;
        $organisme->ville=$req->ville;

        // dd($req->pays);
        $organisme->pays=$req->pays;

        $organisme->adresse=$req->adresse;
        $organisme->code_postal=$req->code_postale;
        $organisme->site=$req->site;
        $organisme->description=$req->description;

        $organisme->creer_par=Auth::user()->id;
        $organisme->save();
        DB::commit();
        session()->flash('success','Organisme ajouté avec succés');	
        return redirect('organisme');
    }
        catch(QueryException $ex){
            DB::rollBack();
        $req->session()->flash('warning', 'erreur base donnée');
            return redirect('clients');
        }  
}

public function addorganismepage()
{
    $this->afficherheader();

    $villes = Ville::all();
    $Pays=Pays::all();
    return view('pages/organisme/addorganismepage',compact('Pays'));
}
public function modifierorganismepage($id)
{
    $this->afficherheader();

    $villes = Ville::all();
    $Pays=Pays::all();
    $organisme=Organisme::find($id);
    // dd($organisme);
    return view('pages/organisme/modifierorganismepage',compact('Pays'),compact('organisme'));
}
}
