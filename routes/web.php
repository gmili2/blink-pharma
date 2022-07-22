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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/client', function () {
    return view('pages.client.client');
});

Route::get('/ajouterclient', function () {
    return view('pages.client.addclient');
});
Route::get('/modifierclient', function () {
    return view('pages.client.client');
});
Route::get('/supprimerclient', function () {
    return view('pages.client.client');
});
Route::get('/informationclient{id}', function () {
    return view('pages.client.informationclient');
});
Route::get('/produit','produitsController@index');
Route::get('/ajouterproduit', 'produitsController@formuleajouterproduit');
Route::post('/addproduit', 'produitsController@addproduit');

Route::get('/modifierproduit', function () {return view('pages.products.add-product');});
Route::get('/supprimerproduit', function () {return view('pages.products.add-product');});
Route::get('/informationproduct{id}',  'produitsController@informationproduct' );
Route::get('/modifierproduitformule{id}',  'produitsController@modifierproduitformule' );
Route::get('/desactiverproduit{id}',  'produitsController@desactiverproduit' );
Route::get('/avtiverproduit{id}',  'produitsController@avtiverproduit' );
Route::delete('/supprimerproduit{id}',  'produitsController@supprimerproduit' );
Route::put('/updateproduct{id}',  'produitsController@updateproduct' );






//vente
Route::get('/ventes', function () {
    return view('pages.vente.vente');
});
//fournisseur
// fournisseur
Route::get('/fournisseur', function () {
    return view('pages.fournisseur.liste');
});
Route::get('/ajouterfournisseur', function () {
    return view('pages.fournisseur.addfornisseur');
});
Route::get('/modifierfournisseur', function () {
    return view('pages.fournisseur.client');
});
Route::get('/supprimerfournisseur', function () {
    return view('pages.fournisseur.client');
});

Route::get('/informationfournisseur', function () {
    return view('pages.fournisseur.informationfournisseur');
});
Route::get('/supprimerfournisseur', function () {
    return view('pages.client.client');
});
Route::get('/supprimerfournisseur', function () {
    return view('pages.client.client');
});

//conferre
Route::get('/confrere', function () {
    return view('pages.confréres.liste');
});

Route::get('/informationconfréres', function () {
    return view('pages.confréres.informationconfreres');
});

Route::get('/achats', function () {
    return view('pages.client.client');
});

// pages/confréres/liste
Route::get('/achats', function () {
    return view('pages.client.client');
});

Route::get('/fournisseur', function () {
    return view('pages.client.client');
});

Route::get('/confrere', function () {
    return view('pages.client.client');
});


// vente
Route::get('/vente', function () {
    return view('pages.vente.liste');
});

Route::get('/ajoutevente', function () {
    return view('pages.vente.addvente');
});

Route::get('/devis', function () {
    return view('pages.vente.devis');
});


Route::get('/facture', function () {
    return view('pages.vente.facture');
});



//stock 
// pages/stock/liste.html
Route::get('/stock', function () {
    return view('pages.stock.liste');
});
Route::get('/ajouterinventaire', function () {
    return view('pages.stock.addinventaire');
});
Route::get('/modifierinvotaire', function () {
    return view('pages.stock.modifierinventaire');
});
// Route::get('/informationinventaire
// return view('pages.stock.list');
// });


Route::get('/informationinventaire', function () {
    return view('pages.stock.informationinventaire');
});


//parametre
Route::get('/parametre', function () {
    return view('pages.parametres');
});

Route::get('profile', 'ProfileController@index');
Route::post('/modifierprofile', 'ProfileController@modifierprofile');



// Route::get('/profile', function () {
//     return view('pages.parameters.profile');
// });

// Route::get('/lescommandesdate{date}',  'CommandController@lescommandesdate');
// Route::get('/lescommandesdatedonate{date}',  'CommandController@lescommandesdatedonate');
// Route::get('/lescommanderestdonate{date}',  'CommandController@lescommanderestdonate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
