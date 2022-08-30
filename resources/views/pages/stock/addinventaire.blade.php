
                @extends('layouts.app')

                @section('content')                <div class="page-content">
                    <section class="section-stock mt-3 pb-5">
                        <form action="ajouterstock" method="POST">
                            <div class="row text-end">
                            @csrf
                                
                                <div class="col-md-12">
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-hover color-green">Sauvegarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-information bg-white block-form mt-4 p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title-p pt-1"><h5>Créer un nouvel inventaire</h5></div>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Méthode*</label>
                                        <select class="form-select" name="methode">
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Commentaire</label>
                                        <input type="text" class="form-control" placeholder="text" name="commentaire" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">nom</label>
                                        <input type="text" class="form-control" placeholder="text" name="nom" />
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Date*</label>
                                        <div class="date d-flex align-items-center">
                                            <input type="date" class="form-control" placeholder="--/--/----" name="date_inventaire" />
                                            <!-- <span class="input-group-append">
                                          <span class="input-group-text d-block">
                                            <i class="fa fa-calendar"></i>
                                          </span>
                                        </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
          @endsection