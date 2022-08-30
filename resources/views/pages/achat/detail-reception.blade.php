@extends('layouts.app')

@section('content')
                <div class="page-content">
                    <section class="section-achat mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h1>Détail de réception</h1>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-green">Sauvgarder</a>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade vente-succes annuler-facture" id="annuler-facture" tabindex="-1" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header flex-column">
                                        <h5 class="modal-title">Indiquez votre code de sécurité</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <div>
                                            <p class="text text-center m-0">Code de sécurité*</p>
                                        </div>
                                    </div>

                                    <div class="modal-body">
                                        <form action="#" method="">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="number" class="form-control text-center" placeholder="Code de sécurité" name="code" />
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="buttons d-flex justify-content-end">
                                                    <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                                    <button type="submit" class="btn btn-hover color-green mx-1">Valider</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <div class="table-commande shadow-block mt-4 p-4">
                                    <div class="description-commande">
                                        <div class="section-subtitle mb-4">
                                            <h5>Commande-38000</h5>
                                        </div>
                                        <div class="section-subtitle mb-4">
                                            <h5>Informations de réception</h5>
                                        </div>
                                        <ul class="d-flex mb-5">
                                            <li>
                                                <label>Gestionnaire</label>
                                                <span>Dr Hicham</span>
                                            </li>
                                            <li>
                                                <label>Date de vente</label>
                                                <span>2022-11-15</span>
                                            </li>
                                            <li>
                                                <label>Avec prescription</label>
                                                <span class="text-red">Non</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <table id="table-bon-de-commande" class="table table-striped mb-4" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Produit</th>
                                                <th>P.U d’origine</th>
                                                <th>R</th>
                                                <th>TVA</th>
                                                <th>Qté demandée</th>
                                                <th>Qté. reçu</th>
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
                                                <td>TVA (7.00%)</td>
                                                <td>10</td>
                                                <td><input type="number" name="qty" value="0" min="1" class="form-control qty" /></td>
                                                <td>1</td>
                                            </tr>

                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    FLEXEN SU 100MG B10 SUPPO
                                                </td>
                                                <td>31,80</td>
                                                <td>TVA (7.00%)</td>
                                                <td>10</td>
                                                <td><input type="number" name="qty" value="0" min="1" class="form-control qty" /></td>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row table-commande">
                                        <div class="col-md-6 data-qty">
                                            <ul class="d-flex mb-0 mt-5">
                                                <li>
                                                    <label>Qté totale commandée</label>
                                                    <span>20</span>
                                                </li>
                                                <li>
                                                    <label>Qté totale reçu</label>
                                                    <span>16</span>
                                                </li>
                                            </ul>
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

                    <div class="modal fade vente-succes search-prodcut" id="search-prodcut" tabindex="-1" aria-labelledby="" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-between">
                                    <h5 class="modal-title">Recherche Produits</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="table-poduct" class="table table-striped mb-4 dataTable" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Produit</th>
                                                        <th>Catégorie</th>
                                                        <th>Forme galénique</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>FEBREX ST ADULTE</td>
                                                        <td>Parapharmacie</td>
                                                        <td>Accessoires</td>
                                                        <td>
                                                            <div class="status">
                                                                <a href="" class="add-to-card"><i class="bi bi-bag"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>FEBREX ST ADULTE</td>
                                                        <td>Parapharmacie</td>
                                                        <td>Accessoires</td>
                                                        <td>
                                                            <div class="status">
                                                                <a href="" class="add-to-card"><i class="bi bi-bag"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>FEBREX ST ADULTE</td>
                                                        <td>Parapharmacie</td>
                                                        <td>Accessoires</td>
                                                        <td>
                                                            <div class="status">
                                                                <a href="" class="add-to-card"><i class="bi bi-bag"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>FEBREX ST ADULTE</td>
                                                        <td>Parapharmacie</td>
                                                        <td>Accessoires</td>
                                                        <td>
                                                            <div class="status">
                                                                <a href="" class="add-to-card"><i class="bi bi-bag"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>FEBREX ST</td>
                                                        <td>Parapharmacie</td>
                                                        <td>Accessoires</td>
                                                        <td>
                                                            <div class="status">
                                                                <a href="" class="add-to-card"><i class="bi bi-bag"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>FEBREX</td>
                                                        <td>Parapharmacie</td>
                                                        <td>Accessoires</td>
                                                        <td>
                                                            <div class="status">
                                                                <a href="" class="add-to-card"><i class="bi bi-bag"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     @endsection