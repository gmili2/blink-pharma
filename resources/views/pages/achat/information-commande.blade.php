@extends('layouts.app')

@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-achat mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h1>Bon de commande</h1>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Annuler</a>
                                    <a href="#" class="btn-hover color-white">Dupliquer</a>
                                    <a href="#" class="btn-hover color-blue">Imprimer</a>
                                    <a href="#" class="btn-hover color-green">Modifier</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-9">
                                <div class="table-commande shadow-block mt-4 p-4">
                                    <div class="description-commande">
                                        <div class="section-subtitle mb-4">
                                            <h5>BC-38000</h5>
                                        </div>
                                        <div class="section-subtitle mb-4">
                                            <h5>Informations du bon de commande</h5>
                                        </div>
                                        <ul class="d-flex mb-5">
                                            <li>
                                                <label>Gestionnaire</label>
                                                <span>Dr Hicham</span>
                                            </li>
                                            <li>
                                                <label>Date du BC</label>
                                                <span>2022-11-15</span>
                                            </li>
                                            <li>
                                                <label>Laboratoire</label>
                                                <span>Sterifil</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <table id="table" class="table table-striped mb-4" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Produit</th>
                                                <th>P.U d’origine</th>
                                                <th>Remise</th>
                                                <th>P.U</th>
                                                <th>Qté.</th>
                                                <th>TVA</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    FLEXEN SU 100MG B10 SUPPO
                                                </td>
                                                <td>31,80</td>
                                                <td>0%</td>
                                                <td>31,80</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>TVA (7.00%)</td>
                                                <td>0000</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    FLEXEN SU 100MG B10 SUPPO
                                                </td>
                                                <td>31,80</td>
                                                <td>0%</td>
                                                <td>31,80</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>TVA (7.00%)</td>
                                                <td>0000</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="qty-commande mt-4">
                                                <ul class="d-flex">
                                                    <li>
                                                        <label>Nombre de lignes</label>
                                                        <span>2</span>
                                                    </li>
                                                    <li>
                                                        <label>Qté totale commandée</label>
                                                        <span>2</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-total">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label">
                                                        Sous-total HT :
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        160,09
                                                    </div>
                                                </div>

                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label">
                                                        TVA :
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        11.21
                                                    </div>
                                                </div>

                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label">
                                                        Remise :
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        0Dhs
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

                            <div class="col-md-3 section-information">
                                <div class="block-right sidebar-commande">
                                    <div class="block-header">
                                        <div class="block">
                                            <div class="image"><img src="/assets/icons/like.svg" alt="" /></div>
                                            <div class="content px-3">
                                                <h3>Compléter</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block-header">
                                        <div class="block">
                                            <div class="image"><img src="/assets/icons/database-red.svg" alt="" /></div>
                                            <div class="content px-3">
                                                <h3>Reste à payer</h3>
                                                <span>Non encore livré</span>
                                            </div>
                                            <div class="commande-price"><span>171,30 Dhs</span></div>
                                        </div>
                                    </div>

                                    <div class="block-favori">
                                        <h5>Ajouter aux favoris</h5>
                                        <div class="buttons"><a href="#" class="btn-hover color-blue">Créer</a></div>
                                    </div>
                                    <div class="block-information">
                                        <h5>Informations de traçabilité</h5>
                                        <ul>
                                            <li class="bg-color"><span>Créer par</span> <span>Dr Hicham</span></li>
                                            <li><span>Créer le</span> <span>2021-11-26 10:15</span></li>
                                            <li class="bg-color"><span>Mise à jour par</span> <span>Dr Hicham</span></li>
                                            <li><span>Mise à jour le </span> <span>2021-11-27 10:15</span></li>
                                        </ul>
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
                    </section>
                </div>
      @endsection