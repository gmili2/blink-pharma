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
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/product.css" />
        <link rel="stylesheet" href="/assets/css/client.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <title>Logo de l'entriprise</title>
    </head>
    <body>
        <div class="main-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar navbar-setting">
                <div class="sidebar-header">
                    <a href="#" class="sidebar-brand">
                        <img src="/assets/img/logo.png" alt="" />
                    </a>
                </div>
                <hr class="divider" />
                <div class="sidebar-body">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="link-title m-0">Mes paramètres</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Utilisateurs</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Paramétres de l’application </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Heures d’ouverture</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Modéles</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Paramétres de sécurité</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Paramétres de transactions</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Devis</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Bons de livraisons</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Ventes</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Retours sur ventes</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Avoirs fournisseurs reçus</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Zones</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span class="link-title m-0">Produits</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="page-wrapper content-settings">
                <!-- partial:partials/_navbar.html -->
                <nav class="navbar">
                    <a href="#" class="sidebar-toggler">
                        <i data-feather="menu"></i>
                    </a>
                    <div class="navbar-content">
                        <div class="d-flex header-navbar">
                            <div class="title-header">
                                <h1>Clients</h1>
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
                    <section class="section-client mt-3 pb-5">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Paramètres de l'application</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <a href="#" class="btn-hover color-green">Sauvegarder</a>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Télécharger le logo</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img" src="/assets/img/default.jpg" /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
