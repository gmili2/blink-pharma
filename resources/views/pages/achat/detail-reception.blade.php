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
        <link rel="stylesheet" href="/assets/css/vente.css" />
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/achat.css" />
        <link rel="stylesheet" href="/assets/css/client.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <title>Détail de réception</title>
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
