<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confrere;
use App\Ville;

use Illuminate\Support\Facades\DB;
use Auth;

class ConfreresController extends Controller
{
    //
    public  function afficherheader()
    {
      $nom="d'accueil";
        echo( '
        <script>localStorage.setItem("select", "confrères");</script>
        ');
    }
    
    
    public function index()
    {
        $this->afficherheader();
        $confreres= DB::table('confreres')
            ->select('confreres.*')
            // ->where('confreres.creer_par',Auth::User()->id)
            ->whereNull('confreres.deleted_at')
            ->paginate(8); 
        return view('pages/confreres/liste',compact('confreres'));

    }
    public function     gettableconfrereajax()
    {
        $confreres= DB::table('confreres')
            ->select('confreres.*')
            ->whereNull('confreres.deleted_at')
            ->get(); 
            // dd($confreres);
            
    return datatables( $confreres)->make(true) ;

    }


    public function addconfrerepage()
    {
        $this->afficherheader();
       
            $villes = Ville::all();

            return view('pages/confreres/addconfrere',compact('villes'));
    }

    
    public function gettable_confrere()
    {
        $this->afficherheader();

        $confreres= DB::table('confreres')
            ->select('confreres.*')
            // ->where('confreres.creer_par',Auth::User()->id)
            ->whereNull('confreres.deleted_at')
            ->paginate(8); 
        $paginate=1;

        return view('pages/confreres/table-confrere',
        compact('confreres'),
         compact('paginate'));
    }
    public function gettable_confrerebynom($nom)
    {
        $this->afficherheader();

        $confreres= DB::table('confreres')
        ->select('confreres.*')
        // ->where('confreres.creer_par',Auth::User()->id)
        ->whereNull('confreres.deleted_at')
        ->where('confreres.name', 'like', '%'.$nom.'%')

        // gettable_confrerez
        ->get(); 
        $paginate=0;
        return view('pages/confreres/table-confrere',
        compact('confreres'),
        compact('paginate'));
    }


    
    
    public function showConfrere($id)
{

    $this->afficherheader();
   
    // dd('jj');
    $confreres = Confrere::find($id);

    return view('pages/confreres/informationconfreres',compact('confreres'));
}

public function modifyConfrere($id)
{
    $this->afficherheader();

    $confreres = Confrere::find($id);
    return view('pages/confreres/confreredetails',compact('confreres'));
}

public function delete(Request $req)
{
    $id=$req->cfr_id;
    DB::beginTransaction();
    try{
    $client = Confrere::find($id);
    $client->delete();
    DB::commit();
    session()->flash('success','Confrere supprimé avec succés');	
    return redirect('confrere');
}catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('confrere');
    }  
    
   

}


public function store(Request $req)
{
    //dd($req->input());
    DB::beginTransaction();
    try{
    $client = new Confrere();
    if($req->image!=null)
    {
    $image = time() . '-' . $req->nom . '.' . $req->image->extension();
    $req->image->move(public_path('images'), $image);
    $client->image = $image;
    }
    $client->name=$req->nom;
    $client->email=$req->email;
    $client->tele=$req->tel;
    $client->ville=$req->ville;
    $client->adresse=$req->adresse;
    $client->code_postale=$req->codeposal;
    $client->description=$req->description;
    $client->creer_par=Auth::user()->id;
    $client->save();
    DB::commit();
    
    session()->flash('success','Confrere Confrere avec succés');	
    return redirect('confrere');}catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('confrere');
    }  
    
   
}



public function update(Request $req,$id)
{
    DB::beginTransaction();
    try{
    $client = Confrere::find($id);
    if($req->image!=null)
    {
    $image = time() . '-' . $req->nom . '.' . $req->image->extension();
    $req->image->move(public_path('images'), $image);
    $client->image = $image;
    } 
    $client->name=$req->nom;
    $client->email=$req->email;
    $client->tele=$req->tel;
    $client->ville=$req->ville;
    $client->adresse=$req->adresse;
    $client->code_postale=$req->codeposal;
    $client->description=$req->description;
    $client->creer_par=Auth::user()->id;
    $client->save();
    DB::commit();
    
    session()->flash('success','Confrere modifié avec succés');	
    return redirect('confrere');
}catch(QueryException $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    return redirect('confrere');
}  
}




}
