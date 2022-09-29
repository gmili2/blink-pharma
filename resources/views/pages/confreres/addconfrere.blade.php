@extends('layouts.app')

@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <form action="{{url('storeconfrere')}}"  enctype="multipart/form-data"  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer un nouveau clients</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        {{-- <a href="#" class="btn-hover color-green btn-fixed">Sauvegarder</a> --}}
                                        <button type="submit " class="btn-hover color-green btn-fixed" >Sauvgarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client ">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img" src="/assets/img/default.jpg" /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload" name="image" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text"   required class="form-control" name="nom" />
                                        </div>
                                    
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email"   required class="form-control" name="email" />
                                        </div>
                                    
                                     
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Télephone</label>
                                            <input
                                            
                                            type="tel"
       pattern="(05|06|07)[0-9]{8}"
       required
                                            
                                            required class="form-control" name="tel" />
                                        </div>
                                      
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Ville</label>
                                            <select  required class="form-select" name="ville">
                                                @foreach ($villes as $item)
                                                <option value="{{$item->id}}">{{$item->Nom}}</option>
                                                    
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Adresse</label>
                                            <textarea type="text"   required class="form-control" name="adresse" >
</textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code postal</label>
                                            <input type="text" class="form-control" name="codeposal" />
                                        </div>
                                      
                                    
                                      
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Description</label>
                                            <textarea type="text" class="form-control" name="description" >
</textarea>
                                        </div>
                                    </div>
                                </div>
                   
                   
                            </div>
                        </form>
                    </section>
                </div>
    
@endsection