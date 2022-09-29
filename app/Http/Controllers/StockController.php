<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Inventaire;
use App\Produit;

use Illuminate\Support\Facades\DB;
use Auth;

class StockController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
     
    }
public function index()
{
    echo( '
<script>localStorage.setItem("select", "stock");</script>
');
echo( '
<script>localStorage.setItem("sousselect", "stocks");</script>
');

   
    $produits= DB::table('produits')
    ->join('classes','produits.classes_id','=','classes.id')
    ->join('types','produits.types_id','=','types.id')
    ->join('forms', 'produits.forms_id', '=', 'forms.id')   
    ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
    ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
    ,'dcis.name as namedci')
    // ->where('produits.creer_par',Auth::User()->id)
    ->whereNull('produits.deleted_at')
    ->paginate(5);

    return view('pages/stock/liste',compact('produits'));
}

public function addinventaireformule()
{
    $stocks = Inventaire::all();
    return view('pages/stock/addinventaire',compact('stocks'));
}

public function informationinventaire($id)
{
    // $stocks = Inventaire::all();
    $stock = Inventaire::find($id);
    $produits= DB::table('produits')
    ->join('classes','produits.classes_id','=','classes.id')
    ->join('types','produits.types_id','=','types.id')
    ->join('forms', 'produits.forms_id', '=', 'forms.id')   
    ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
    ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform','dcis.name as namedci')
    ->where('inventaires_id',$id)
    ->get(); 
    // dd($produits);
    return view('pages/stock/informationinventaire',compact('stock'),compact('produits'));
}
public function modifierinventaire($id)
{
    $stocks = Inventaire::all();
    $stock = Inventaire::find($id);
    return view('pages/stock/modifierinventaire',compact('stock'));
}

public function delete($id)
{
    $stocks = Inventaire::all();
    $stock = Inventaire::find($id);
    $stock->delete();
    session()->flash('success','stock  supprimé avec succés');	
    return redirect('stock');
    // return view('pages/stock/liste',compact('stock'));
}






public function importinventaires()
{
    $stocks = Inventaire::all();
    return view('pages/stock/import',compact('stocks'));
}



public function ajouterstock(Request $req)
{
    //dd($req->input());
    $inventaire = new Inventaire();
    $inventaire->nom=$req->nom;
    $inventaire->methode=$req->methode;
    $inventaire->date_inventaire=$req->date_inventaire;

    // $inventaire->quantite_systeme=$req->quantite_systeme;
    // $inventaire->quantite_physique=$req->quantite_physique;
    $inventaire->commentaire=$req->commentaire;
    $inventaire->creer_par=Auth::user()->id;
    $inventaire->users_id=Auth::user()->id;

    $inventaire->save();
    
    session()->flash('success','inventaire ajouté avec succés');	
    return redirect('stock');
}



public function update(Request $req,$id)
{
    $client = Client::find($id);
    $client->name=$req->nom;
    $client->cin=$req->cin;
    $client->cnss=$req->cnss;
    $client->email=$req->email;
    $client->type=$req->type;
    $client->tele=$req->tel;
    $client->ville=$req->ville;
    $client->adresse=$req->adresse;
    $client->code_postale=$req->codeposal;
    $client->plafan_credit=$req->plafancredit;
    $client->organisme=$req->organisme;
    $client->num_immatriculation=$req->num_immatriculation;
    $client->num_affiliation=$req->num_affiliation;
    $client->description=$req->description;
    $client->creer_par=Auth::user()->id;
    $client->save();
    
    session()->flash('success','Client modifié avec succés');	
    return redirect('clients');
}


public function showclient($id)
{
    $clients = Client::find($id);
//    dd($clients);
    return view('pages/client/informationclient',compact('clients'));
}

public function modifyclient($id)
{
    $clients = Client::find($id);
    return view('pages/client/clientdetails',compact('clients'));
}



}
