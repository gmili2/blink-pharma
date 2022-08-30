@extends('layouts.app')

@section('content')


<div class="page-content">


@include('layouts.navparam')

                    <section class="section-client mt-3 pb-5">
                        <form action="AjouterGarde" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Cree une nouvelle journée de Garde</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <button type="submit" class="btn-hover color-green">Ajouter</button>
                                    </div>
                                </div>
                            </div>




                                {{-- <div class="block-form bg-white p-4 mb-4">


                                        <div class="col-md-6 mb-3">
                                            <label class="form-label"> Nom *</label>
                                            <input type="text" class="form-control" name="Nom_garde" />
                                        </div>
                                        <div class="row mt-3">
                                            <div class="section-subtitle pb-1 mb-3">
                                        <div class="col-md-6 mb-3">

                                            <label class="form-label"> Date debut *</label>
                                            <input type="date" class="form-control" name="Date_debut" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label"> Date fin *</label>
                                            <input type="date" class="form-control" name="Date_fin" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>



                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="row">

                                            <legend>Heure d'ouverture(Toute la journée)</legend>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 1</label>
                                            <input type="time" class="form-control" name="debut1"   />
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 1</label>
                                            <input type="time" class="form-control" name="fin1" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 2</label>
                                            <input type="time" class="form-control" name="debut2" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 2</label>
                                            <input type="time" class="form-control" name="fin2" />
                                        </div>

                                    </div>



                                </div>

                        </form> --}}
                        <div class="section-form-client mt-4">
                            <div class="block-form bg-white p-4 mb-4">
                                <div class="section-subtitle pb-1 mb-3">
                                    <h5>Informations générales</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label"> Nom *</label>
                                        <input type="text" class="form-control" required name="Nom_garde" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Période</h5>
                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <label class="form-label"> Date debut *</label>
                                        <input type="date" class="form-control" required name="Date_debut" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label"> Date fin *</label>
                                        <input type="date" class="form-control" required name="Date_fin" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Heures d'ouverture (Toute la journée)</h5>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Début 1</label>
                                        <input type="time" class="form-control" name="debut1"   />
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Fin 1</label>
                                        <input type="time" class="form-control" name="fin1" />
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Début 2</label>
                                        <input type="time" class="form-control" name="debut2" />
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Fin 2</label>
                                        <input type="time" class="form-control" name="fin2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </section>

    @endsection
