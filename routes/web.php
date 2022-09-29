<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// use App\Http\Controllers\HomeController;

Route::get('', function () {
    return redirect('login');
});


Route::get('home', function () {
    return view('home');
});

Route::get('client', function () {
    return view('pages.client.client');
});
Route::get('deconnexion',function ()
{
    auth()->logout();
    return redirect('login');
});

Route::post('Addcalendar','App\Http\Controllers\HomeController@Addcalendar');

Route::get('ajouterclient', function () {
    return view('pages.client.addclient');
});
Route::get('modifierclient', function () {
    return view('pages.client.client');
});
Route::get('supprimerclient', function () {
    return view('pages.client.client');
});
Route::get('informationclient{id}', function () {
    return view('pages.client.informationclient');
});
//produit start
Route::get('produit','App\Http\Controllers\ProduitsController@index');
Route::get('gettableproduitajax','App\Http\Controllers\ProduitsController@gettableproduitajax');


// Route::get('', [App\Http\Controllers\ProduitsController::class,'gettableproduitajax']);

Route::get('ajouterproduit', 'App\Http\Controllers\ProduitsController@formuleajouterproduit');
Route::post('addproduit', 'App\Http\Controllers\ProduitsController@addproduit');
Route::post('add_date_peremption', 'App\Http\Controllers\ProduitsController@add_date_peremption');
Route::post('modifier_date_peremption', 'App\Http\Controllers\ProduitsController@modifier_date_peremption');
Route::delete('delete_date_peremption', 'App\Http\Controllers\ProduitsController@delete_date_peremption');


Route::get('gett_produit', 'App\Http\Controllers\ProduitsController@get_produit')->name('get_produit');
// Route::get('gettableproduitajax', 'App\Http\Controllers\ProduitsController@gettableproduitajax')->name('gettableproduitajax');


Route::get('get_produit{nom}', 'App\Http\Controllers\ProduitsController@get_produit_bynom')->name('get_produit_bynom');

Route::get('modifierproduit', function () {return view('pages.products.add-product');});
Route::get('supprimerproduit', function () {return view('pages.products.add-product');});
Route::get('informationproduct{id}',  'App\Http\Controllers\ProduitsController@informationproduct' );
Route::get('modifierproduitformule{id}',  'App\Http\Controllers\ProduitsController@modifierproduitformule' );
Route::get('desactiverproduit{id}/{etat}',  'App\Http\Controllers\ProduitsController@desactiverproduit' );
Route::get('avtiverproduit{id}/{etat}',  'App\Http\Controllers\ProduitsController@avtiverproduit' );
Route::delete('supprimerproduit',  'App\Http\Controllers\ProduitsController@supprimerproduit' );
Route::put('updateproduct{id}',  'App\Http\Controllers\ProduitsController@updateproduct' );


Route::post('addprixproduits{id}',  'App\Http\Controllers\ProduitsController@addprixproduits' );
Route::put('updateprixproduit{id}',  'App\Http\Controllers\ProduitsController@updateprixproduit' );



//produits finn


//Clients

Route::get('gett_client', 'App\Http\Controllers\ClientsController@get_client')->name('get_client');
Route::get('gettableclienttajax', 'App\Http\Controllers\ClientsController@gettableclienttajax')->name('gettableclienttajax');
Route::get('get_client{nom}', 'App\Http\Controllers\ClientsController@get_clientbynom')->name('get_clientbynom');

Route::get('clients', 'App\Http\Controllers\ClientsController@index')->name('clients');
Route::get('addclients',   'App\Http\Controllers\ClientsController@addclientspage')->name('addclientspage');

Route::post('credit_client','App\Http\Controllers\ClientsController@credit_client');


Route::get('showclient{id}', 'App\Http\Controllers\ClientsController@showclient')->name('showclient');
Route::post('storeclient','App\Http\Controllers\ClientsController@store');
Route::get('modifyclient{id}', 'App\Http\Controllers\ClientsController@modifyclient')->name('modifyclient');
Route::put('updateClient{id}','App\Http\Controllers\ClientsController@update');
Route::delete('deleteclient','App\Http\Controllers\ClientsController@delete')->name('deleteclient');;

Route::post('updatefavoris','App\Http\Controllers\ProfileController@updatefavoris');

//End clients



//Fournisseur

