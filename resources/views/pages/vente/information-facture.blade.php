
            
                @extends('layouts.app')

                @section('content')    <div class="page-content">
                    <section class="section-stock mt-3 pb-5">
                        <form action="">
                            <div class="row text-end">
                                <div class="col-md-12">
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-hover color-blue">Retourner</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-information bg-white block-form mt-4 p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-p pt-1"><h5>Informations générales</h5></div>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-2">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Client</label>
                                        <input type="text" class="form-control" placeholder="Client" name="client" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Contact</label>
                                        <input type="text" class="form-control" placeholder="Contact" name="contact" />
                                    </div>
                                </div>
                                <hr />

                                <div class="row mt-4 mb-4">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Adresse</label>
                                        <input type="text" class="form-control" placeholder="Adresse" name="adresse" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Ville</label>
                                        <input type="text" class="form-control" placeholder="Ville" name="ville" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Code postal</label>
                                        <input type="text" class="form-control" placeholder="Code postal" name="code_postale" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Pays</label>
                                        <select class="form-select" name="pays">
                                            <option value="1">One</option>
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