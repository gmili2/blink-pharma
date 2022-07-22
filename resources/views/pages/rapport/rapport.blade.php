<!DOCTYPE html>
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
        <link rel="stylesheet" href="/assets/css/product.css" />
        <link rel="stylesheet" href="/assets/css/rapport.css" />
        <link rel="stylesheet" href="/assets/css/client.css" />
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <title>BLINK PHARMA | RAPPORT</title>
    </head>
    <body>
        <div class="main-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar" id="accordionSidebar">
                <div class="sidebar-header">
                    <a href="/home.html" class="sidebar-brand logo-default"> <img src="/assets/img/logo.png" alt="" /> </a>
                    <a href="/home.html" class="sidebar-brand logo-closed"> <img src="/assets/icons/icone-logo.svg" alt="" /> </a>
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
                            <a href="/pages/client/client.html" class="nav-link"> <i class="bi bi-people"></i> <span class="link-title">Clients</span> </a>
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
            </nav>
            <div class="page-wrapper">
                <!-- partial:partials/_navbar.html -->
                <nav class="navbar">
                    <a href="#" class="sidebar-toggler">
                        <i data-feather="menu"></i>
                    </a>
                    <div class="navbar-content">
                        <div class="d-flex header-navbar">
                            <div class="title-header">
                                <h1>Rapports</h1>
                            </div>
                            <div class="title-header">
                                <form class="search-form">
                                    <div class="input-group">
                                        <div class="form-outline">
                                            <input type="search" id="form1" class="form-control" placeholder="Recherche" />
                                        </div>
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="profile d-flex align-items-center">
                                <div class="date">
                                    <img src="/assets/icons/callendar.svg" alt="" />
                                    <label for="">Nov 30, 2021</label>
                                </div>
                                <div class="notification">
                                    <a href="">
                                        <img src="/assets/icons/notification.svg" alt="" />
                                    </a>
                                </div>
                                <div class="block-user">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="user-profile">
                                                <img src="/assets/img/user.png" alt="" />
                                                <span>Dr. Hicham</span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                            <ul class="list-unstyled p-1">
                                                <li class="dropdown-item">
                                                    <a href="pages/general/profile.html" class="text-body ms-0">
                                                        <i class="me-2 icon-md" data-feather="user"></i>
                                                        <span>Profile</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="javascript:;" class="text-body ms-0">
                                                        <i class="me-2 icon-md" data-feather="edit"></i>
                                                        <span>Edit Profile</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- partial -->
                <div class="page-content">
                    <section class="section-rapport bg-white mt-3">
                        <div class="row p-4">
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#rapport-principe" aria-expanded="true" aria-controls="collapseOne">
                                    <label>1</label> <span>Rapports Principaux</span>
                                </a>

                                <div id="rapport-principe" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="#">Arrêt de caisse</a>
                                        </li>
                                        <li>
                                            <a href="rapport-produit.html">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="journal-produit.html">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#rapport-comptable" aria-expanded="true" aria-controls="collapseOne">
                                    <label>2</label> <span>Rapports Comptables</span>
                                </a>

                                <div id="rapport-comptable" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="">Arrêt de caisse</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#export" aria-expanded="true" aria-controls="collapseOne"><label>3</label> <span>Exports</span> </a>

                                <div id="export" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="">Arrêt de caisse</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#raport-chiffre" aria-expanded="true" aria-controls="collapseOne">
                                    <label>4</label> <span>Rapports Sur Chiffre D’affaires</span>
                                </a>

                                <div id="raport-chiffre" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="">Arrêt de caisse</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#raport-stock" aria-expanded="true" aria-controls="collapseOne">
                                    <label>5</label> <span>Rapports Sur Stock</span>
                                </a>

                                <div id="raport-stock" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="">Arrêt de caisse</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#raport-vente" aria-expanded="true" aria-controls="collapseOne">
                                    <label>6</label> <span>Rapports Sur Ventes</span>
                                </a>

                                <div id="raport-vente" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="">Arrêt de caisse</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#raport-double" aria-expanded="true" aria-controls="collapseOne">
                                    <label>7</label> <span>Rapports En double z</span>
                                </a>

                                <div id="raport-double" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="">Arrêt de caisse</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script> -->
        <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
        <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.print.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.colVis.min.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
