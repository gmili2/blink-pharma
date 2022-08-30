@extends('layouts.app')

@section('content')                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <section class="section-stock px-3 mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title">
                                        <h1>Listes des receptions</h1>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="title-p pt-1">
                                        <h5>Liste des achats</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                        <th>Téléchargement</th>
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
                                            <div class="status">
                                                <a href="#" class="telechargement"> <i class="bi bi-arrow-down"></i> PDF</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/achat/detail-reception.html">Afficher</a></li>
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
                                            <div class="status">
                                                <a href="#" class="telechargement"> <i class="bi bi-arrow-down"></i> PDF</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/achat/detail-reception.html">Afficher</a></li>
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
                                            <div class="status">
                                                <a href="#" class="telechargement"> <i class="bi bi-arrow-down"></i> PDF</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/achat/detail-reception.html">Afficher</a></li>
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
        @extends('layouts.app')

        @section('content')