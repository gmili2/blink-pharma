
                <!-- partial:partials/_navbar.html -->
                <!-- partial -->
                    
                @extends('layouts.app')

                @section('content')
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Régularisation du solde</a>
                                    <a href="#" class="btn-hover color-green">Modifier</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-information mt-4 pt-3">
                            <div class="row pb-1">
                                <div class="col-md-9">
                                    <div class="information-general p-4">
                                        <h5 class="pb-1 mb-3">Informations générales</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-header d-flex">
                                                    <div class="image"><img src="/assets/img/docteur.png" alt="" /></div>
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Nom :</label> <span>Dr. Najat</span></li>
                                                            <li><label>Téléphone :</label> <span>+212 660 354 765</span></li>
                                                            <li><label>CNSS :</label> <span>648388</span></li>
                                                            <li><label>CIN : </label> <span>A123456</span></li>
                                                            <li><label>Email :</label> <span>Example@gmail.com</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Gestionnaire</label> <span>Dr. Hicham</span></li>
                                                            <li><label>Nom</label> <span>Client carte bancaire</span></li>
                                                            <li><label>Type</label> <span>Client régulier</span></li>
                                                            <li><label>CIN</label> <span>A1234567</span></li>
                                                            <li><label>CNSS</label> <span>W90365298</span></li>
                                                            <li><label>Plafond de crédit</label> <span>00,00</span></li>
                                                            <li><label>Téléphone</label> <span>05 74 56 46 46</span></li>
                                                            <li><label>E-mail</label> <span>Exemple@gmail.com</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1">Informations de l’organisme</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Organisme</label> <span>Aucun</span></li>
                                                            <li><label>Numéro d'immatriculation</label> <span>00000000</span></li>
                                                            <li><label>Numéro d’affiliaton</label> <span>Exemple</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <h5 class="mb-2 mt-4">Adresse</h5>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Adresse</label> <span>Exemple</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Ville</label> <span>Exemple</span></li>
                                                            <li><label>Pays</label> <span>Maroc</span></li>
                                                            <li><label>Code postal</label> <span>Exemple</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <h5 class="mb-2 mt-4">Informations déscriptives</h5>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Déscreption</label> <span>Exemple</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-history mt-4 p-4">
                                        <div class="col-md-6">
                                            <div class="title-p pb-1">
                                                <h5>Historique des produits</h5>
                                            </div>
                                        </div>
                                        <table id="table" class="table table-striped mt-3" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Produit</th>
                                                    <th>Quantité</th>
                                                    <th>Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2021-11-24 10:16</td>
                                                    <td>Vente</td>
                                                    <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                                    <td>-1</td>
                                                    <td>-12</td>
                                                </tr>
                                                <tr>
                                                    <td>2021-10-26 10:16</td>
                                                    <td>Vente</td>
                                                    <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                                    <td>-1</td>
                                                    <td>-13</td>
                                                </tr>
                                                <tr>
                                                    <td>2022-12-26 10:16</td>
                                                    <td>Vente</td>
                                                    <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                                    <td>-1</td>
                                                    <td>-13</td>
                                                </tr>
                                                <tr>
                                                    <td>2022-11-06 10:16</td>
                                                    <td>Vente</td>
                                                    <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                                    <td>-8</td>
                                                    <td>-13</td>
                                                </tr>
                                                <tr>
                                                    <td>2022-11-06 10:16</td>
                                                    <td>Vente</td>
                                                    <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                                    <td>-8</td>
                                                    <td>-13</td>
                                                </tr>
                                                <tr>
                                                    <td>2022-11-06 10:16</td>
                                                    <td>Vente</td>
                                                    <td>FEBREX ST ADULTE SANS SUCRE B8 SACHETS</td>
                                                    <td>-8</td>
                                                    <td>-13</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="information-vente mt-4 p-4">
                                        <div class="col-md-6">
                                            <div class="title-p pb-1">
                                                <h5>Ventes</h5>
                                            </div>
                                        </div>
                                        <table id="table-vente" class="table table-striped mt-3" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Numéro de transaction</th>
                                                    <th>Date de vente</th>
                                                    <th>Total</th>
                                                    <th>Livré</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Fac-39626</td>
                                                    <td>2021-11-26 10:16</td>
                                                    <td>22 983,00</td>
                                                    <td>
                                                        <div class="status"><span class="yes">Oui</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="status"><span class="text-yes">Complété</span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fac-39626</td>
                                                    <td>2021-11-26 10:16</td>
                                                    <td>22 983,00</td>
                                                    <td>
                                                        <div class="status"><span class="non">Non</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="status"><span class="text-non">Échoué</span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fac-39626</td>
                                                    <td>2021-11-26 10:16</td>
                                                    <td>22 983,00</td>
                                                    <td>
                                                        <div class="status"><span class="yes">Oui</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="status"><span class="text-yes">Complété</span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fac-39626</td>
                                                    <td>2021-11-26 10:16</td>
                                                    <td>22 983,00</td>
                                                    <td>
                                                        <div class="status"><span class="yes">Oui</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="status"><span class="text-yes">Complété</span></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fac-39626</td>
                                                    <td>2021-11-26 10:16</td>
                                                    <td>22 983,00</td>
                                                    <td>
                                                        <div class="status"><span class="yes">Oui</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="status"><span class="text-yes">Complété</span></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-right">
                                        <div class="block-header">
                                            <div class="block">
                                                <div class="image"><img src="/assets/icons/database.svg" alt="" /></div>
                                                <div class="content px-3">
                                                    <h3>Total non payé</h3>
                                                    <span>Dont un avoir de : 0dh</span>
                                                </div>
                                                <div class="fornisseur-price"><span>0 Dhs</span></div>
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
                        </div>
                    </section>
                </div>
       @endsection