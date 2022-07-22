
          
                @extends('layouts.app')

                @section('content')
          <!-- partial -->
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-yellow">Remise à zéro</a>
                                    <a href="#" class="btn-hover color-white">Ajouter aux favoris</a>
                                    <a href="#" class="btn-hover color-white">Liste des imports</a>
                                    <a href="#" class="btn-hover color-white">Liste des inventaires</a>
                                    <a href="addinventaire.html" class="btn-hover color-blue">Créer un inventaire</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade vente-succes" id="add-inventaire" tabindex="-1" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header flex-column">
                                        <h5 class="modal-title">Créer un nouvel inventaire</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div>
                                            <p class="text text-center m-0">Information génerales</p>
                                        </div>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="">
                                                    <div class="section-information">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label">Méthode*</label>
                                                                <select class="form-select" name="methode">
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label class="form-label">Date*</label>
                                                                <div class="date d-flex align-items-center">
                                                                    <input type="date" class="form-control" placeholder="--/--/----" name="date" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label class="form-label">Commentaire</label>
                                                                <!-- <input type="text" class="form-control" placeholder="text" name="commentaire"> -->
                                                                <textarea name="commentaire" class="form-control" cols="30" rows="2"></textarea>
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

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-12">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Compléter </span>
                                        </div>
                                        <div class="status">
                                            <span class="cancel"><i class="bi bi-circle-fill"></i> Annulé</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="table" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Statut</th>
                                        <th>Produit</th>
                                        <th>Catégorie</th>
                                        <th>Forme galénique</th>
                                        <th>PPV</th>
                                        <th>PPH</th>
                                        <th>Code barre</th>
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
                                        <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                        <td>Parapharmacie</td>
                                        <td>Accessoires</td>
                                        <td>452,02 Dhs</td>
                                        <td>452,02 Dhs</td>
                                        <td>1569965380902</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/stock/informationinventaire.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="cancel"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                        <td>Parapharmacie</td>
                                        <td>Accessoires</td>
                                        <td>452,02 Dhs</td>
                                        <td>452,02 Dhs</td>
                                        <td>1569965380902</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/stock/informationinventaire.html">Afficher</a></li>
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
                                        <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                        <td>Parapharmacie</td>
                                        <td>Accessoires</td>
                                        <td>452,02 Dhs</td>
                                        <td>452,02 Dhs</td>
                                        <td>1569965380902</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/stock/informationinventaire.html">Afficher</a></li>
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
                                        <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                        <td>Parapharmacie</td>
                                        <td>Accessoires</td>
                                        <td>452,02 Dhs</td>
                                        <td>452,02 Dhs</td>
                                        <td>1569965380902</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/stock/informationinventaire.html">Afficher</a></li>
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
                                        <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                        <td>Parapharmacie</td>
                                        <td>Accessoires</td>
                                        <td>452,02 Dhs</td>
                                        <td>452,02 Dhs</td>
                                        <td>1569965380902</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/stock/informationinventaire.html">Afficher</a></li>
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
                                        <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                        <td>Parapharmacie</td>
                                        <td>Accessoires</td>
                                        <td>452,02 Dhs</td>
                                        <td>452,02 Dhs</td>
                                        <td>1569965380902</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/stock/informationinventaire.html">Afficher</a></li>
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