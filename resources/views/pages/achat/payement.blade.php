@extends('layouts.app')

@section('content')
                <div class="page-content">
                    <section class="section-achat mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h1>Ajouter un paiement</h1>
                                </div>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-blue">Sauvgarder</a>
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
                                                    <h5>Informations du paiement</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Date</label>
                                                <input type="date" class="form-control" name="date" />
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Montant*</label>
                                                <input type="text" class="form-control" name="montant*" />
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Moyen de paiement</label>
                                                <select class="form-select" name="moyen_payment">
                                                    <option selected>...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Référance</label>
                                                <input type="text" class="form-control" name="reference" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
         @endsection