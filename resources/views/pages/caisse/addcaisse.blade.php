@extends('layouts.app')
@section('content')
   
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        
                    <form action="{{url('storeinvent')}}"  enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer un nouveau inventaire</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                    <button type="submit " class="btn-hover color-green btn-fixed" >Sauvgarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-fornisseur mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                  
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control" required name="nom" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Commentaire</label>
                                            <textarea name="commentaire" class="form-control" cols="30" rows="3"></textarea>
                                        </div>
                               

                                 
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
@endsection