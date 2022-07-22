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
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/parametres.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />

        <title>Heures d'ouverture</title>
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
                                <h1>Produits</h1>
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
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-green">Modifier</a>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-product section-horaire mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-12">
                                    <div class="title-p pt-1"><h5>Heures d'ouverture par défaut</h5></div>
                                </div>
                            </div>
                            <table id="" class="tables table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Jour</th>
                                        <th>Heures d'ouverture</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="" role="button">
                                        <td>Lundi</td>
                                        <td>07:45 - 13:00 | 15:30 - 20:00</td>
                                    </tr>
                                    <tr class="" role="button">
                                        <td>Mardi</td>
                                        <td>07:45 - 13:00 | 15:30 - 20:00</td>
                                    </tr>
                                    <tr class="" role="button">
                                        <td>Mercredi</td>
                                        <td>07:45 - 13:00 | 15:30 - 20:00</td>
                                    </tr>
                                    <tr class="" role="button">
                                        <td>Jeudi</td>
                                        <td>07:45 - 13:00 | 15:30 - 20:00</td>
                                    </tr>
                                    <tr class="" role="button">
                                        <td>Vendredi</td>
                                        <td>07:45 - 13:00 | 15:30 - 20:00</td>
                                    </tr>
                                    <tr class="" role="button">
                                        <td>Samedi</td>
                                        <td>07:45 - 13:00 | 15:30 - 20:00</td>
                                    </tr>
                                    <tr class="" role="button">
                                        <td>Dimanche</td>
                                        <td>07:45 - 13:00 | 15:30 - 20:00</td>
                                    </tr>
                                </tbody>
                            </table>
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
