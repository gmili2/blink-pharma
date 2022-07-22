{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/scss/bootstrap.css" />
        <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="/assets/vendor/datatables/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="/assets/vendor/datatables/css/buttons.dataTables.min.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <link rel="stylesheet" href="/assets/css/accueil.css" />
        <link rel="stylesheet" href="/assets/css/vente.css" />
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/product.css" />
        <title>BLINK PHARMA</title>
    </head>
    <body> --}}
        {{-- <div class="main-wrapper"> --}}
            <!-- partial:partials/_sidebar.html -->
            {{-- <nav class="sidebar" id="accordionSidebar">
                <div class="sidebar-header">
                    <a href="/home" class="sidebar-brand logo-default"> <img src="/assets/img/logo.png" alt="" /> </a>
                    <a href="/home" class="sidebar-brand logo-closed"> <img src="/assets/icons/icone-logo.svg" alt="" /> </a>
                </div>
                <hr class="divider" />
                <div class="sidebar-body">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="/home.html" class="nav-link active"> <i class="bi bi-grid"></i> <span class="link-title">Page d’acceuil</span> </a>
                        </li>
                        <li class="nav-item" id="accordion-produit">
                            <a class="nav-link accordion-button collapsed" aria-controls="produits" data-bs-toggle="collapse" href="#produits" role="button" aria-expanded="false" aria-controls="produits">
                                <i class="bi bi-archive"></i> <span class="link-title">Produits</span>
                            </a>
                            <div class="collapse" id="produits" aria-labelledby="accordion-produit" data-bs-parent="#accordionSidebar">
                                <ul class="nav sub-menu">
                                    <div class="title-submenu mb-1">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><b></b>Produits</a>
                                        </li>
                                    </div>
                                    <li class="nav-item"><a href="/pages/products/product.html" class="nav-link">Voir tous les produits</a></li>
                                    <li class="nav-item"><a href="/pages/products/add-product.html" class="nav-link">Ajouter un produit</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="client" class="nav-link"> <i class="bi bi-people"></i> <span class="link-title">Clients</span> </a>
                        </li>
                        <li class="nav-item" id="accordion-vente">
                            <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#ventes" role="button" aria-expanded="false" aria-controls="ventes">
                                <i class="bi bi-ticket"></i> <span class="link-title">Ventes</span>
                            </a>
                            <div class="collapse" id="ventes" aria-labelledby="accordion-vente" data-bs-parent="#accordionSidebar">
                                <ul class="nav sub-menu">
                                    <div class="title-submenu mb-1">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><b></b>Ventes</a>
                                        </li>
                                    </div>
                                    <li class="nav-item"><a href="/pages/vente/liste.html" class="nav-link">Voir toutes les ventes</a></li>
                                    <li class="nav-item"><a href="/pages/vente/devis.html" class="nav-link">Devis</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Retours sur ventes</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Reconditionner un produit</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Préparations officinales</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#achats" role="button" aria-expanded="false" aria-controls="achats">
                                <i class="bi bi-bag"></i> <span class="link-title">Achats</span>
                            </a>
                            <div class="collapse" id="achats" data-bs-parent="#accordionSidebar">
                                <ul class="nav sub-menu">
                                    <div class="title-submenu mb-1">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><b></b>Achats</a>
                                        </li>
                                    </div>
                                    <li class="nav-item"><a href="/pages/achat/achat.html" class="nav-link">Offres</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#proposition-de-commande">Propositions de commande</a></li>
                                    <li class="nav-item"><a href="/pages/achat/bon-commande.html" class="nav-link">Bons de commande</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Bons de livraison</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Avoirs Fournisseur émis</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Avoirs Fournisseurs reçus</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Dépenses</a></li>
                                    <li class="nav-item"><a href="/pages/achat/reception.html" class="nav-link">Réception</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#fournisseurs" role="button" aria-expanded="false" aria-controls="fournisseurs">
                                <i class="bi bi-person"></i> <span class="link-title">Fournisseurs</span>
                            </a>
                            <div class="collapse" id="fournisseurs" data-bs-parent="#accordionSidebar">
                                <ul class="nav sub-menu">
                                    <div class="title-submenu mb-1">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><b></b>Fournisseurs</a>
                                        </li>
                                    </div>
                                    <li class="nav-item"><a href="/pages/fournisseur/liste.html" class="nav-link">Voir tous les fournisseurs</a></li>
                                    <li class="nav-item"><a href="/pages/fournisseur/addfornisseur.html" class="nav-link">Ajouter un fournisseur</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#confrères" role="button" aria-expanded="false" aria-controls="confrères">
                                <i class="bi bi-star"></i> <span class="link-title">Confrères</span>
                            </a>
                            <div class="collapse" id="confrères" data-bs-parent="#accordionSidebar">
                                <ul class="nav sub-menu">
                                    <div class="title-submenu mb-1">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><b></b>Confrères</a>
                                        </li>
                                    </div>
                                    <li class="nav-item"><a href="/pages/confréres/liste.html" class="nav-link">Confrères</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Sorties confrères</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Entrées confrères</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#organismes" role="button" aria-expanded="false" aria-controls="organismes">
                                <i class="bi bi-diagram-2"></i> <span class="link-title">Organismes</span>
                            </a>
                            <div class="collapse" id="organismes" data-bs-parent="#accordionSidebar">
                                <ul class="nav sub-menu">
                                    <div class="mb-1">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><b></b>Organismes</a>
                                        </li>
                                    </div>
                                    <li class="nav-item"><a href="#" class="nav-link">Voir tous les organismes</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Factures organismes</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Borderaux d’envoi</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#stock" role="button" aria-expanded="false" aria-controls="stock">
                                <i class="bi bi-pie-chart"></i> <span class="link-title">Stock</span>
                            </a>
                            <div class="collapse" id="stock" data-bs-parent="#accordionSidebar">
                                <ul class="nav sub-menu">
                                    <div class="title-submenu mb-1">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><b></b>Stock</a>
                                        </li>
                                    </div>
                                    <li class="nav-item"><a href="/pages/stock/liste.html" class="nav-link">Voir tous les stocks</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">inventaires</a></li>
                                    <li class="nav-item"><a href="/pages/stock/import.html" class="nav-link">imports</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/rapport/rapport.html" class="nav-link"> <i class="bi bi-file-earmark-minus"></i> <span class="link-title">Rapports</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/communication/communication.html" class="nav-link"> <i class="bi bi-chat-dots"></i> <span class="link-title">Communication</span> </a>
                        </li>
                        <div class="setting-header">
                            <div class="parametres">
                                <a href="/pages/parameters/"> <i class="bi bi-gear"></i> </a>
                            </div>
                            <div class="log_out">
                                <a href="/login.html"> <i class="bi bi-box-arrow-in-right"></i> </a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="close-sidebar">
                    <span class="collapse-icons"><img src="/assets/icons/collapse.svg" class="class-rotate" /></span>
                </div>
            </nav> --}}
            {{-- <div class="page-wrapper"> --}}
                <!-- partial:partials/_navbar.html -->
                {{-- <nav class="navbar">
                    <a href="#" class="sidebar-toggler"> <i data-feather="menu"></i> </a>
                    <div class="navbar-content">
                        <div class="d-flex header-navbar">
                            <div class="title-header">
                                <h1>Page d'accueil</h1>
                            </div>
                            <div class="title-header">
                                <form class="search-form">
                                    <div class="input-group">
                                        <div class="form-outline"><input type="search" id="form1" class="form-control" placeholder="Recherche" /></div>
                                        <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="profile d-flex align-items-center">
                                <div class="date"><img src="/assets/icons/callendar.svg" alt="" /> <label for="">Nov 30, 2021</label></div>
                                <div class="notification">
                                    <a href=""> <img src="/assets/icons/notification.svg" alt="" /> </a>
                                </div>
                                <div class="block-user">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="user-profile"><img src="/assets/img/user.png" alt="" /> <span>Dr. Hicham</span></div>
                                        </a>
                                        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                            <ul class="list-unstyled p-0 mb-0">
                                                <li class="dropdown-item">
                                                    <a href="pages/general/profile.html" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="user"></i> <span>Profile</span> </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="javascript:;" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="edit"></i> <span>Edit Profile</span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav> --}}
                <!-- partial -->

                
                @extends('layouts.app')

                @section('content')
                <div class="page-content">
                    <section class="section-accueil mt-3">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="liste-raccourci">
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                    <span>Marketplace</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                    <span>Ventes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                    <span>Bons de livraison</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                    <span>Bons de commande</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                    <span>Offres</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>Bons de livraison</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="btn-ajoute" role="button" data-bs-toggle="modal" data-bs-target="#add-raccourci-Modal">
                                                    <span>Ajouter</span>
                                                    <div class="icon"><i class="bi bi-plus-lg"></i></div>
                                                </a>
                                            </li>
                                        </ul>
                                        <hr class="diviseur" />
                                        <div class="title">
                                            <h1>Ventes</h1>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="add-raccourci-Modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="">Ajouter une favoris</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text">
                                                        Cette option vous facilitera l’accès aux fonctionnalités de votre choix, <br />
                                                        d’une façon rapide, efficace et efficiente
                                                    </p>
                                                    <ul class="liste-raccourci">
                                                        <li>
                                                            <a href="#" class="active" role="button">
                                                                <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                                <span>Marketplace</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="active" role="button">
                                                                <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                                <span>Ventes</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="active" role="button">
                                                                <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                                <span>Bons de livraison</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                                <span>Offres</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                                <span>Bons de commande</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Bons de livraison</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-table-home mt-4 pt-3">
                                            <div class="row filtre-home pb-1">
                                                <div class="col-md-6">
                                                    <div class="title-p pb-1">
                                                        <h5>Liste des ventes</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="status-actif">
                                                        <div class="status">
                                                            <span class="on"><i class="bi bi-circle-fill"></i> Payé totalement</span>
                                                        </div>
                                                        <div class="status">
                                                            <span class="ongoing"><i class="bi bi-circle-fill"></i> Payé partiellement</span>
                                                        </div>
                                                        <div class="status">
                                                            <span class="off"><i class="bi bi-circle-fill"></i> crédit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table" class="table table-striped mt-3" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>N°</th>
                                                        <th>Numèro de vente</th>
                                                        <th>Montant</th>
                                                        <th>Date</th>
                                                        <th>Client</th>
                                                        <th>Est actif</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>BC-864</td>
                                                        <td>452,02 Dhs</td>
                                                        <td>2022-11-15</td>
                                                        <td>Khalid lhouma</td>
                                                        <td>
                                                            <div class="status">
                                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown section-action">
                                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="/pages/vente/information-vente.html">Afficher</a></li>
                                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>BC-864</td>
                                                        <td>452,02 Dhs</td>
                                                        <td>2022-11-15</td>
                                                        <td>Khalid lhouma</td>
                                                        <td>
                                                            <div class="status">
                                                                <span class="off"><i class="bi bi-circle-fill"></i></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown section-action">
                                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="/pages/vente/information-vente.html">Afficher</a></li>
                                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>BC-864</td>
                                                        <td>452,02 Dhs</td>
                                                        <td>2022-11-15</td>
                                                        <td>Khalid lhouma</td>
                                                        <td>
                                                            <div class="status">
                                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown section-action">
                                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="/pages/vente/information-vente.html">Afficher</a></li>
                                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>BC-864</td>
                                                        <td>452,02 Dhs</td>
                                                        <td>2022-11-15</td>
                                                        <td>Khalid lhouma</td>
                                                        <td>
                                                            <div class="status">
                                                                <span class="off"><i class="bi bi-circle-fill"></i></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown section-action">
                                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="/pages/vente/information-vente.html">Afficher</a></li>
                                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>BC-864</td>
                                                        <td>452,02 Dhs</td>
                                                        <td>2022-11-15</td>
                                                        <td>Khalid lhouma</td>
                                                        <td>
                                                            <div class="status">
                                                                <span class="ongoing"><i class="bi bi-circle-fill"></i></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown section-action">
                                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="/pages/vente/information-vente.html">Afficher</a></li>
                                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>BC-864</td>
                                                        <td>452,02 Dhs</td>
                                                        <td>2022-11-15</td>
                                                        <td>Khalid lhouma</td>
                                                        <td>
                                                            <div class="status">
                                                                <span class="ongoing"><i class="bi bi-circle-fill"></i></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown section-action">
                                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="/pages/vente/information-vente.html">Afficher</a></li>
                                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <section class="section-actualite">
                                    <div class="title d-flex align-items-center">
                                        <div class="icon"><img src="/assets/icons/actualite.svg" alt="" /></div>
                                        <h1>Actualités</h1>
                                    </div>
                                    <div class="image"><img src="/assets/img/actualite.png" alt="" /></div>
                                    <div class="promotion d-flex justify-content-between">
                                        <p>Promotion</p>
                                        <span>il y a 12h</span>
                                    </div>
                                    <div class="content">Possibilité de retourner en arrière dans le temps...</div>
                                    <button class="btn btn-primary voir-plus">Voir plus</button>
                                </section>
                                <section class="section-statistique">
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/cmdencours.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Commandes total</h3>
                                                <div class="nombre-total">2 456.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/derniervent.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Dernières ventes</h3>
                                                <div class="nombre-total">2 456.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/depense.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Dépenses</h3>
                                                <div class="nombre-total">2 456.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/produit.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Produits</h3>
                                                <div class="nombre-total">2 456.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="section-stock">
                                    <a href="" role="button">
                                        <div>
                                            <div class="icon"><img src="/assets/icons/stock.svg" alt="" /></div>
                                            <span>Voir le Stock</span>
                                        </div>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </section>
                                <section class="section-aide d-flex">
                                    <div class="support">
                                        <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                            <span>05 30 500 500</span>
                                        </a>
                                    </div>
                                    <div class="aide">
                                        <button
                                            type="button"
                                            id="help-popup"
                                            role="button"
                                            class="d-flex align-items-center"
                                            data-bs-toggle="popover"
                                            title="Comment pouvons-nous aider ?"
                                            data-bs-content="Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum. Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum"
                                        >
                                            <div class="icon"><img src="/assets/icons/aide.svg" alt="" /></div>
                                            <span>Aide</span>
                                        </button>
                                    </div>

                                    <div class="retour">
                                        <a class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#raccourcis">
                                            <div class="icon"><img src="/assets/icons/retour.svg" alt="" /></div>
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="modal fade vente-succes proposition-commande" id="proposition-de-commande" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Proposition de commande</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <ul class="d-flex flex-wrap">
                                    <li class="d-flex active">
                                        <a href="#">Génerer selon méthode prévisionnelle</a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Générer pour une période de coverture de stock </a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Génerer selon Stock Max</a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Générer selon la consemmation d’une période</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="buttons d-flex justify-content-center">
                                <a href="#" class="btn-hover color-green mx-1">Confirmer</a>
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="raccourcis" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="block-rac">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="popup-raccourcis">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" id="search" class="form-control" />
                            </div>

                            <ul id="items-to-search">
                                <li>
                                    <span>Han Solo</span>
                                    <span>Ctrl+A</span>
                                </li>
                                <li>
                                    <span>Darth Vader</span>
                                    <span>Win+R</span>
                                </li>
                                <li>
                                    <span>Boba Fett</span>
                                    <span>Shift+R</span>
                                </li>
                                <li>
                                    <span>R2-D2</span>
                                    <span>Win+K</span>
                                </li>
                                <li>
                                    <span>Chewbacca</span>
                                    <span>Win+L</span>
                                </li>
                                <li>
                                    <span>Yoda</span>
                                    <span>Ctrl+B</span>
                                </li>
                                <li>
                                    <span>Luke Skywalker</span>
                                    <span>Ctrl+D</span>
                                </li>
                                <li>
                                    <span>Darth Maul</span>
                                    <span>Ctrl+N</span>
                                </li>
                                <li>
                                    <span>Stormtrooper</span>
                                    <span>Ctrl+O</span>
                                </li>
                                <li>
                                    <span>Princess Leia</span>
                                    <span>Ctrl+Alt+F5</span>
                                </li>
                                <li>
                                    <span>Ben Kenobi</span>
                                    <span>Ctrl+Alt+F12</span>
                                </li>
                                <li>
                                    <span>Anakin Skywalker</span>
                                    <span>Ctrl+Alt+F15</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endsection
            {{-- </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script> -->
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="/assets/js/jquery-search.js"></script>
        <script src="/assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
        <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.print.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.colVis.min.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html> --}}
