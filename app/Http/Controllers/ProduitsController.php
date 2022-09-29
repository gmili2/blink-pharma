<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Classe;
use App\ContreIndication;
use App\Type;
use App\Form;
use App\Dci;
use App\Produit;
use App\Prixproduit;
use App\Datepremptionproduit;
use Exception;
use App\Zone;


use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class ProduitsController extends Controller
{
    //
	
	
	   public function __construct()
    {
        $this->middleware('auth');
       
      
    }

    public  function afficherheader()
    {
        echo( '
        <script>localStorage.setItem("select", "produits");</script>
        ');
    }
    public function index(){
        // $produits=Produit::all();
 $this->afficherheader();
        echo( '
        <script>localStorage.setItem("sousselect", "tousproduits");</script>
        ');

        $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        ->where('produits.creer_par',Auth::User()->id)
        ->whereNull('produits.deleted_at')
        ->paginate(4);
        return view('pages.products.product',
        ['produits' => $produits,]);
    }
    public function get_produit(){
        // $produits=Produit::all();

        $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('creer_par',Auth::User()->id)
        ->whereNull('produits.deleted_at')
        ->paginate(15);
        // dd( $produits);
        return view('pages.products.table-initiale',
        ['produits' => $produits,]);
    }
    public function get_produit_bynom($nom){

        $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        // ->where('creer_par',Auth::User()->id)
        ->where('produits.name', 'like', '%'.$nom.'%')
        ->whereNull('produits.deleted_at')
                ->where('produits.active',1)

        ->get();
        // dd( $produits);
        return view('pages.products.table',
        ['produits' => $produits,]);
    }


    public function gettableproduitajax(){

        // dd("lkj");
        $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')   
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        ->whereNull('produits.deleted_at')
        ->get();
        return datatables( $produits)->make(true) ;
    }

public function formuleajouterproduit(){
 $this->afficherheader();
        echo( '
        <script>localStorage.setItem("sousselect", "ajouterproduit");</script>
        ');

    $classes=Classe::all();
    $types=Type::all();
    $forms=Form::all();
    $dcis=Dci::all();
    $Zone=Zone::all();
    $stocks= DB::table('inventaires')
    ->select('inventaires.*')
    ->where('creer_par',Auth::User()->id)
    ->get();
    $conduit=DB::table('contre_indications')->select('contre_indications.*')->whereNull('contre_indications.deleted_at')->where('Type',"conduit")->get();
    $monograph=DB::table('contre_indications')->select('contre_indications.*')->whereNull('contre_indications.deleted_at')->where('Type',"monograph")->get();
    $grossesse=DB::table('contre_indications')->select('contre_indications.*')->whereNull('contre_indications.deleted_at')->where('Type',"grossesse")->get();
    $TvaAchat=DB::table('tvas')->select('tvas.*')->where('Type',"Achat")->whereNull('tvas.deleted_at')->get();
    $TvaVente=DB::table('tvas')->select('tvas.*')->where('Type',"Vente")->whereNull('tvas.deleted_at')->get();

    return view('pages.products.add-product', [
        'classes' => $classes,
        'types' => $types,
        'forms' => $forms,
        'dcis' => $dcis,
        'stocks'=> $stocks,
        'conduit'=> $conduit,
        'monograph'=> $monograph,
        'grossesse'=> $grossesse,
        'TvaAchat'=> $TvaAchat,
        'TvaVente'=> $TvaVente,
        'Zone'=> $Zone,


    ]);

}

public function modifierproduitformule($id)

       

{  
    
 $this->afficherheader();
 $classes=Classe::all();
    $types=Type::all();
    $forms=Form::all();
    $dcis=Dci::all();
    $zone=Zone::all();

    $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        ->where('produits.id',$id)
        ->get();
        $produit=$produits[0];
        $TvaAchat=DB::table('tvas')->select('tvas.*')->where('Type',"Achat")->whereNull('tvas.deleted_at')->get();
        $TvaVente=DB::table('tvas')->select('tvas.*')->where('Type',"Vente")->whereNull('tvas.deleted_at')->get();
        $conduit=DB::table('contre_indications')->select('contre_indications.*')->whereNull('contre_indications.deleted_at')->where('Type',"conduit")->get();
        $monograph=DB::table('contre_indications')->select('contre_indications.*')->whereNull('contre_indications.deleted_at')->where('Type',"monograph")->get();
        $grossesse=DB::table('contre_indications')->select('contre_indications.*')->whereNull('contre_indications.deleted_at')->where('Type',"grossesse")->get();
        return view('pages.products.modifier-product',[
        'produit' => $produit,
        'classes' => $classes,
        'types' => $types,
        'forms' => $forms,
        'dcis' => $dcis,
        'conduit'=> $conduit,
        'monograph'=> $monograph,
        'grossesse'=> $grossesse,
        'TvaAchat'=> $TvaAchat,
        'TvaVente'=> $TvaVente,
        'zone'=> $zone,

        ]);
    }
public function informationproduct($id)
{
	
	 $this->afficherheader();
       

         $produits= DB::table('produits')
        ->join('classes','produits.classes_id','=','classes.id')
        ->join('types','produits.types_id','=','types.id')
        ->join('forms', 'produits.forms_id', '=', 'forms.id')
        ->join('dcis', 'produits.dcis_id', '=', 'dcis.id')
        ->select('produits.*','classes.name as nameclasse','types.name as nametype','forms.name as nameform'
        ,'dcis.name as namedci')
        ->where('produits.id',$id)
        ->get();
        // dd( $produits);

        $prixproduits= DB::table('prixproduits')
        ->select('prixproduits.*')
        ->where('prixproduits.produits_id',$id)
        ->get();
        $Datepremptionproduit= DB::table('datepremptionproduits')
        ->select('datepremptionproduits.*')
        ->where('datepremptionproduits.produits_id',$id)
        ->get();


        $produit=$produits[0];
       $creer_par=User::find( $produit->creer_par);

        return view('pages.products.informationproduct',[
        'produit' => $produit,
        'prixproduits' => $prixproduits,
        'Datepremptionproduit' => $Datepremptionproduit,
        'creer_par' => $creer_par
      
        ])
    ;}
    public function updateproduct(Request $request,$id){

        $request->validate([
            'nom' => 'required',
            // 'image' => 'required',
            'classe' => 'required',
            'categorie' => 'required',
            'codebarre' => 'required',
            // 'adresse' => 'required',
            'pph' => 'required',
            'ppv' => 'required',
            // 'code_postal' => 'required',
            // 'Pays' => 'required',
            // 'telephone'=> 'required|min:10|numeric',
             ]);
        DB::beginTransaction();
        try{
           $produit=Produit::find($id);
         if($request->image!=null)
          {
          $image = time() . '-' . $request->nom . '.' . $request->image->extension();
          $request->image->move(public_path('images'), $image);
          $produit->image = $image;
          }
          $produit->classes_id=  $request->classe;
          $produit->types_id=  $request->categorie;
          $produit->forms_id=  $request->fgalenique;
          $produit->dcis_id=  $request->dci;
          $produit->name=  $request->nom;
          $produit->code_bare=  $request->codebarre;
          $produit->code_bare2=  $request->codebarre2;
          $produit->laboratoire=  $request->laboratoire;
          $produit->gamme=  $request->gamme;
          $produit->quantite=  $request->quantite;
          $produit->sous_gamme=  $request->sousgamme;
          $produit->produit_tableau=  $request->tproduit;
          $produit->prescription=  $request->prescription;
          $produit->produit_marche=  $request->produit_marche;
          $produit->PPH = $request->pph;
          $produit->PPV = $request->ppv;
          $produit->PPH_prix = $request->pph;
          $produit->PPV_prix= $request->ppv;
          $produit->TVA = $request->tva_achat;
          $produit->TVA_vente = $request->tva_vente;
          $produit->remboursable = $request->remboursable;;
          $produit->présentation =  $request->presentation;
          $produit->excipient =  $request->excipient;
          $produit->posologie_adult=  $request->padult;
          $produit->posologie_enfant=  $request->paenfant;
          $produit->indications=  $request->indications;
          $produit->contre_indication_conduit=  $request->ci_conduit;
          $produit->contre_indication_monograph=  $request->ci_monograph;
          $produit->contre_indication_grossesse=  $request->ci_grossesse;
          $produit->reference_labo_produit=  $request->labo_produit;
          $produit->conditionnement=  $request->conditionnement;
          $produit->monograph=  $request->description_monograph;
          $produit->description=  $request->description;
          $produit->zone=  $request->zone;
          $produit->update();
          DB::commit();
          session()->flash('success', 'bien Modifier');
      }
      catch(Exception $ex){
          DB::rollBack();
          
          session()->flash('warning', 'erreur base donnée');
        //   return redirect('produit');
      }
          return redirect("produit");
    }
public function addproduit(Request $request){


    $request->validate([
        'nom' => 'required',
        'image' => 'required',
        'classe' => 'required',
        'categorie' => 'required',
        'codebarre' => 'required',
        // 'tva_vente' => 'required',
        'pph' => 'required',
        'ppv' => 'required',
         'tva_achat' => 'required',
        // 'Pays' => 'required',
        // 'telephone'=> 'required|min:10|numeric',
         ]);
    DB::beginTransaction();
    try{
    $produit=new Produit();
    if($request->image!=null)
    {
    $image = time() . '-' . $request->nom . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $image);
    $produit->image = $image;
    }
    $produit->classes_id=  $request->classe;
    $produit->types_id=  $request->categorie;
    $produit->forms_id=  $request->fgalenique;
    $produit->dcis_id=  $request->dci;
    $produit->name=  $request->nom;
    $produit->quantite=  $request->quantite;
    $produit->quantite_disponible=  $request->quantite;
    $produit->code_bare=  $request->codebarre;
    $produit->code_bare2=  $request->codebarre2;
    $produit->laboratoire=  $request->laboratoire;
    $produit->gamme=  $request->gamme;
    $produit->sous_gamme=  $request->sousgamme;
    $produit->produit_tableau=  $request->tproduit;
    $produit->prescription=  $request->prescription;
    $produit->produit_marche=  $request->produit_marche;
    $produit->PPH = $request->pph;
    $produit->PPV = $request->ppv;
    $produit->PPV_prix=$request->ppv;
    $produit->PPH_prix=$request->pph;
    $produit->TVA = $request->tva_achat;
    $produit->TVA_vente = $request->tva_vente;
    $produit->remboursable = $request->remboursable;;
    $produit->présentation =  $request->presentation;
    $produit->excipient =  $request->excipient;
    $produit->posologie_adult=  $request->padult;
    $produit->posologie_enfant=  $request->paenfant;
    $produit->indications=  $request->indications;
    $produit->contre_indication_conduit=  $request->ci_conduit;
    $produit->contre_indication_monograph=  $request->ci_monograph;
    $produit->contre_indication_grossesse=  $request->ci_grossesse;
    $produit->reference_labo_produit=  $request->labo_produit;
    $produit->conditionnement=  $request->conditionnement;
    $produit->monograph=  $request->description_monograph;
    $produit->description=  $request->description;
    $produit->inventaires_id=$request->stock_id;
    $produit->zone=$request->zone;

    
    $produit->creer_par=Auth::User()->id;
    if($request->stock_id!=null)
    $produit->inventaires_id=$request->stock_id;
    else
    $produit->inventaires_id=3;
    $produit->active=1;
    $produit->save();
    DB::commit();
    session()->flash('success', 'bien ajouter');
}
catch(Exception $ex){
    DB::rollBack();
  
;    session()->flash('warning', 'erreur base donnée');
    return redirect('produit');
}
    return redirect("produit");
}
public function addprixproduits($id,Request $request){

    DB::beginTransaction();
    try{
    // $produit=Produit::find($id);
    // $produit->PPV_prix=$request->ppv_prix;
    // $produit->PPH_prix=$request->pph_prix;
    $prixproduit=new Prixproduit();
    $prixproduit->PPV=$request->ppv_prix;
    $prixproduit->PPH=$request->pph_prix;
    $prixproduit->produits_id=$id;

    $prixproduit->save();
    DB::commit();
    session()->flash('success', 'prix bien ajouter');
}
catch(Exception $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    return redirect('informationproduct'.$id);
}
    return redirect("informationproduct".$id);
}

public function add_date_peremption(Request $request){

    DB::beginTransaction();
    try{

    $id=$request->id;
    // $produit=Produit::find($id);
    // $produit->date_peremption=$request->add_date_peremption;
    // // $produit->PPH_prix=$request->pph_prix;
    // $produit->update();
    $prixproduit=new Datepremptionproduit();
    $prixproduit->dateperemption=$request->add_date_peremption;
    $prixproduit->produits_id=$id;
    $prixproduit->save();
    DB::commit();
    DB::commit();
    session()->flash('success', 'date peremption bien ajouter');
}
catch(Exception $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    return redirect('informationproduct'.$id);
}
    return redirect("informationproduct".$id);
}


public function modifier_date_peremption(Request $request){

    DB::beginTransaction();
    try{
    $id=$request->id;
    $prixproduit= Datepremptionproduit::find($id);
    $prixproduit->dateperemption=$request->add_date_peremption;
    $prixproduit->update();
    DB::commit();
    session()->flash('success', 'date peremption bien modifier');
}
catch(Exception $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    return redirect('informationproduct'.$prixproduit->produits_id);
}
    return redirect("informationproduct".$prixproduit->produits_id);
}
public function delete_date_peremption(Request $request){

    DB::beginTransaction();
    try{

    $id=$request->date_id;
    $prixproduit= Datepremptionproduit::find($id);
    $prixproduit->delete();
    DB::commit();
    session()->flash('success', 'date peremption bien supprimer');
}
catch(Exception $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    return redirect("informationproduct".$prixproduit->produits_id);
}
return redirect("informationproduct".$prixproduit->produits_id);
}




public function desactiverproduit($id,$etat,Request $request){
    // dd("kk");
    // $request=new Request();
    DB::beginTransaction();
    try{
    $produit=Produit::find($id);
    $produit->active=0;
    $produit->update();
    DB::commit();
    session()->flash('success', 'bien désactiver');
}
catch(Exception $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    // return redirect('produit');
}

if( $etat==0)
return redirect("produit");
else 
return redirect("stock");
    // return redirect("produit");
}
public function supprimerproduit(Request $request){
    // dd('lkjh');
    DB::beginTransaction();
    $id=$request->produit_id;
       $count = DB::table('venteproduits')
        ->where('venteproduits.produits_id' ,$id)
        ->whereNull('venteproduits.deleted_at')
        ->count();
        if(( $count )!=0){
    session()->flash('warning', 'Vous ne pouvez pas supprimer ce produit, car il est déjà vendu');
    if( $request->etat==1)
    return redirect("stock");
    else 
    return redirect("produit");
        }

    try{

    

    $produit=Produit::find($id);
    $produit->delete();
    DB::commit();
    session()->flash('success', 'bien supprimer');
}
catch(Exception $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    // return redirect('produit');
}


if( $request->etat==1)
return redirect("stock");
else 
return redirect("produit");
    // return redirect("produit");



}

public function avtiverproduit($id,$etat,Request $request ){
    DB::beginTransaction();
    try{
    $produit=Produit::find($id);
    $produit->active=1;
    $produit->update();
    DB::commit();
    session()->flash('success', 'bien activer');
}
catch(Exception $ex){
    DB::rollBack();
    session()->flash('warning', 'erreur base donnée');
    // return redirect('produit');
}
if( $etat==0)
return redirect("produit");
else 
return redirect("stock");
    return redirect("produit")
;}

}

