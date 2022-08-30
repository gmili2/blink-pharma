<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Vente;
use App\Venteproduit;

use App\Produit;
use App\Retoursurvente;
use App\Retoursurventeproduit;


 

use Illuminate\Support\Facades\DB;
use Auth;

class VenteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
      
    }
    public  function afficherheader()
    {
        echo( '
        <script>localStorage.setItem("select", "ventes");</script>
        ');
    }
    
    public function addretousurventepage()
    {
        $clients= DB::table('clients')
        ->select('clients.*')
        // ->where('clients.creer_par',Auth::User()->id)
        ->whereNull('clients.deleted_at')
        ->get(); 
        $produits= DB::table('produits')
            ->join('classes','produits.classes_id','=','classes.id')
            ->join('types','produits.types_id','=','types.id')
            ->join('forms', 'produits.forms_id', '=', 'forms.id')   
            ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
            ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
            ,'dcis.name as namedci')
            // ->where('creer_par',Auth::User()->id)
            ->whereNull('produits.deleted_at')
            ->get();
        return view('pages.vente.add-retoursurvente',compact('clients'),compact('produits'));
         }
         public function listeretoursurvente()
         {
         $ventes= DB::table('retoursurventes')
         ->select('retoursurventes.*','clients.name as nom_client')
         ->join('clients', 'retoursurventes.client_id', '=', 'clients.id')
        //  ->where('retoursurventes.creer_par',Auth::User()->id)
         ->whereNull('retoursurventes.deleted_at')
         ->paginate(5);
         return view('pages.vente.listeretoursurvente',compact('ventes'));
              }
     
     public function index()
    {
    $this->afficherheader();

    $ventes= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    // ->where('ventes.creer_par',Auth::User()->id)
    ->whereNull('ventes.deleted_at')
    ->paginate(5);
    return view('pages.vente.liste',compact('ventes'));
    }


    public function gettableventeajax()
    {
    $gettableventeajax= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->whereNull('ventes.deleted_at')
    ->get();
    return datatables( $gettableventeajax)->make(true) ;
    }
    

         public function get_tableventebynom($nom)
         {
     
     
         $ventes= DB::table('ventes')
         ->select('ventes.*','clients.name as nom_client')
         ->join('clients', 'ventes.client_id', '=', 'clients.id')
        //  ->where('ventes.creer_par',Auth::User()->id)
         ->whereNull('ventes.deleted_at')
        ->where('clients.name', 'like', '%'.$nom.'%')

         ->paginate(5);
         $paginate=1;

                 return view('pages.vente.table-vente',compact('ventes'),
                   compact('paginate'));
              }

              public function get_tablevente()
              {
              $ventes= DB::table('ventes')
              ->select('ventes.*','clients.name as nom_client')
              ->join('clients', 'ventes.client_id', '=', 'clients.id')
            //   ->where('ventes.creer_par',Auth::User()->id)
              ->whereNull('ventes.deleted_at')
              ->paginate(10);
              $paginate=0;
                      return view('pages.vente.table-vente',compact('ventes'),
                      compact('paginate'));
                   }

         

         public function ajoutervente(Request $req){
            // $this->afficherheader();

    $vente=new Vente();
    $vente->produits_id= $req->id_produit;
    $vente->client_id= $req->id_client;
    // $vente->quantite_suivant= $req->produit_idsuivant;
    $vente->PPV= $req->PPV;
    $vente->quantite= $req->quantite;
    $vente->reference= $req->references;
    $vente->mode_payment= $req->mode_payment;
    $vente->livree= $req->livree;
    $vente->fournisseurs_id= 1;
    $vente->creer_par= Auth::User()->id;
    $vente->save();
    session()->flash('success','vente ajouter avec succés');	
    return redirect('vente');

}



