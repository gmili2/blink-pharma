@extends('layouts.app')

@section('content')  
                <!-- partial:partials/_navbar.html -->
          
                <!-- partial -->
                <div class="page-content">
                    <section class="section-stock mt-3 pb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h1>Inventaire : INV-3022</h1>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-red">Annuler</a>
                                    <a href="#" class="btn-hover color-white">Dupliquer</a>
                                    <a href="#" class="btn-hover color-white">Compléter</a>
                                    <a href="modifierinventaire.html" class="btn-hover color-blue">Modifier</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-information pt-3">
                            <div class="row pb-1">
                                <div class="col-md-9">
                                    <div class="information-general p-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="pb-1 mb-3">Information générales</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info d-flex align-items-center">
                                                    <div class="image"><img src="/assets/img/product.png" alt="" /></div>
                                                    <div class="content block-detail">
                                                        <ul>
                                                            <li><label>Date </label> <span>2021-11-15</span></li>
                                                            <li><label>Ecart total </label> <span>36</span></li>
                                                            <li><label>Valeur totale en PPV</label> <span>1 809,80</span></li>
                                                            <li><label>Valeur totale en PPH</label> <span>1 196,42</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1 mb-3">Produit de l’inventaire</h5>
                                        <hr class="divider mb-2" />
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="table" class="table table-striped mb-4" style="width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Nom</th>
                                                            <th>PPH</th>
                                                            <th>Quantité</th>
                                                            <th>Ecart</th>
                                                            <th>Valeur en PPV</th>
                                                            <th>Valeur en PPH</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Antigrippine Co B20 Comp</td>
                                                            <td>12,16</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>36,80</td>
                                                            <td>36,80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Antigrippine Co B20 Comp</td>
                                                            <td>12,16</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>36,80</td>
                                                            <td>36,80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Antigrippine Co B20 Comp</td>
                                                            <td>12,16</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>36,80</td>
                                                            <td>36,80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Antigrippine Co B20 Comp</td>
                                                            <td>12,16</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>36,80</td>
                                                            <td>36,80</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Antigrippine Co B20 Comp</td>
                                                            <td>12,16</td>
                                                            <td>0</td>
                                                            <td>2</td>
                                                            <td>36,80</td>
                                                            <td>36,80</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-right info-fornisseur">
                                        <div class="block-header">
                                            <div class="block">
                                                <div class="image"><img src="/assets/icons/brouilon.svg" alt="" /></div>
                                                <div class="content px-3">
                                                    <h3>Brouillon</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-information">
                                            <h5>Commentaires (2)</h5>
                                            <form action="">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Ajouter un commentaire" name="comment" />
                                                    <div class="send-message buttons d-flex align-items-center">
                                                        <button type="submit" class="btn btn-hover color-blue d-flex align-items-center"><i class="bi bi-send"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="commentaire d-flex flex-column mt-3">
                                                <div class="header justify-content-between"><span class="auteure">Par : Dr Hicham</span> <span class="date">Juin-12-2022</span></div>
                                                <div class="text mt-2">Lorem Ipsum est simplement un faux texte de l'industrie de l'impression et de la composition.</div>
                                            </div>
                                            <div class="commentaire d-flex flex-column mt-3">
                                                <div class="header justify-content-between"><span class="auteure">Par : Dr Hicham</span> <span class="date">Juin-12-2022</span></div>
                                                <div class="text mt-2">Lorem Ipsum est simplement un faux texte de l'industrie de l'impression et de la composition.</div>
                                            </div>
                                        </div>
                                        <div class="section-aide d-flex">
                                            <div class="support">
                                                <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                                    <span>05 30 500 500</span>
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