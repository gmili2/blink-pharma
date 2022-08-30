@extends('layouts.app')

@section('content')
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
        @endsection