Route::get('fournisseurs', 'App\Http\Controllers\FournisseursController@index')->name('fournisseurs');
Route::get('addfournisseur','App\Http\Controllers\FournisseursController@addfornisseurView');
Route::post('storefournisseur','App\Http\Controllers\FournisseursController@store');
Route::get('showfournisseur{id}', 'App\Http\Controllers\FournisseursController@showfournisseur')->name('showfournisseur');
Route::put('updatefournisseur{id}','App\Http\Controllers\FournisseursController@update');
Route::delete('deletefournisseur','App\Http\Controllers\FournisseursController@delete')->name('deletefournisseur');
Route::get('modifyfournisseur{id}', 'App\Http\Controllers\FournisseursController@modify');

Route::get('gettablefournisseurajax', 'App\Http\Controllers\FournisseursController@gettablefournisseurajax');

Route::get('gettable_fournisseur{nom}', 'App\Http\Controllers\FournisseursController@gettable_fournisseurbynom');
Route::get('gettablee_fournisseur', 'App\Http\Controllers\FournisseursController@gettable_fournisseur');


//End Fournisseur

//Confrerer

Route::get('confrere', 'App\Http\Controllers\ConfreresController@index');
Route::get('addconfrere',  'App\Http\Controllers\ConfreresController@addconfrerepage');


Route::get('showconfrere{id}', 'App\Http\Controllers\ConfreresController@modifyConfrere')->name('showconfrere');
Route::put('updateconfrere{id}','App\Http\Controllers\ConfreresController@update');
Route::delete('deleteconfrere','App\Http\Controllers\ConfreresController@delete')->name('deleteconfrere');
Route::post('storeconfrere','App\Http\Controllers\ConfreresController@store');
Route::get('modifyconfrere{id}', 'App\Http\Controllers\ConfreresController@modifyConfrere');
Route::get('gettable_confrere{nom}', 'App\Http\Controllers\ConfreresController@gettable_confrerebynom');
Route::get('gettablee_confrere', 'App\Http\Controllers\ConfreresController@gettable_confrere');
Route::get('gettableconfrereajax', 'App\Http\Controllers\ConfreresController@gettableconfrereajax');





//End Confrerer


//sortie confrer
Route::get('sortie-confrer', 'App\Http\Controllers\SortieConfreresController@index');

Route::get('gettableconfreresortieajax', 'App\Http\Controllers\SortieConfreresController@gettableconfreresortieajax');
Route::get('gettableconfrereentrerajax', 'App\Http\Controllers\SortieConfreresController@gettableconfrereentrerajax');

Route::get('entrer-confrer', 'App\Http\Controllers\SortieConfreresController@indexentrer');


Route::get('add-sortieconfrre', 'App\Http\Controllers\SortieConfreresController@add_sortieconfrrepage');
Route::get('sortie-confrere-detail{id}', 'App\Http\Controllers\SortieConfreresController@sortie_confrere_detail');
Route::delete('delete-sortieconfrere', 'App\Http\Controllers\SortieConfreresController@delete_sortieconfrere');


// add-entrer-confrer.blade
Route::get('add-entrerconfrre', 'App\Http\Controllers\SortieConfreresController@add_sentrerconfrrepage');
Route::get('modifier-entrerconfrre{id}', 'App\Http\Controllers\SortieConfreresController@modifier_sentrerconfrrepage');

// Route::get('modifierinventaire{id}','App\Http\Controllers\StockController@modifierinventaire');

Route::post('store_sortie', 'App\Http\Controllers\SortieConfreresController@store_sortie');
Route::post('modifier_sortie', 'App\Http\Controllers\SortieConfreresController@modifier_sortie');
Route::post('modifier_entrer', 'App\Http\Controllers\SortieConfreresController@modifier_sortie');
Route::get('bon_livraison{id}', 'App\Http\Controllers\PdfContoller@Bonlivraison_sortieconfrere');
Route::get('ticket_sortie_confrere{id}', 'App\Http\Controllers\PdfContoller@ticket_sortie_confrere');


//parametre
Route::get('logo', function () {
    // echo( '
    // <script>localStorage.setItem("sousselect", "vlogo");</script>
    // ');
    return view('pages.parameters.logo');
});

