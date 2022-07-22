      
                @extends('layouts.app')

                @section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Ajouter aux favoris</a>
                                    <a href="#" class="btn-hover color-white">Historique des opérations</a>
                                    <a href="ajouterproduit" class="btn-hover color-blue">Ajouter un nouveau produit</a>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="title-p pt-1"><h5>Liste des produits</h5></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Oui</span>
                                        </div>
                                        <div class="status">
                                            <span class="off"><i class="bi bi-circle-fill"></i> Non</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="table" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Est actif</th>
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
                                    @foreach($produits as $produit)
                                  
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span @if ($produit->active==1)
                                                    class="on"
                                                    @else
                                                    class="off"
                                                @endif ><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>{{$produit->name}}</td>
                                        <td>{{$produit->classes_id}}</td>
                                        <td>{{$produit->forms_id}}</td>
                                        <td>{{$produit->ppv}}</td>
                                        <td>{{$produit->pph}}</td>
                                        <td>{{$produit->code_bare}}</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="informationproduct{{$produit->id}}">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="modifierproduitformule{{$produit->id}}">Modifier</a></li>
                                                    @if ($produit->active==1)
                                                    <li><a class="dropdown-item" href="desactiverproduit{{$produit->id}}">Désactiver</a></li>
                                                        @else
                                                    <li><a class="dropdown-item" href="avtiverproduit{{$produit->id}}">Activer</a></li>
                                                    @endif
                                                    <li>
                                                    <form id="form1" action="supprimerproduit{{$produit->id}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                       <button class="dropdown-item">Supprimer</button>
                                                    </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                   
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                        <td>Parapharmacie (33.330%)</td>
                                        <td>Accessoires</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>1569965380902</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/products/informationproduct.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Désactiver</a></li>
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
    