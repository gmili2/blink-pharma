<@extends('layouts.app')
@section('content')     <!-- partial -->
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons"><a href="#" class="btn-hover color-blue">Ajouter un nouveau fournisseur</a></div>
                            </div>
                        </div>
                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="title-p pt-1">
                                        <h5>Suggestions de fournisseurs</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Actif</span>
                                        </div>
                                        <div class="status">
                                            <span class="off"><i class="bi bi-circle-fill"></i> en attente</span>
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
                                        <th>Fournisseurs</th>
                                        <th>Nom</th>
                                        <th>type</th>
                                        <th>Téléphone</th>
                                        <th>Ville</th>
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
                                        <td>Société New Times Medical Pro</td>
                                        <td>Blink Pharma</td>
                                        <td>Grossiste</td>
                                        <td>05 74 56 46 46</td>
                                        <td>Casablanca</td>
                                        <td>
                                            <div class="status">
                                                <a href="#" class="telechargement"> <i class="bi bi-arrow-down"></i> PDF</a>
                                            </div>
                                        </td>
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
@endsection