Route::get('codesecuritechage', function () {
     echo( '
    <script>localStorage.setItem("select", "vcodesecuritechage");</script>
    ');
    
     echo( '
    <script>localStorage.setItem("select2", "code de securite");</script>
    ');
    echo( '
    <script>localStorage.setItem("sousselect", "vcodesecuritechage");</script>
    ');
    return view('pages.parameters.codesecurite');
});

// <li style="margin-left: 13px;font-size:13px"> <a class="dropdown-item" href="codesecuritechage"> changer le code securite</a></li>


Route::post('changelogo', 'App\Http\Controllers\ProfileController@changelogo');
Route::post('changecode', 'App\Http\Controllers\ProfileController@changecode');



Route::post('changepied', 'App\Http\Controllers\ProfileController@changepied');
Route::post('changeentet', 'App\Http\Controllers\ProfileController@chageentete');


//



//rapport
Route::get('journal-produit', 'App\Http\Controllers\RapportController@journal_produit');
Route::get('rapport', function () {
    // dd('kj');
    echo( '
    <script>localStorage.setItem("select", "rapports");</script>
    ');
        return view('pages.rapport.rapport-produit');
    });

    Route::get('rapports', function () {
        echo( '
        <script>localStorage.setItem("select", "rapports");</script>
        ');
        // dd('kj');
            return view('pages.rapport.rapport');
        });
    
// function () {
//     return view('pages.rapport.journal-produit');
// });

//



//

//stock
Route::get('stock', 'App\Http\Controllers\StockController@index')->name('index');
Route::get('addinventaireformule', 'StockController@addinventaireformule')->name('addinventaireformule');
Route::get('stock{id}', 'App\Http\Controllers\StockController@modifyConfrere')->name('showconfrere');
Route::put('updatestock{id}','App\Http\Controllers\StockController@update');
Route::get('deletestock{id}','App\Http\Controllers\StockController@delete')->name('deleteconfrere');
Route::post('ajouterstock','App\Http\Controllers\StockController@ajouterstock');
Route::get('importinventaires','App\Http\Controllers\StockController@importinventaires');
Route::get('informationinventaire{id}','vStockController@informationinventaire');
Route::get('modifierinventaire{id}','App\Http\Controllers\StockController@modifierinventaire');

// Route::get('modifyconfrere/{id}', 'StockConroller@modifyConfrere');
//fin stock

//vente
Route::get('vente','App\Http\Controllers\VenteController@index')->name('index');
Route::get('imprimer_ticket{id}','App\Http\Controllers\PdfContoller@imprimer_ticket')->name('imprimer_ticket');


Route::get('addretousurventepage','App\Http\Controllers\VenteController@addretousurventepage')->name('addretousurventepage');
Route::get('retoursurvente','App\Http\Controllers\VenteController@listeretoursurvente')->name('listeretoursurvente');
Route::get('factureretursurvente{id}','App\Http\Controllers\VenteController@factureretursurvente')->name('factureretursurvente');



Route::delete('deletevente','App\Http\Controllers\VenteController@delete')->name('delete');
Route::delete('deletesurvente','App\Http\Controllers\VenteController@deletesurvente')->name('deletesurvente');




Route::get('gettableventeajax','App\Http\Controllers\VenteController@gettableventeajax')->name('gettableventeajax');
Route::get('gettableventeorganismeajax','App\Http\Controllers\VenteController@gettableventeorganismeajax')->
name('gettableventeorganismeajax');



Route::get('gettablee_vente','App\Http\Controllers\VenteController@get_tablevente')->name('get_tablevente');


Route::get('gettable_vente{nom}','App\Http\Controllers\VenteController@get_tableventebynom')->name('get_tableventebynom');


Route::get('addventes','App\Http\Controllers\VenteController@addventepage')->name('addventepage');
Route::post('ajoutervente_produit_client','App\Http\Controllers\VenteController@ajoutervente_produit_client')->name('ajoutervente_produit_client');
Route::post('ajouterretoursurvente_produit_client','App\Http\Controllers\VenteController@ajouterretoursurvente_produit_client')->name('ajouterretoursurvente_produit_client');




Route::post('modifier_produit_client','App\Http\Controllers\VenteController@modifier_produit_client')->name('modifier_produit_client');
Route::post('ajoutervente','App\Http\Controllers\VenteController@ajoutervente')->name('ajoutervente');
// Route::get('facture','VenteController@facture')->name('facture');
Route::get('addventes','App\Http\Controllers\VenteController@addventepage')->name('addventepage');
Route::get('produit_table{nom}','App\Http\Controllers\VenteController@produit_table')->name('produit_table');
Route::get('produit_ttable','App\Http\Controllers\VenteController@produit_ttable')->name('produit_ttable');

Route::get('modifiervante{id}','App\Http\Controllers\VenteController@modifierventepage')->name('modifierventepage');
Route::get('information-facture', function () {
    return view('pages.vente.information-facture');
});

Route::get('information-vente', function () {
    return view('pages.vente.information-vente');
});


Route::get('facture_vente{id}','App\Http\Controllers\PdfContoller@facture_vente')->name('facture_vente');




Route::get('facture{id}','App\Http\Controllers\VenteController@facturepage')->name('facture');


// Route::get('addventes','VenteController@addventepage')->name('addventepage');


Route::get('devis', function () {
    return view('pages.vente.devis');
});
//achatt
Route::get('achat', function () {
    echo( '
    <script>localStorage.setItem("select", "achats");</script>
    ');
    return view('pages.achat.achat');
});

Route::get('new-commande.html', function () {
    return view('pages.achat.new-commande');
});

//fournisseur
// fournisseur
// Route::get('fournisseur', function () {
//     return view('pages.fournisseur.liste');
// });
Route::get('ajouterfournisseur', function () {
    return view('pages.fournisseur.addfornisseur');
});
Route::get('modifierfournisseur', function () {
    return view('pages.fournisseur.client');
});
Route::get('supprimerfournisseur', function () {
    return view('pages.fournisseur.client');
});

Route::get('informationfournisseur', function () {
    return view('pages.fournisseur.informationfournisseur');
});
Route::get('supprimerfournisseur', function () {
    return view('pages.client.client');
});
Route::get('supprimerfournisseur', function () {
    return view('pages.client.client');
});

//conferre
Route::get('informationconfréres', function () {
    return view('pages.confréres.informationconfreres');
});

Route::get('achats', function () {
    return view('pages.client.client');
});

// pages/confréres/liste
Route::get('achats', function () {
    return view('pages.client.client');
});

Route::get('fournisseur', function () {
    return view('pages.client.client');
});

Route::get('rapport', function () {
    return view('pages.rapport.rapport');
});


Route::get('communication', function () {

    echo( '
    <script>localStorage.setItem("select", "Communication");</script>
    ');
    return view('pages.communication.communication');
});


Route::get('ajoutevente', function () {
    return view('pages.vente.addvente');
});

Route::get('devis', function () {
    return view('pages.vente.devis');
});


Route::get('facture', function () {
    return view('pages.vente.facture');
});



//stock 
// pages/stock/liste.html

Route::get('ajouterinventaire', function () {
    return view('pages.stock.addinventaire');
});
Route::get('modifierinvotaire', function () {
    return view('pages.stock.modifierinventaire');
});
// Route::get('informationinventaire
// return view('pages.stock.list');
// });


Route::get('informationinventaire', function () {
    return view('pages.stock.informationinventaire');
});


//parametre
Route::get('parametre', function () {
    return view('pages.parametres');
});

Route::get('profile', 'App\Http\Controllers\ProfileController@index');
Route::post('modifierprofile', 'App\Http\Controllers\ProfileController@modifierprofile');



// Route::get('profile', function () {
//     return view('pages.parameters.profile');
// });

// Route::get('lescommandesdate{date}',  'CommandController@lescommandesdate');
// Route::get('lescommandesdatedonate{date}',  'CommandController@lescommandesdatedonate');
// Route::get('lescommanderestdonate{date}',  'CommandController@lescommanderestdonate');
Auth::routes();
use App\Http\Controllers\HomeController;
Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');

// Route::get('home',[App\Http\Controllers\HomeController::class,'index'] );
// 

Route::get('gett_vente', 'App\Http\Controllers\HomeController@get_vente')->name('get_vente');
Route::get('get_vente{nom}', 'App\Http\Controllers\HomeController@get_vente_bynom')->name('get_vente_bynom');


Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('clear-compiled');
    Artisan::call('config:cache');
    
    return '<h1>Cache facade value cleared </h1>';});

//route parametre

Route::get('parametre', function () {
    return view('pages.parameters.cadeau');
});
Route::get('entet-pdf', function () {

    echo( '
    <script>localStorage.setItem("sousselect", "ventet");</script>
    ');
    return view('pages.parameters.entet-pdf');
});
Route::get('pied-pdf', function () {
    echo( '
    <script>localStorage.setItem("sousselect", "vpied");</script>
    ');
    return view('pages.parameters.pied-pdf');
});


Route::get('garde', function () {
    return view('pages.parameters.garde');
});

Route::get('horaire', function () {
    return view('pages.parameters.horaire');
});
Route::get('updatehoraire', function () {
    return view('pages.parameters.update-horaire');
});
Route::get('terme', function () {
    return view('pages.parameters.termes');
});


Route::get('termes', function () {
    return view('pages.parameters.termes');
});
Route::get('update-horaire', function () {
    return view('pages.parameters.update-horaire');
});



//inventaire

Route::get('invent', 'App\Http\Controllers\InventaireController@index')->name('invent');
Route::get('addinvent','App\Http\Controllers\InventaireController@addinvent')->name('add');

// // function () {
// //     addinvent
// //     return view('pages/inventaire/addinvent');
// });
Route::post('storeinvent', 'App\Http\Controllers\InventaireController@store')->name('storeinvent');
Route::get('deleteinvent/{id}', 'App\Http\Controllers\InventaireController@delete')->name('delete');
Route::get('generateinvent{id}', 'App\Http\Controllers\InventaireController@generate')->name('generate');
Route::post('addinvent', 'App\Http\Controllers\InventaireController@add')->name('add');
Route::get('inventdetail{id}','App\Http\Controllers\InventaireController@detail')->name('inventdetail');
//end_inventaire


//inventaire

Route::get('caisse', 'App\Http\Controllers\CaisseController@index')->name('caisse');
// Route::get('addcaisse',  function () {
//     return view('pages/caisse/addcaisse');
// });
Route::post('storecaisse', 'App\Http\Controllers\CaisseController@store')->name('storeinvent');
Route::get('deletecaisse{id}', 'App\Http\Controllers\CaisseController@delete')->name('delete');
Route::get('generatecaisse', 'App\Http\Controllers\CaisseController@generate')->name('generate');
Route::post('addcaisse', 'App\Http\Controllers\CaisseController@add')->name('add');
Route::get('detailcaisse{id}','App\Http\Controllers\CaisseController@detail')->name('detail');
//end_inventaire


// Route::get('importation', 'ImportationController@index')->name('index');

//     return view('pages.parameters.update-horaire');
// });



//ahmed route
Route::get('importation', [App\Http\Controllers\ImportationController::class,'show'])->name('index');
Route::post('Ajouter',[App\Http\Controllers\ImportationController::class,'Sauvegarder']);



Route::get('Exporation',[App\Http\Controllers\Exporatation_CSV::class,'Exporter'])->name('Exporation');


Route::post('export-csv',[App\Http\Controllers\Exporatation_CSV::class,'ExporterData'] );

Route::get('EmploiduTemp',[App\Http\Controllers\EmploiController::class,'AfficherEmploi'] );
Route::get('ModifierEmploi',[App\Http\Controllers\EmploiController::class,'ModifierEmploi'] );
Route::post('updateEmploi',[App\Http\Controllers\EmploiController::class,'updateEmplois'] );





Route::get('AfficherZone', [App\Http\Controllers\ZoneController::class,'afficherZone']);


Route::post('AjouterZone', [App\Http\Controllers\ZoneController::class,'AjouterZone']);

Route::post('DeleteZone', [App\Http\Controllers\ZoneController::class,'DeleteZone'])->name('DeleteZone');


Route::post('ModifierZone', [App\Http\Controllers\ZoneController::class,'ModifierZone']);

Route::get('AfficherDci', [App\Http\Controllers\DciController::class,'afficherDci']);

Route::post('AjouterDci', [App\Http\Controllers\DciController::class,'AjouterDci']);

Route::post('DeleteDci', [App\Http\Controllers\DciController::class,'DeleteDci']);


Route::post('ModifierDci', [App\Http\Controllers\DciController::class,'ModifierDci']);


Route::get('AfficherForm', [App\Http\Controllers\FormController::class,'afficherForm']);

Route::post('AjouterForm', [App\Http\Controllers\FormController::class,'AjouterForm']);

Route::post('DeleteForm', [App\Http\Controllers\FormController::class,'DeleteForm']);


Route::post('ModifierForm', [App\Http\Controllers\FormController::class,'ModifierForm']);



Route::get('AfficherType', [App\Http\Controllers\TypeController::class,'afficherType']);

Route::post('AjouterType', [App\Http\Controllers\TypeController::class,'AjouterType']);

Route::post('DeleteType', [App\Http\Controllers\TypeController::class,'DeleteType']);


Route::post('ModifierType', [App\Http\Controllers\TypeController::class,'ModifierType']);



Route::get('AfficherClasse', [App\Http\Controllers\ClasseController::class,'afficherClasse']);

Route::post('AjouterClasse', [App\Http\Controllers\ClasseController::class,'AjouterClasse']);

Route::post('DeleteClasse', [App\Http\Controllers\ClasseController::class,'DeleteClasse']);

Route::get('ModifierRemiseparCategorie',
 [App\Http\Controllers\SequenceCentroller::class,'ModifierRemiseparCategorie']);

// Route::get('ModifierRemiseparCategorie', [App\Http\Controllers\SequenceCentroller::class,'ModifierRemiseparCategorie']);


Route::post('ModifierClasse', [App\Http\Controllers\ClasseController::class,'ModifierClasse']);


//Termes Route

Route::get('TermeDevis', [App\Http\Controllers\TermeController::class,'TermeDevis']);
Route::get('TermeVente', [App\Http\Controllers\TermeController::class,'TermeVente']);
Route::get('TermeFacture', [App\Http\Controllers\TermeController::class,'TermeFacture']);


Route::post('ModifierTermeDevis', [App\Http\Controllers\TermeController::class,'ModifierValueDevis']);

Route::post('ModifierTermeVente', [App\Http\Controllers\TermeController::class,'ModifierValueVente']);
Route::post('ModifierTermeFacture', [App\Http\Controllers\TermeController::class,'ModifierValueFacture']);


Route::get('AfficherUser', [App\Http\Controllers\UserController::class,'AfficherUser']);


Route::post('AjouterUser', [App\Http\Controllers\UserController::class,'AjouterUser']);
Route::post('ModifierUser', [App\Http\Controllers\UserController::class,'ModifierUser']);

Route::post('DeleteUser', [App\Http\Controllers\UserController::class,'DeleteUser']);


Route::get('AfficherSequence', [App\Http\Controllers\SequenceCentroller::class,'AfficherValeur']);
Route::post('ModifierSequence', [App\Http\Controllers\SequenceCentroller::class,'ModfierSequence']);
//ahmed route


//karim
Route::get('AfficherGarde', [App\Http\Controllers\GardeController::class,'AfficherGarde']);
Route::get('AjouterGardeView', [App\Http\Controllers\GardeController::class,'AjouterGardeView']);

Route::post('AjouterGarde', [App\Http\Controllers\GardeController::class,'AjouterGarde']);

Route::post('DeleteGarde', [App\Http\Controllers\GardeController::class,'DeleteGarde']);


//pays route
Route::get('AjouterPaysView', [App\Http\Controllers\PaysController::class,'index']);

Route::post('AjouterPays', [App\Http\Controllers\PaysController::class,'AjouterPays']);


Route::get('AjouterVillesView', [App\Http\Controllers\VillesController::class,'index']);

Route::post('AjouterVille', [App\Http\Controllers\VillesController::class,'AjouterVille']);


Route::get('online-user',  [App\Http\Controllers\UserController::class,'AfficherUser']);
Route::get('adduser',  [App\Http\Controllers\UserController::class,'adduserpage']); 


// function () {
//     return view('pages.parameters.Users.adduser');
// });

Route::post('ModifierVille', [App\Http\Controllers\VillesController::class,'ModifierVille']);

Route::post('DeleteVille', [App\Http\Controllers\VillesController::class,'DeleteVille']);

Route::post('ModifierPays', [App\Http\Controllers\PaysController::class,'ModifierPays']);

Route::post('DeletePays', [App\Http\Controllers\PaysController::class,'DeletePays']);



Route::get('AfficherPoint',  [App\Http\Controllers\PointController::class,'index']);



Route::post('AjouterPoint', [App\Http\Controllers\PointController::class,'AjouterPoint']);


Route::post('ModifierPoint', [App\Http\Controllers\PointController::class,'ModifierPoint']);


Route::post('DeletePoint', [App\Http\Controllers\PointController::class,'DeletePoint']);


Route::get('ModifierPointView',  [App\Http\Controllers\PointController::class,'ModifierPointView']);





Route::get('AfficherModelEmail',  [App\Http\Controllers\ModelEmailController::class,'AfficherModelEmail']);

Route::get('ModifierModelEmai',  [App\Http\Controllers\ModelEmailController::class,'ModifierModelEmai']);
//kkkk


Route::get('getVilles{id}','App\Http\Controllers\FournisseursController@getVilles');
Route::get('getVilles{id}/{ville}','App\Http\Controllers\FournisseursController@getVillesselect');


Route::get('getVillesProfile{id}','App\Http\Controllers\ProfileControllerr@getvillesProfile');

Route::get('testcode{code}',[App\Http\Controllers\ProfileController::class,'testcode']);



Route::get('AfficherTva', [App\Http\Controllers\TvaController::class,'afficherTva']);

Route::post('AjouterTva', [App\Http\Controllers\TvaController::class,'AjouterTva']);

Route::post('DeleteTva', [App\Http\Controllers\TvaController::class,'DeleteTva']);

Route::post('ModifierTva', [App\Http\Controllers\TvaController::class,'ModifierTva']);

Route::get('AfficherRemise', [App\Http\Controllers\RemiseController::class,'afficherRemise']);

Route::post('AjouterRemise', [App\Http\Controllers\RemiseController::class,'AjouterRemise']);

Route::post('DeleteRemise', [App\Http\Controllers\RemiseController::class,'DeleteRemise']);

Route::post('ModifierRemise', [App\Http\Controllers\RemiseController::class,'ModifierRemise']);

Route::get('gettableajax',[App\Http\Controllers\HomeController::class,'gettableajax']);


 

Route::get('AfficherContreIndication', [App\Http\Controllers\ContreIndicationController::class,'afficherContreIndication']);

Route::post('AjouterContreIndication', [App\Http\Controllers\ContreIndicationController::class,'AjouterContreIndication']);

Route::post('DeleteContreIndication', [App\Http\Controllers\ContreIndicationController::class,'DeleteContreIndication']);

Route::post('ModifierContreIndication', [App\Http\Controllers\ContreIndicationController::class,'ModifierContreIndication']);



//Organisme

Route::get('organisme', [App\Http\Controllers\OrganismeController::class,'index']);
Route::get('addorganismepage', [App\Http\Controllers\OrganismeController::class,'addorganismepage']);
Route::get('afficherorganisme{id}', [App\Http\Controllers\OrganismeController::class,'afficherorganisme']);
Route::get('modifierorganismepage{id}', [App\Http\Controllers\OrganismeController::class,'modifierorganismepage']);
Route::post('modifierorganisme', [App\Http\Controllers\OrganismeController::class,'modifierorganisme']);
Route::delete('deleteorganisme', [App\Http\Controllers\OrganismeController::class,'deleteorganisme']);
Route::get('indexvente', [App\Http\Controllers\OrganismeController::class,'indexvente']);



// Route::get('addorganismepage{id}', [App\Http\Controllers\OrganismeController::class,'addorganismepage']);

Route::post('addorganisme', [App\Http\Controllers\OrganismeController::class,'addorganisme']);
Route::get('editorganismepage', [App\Http\Controllers\OrganismeController::class,'index']);
Route::post('deleteorganisme', [App\Http\Controllers\OrganismeController::class,'index']);
//
//role 
Route::get('role', [App\Http\Controllers\RoleController::class,'index']);

Route::post('addrole', [App\Http\Controllers\RoleController::class,'addrole']);
Route::get('listerole', [App\Http\Controllers\RoleController::class,'listerole']);
Route::delete('deletrole', [App\Http\Controllers\RoleController::class,'deletrole']);


Route::get('detailrole{id}', [App\Http\Controllers\RoleController::class,'detailrole']);
Route::post('modifierrole', [App\Http\Controllers\RoleController::class,'modifierrole']);




