@extends('layouts.app')

@section('content')     
                <!-- partial -->
                <div class="page-content">
                    @include('layouts.navparam')
<br>
<br>
<br>

                    <section class="section-client mt-3 pb-5">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer nouvelle journée de garde</h1>
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
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Nom *</label>
                                            <input type="text" class="form-control" name="nom" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="section-subtitle pb-1 mb-3">
                                            <h5>Période</h5>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Date début 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Date fin 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="section-subtitle pb-1 mb-3">
                                            <h5>Heures d'ouverture (Toute la journée)</h5>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 2</label>
                                            <input type="date" class="form-control" name="" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 2</label>
                                            <input type="date" class="form-control" name="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
           @endsection