public function modifier_produit_client(Request $req){
    // $this->afficherheader();

    DB::beginTransaction();
    try{
    $quatite_produit= $req->input("qty");
    $listproduit = $req->input("pr_select");
    $p_unitaire = $req->input("p_unitaire");
    $remboursement = $req->input("remboursement");
    $remise = $req->input("remise");
    $type_remise = $req->input("type_remise");
    $qtyinitiale = $req->input("qtyinitiale");
// return  $quatite_produit;

    
    $i=0;
    $vente = Vente::find($req->id);
    $prd= DB::table('venteproduits')
    ->select('venteproduits.*')
    ->where('venteproduits.ventes_id',$req->id)
    ->whereNull('venteproduits.deleted_at')
    ->get();
    foreach($prd as $a)    
    {

      $p1 = Venteproduit::find($a->id);
      $p1 ->delete();
    }
    $vente->client_id = $req->client_idsuivant;
    $vente->status= $req->status;
    $vente->reference= $req->references;
    $vente->livree= $req->livree;
    if(intval($req->montant_credit)<0 && $req->status=="1")
    $vente->status ="2";
    else
    $vente->status = $req->status;
    $vente->montant_recu = $req->montant_recu;
    $vente->montant_rendre = $req->montant_rendre;
    if($req->status=="0")
    $vente->montant_credit = $req->montant_PU;
    else
    $vente->montant_credit = -$req->montant_credit;
    $vente->montant_PPV = $req->montant_PPV;
    $vente->montant_PU = $req->montant_PU;
    if( $vente->client_id==null){
        $vente->client_id=1000;
    }
    $vente->creer_par= Auth::User()->id;
    $vente->livree= $req->livree;
    if($req->status==0 || $req->status=="0" )
    $vente->mode_payment=null;
    else
    $vente->mode_payment= $req->mode_payment;
    if($req->input("mode_payment")!=1){
        $vente->status=1;
    $vente->montant_credit = 0;
    }
// return ($req->input("mode_payment"))
    $vente->update();
    foreach ($req->input("pr_select") as $pr_id){
        $produit =  Produit::find( $pr_id);



        // if($qtyinitiale[$i]!=null){
            $rest=$quatite_produit[$i]-$qtyinitiale[$i];
            // $produit->quantite_disponible= $produit->quantite_disponible-$rest;
            // $produit->update();
        // }
     
        $venteproduit=new Venteproduit();
        $venteproduit->quantite=$quatite_produit[$i];
        $venteproduit->produits_id=$produit->id;
        $venteproduit->ventes_id=$vente->id;
        $venteproduit->remise=$remise[$i];
        $venteproduit->type_remise=$type_remise[$i];
        $venteproduit->remboursement=$remboursement[$i];
        $venteproduit->prix_unitaire=$p_unitaire[$i];
        $venteproduit->save();
        $i=$i+1;
    }
    DB::commit();
    // $_SESSION["id_vente"]=$vente->id;
    return Response()->json(["codeEr"=>"200","msg"=>"bien modifier","id_vente"=>$req->id]);  
}
catch(QueryException $ex){
    DB::rollBack();
    $req->session()->flash('warning', 'erreur base donnée');
    return Response()->json(["codeEr"=>"300","msg"=>$ex]);  
}
}




public function ajouterretoursurvente_produit_client(Request $req){
    DB::beginTransaction();
    try{
        // return $req->input("qty");
    $quatite_produit= $req->input("qty");
    $listproduit = $req->input("pr_select");
    $p_unitaire = $req->input("p_unitaire");
    $remboursement = $req->input("remboursement");
    $remise = $req->input("remise");
    $type_remise = $req->input("type_remise");
    $i=0;
    $vente=new Retoursurvente ();
    $vente->client_id= $req->client_idsuivant;
    $vente->montant_restitue = $req->montant_restitue;
    if( $vente->client_id==null){
        $vente->client_id=1000;
    }
    $vente->creer_par= Auth::User()->id;
    $vente->mode_payment= $req->mode_payment;
    $vente->save();
    foreach ($req->input("pr_select") as $pr_id){
        $produit =  Produit::find( $pr_id);
        // $produit->quantite_disponible= $produit->quantite_disponible+$quatite_produit[$i];
        // $produit->update();
        // $produit =  Produit::find( $pr_id);
        $venteproduit=new Retoursurventeproduit();
        $venteproduit->qte=$quatite_produit[$i];
        $venteproduit->produits_id=$produit->id;
        $venteproduit->retoursurventes_id=$vente->id;
        $venteproduit->remise=$remise[$i];
        $venteproduit->type_remise=$type_remise[$i];
        $venteproduit->remboursement=$remboursement[$i];
        $venteproduit->prix_AU=$p_unitaire[$i];
        $venteproduit->save();
        $i=$i+1;
    }
    DB::commit();
    return Response()->json(["codeEr"=>"200","msg"=>"bien effetcuie","id_vente"=>$vente->id]);  
}
catch(QueryException $ex){
    DB::rollBack();
    $req->session()->flash('warning', 'erreur base donnée');
    return Response()->json(["codeEr"=>"300","msg"=>$ex]);  
}
}


