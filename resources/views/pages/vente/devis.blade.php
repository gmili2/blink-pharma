
                @extends('layouts.app')

                @section('content')
        <div class="page-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar"> <a href="#" class="sidebar-toggler"> <i data-feather="menu"></i> </a>
                <div class="navbar-content">
                    <div class="d-flex header-navbar">
                        <div class="title-header">
                            <h1>Vente</h1>
                        </div>
                        <div class="title-header">
                            <form class="search-form">
                                <div class="input-group">
                                    <div class="form-outline"> <input type="search" id="form1" class="form-control" placeholder="Recherche" /> </div> <button type="button" class="btn btn-primary"> <i class="fas fa-search"></i> </button>
                                </div>
                            </form>
                        </div>
                        <div class="profile d-flex align-items-center">
                            <div class="date"> <img src="/assets/icons/callendar.svg" alt=""> <label for="">Nov 30, 2021</label> </div>
                            <div class="notification"> <a href=""> <img src="/assets/icons/notification.svg" alt=""> </a> </div>
                            <div class="block-user">
                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="user-profile"> <img src="/assets/img/user.png" alt=""> <span>Dr. Hicham</span> </div>
                                    </a>
                                    <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                        <ul class="list-unstyled p-1">
                                            <li class="dropdown-item"> <a href="pages/general/profile.html" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="user"></i> <span>Profile</span> </a> </li>
                                            <li class="dropdown-item"> <a href="javascript:;" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="edit"></i> <span>Edit Profile</span> </a> </li>
                                        </ul>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </nav> <!-- partial -->
            <div class="page-content">
                <section class="section-achat mt-3">
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <div class="buttons">
                                <a href="#" class="btn-hover color-blue">Retourner</a>
                                <a href="#" class="btn-hover color-green" data-bs-toggle="modal" data-bs-target="#vente-cree">Approuver (F12)</a>
                           </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="table-commande mt-4">
                                <div class="montant-vente">
                                    <div class="detail-price">
                                        <div class="shadow-block mt-4 p-4">
                                            <div class="montant-recu d-flex gap-2">
                                                <label>Montant Reçu (Dhs)</label>
                                                <span>2113.30</span>
                                            </div>
                                            <div class="montant-recu d-flex gap-2">
                                                <label>Monnaie</label>
                                                <span>0 Dhs</span>
                                            </div>

                                            <div class="status-vente mt-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                       <form action="" class="form-vente">
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label m-0">Statut</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" name="status">
                                                                    <option selected>...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                          </div>

                                                          <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label m-0">Réferance</label>
                                                            <div class="col-sm-10">
                                                                 <input type="text" name="references" class="form-control">
                                                            </div>
                                                          </div>

                                                          <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label m-0">Livré</label>
                                                            <div class="col-sm-10">
                                                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Oui
                                                                    </label>

                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Non
                                                                    </label>
                                                                </div>
                                                            </div>
                                                          </div>

                                                       </form>
                                                    </div>

                                                    <div class="col-md-6">
                                                         <div>
                                                            <ul class="liste-raccourci">
                                                                <li>
                                                                   <a href="" role="button" class="active">
                                                                      <div class="img"> <i class="bi bi-wallet2"></i> </div>
                                                                      <span>Espéces</span>
                                                                   </a>
                                                                </li>

                                                                <li>
                                                                    <a href="" role="button">
                                                                       <div class="img"> <i class="bi bi-credit-card-2-front"></i> </div>
                                                                       <span>Chéque</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="" role="button">
                                                                       <div class="img"> <i class="bi bi-credit-card"></i> </div>
                                                                       <span>Carte bancaire </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="" role="button">
                                                                       <div class="img"> <i class="bi bi-file-earmark-text"></i> </div>
                                                                       <span>Lettre de change</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="" role="button">
                                                                       <div class="img"> <i class="bi bi-exclamation-triangle"></i> </div>
                                                                       <span>Autre</span>
                                                                    </a>
                                                                </li>

                                                             </ul>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">

                                    <div class="col-md-6 offset-6">
                                        <div class="card-total">

                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label ">
                                                    Date : 2015-11-15
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    Par : Dr Salim
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label h5">
                                                    Total à payer :
                                                </div>
                                                <div class="flex-grow-1 ms-3 h5">
                                                    160,09
                                                </div>
                                            </div>
        
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label">
                                                    Total à payer par l’organisme :
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    11.21
                                                </div>
                                            </div>

                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label">
                                                    Quantité totale :
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    9
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="section-aide d-flex">
                            <div class="support">
                                 <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                    <div class="icon"> <img src="/assets/icons/telephone.svg" alt=""> 
                                    </div> <span>05 30 500 500</span>
                                </a> 
                            </div>
                            <div class="aide"> 
                                <a href="" role="button" class="d-flex align-items-center">
                                    <div class="icon"> <img src="/assets/icons/aide.svg" alt=""> 
                                    </div> <span>Aide</span>
                                </a> 
                            </div>
                            <div class="retour"> 
                                <a href="" role="button" class="d-flex align-items-center">
                                    <div class="icon"> <img src="/assets/icons/retour.svg" alt=""> </div>
                                </a> 
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="modal fade vente-succes" id="vente-cree" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vente(s) crée(s) avec succés</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="d-flex flex-wrap">
                                    <li class="d-flex" role="button">
                                        <div class="icon"><img src="/assets/icons/facture.svg" alt=""></div>
                                        <a href="/pages/vente/facture.html">Afficher la Facture</a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                        <a href="">Imprimer Ticket</a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/plus.svg" alt=""></div>
                                        <a href="/pages/vente/add-vente.html">Créer une Nouvelle Vente</a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                        <a href="">Imprimer Bon De Livraison</a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/toutelesventes.svg" alt=""></div>
                                        <a href="/pages/vente/liste.html">Consulter Toutes les Ventes</a>
                                    </li>
                                    <li class="d-flex">
                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                        <a href="">Imprimer Facture</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
       @endsection