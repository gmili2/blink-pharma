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
        <link rel="stylesheet" href="/assets/css/accueil.css" />
        <link rel="stylesheet" href="/assets/css/product.css" />
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/achat.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <title>Sélectionner une période</title>
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
                    <a href="#" class="sidebar-toggler"> <i data-feather="menu"></i> </a>
                    <div class="navbar-content">
                        <div class="d-flex header-navbar">
                            <div class="title-header">
                                <h1>Achats</h1>
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
                                            <ul class="list-unstyled p-1">
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
                </nav>
                <!-- partial -->
                <div class="page-content">
                    <section class="section-achat mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h1>Sélectionner une période</h1>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-blue">Procéder</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-offre p-4 bg-white mt-4">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section-subtitle mb-4">
                                                    <h5>Période</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Date début *</label>
                                                <input type="date" class="form-control" name="date_debut" />
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Date fin *</label>
                                                <input type="date" class="form-control" name="date_fin" />
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                <div class="section-subtitle mb-4">
                                                    <h5>Options</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Classer par</label>
                                                <select class="form-select" name="classer_par">
                                                    <option selected>...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">laboratoire</label>
                                                <input type="text" class="form-control" name="laboratoire" />
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" />
                                                    <label class="form-check-label" for="inlineCheckbox1">Sélectionner toutes les catégories</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-4 mb-4">
                                                <div class="label-hr d-flex">
                                                    <span>Catégories</span>
                                                    <hr />
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" />
                                                    <label class="form-check-label" for="inlineCheckbox2">Complement Alimentaire (33.330%)</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked />
                                                    <label class="form-check-label" for="inlineCheckbox3">Complement Alimentaire (30.000%)</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" />
                                                    <label class="form-check-label" for="inlineCheckbox4">Diététique (15.000%)</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-2">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" />
                                                    <label class="form-check-label" for="inlineCheckbox5">Divers (0.000%)</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" />
                                                    <label class="form-check-label" for="inlineCheckbox6">Hemeopathie (33.930%)</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" checked />
                                                    <label class="form-check-label" for="inlineCheckbox7">Médicament (33.930%)</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" checked />
                                                    <label class="form-check-label" for="inlineCheckbox8">Médicament (29.747%)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
