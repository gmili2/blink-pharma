
                @extends('layouts.app')

                @section('content')
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Ajouter aux favoris</a>
                                    <a href="#" class="btn-hover color-white">Historique des opérations</a>
                                    <a href="/pages/vente/add-vente.html" class="btn-hover color-blue">Nouvelle vente</a>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="title-p pt-1"><h5>Liste des Ventes</h5></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Livré</span>
                                        </div>
                                        <div class="status">
                                            <span class="off"><i class="bi bi-circle-fill"></i> Non livré</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="table" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Statut</th>
                                        <th>Numéro de transaction</th>
                                        <th>Fournisseur</th>
                                        <th>Date de bon de commande</th>
                                        <th>Créer le</th>
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
                                        <td>2022-11-09</td>
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
                                                    <li><a class="dropdown-item" href="facture">Afficher</a></li>
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
                                        <td>2022-11-09</td>
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
                                                    <li><a class="dropdown-item" href="/pages/vente/facture.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-09</td>
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
                                                    <li><a class="dropdown-item" href="/pages/vente/facture.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-09</td>
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
                                                    <li><a class="dropdown-item" href="/pages/vente/facture.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-09</td>
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
                                                    <li><a class="dropdown-item" href="/pages/vente/facture.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-09</td>
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
                                                    <li><a class="dropdown-item" href="/pages/vente/facture.html">Afficher</a></li>
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
    @endsection