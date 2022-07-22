
                @extends('layouts.app')

                @section('content')            <div class="page-wrapper">
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
                        <div class="row">
                            <div class="col-md-12 text-end">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-green">Sauvegarder</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-information pt-3">
                            <div class="row">
                                <div class="col-md-7 p-4 bg-white">
                                    <form action="#" class="mb-4">
                                        <div class="row align-items-center inventaire">
                                            <div class="col-md-5 mb-3">
                                                <div class="form-group d-flex align-items-center">
                                                    <i class="bi bi-search"></i>
                                                    <input type="text" class="form-control" placeholder="Search" name="search" />
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <div class="buttons">
                                                    <button class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#search-client"><i class="bi bi-plus-lg"></i> Ajouter un fornisseur</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <div class="buttons">
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
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
  @endsection