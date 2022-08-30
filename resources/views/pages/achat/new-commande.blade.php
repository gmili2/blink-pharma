@extends('layouts.app')

@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-achat mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h1>Créer un nouveau bon de commande</h1>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Pré-remplir</a>
                                    <a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#bon-de-commande">Commander</a>
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
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="detail-commande">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 image">
                                            <img src="/assets/img/detail-product.jpg" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="content-commande">
                                                <h3>Thermométre frontal YI-400</h3>
                                            </div>
                                            <div class="info-commande">
                                                <div class="d-flex gap-3">
                                                    <p>
                                                        <span><img src="/assets/icons/truck.svg" /></span> Délais de livraison
                                                    </p>
                                                    <span class="result-commande">3-5 Jours</span>
                                                </div>
                                                <div class="d-flex gap-3">
                                                    <p>
                                                        <span><img src="/assets/icons/money.svg" /></span> Echéance de paiment
                                                    </p>
                                                    <span class="result-commande">Sur Place</span>
                                                </div>
                                                <div class="d-flex gap-3">
                                                    <p>
                                                        <span><img src="/assets/icons/cart.svg" /></span> Quantité Totale Min
                                                    </p>
                                                    <span class="result-commande">0 Unités</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-commande mt-4">
                                    <table id="table" class="table table-striped mb-4" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Produit</th>
                                                <th>P.U</th>
                                                <th>PPV</th>
                                                <th>Remise (%)</th>
                                                <th>PPH remisé</th>
                                                <th>Qté</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <img src="/assets/img/product.png" width="50" />
                                                        is simply dummy text of the printing
                                                    </div>
                                                </td>
                                                <td>1 799,91</td>
                                                <td>400,00</td>
                                                <td>0%</td>
                                                <td>400,00</td>
                                                <td>
                                                    <input type="number" name="qty" value="0" min="1" class="form-control qty" />
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <img src="/assets/img/product.png" width="50" />
                                                        is simply dummy text of the printing
                                                    </div>
                                                </td>
                                                <td>1 799,91</td>
                                                <td>400,00</td>
                                                <td>0%</td>
                                                <td>400,00</td>
                                                <td>
                                                    <input type="number" name="qty" value="0" min="1" class="form-control qty" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="notice-commande mt-4">
                                                <h4 class="fw-bold">À commander</h4>
                                                <p>Quantité minimum à commande : 10 unités</p>
                                                <p>Livré avec un certificat de bon fonctionnement</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-total">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label">
                                                        Quantité totale :
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        0
                                                    </div>
                                                </div>

                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label">
                                                        Totale PPH :
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        0.00
                                                    </div>
                                                </div>

                                                <div class="d-flex mb-2 h5">
                                                    <div class="flex-shrink-0 flex-label">
                                                        Total à payer (TTC)
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        0.00 Dhs
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-aide d-flex">
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
                    </section>
                </div>
     @endsection