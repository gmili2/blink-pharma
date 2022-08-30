      
                @extends('layouts.app')

                @section('content')
                <!-- partial:partials/_navbar.html -->
               
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