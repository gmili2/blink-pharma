@extends('layouts.app')

@section('content')

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
                                            <a href="rapport-produit">Rapport sur une période</a>
                                        </li>
                                        <li>
                                            <a href="journal-produit">Journal Produits</a>
                                        </li>
                                        <li>
                                            <a href="">Rapport de caisse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="#" role="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#rapport-comptable" aria-expanded="true" aria-controls="collapseOne">
                                    <label>2</label> 
                                    <span>Rapports Comptables</span>
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
          

        @endsection
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script> -->
        {{-- <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
        <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.print.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.colVis.min.js"></script>
        <script src="/assets/js/main.js"></script> --}}


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