public function ajoutervente_produit_client(Request $req){
    DB::beginTransaction();
    try{
    $quatite_produit= $req->input("qty");
    $listproduit = $req->input("pr_select");
    $p_unitaire = $req->input("p_unitaire");
    $remboursement = $req->input("remboursement");
    $remise = $req->input("remise");
    $type_remise = $req->input("type_remise");
    $i=0;

    $vente=new Vente();
    $client =  Client::find($req->client_idsuivant);
  
    $vente->client_id= $req->client_idsuivant;
    $vente->status= $req->status;
    $vente->reference= $req->references;
    $vente->livree= $req->livree;
    if(intval($req->montant_credit)<0 && $req->status=="1")
    $vente->status ="2";
    else
    $vente->status = $req->status;
    $vente->montant_recu = $req->montant_recu;
    $vente->montant_rendre = $req->montant_rendre;
    if($req->status=="0")
    $vente->montant_credit = $req->montant_PU;
    else
    $vente->montant_credit = -$req->montant_credit;
   
    $vente->montant_PPV = $req->montant_PPV;
    $vente->montant_PU = $req->montant_PU;
   
    $vente->creer_par= Auth::User()->id;
    $vente->livree= $req->livree;
    if($req->status==0 || $req->status=="0" )
    $vente->mode_payment=null;
    else
    $vente->mode_payment= $req->mode_payment;
    $vente->save();
    $client->credit=$client->credit+intval($vente->montant_credit);
    // return $client;
    $client->update();
    foreach ($req->input("pr_select") as $pr_id){
        $produit =  Produit::find( $pr_id);
        // $produit->quantite_disponible= $produit->quantite_disponible-$quatite_produit[$i];
        // $produit->update();
        $venteproduit=new Venteproduit();
        $venteproduit->quantite=$quatite_produit[$i];
        $venteproduit->produits_id=$produit->id;
        $venteproduit->ventes_id=$vente->id;
        $venteproduit->remise=$remise[$i];
        $venteproduit->type_remise=$type_remise[$i];
        $venteproduit->remboursement=$remboursement[$i];
        $venteproduit->prix_unitaire=$p_unitaire[$i];
        $venteproduit->save();
        $i=$i+1;
    }
    DB::commit();
    // $_SESSION["id_vente"]=$vente->id;
    return Response()->json(["codeEr"=>"200","msg"=>"bien effetcuie","id_vente"=>$vente->id]);  
    // return()
// session()->flash('success', 'vente bien ajouter');
//     return redirect('vente');
}
catch(QueryException $ex){
    DB::rollBack();
    $req->session()->flash('warning', 'erreur base donnée');
    return Response()->json(["codeEr"=>"300","msg"=>$ex]);  
}
}




// public function delete(Request $req)
// {
//     $id=$req->fr_id;
//     DB::beginTransaction();
//     try{
//     $client = Fournisseur::find($id);
//     $client->delete();
//     DB::commit();

//     session()->flash('success','Fournisseur supprimé avec succés');	
//     return redirect('fournisseurs');}
//     catch(QueryException $ex){
        
//         DB::rollBack();
//         session()->flash('warning', 'erreur base donnée');
//         return redirect('fournisseurs');
//     }
// }




public function deletesurvente(Request $req){
    // $this->afficherheader();

    $id=$req->vente_id;
    DB::beginTransaction();
    try{
    $vente = Retoursurvente::find($id);
    $vente->delete();
    DB::commit();
    session()->flash('success','vente  supprimé avec succés');	
    return redirect('retoursurvente');}
    catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('retoursurvente');
    }

}
public function delete(Request $req){
    $id=$req->vente_id;
    DB::beginTransaction();
    try{
    $vente = Vente::find($id);
    $vente->delete();
    DB::commit();
    session()->flash('success','vente  supprimé avec succés');	
    return redirect('vente');}
    catch(QueryException $ex){
        DB::rollBack();
        session()->flash('warning', 'erreur base donnée');
        return redirect('vente');
    }
    // dd( $req->input());

}
public function facturepage( $id){
    $this->afficherheader();

    $type_payment = DB::table('typepayments')
    ->select('typepayments.*')
    ->get(); 
// dd($type_payment);
    $facture = DB::table('venteproduits')
    ->join('ventes', 'venteproduits.ventes_id', '=', 'ventes.id')
    ->join('produits', 'venteproduits.produits_id', '=', 'produits.id')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    ->where('ventes.id', $id)
    ->whereNull('ventes.deleted_at')
    ->whereNull('venteproduits.deleted_at')

    ->select('ventes.*',"produits.*","venteproduits.*",'clients.name as nom_client')
    ->get(); 

// dd( $facture);
    return view('pages.vente.facture',compact('facture'),compact('type_payment'));
}
public function factureretursurvente( $id){
    $this->afficherheader();

    $facture = DB::table('retoursurventeproduits')
    ->join('retoursurventes', 'retoursurventeproduits.retoursurventes_id', '=', 'retoursurventes.id')
    ->join('produits', 'retoursurventeproduits.produits_id', '=', 'produits.id')
    ->join('clients', 'retoursurventes.client_id', '=', 'clients.id')
    ->where('retoursurventes.id', $id)
    ->whereNull('retoursurventes.deleted_at')
    ->whereNull('retoursurventeproduits.deleted_at')

    ->select('retoursurventes.*',"produits.*","retoursurventeproduits.*",'clients.name as nom_client')
    ->get(); 

// dd( $facture);
    return view('pages.vente.factureretursurvente',compact('facture'));
}


