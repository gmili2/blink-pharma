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
        <link rel="stylesheet" href="/assets/css/fornisseur.css" />
        <link rel="stylesheet" href="/assets/css/vente.css" />
        <link rel="stylesheet" href="/assets/css/stock.css" />
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <title>BLINK PHARMA | ACHAT</title>
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
                                <h1>Achat</h1>
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
                    <section class="section-produit mt-3 pb-5">
                        <section class="section-stock px-3 mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Bon de commande</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <a href="" class="btn-hover color-green" data-bs-toggle="modal" data-bs-target="#bon-de-commande">Approuver (F12)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="section-information pt-3">
                                <div class="row">
                                    <div class="col-md-7 p-4 bg-white">
                                        <form action="#" class="mb-4">
                                            <div class="row align-items-center inventaire">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group d-flex align-items-center">
                                                        <i class="bi bi-search"></i>
                                                        <input type="text" class="form-control" placeholder="Search" name="search" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3 text-end">
                                                    <div class="buttons">
                                                        <a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#search-client"><i class="bi bi-plus-lg"></i> Ajouter un Fournisseur</a>
                                                        <button type="submit" class="btn-hover color-yellow"><i class="bi bi-search"></i> Recherche</button>
                                                    </div>
                                                </div>

                                                <div class="col-md-10 mb-3">
                                                    <ul class="liste-filtre d-flex">
                                                        <li class="active">
                                                            <a href="" role="button" data-bs-toggle="modal" data-bs-target="#add-filtre">
                                                                <span><i class="bi bi-funnel-fill"></i> Filtre</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <span>PPV : 115Dh</span>
                                                            </a>
                                                            <a href="" class="delete"><i class="bi bi-x"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <span>Zone : Casablanca</span>
                                                            </a>
                                                            <a href="" class="delete"><i class="bi bi-x"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                        <hr class="divider" />
                                        <table id="table" class="table table-striped mb-4" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Forme</th>
                                                    <th>PPV</th>
                                                    <th>Zone</th>
                                                    <th>Disp.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Karstase elixir 200ml</td>
                                                    <td>Cosmétique</td>
                                                    <td>509.97</td>
                                                    <td></td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="modal fade filtre" id="add-filtre" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header justify-content-between">
                                                        <h5 class="modal-title">Filter</h5>
                                                        <div class="icon">
                                                            <a href="#">
                                                                <i class="bi bi-arrow-counterclockwise"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <form action="">
                                                                    <div class="section-information">
                                                                        <div class="row">
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select" name="dci">
                                                                                    <option value="">DCI</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <input type="text" class="form-control" placeholder="PPV" name="ppv" />
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select active" name="categorie">
                                                                                    <option value="">Catégorie</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select active" name="forme">
                                                                                    <option value="">Forme</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select" name="zone">
                                                                                    <option value="">Zone</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-4 mb-4">
                                                                        <div class="col-md-12">
                                                                            <div class="text-info d-flex">
                                                                                <span><img src="/assets/icons/group-person.svg" /></span>
                                                                                <p>Vous pouvez modifier le filtre par défaut pour toutes les recherches ultérieurement.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="buttons d-flex justify-content-end">
                                                                            <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                                                            <button type="submit" class="btn btn-hover color-green mx-1">Sauvegarder</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="block-right pt-4 pb-4 ps-2 px-2 bg-white">
                                            <div class="header">
                                                <ul class="d-flex p-0 justify-content-between">
                                                    <li>
                                                        <label>Date :</label>
                                                        <span>2022-11-15 <i class="bi bi-calendar ms-2"></i></span>
                                                    </li>
                                                    <li>
                                                        <label>Par :</label>
                                                        <span>Dr Hicham <i class="bi bi-chevron-down ms-2"></i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="content d-flex justify-content-between">
                                                <div>
                                                    <h3 class="m-0">Total à payer</h3>
                                                    <span>Quantité totale : 0</span>
                                                </div>
                                                <div>
                                                    <h3>0.00 Dhs</h3>
                                                </div>
                                            </div>
                                            <hr class="divider mt-3" />
                                            <table id="table-right" class="table table-striped mb-4" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Produit</th>
                                                        <th>P.U</th>
                                                        <th>PPV</th>
                                                        <th>Disp.</th>
                                                        <th>Total</th>
                                                        <th>Quantité</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <td>Karstase elixir</td>
                                                        <td>407</td>
                                                        <td>509.97</td>
                                                        <td>1</td>
                                                        <td>2000</td>
                                                        <td><input type="number" name="qty" value="0" min="1" class="form-control qty" /></td>
                                                        <td>
                                                            <a href="#"><i class="bi bi-trash3"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-vente"><i class="bi bi-pencil"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="title mt-3">
                            <h1>Liste des bon de commande</h1>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-12">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Livré</span>
                                        </div>
                                        <div class="status">
                                            <span class="off"><i class="bi bi-circle-fill"></i> Annulé</span>
                                        </div>
                                        <div class="status">
                                            <span class="ongoing"><i class="bi bi-circle-fill"></i> Non payé</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="table" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Statut</th>
                                        <th>Numro de transaction</th>
                                        <th>Fournisseurs</th>
                                        <th>Date du bon de commande</th>
                                        <th>Crée le</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="on"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-15</td>
                                        <td>452,02 Dhs</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/fournisseur/informationfournisseur.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="off"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-15</td>
                                        <td>452,02 Dhs</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/fournisseur/informationfournisseur.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span class="ongoing"><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>BC-864</td>
                                        <td>Blink Pharma</td>
                                        <td>2022-11-15</td>
                                        <td>2022-11-15</td>
                                        <td>452,02 Dhs</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/fournisseur/informationfournisseur.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Choisir un Fournisseur</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <p class="text text-center mt-4">
                            Cette fonction vous facilitera l’accès aux fonctionnalités de votre choix,<br />
                            d’une façon rapide, efficace et efficiente;
                        </p>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="table-client" class="table table-striped mb-4" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nom</th>
                                            <th>Teléphone</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Ahmed Houssni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row section-footer">
                            <div class="buttons">
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                <button type="submit" class="btn btn-hover color-green mx-1">Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade filtre" id="edit-vente" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header justify-content-between">
                        <h5 class="modal-title">Karstase elixir</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="section-information">
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Prix unitaire</label>
                                                <input type="text" class="form-control" placeholder="Prix unitaire" name="p_unitaire" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Type de remise</label>
                                                <select class="form-select" name="categorie">
                                                    <option value="">%</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Remise</label>
                                                <input type="text" class="form-control" placeholder="Remise" name="remise" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="buttons space-bm">
                                                    <button class="btn-hover color-blue"><i class="bi bi-plus-lg"></i> Rem. U.G</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Disponible</label>
                                                <input type="text" class="form-control" placeholder="Disponible" name="disponible" />
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label class="form-label">Base de remboursement</label>
                                                <input type="text" class="form-control" placeholder="Base de remboursement" name="remboursement" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Taux Remb.</label>
                                                <input type="text" class="form-control" placeholder="Taux Remb." name="remb" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="buttons d-flex justify-content-end">
                                            <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                            <button type="submit" class="btn btn-hover color-green mx-1">Sauvegarder</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script> -->
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
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
