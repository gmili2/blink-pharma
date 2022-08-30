<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Ville;

use Illuminate\Support\Facades\DB;
use Auth;
use App\Regularisationsolde;



class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
      
    }

    public  function afficherheader()
    {
        echo( '
        <script>localStorage.setItem("select", "clients");</script>
        ');
    }


    
public function index()
{
    $this->afficherheader();

    $clients= DB::table('clients')
    ->select('clients.*')
    // ->where('clients.creer_par',Auth::User()->id)
    ->whereNull('clients.deleted_at')
    ->paginate(8); 
    return view('pages/client/client',
    compact('clients'));
}
public function get_clientbynom($nom)
{
    $this->afficherheader();

    $clients= DB::table('clients')
    ->select('clients.*')
    // ->where('clients.creer_par',Auth::User()->id)
    ->whereNull('clients.deleted_at')
    ->where('clients.name', 'like', '%'.$nom.'%')
    ->get(); 
    $paginate=0;
    return view('pages/client/table-client',compact('clients'),compact('paginate'));
}


public function get_client()
{
    $this->afficherheader();

    $clients= DB::table('clients')
    ->select('clients.*')
    // ->where('clients.creer_par',Auth::User()->id)
    ->whereNull('clients.deleted_at')
    ->paginate(8); 
    $paginate=0;
    return view('pages/client/table-client',compact('clients'),compact('paginate'));
}
public function gettableclienttajax()
{
    // $this->afficherheader();

    $clients= DB::table('clients')
    ->select('clients.*')
    ->whereNull('clients.deleted_at')
    ->get(); 
    return datatables( $clients)->make(true) ;
}





public function store(Request $req)
{
    $client=new Client();
    DB::beginTransaction();
    try{
        if($req->image!=null)
        {
        $image = time() . '-' . $req->nom . '.' . $req->image->extension();
        $req->image->move(public_path('images'), $image);
        $client->image = $image;
        } 
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
        DB::commit();
        session()->flash('success','Client ajouté avec succés');	
        return redirect('clients');
    }
        catch(QueryException $ex){
            DB::rollBack();
        $req->session()->flash('warning', 'erreur base donnée');
            return redirect('clients');
        }  
}


public function delete(Request $req)
{
    DB::beginTransaction();
    $id= $req->client_id;
    try{
    $client = Client::find($id);
    $client->delete();
    DB::commit();
    session()->flash('success','Client supprimé avec succés');	
    return redirect('clients');
}
catch(QueryException $ex){
    DB::rollBack();
session()->flash('warning', 'erreur base donnée');
    return redirect('clients');
}  
}



public function credit_client(Request $req)
{


    // dd($req->montantreg);
    $id=$req->idclient;
    DB::beginTransaction();
    try{


        
    $client = Client::find($id);
    $reg_solde = new Regularisationsolde();
    $reg_solde->clients_id=$id;
    $reg_solde->montant_credit=$client->credit;
    $reg_solde->montant_paye=$req->montantreg;
    $client->credit=$client->credit-$req->montantreg;
    $client->update();
    $reg_solde->save();
    DB::commit();
    session()->flash('success','Regularisation de solde avec succés');	
    return redirect('showclient'.$id);}
catch(QueryException $ex){
    DB::rollBack();
session()->flash('warning', 'erreur base donnée');
return redirect('showclient'.$id);;
}  
}

public function update(Request $req,$id)
{
    DB::beginTransaction();
    try{
    $client = Client::find($id);
    if($req->image!=null)
    {
    $image = time() . '-' . $req->nom . '.' . $req->image->extension();
    $req->image->move(public_path('images'), $image);
    $client->image = $image;
    } 
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
    DB::commit();
    session()->flash('success','Client modifié avec succés');	
    return redirect('clients');}
catch(QueryException $ex){
    DB::rollBack();
session()->flash('warning', 'erreur base donnée');
    return redirect('clients');
}  
}


public function showclient($id)
{

    $this->afficherheader();
  
    $produits = DB::table('venteproduits')
    ->join('ventes', 'venteproduits.ventes_id', '=', 'ventes.id')
    ->join('produits', 'venteproduits.produits_id', '=', 'produits.id')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->where('ventes.client_id', $id)
    ->whereNull('ventes.deleted_at')
    ->whereNull('venteproduits.deleted_at')
    ->select('ventes.*',"produits.*","venteproduits.*",'clients.name as nom_client')
    ->get(); 

    $credit = DB::table('ventes')
    ->select('clients.id',DB::raw('SUM(ventes.montant_credit) as credit_total'))
    ->groupBy('ventes.montant_credit','clients.id')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->where('ventes.creer_par',Auth::User()->id)
    ->where('ventes.client_id', $id)
    ->whereNull('ventes.deleted_at')
    ->get();
        $ventes= DB::table('ventes')
        ->select('ventes.*','clients.name as nom_client')        
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        ->where('ventes.creer_par',Auth::User()->id)
        ->where('ventes.client_id', $id)
        ->whereNull('ventes.deleted_at')
        ->get();


    $clients = Client::find($id);
    $reg_solde= DB::table('regularisationsoldes')
    ->select('regularisationsoldes.*')        
    ->where('regularisationsoldes.clients_id',$id)
    ->whereNull('regularisationsoldes.deleted_at')
    ->get();
    // dd($reg_solde);

    return view('pages/client/informationclient',
    ['produits' => $produits,
    'clients' => $clients,
    'ventes' => $ventes,
    'credit' => $credit,
    'reg_solde' => $reg_solde

    
    ]


);
    
}

public function modifyclient($id)
{
    $this->afficherheader();

    $clients = Client::find($id);
    return view('pages/client/clientdetails',compact('clients'));
}

public function addclientspage()
{
    $this->afficherheader();

    $villes = Ville::all();
    // dd( $villes);
    return view('pages/client/addclient',compact('villes'));
}



}