public function produit_table($nom){

    $this->afficherheader();
    $produits= DB::table('produits')
    ->join('classes','produits.classes_id','=','classes.id')
    ->join('types','produits.types_id','=','types.id')
    ->join('forms', 'produits.forms_id', '=', 'forms.id')   
    ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
    ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
    ,'dcis.name as namedci')
    ->where('produits.name', 'like', '%'.$nom.'%')
        // ->where('creer_par',Auth::User()->id)

    ->whereNull('produits.deleted_at')
    ->get();
    return view('pages.vente.tableproduit',compact('produits'));

}
public function produit_ttable(){
    $this->afficherheader();

    $produits= DB::table('produits')
    ->join('classes','produits.classes_id','=','classes.id')
    ->join('types','produits.types_id','=','types.id')
    ->join('forms', 'produits.forms_id', '=', 'forms.id')   
    ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
    ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
    ,'dcis.name as namedci')
    // ->where('creer_par',Auth::User()->id)

    ->whereNull('produits.deleted_at')
    ->get();
    return view('pages.vente.tableproduit',compact('produits'));

}

public function addventepage()
{
    $this->afficherheader();

    $clients= DB::table('clients')
    ->select('clients.*')
    // ->where('clients.creer_par',Auth::User()->id)
    ->whereNull('clients.deleted_at')
    ->get(); 
    $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')   
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('produits.creer_par',Auth::User()->id)
        ->where('produits.active',1)
        ->whereNull('produits.deleted_at')
        ->get();
    return view('pages.vente.add-vente',compact('clients'),compact('produits'));
}


public function modifierventepage($id)
{
    $this->afficherheader();

        $clients= DB::table('clients')
        ->select('clients.*')
        // ->where('clients.creer_par',Auth::User()->id)
        ->whereNull('clients.deleted_at')
        ->get(); 
         $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')   
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('creer_par',Auth::User()->id)
        ->whereNull('produits.deleted_at')
        ->get();

         $ventes= DB::table('ventes')
    ->select('ventes.*','clients.name as nom_client')
    ->join('clients', 'ventes.client_id', '=', 'clients.id')
    // ->where('ventes.creer_par',Auth::User()->id)
    ->where('ventes.id',$id)
    ->whereNull('ventes.deleted_at')
    ->get();

        $produitsdejaselected= DB::table('venteproduits')
        ->join('ventes', 'venteproduits.ventes_id', '=', 'ventes.id')
        ->join('produits', 'venteproduits.produits_id', '=', 'produits.id')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        ->where('ventes.id', $id)
        ->whereNull('ventes.deleted_at')
        ->whereNull('venteproduits.deleted_at')
        ->select('ventes.*',"produits.*","venteproduits.*",'clients.name as nom_client')
        ->get(); 

        $produitsdejaselected_id= DB::table('venteproduits')
        ->join('ventes', 'venteproduits.ventes_id', '=', 'ventes.id')
        ->join('produits', 'venteproduits.produits_id', '=', 'produits.id')
        ->join('clients', 'ventes.client_id', '=', 'clients.id')
        ->where('ventes.id', $id)
        ->whereNull('ventes.deleted_at')
        ->whereNull('venteproduits.deleted_at')

        ->select("produits.id")
        ->get(); 
        $ids = array();
        foreach( $produitsdejaselected_id as $id){
            array_push($ids, $id->id);
        }
        return view('pages.vente.modifier-vente', ['produits'=>$produits,'ids'=>$ids,'clients'=>$clients,
        'ventes'=>$ventes,
        'produitsdejaselected'=>$produitsdejaselected]);

}


}
