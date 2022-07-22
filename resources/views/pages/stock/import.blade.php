      
                @extends('layouts.app')

                @section('content')
      <div class="page-wrapper">
                <!-- partial:partials/_navbar.html -->
                <nav class="navbar">
                    <a href="#" class="sidebar-toggler"> <i data-feather="menu"></i> </a>
                    <div class="navbar-content">
                        <div class="d-flex header-navbar">
                            <div class="title-header">
                                <h1>Stock</h1>
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
                    <section class="section-stock mt-3 pb-5">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Importer stock</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-hover color-green">Sauvegarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-information bg-white block-form mt-4 p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-p pt-1"><h5>Charger le fichier à importer</h5></div>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Méthode d’importation</label>
                                        <select class="form-select" name="methode">
                                            <option value="1">En se basant sur les ID des Produits</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Fichier à importer</label>
                                        <input type="file" class="form-control" data-buttonText="Parcourir" name="fille" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-p pt-1"><h5>Données</h5></div>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Importer la quantité du fichier en tant que*</label>
                                        <select class="form-select" name="quantite">
                                            <option value="1">Nouvelle quantité actuelle </option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Zone *</label>
                                        <select class="form-select" name="zone">
                                            <option value="1">Choisissez la zone que vous voulez affecter aux produits </option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
    @endsection