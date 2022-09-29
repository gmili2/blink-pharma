<?php

namespace App\Http\Controllers;

use App\Client;
use App\Confrere;
use App\Fournisseur;
use Illuminate\Http\Request;
use Auth;
use DB;
use app\clients;
use App\Filecsvimporter;
use App\Produit;
use Exception;
use PhpParser\Node\Stmt\Echo_;
class ImportationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
     
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     */

    public  function afficherheader()
    {
      $nom="d'accueil";
        echo( '
        <script>localStorage.setItem("select", "importation");</script>
        ');
        echo( '
        <script>localStorage.setItem("select2", "importation");</script>
        ');
    }


    public function show()
    {
        $this->afficherheader();
        $file= DB::table('filecsvimporters')
        ->select('filecsvimporters.*')
        // ->join('clients', 'ventes.client_id', '=', 'clients.id')
        // ->where('ventes.creer_par',Auth::User()->id)
        // ->whereNull('ventes.deleted_at')
    //    ->where('clients.name', 'like', '%'.$nom.'%')
   -> orderBy('id','DESC')

        ->get();
        // $file=Filecsvimporter::all(); 

        return view('pages.importation.importation',["file"=>$file]);
    }
    public function AjouterClient(String $file_name)
    {
        $this->afficherheader();

        $path="\\Files CSV\\". $file_name;
        $CSV=public_path($path);
        $tab=[];

        if (($handle = fopen($CSV, "r")) !== false) {
            fgets($handle);
            while ($line=  fgets($handle)) {
                $arr=[];
                $tab=[];
                $client =new Client();
                $data=$line;
                $arr=explode(";", $data);
                // print_r($arr);
                for ($i=0;$i<count($arr);$i++) {
                    // echo $arr[$i] ."<br>";
                    $tab[$i]=$arr[$i];
                }

                $client->name=$tab[0];
                $client->cin=$tab[1];
                $client->cnss=$tab[2];
                $client->email=$tab[3];
                $client->tele=$tab[4];
                $client->ville=$tab[5];
                $client->adresse=$tab[6];
                $client->save();
           $arr=[];

            }
        }


        fclose($handle);
    }
    public function AjouterFournisseur(String $file_name)
    {
        $path="\\Files CSV\\". $file_name;
        $CSV=public_path($path);
        $tab=[];
        if (($handle = fopen($CSV, "r")) !== false) {
            fgets($handle);
            while ($line=  fgets($handle)) {
                $arr=[];
                $tab=[];
                $fournisseur =new Fournisseur();
                $data=$line;
                $arr=explode(";", $data);
                // print_r($arr);
                for ($i=0;$i<count($arr);$i++) {
                    // echo $arr[$i] ."<br>";
                    $tab[$i]=$arr[$i];
                }

                $fournisseur->name=$tab[0];
                $fournisseur->email=$tab[1];
                $fournisseur->site=$tab[2];
                $fournisseur->fax=$tab[3];
                $fournisseur->tele=$tab[4];
                $fournisseur->ville=$tab[5];
                $fournisseur->adresse=$tab[6];
                $fournisseur->save();

            }
        }


        fclose($handle);
    }
    public function AjouterConfrere(String $file_name)
    {
        $path="\\Files CSV\\". $file_name;
        $CSV=public_path($path);
        $tab=[];
        if (($handle = fopen($CSV, "r")) !== false) {
            fgets($handle);
            while ($line=  fgets($handle)) {
                $arr=[];

                $tab=[];

                $confrere =new Confrere();
                $data=$line;
                print($data);
                $arr=explode(";", $data);
                for ($i=0;$i<count($arr);$i++) {
                    $tab[$i]=$arr[$i];
                }
                $confrere->name=$tab[0];
                $confrere->creer_par=Auth::User()->id;

                
                $confrere->email=$tab[1];
                $confrere->site=$tab[2];
                $confrere->fax=$tab[3];
                $confrere->tele=$tab[4];
                $confrere->ville=$tab[5];
                $confrere->adresse=$tab[6];
                $confrere->save();


            }
        }


        fclose($handle);
    }
    public function AjouterProduit(String $file_name)
    {
        $path="\\Files CSV\\". $file_name;
        $CSV=public_path($path);
        $tab=[];
        if (($handle = fopen($CSV, "r")) !== false) {
            fgets($handle);
            while ($line=  fgets($handle)) {
                $produit =new Produit();
                $data=$line;

                $arr=explode(";", $data);
                // print_r($arr);
                for ($i=0;$i<count($arr);$i++) {
                    // echo $arr[$i] ."<br>";
                    $tab[$i]=$arr[$i];
                    // print_r($tab);
                }
                // print_r($tab);
                $produit->name=$tab[0];
                // $produit->creer=$tab[0];

                $produit->code_bare=$tab[1];
                $produit->laboratoire=$tab[2];
                $produit->PPV=$tab[3];
                $produit->types_id=$tab[4];
                $produit->classes_id=$tab[5];
                $produit->dcis_id=$tab[6];
                $produit->inventaires_id=$tab[7];
                // $produit->PPH=$tab[8];
                $produit->save();
                $arr=[];
            }
        }


        fclose($handle);
    }
    public function Sauvegarder(Request $req)
    {

        DB::beginTransaction();
   try{

    $choice=$req->post('methode');
    // echo $choice ;
    if ($req->hasFile('commentaire')) {

        $file =$req->file('commentaire');

        $file_name=$file->getClientOriginalName();
        $file_name=time() . '-' . $file_name;
        $file->move(public_path().'/Files CSV/', $file_name);

        // $path=$req->file('image_produit')->storeAs($destination_path,$image_name);
    }
    if ($choice == "client-Exemple.csv") {
        $this->AjouterClient($file_name);
    } elseif ($choice == "fournisseur-Exemple.csv") {
        $this->AjouterFournisseur($file_name);
    } elseif ($choice == "Confrere-Exemple.csv") {
        $this->AjouterConfrere($file_name);
    } elseif ($choice == "Produit-Exemple.csv") {
        $this->AjouterProduit($file_name);
    }


    $file= new Filecsvimporter();
    $file->file_name=$file_name;
    $file->creer_par=Auth::User()->id;
    $file->save();
    DB::commit();
    session()->flash('success', 'bien importer');
    return redirect('importation');
   }
   catch (Exception $ex) {
    DB::rollBack();
    session()->flash('warning', "non importer");
	// dd( $ex);
}


        }
    }



