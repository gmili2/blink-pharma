@extends('layouts.app')

@section('content')
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <section class="section-stock px-3 mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Bon de commande</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <a href="" class="btn-hover color-green" data-bs-toggle="modal" data-bs-target="#bon-de-commande">Approuver (F12)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="section-information pt-3">
                                <div class="row">
                                    <div class="col-md-7 p-4 bg-white">
                                        <form action="#" class="mb-4">
                                            <div class="row align-items-center inventaire">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group d-flex align-items-center">
                                                        <i class="bi bi-search"></i>
                                                        <input type="text" class="form-control" placeholder="Search" name="search" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 text-end">
                                                    <div class="buttons">
                                                        <a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#search-client"><i class="bi bi-plus-lg"></i> Ajouter un Fournisseur</a>
                                                        <button type="submit" class="btn-hover color-yellow"><i class="bi bi-search"></i> Recherche</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-10 mb-3">
                                                    <ul class="liste-filtre d-flex">
                                                        <li class="active">
                                                            <a href="" role="button" data-bs-toggle="modal" data-bs-target="#add-filtre">
                                                                <span><i class="bi bi-funnel-fill"></i> Filtre</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <span>PPV : 115Dh</span>
                                                            </a>
                                                            <a href="" class="delete"><i class="bi bi-x"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <span>Zone : Casablanca</span>
                                                            </a>
                                                            <a href="" class="delete"><i class="bi bi-x"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                        <hr class="divider" />
                                        <table id="table" class="table table-striped mb-4" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Forme</th>
                                                    <th>PPV</th>
                                                    <th>Zone</th>
                                                    <th>Disp.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="modal fade filtre" id="add-filtre" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header justify-content-between">
                                                        <h5 class="modal-title">Filter</h5>
                                                        <div class="icon">
                                                            <a href="#">
                                                                <i class="bi bi-arrow-counterclockwise"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <form action="">
                                                                    <div class="section-information">
                                                                        <div class="row">
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select" name="dci">
                                                                                    <option value="">DCI</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <input type="text" class="form-control" placeholder="PPV" name="ppv" />
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select active" name="categorie">
                                                                                    <option value="">Catégorie</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select active" name="forme">
                                                                                    <option value="">Forme</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select" name="zone">
                                                                                    <option value="">Zone</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-4 mb-4">
                                                                        <div class="col-md-12">
                                                                            <div class="text-info d-flex">
                                                                                <span><img src="/assets/icons/group-person.svg" /></span>
                                                                                <p>Vous pouvez modifier le filtre par défaut pour toutes les recherches ultérieurement.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="buttons d-flex justify-content-end">
                                                                            <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                                                            <button type="submit" class="btn btn-hover color-green mx-1">Sauvegarder</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="block-right pt-4 pb-4 ps-2 px-2 bg-white">
                                            <div class="header">
                                                <ul class="d-flex p-0 justify-content-between">
                                                    <li>
                                                        <label>Date :</label>
                                                        <span>2022-11-15 <i class="bi bi-calendar ms-2"></i></span>
                                                    </li>
                                                    <li>
                                                        <label>Par :</label>
                                                        <span>Dr Hicham <i class="bi bi-chevron-down ms-2"></i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div>
                                                    <h3 class="m-0">Total à payer</h3>
                                                    <span>Quantité totale : 0</span>
                                                </div>
                                                <div>
                                                    <h3>0.00 Dhs</h3>
                                                </div>
                                            </div>
                                            <hr class="divider mt-3" />
                                            <table id="table-right" class="table table-striped mb-4" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Produit</th>
                                                        <th>P.U</th>
                                                        <th>PPV</th>
                                                        <th>Disp.</th>
                                                        <th>Total</th>
                                                        <th>Quantité</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <td>Karstase elixir</td>
                                                        <td>407</td>
                                                        <td>509.97</td>
                                                        <td>1</td>
                                                        <td>2000</td>
                                                        <td><input type="number" name="qty" value="0" min="1" class="form-control qty" /></td>
                                                        <td>
                                                            <a href="#"><i class="bi bi-trash3"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-vente"><i class="bi bi-pencil"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="title mt-3">
                            <h1>Liste des bon de commande</h1>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-12">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Livré</span>
                                        </div>
                                        <div class="status">
                                            <span class="off"><i class="bi bi-circle-fill"></i> Annulé</span>
                                        </div>
                                        <div class="status">
                                            <span class="ongoing"><i class="bi bi-circle-fill"></i> Non payé</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="table" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Statut</th>
                                        <th>Numro de transaction</th>
                                        <th>Fournisseurs</th>
                                        <th>Date du bon de commande</th>
                                        <th>Crée le</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-15</td>
                                        <td>452,02 Dhs</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/fournisseur/informationfournisseur.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="off"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-15</td>
                                        <td>452,02 Dhs</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/fournisseur/informationfournisseur.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="ongoing"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-15</td>
                                        <td>452,02 Dhs</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/fournisseur/informationfournisseur.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Choisir un Fournisseur</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <p class="text text-center mt-4">
                            Cette fonction vous facilitera l’accès aux fonctionnalités de votre choix,<br />
                            d’une façon rapide, efficace et efficiente;
                        </p>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="table-client" class="table table-striped mb-4" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nom</th>
                                            <th>Teléphone</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Ahmed Houssni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row section-footer">
                            <div class="buttons">
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                <button type="submit" class="btn btn-hover color-green mx-1">Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade filtre" id="edit-vente" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <h5 class="modal-title">Karstase elixir</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="section-information">
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Prix unitaire</label>
                                                <input type="text" class="form-control" placeholder="Prix unitaire" name="p_unitaire" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Type de remise</label>
                                                <select class="form-select" name="categorie">
                                                    <option value="">%</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Remise</label>
                                                <input type="text" class="form-control" placeholder="Remise" name="remise" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="buttons space-bm">
                                                    <button class="btn-hover color-blue"><i class="bi bi-plus-lg"></i> Rem. U.G</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Disponible</label>
                                                <input type="text" class="form-control" placeholder="Disponible" name="disponible" />
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label class="form-label">Base de remboursement</label>
                                                <input type="text" class="form-control" placeholder="Base de remboursement" name="remboursement" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Taux Remb.</label>
                                                <input type="text" class="form-control" placeholder="Taux Remb." name="remb" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="buttons d-flex justify-content-end">
                                            <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                            <button type="submit" class="btn btn-hover color-green mx-1">Sauvegarder</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade vente-succes commande" id="bon-de-commande" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">le bon de commande a été créé avec succés.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="d-flex flex-wrap">
                                    <li class="d-flex active" role="button">
                                        <div class="icon"><img src="/assets/icons/facture.svg" alt="" /></div>
                                        <a href="#">Afficher Le BC</a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt="" /></div>
                                        <a href="">Imprimer </a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/plus.svg" alt="" /></div>
                                        <a href="#">Créer un Nouvelle BC</a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/toutelesventes.svg" alt="" /></div>
                                        <a href="">Consulter Toutes les BC</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="buttons d-flex justify-content-center">
                                <a href="#" class="btn-hover color-blue">Retourner</a>
                            </div>
                        </div>
                    </div>
                </div>
         @endsection