    
                @extends('layouts.app')

                @section('content')
 
                <!-- partial:partials/_navbar.html -->
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    @if ($produit->active==1)
                                    <a  href="desactiverproduit{{$produit->id}}" class="btn-hover color-red">Désactiver</a>
                                        @else
                                    <a  href="avtiverproduit{{$produit->id}}" class="btn-hover color-green">Activer</a>
                                    @endif
                                    <a href="modifierproduitformule{{$produit->id}}" class="btn-hover color-green">Modifier</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-information mt-4 pt-3">
                            <div class="row pb-1">
                                <div class="col-md-9">
                                    <div class="information-general p-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="pb-1 mb-3">Information générales</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="stock">
                                                    <div class="d-flex justify-content-end gap-2">
                                                        <label>Status:</label>
                                                        <p class="result-stock">En stock</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info d-flex">
                                                    <div class="image"><img src="/images/{{$produit->image}}" alt="" /></div>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Nom :</label> <span>   {{$produit->name}}</span></li>
                                                            <li><label>PPV :</label> <span>   {{$produit->PPV}} Dhs</span></li>
                                                            <li><label>PPH :</label> <span>   {{$produit->PPH}}Dhs</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1 mb-3">Détails</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Code barre</label> <span>   {{$produit->code_bare}}</span></li>
                                                            <li><label>Code barre 2</label> <span>   {{$produit->code_bare2}}</span></li>
                                                            <li><label>Catégorie</label> <span>   {{$produit->nametype}}</span></li>
                                                            <li class="full"><label>Classe thérapeutique</label> <span>   {{$produit->nameclasse}}</span></li>
                                                            <li><label>Forme galénique</label> <span>   {{$produit->nameform}}</span></li>
                                                            <li><label>DCI</label> <span>   {{$produit->namedci}}</span></li>
                                                            <li><label>Gamme</label> <span>   {{$produit->gamme}}</span></li>
                                                            <li><label>Laboratoire</label> <span>   {{$produit->laboratoire}}</span></li>
                                                            <li><label>Zone</label> <span>  {{$produit->image}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1">Informations du stock</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>PPH</label> <span>Aucun</span></li>
                                                            <li><label>PPV</label> <span>Aucun</span></li>
                                                            <li><label>TVA sur Achat</label> <span>Aucun</span></li>
                                                            <li><label>Est de remboursement</label> <span>Aucun</span></li>
                                                            <li><label>Base de remboursement</label> <span>Aucun</span></li>
                                                            <li><label>Stock min</label> <span>Aucun</span></li>
                                                            <li><label>Stock max</label> <span>Aucun</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="information-prix mt-4 p-4">
                                        <h5>Prix du produit</h5>
                                        <div class="buttons">
                                            <a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#add-prix-Modal">Créer</a>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="add-prix-Modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajouter un prix au produit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text">Information sur prix</p>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-5"><label class="form-label">PPH</label> <input type="text" class="form-control" placeholder="50.00" name="pph" /></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-5"><label class="form-label">PPV</label> <input type="text" class="form-control" placeholder="50.00" name="ppv" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="buttons">
                                                            <button type="submit" class="btn-hover btn color-green">Sauvegarder</button> <button type="button" class="btn-hover btn color-red" data-bs-dismiss="modal">Annuler</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-prix mt-4 p-4">
                                        <h5>Dates de péremption du produit</h5>
                                        <div class="buttons"><a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#add-date-Modal">Créer</a></div>
                                    </div>
                                    <div class="information-prix mt-4 p-4">
                                        <h5>historique des produits</h5>
                                    </div>
                                    <div class="modal fade" id="add-date-Modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajouter date péremption produit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text">Information sur date de péremption</p>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-5"><label class="form-label">Date de péremption</label> <input type="date" class="form-control" placeholder="50.00" name="dateproduit" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="buttons">
                                                            <button type="submit" class="btn-hover btn color-green">Sauvegarder</button> <button type="button" class="btn-hover btn color-red" data-bs-dismiss="modal">Annuler</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-right">
                                        <div class="block-header">
                                            <div class="block">
                                                <div class="image"><img src="/assets/icons/etatstock.svg" alt="" /></div>
                                                <div class="content px-3">
                                                    <h3>quantité en stock</h3>
                                                    <span>Dont un avoir de : 0 Dhs</span>
                                                </div>
                                                <div class="fornisseur-price"><span>120 Piece</span></div>
                                            </div>
                                        </div>

                                        <div class="block-information">
                                            <h5>Informations de traçabilité</h5>
                                            <ul>
                                                <li class="bg-color"><span>Créer par</span> <span>Dr {{Auth::User()->name}}</span></li>
                                                <li><span>Créer le</span> <span>{{$produit->created_at}}</span></li>
                                                <li class="bg-color"><span>Mise à jour par</span> <span>Dr {{Auth::User()->name}}</span></li>
                                                <li><span>Mise à jour le </span> <span>{{$produit->updated_at}}</span></li>
                                            </ul>
                                        </div>
                                        <div class="section-aide d-flex">
                                            <div class="support">
                                                <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                                    <span> {{Auth::User()->tele}}</span>
                                                </a>
                                            </div>
                                            <div class="aide">
                                                <a href="" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/aide.svg" alt="" /></div>
                                                    <span>Aide</span>
                                                </a>
                                            </div>
                                            <div class="retour">
                                                <a href="" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/retour.svg" alt="" /></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
@endsection