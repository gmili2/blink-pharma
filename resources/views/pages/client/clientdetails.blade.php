@extends('layouts.app')

@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <form action="{{url('updateClient'.$clients->id)}}" enctype="multipart/form-data"  method="post">
                        @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Modifier</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <button type="submit " class="btn-hover color-green btn-fixed" >Sauvgarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        <!--<div class="col-md-12 mb-3">-->
                                        <!--    <div class="wrap upload-image d-flex gap-3">-->
                                        <!--        <div class="thumb"><img id="img" class="img" src="/images/{{$clients->image}}" -->
                                                    
                                        <!--            /></div>-->
                                        <!--        <div class="form-upload mt-5">-->
                                        <!--            <input type="file" id="upload"  name="image" class="upload form-control custom-file-input" />-->
                                        <!--            <span>Votre fichier ne doit pas dépasser 15 MG</span>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control" name="nom" value="{{$clients->name}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Cin</label>
                                            <input type="text" class="form-control" name="cin" value="{{$clients->cin}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Cnss</label>
                                            <input type="text" class="form-control" name="cnss"  value="{{$clients->cnss}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email"  required value="{{$clients->email}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Type</label>
                                            <select class="form-select" name="type">
                                                <option value="Client régulier">Client régulier</option>
                                                <option value="Client x">Client x</option>
                                                <option value="Client y">Client y</option>
                                            </select>
                                        </div>
                                     
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Télephone</label>
                                            <input type="text" class="form-control" name="tel" value="{{$clients->tele}}"/>
                                        </div>
                                      
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Ville</label>
                                            <select class="form-select" name="ville">
                                                <option></option>     <option value="Rabat">Rabat</option>
                                                <option value="Casablanca">Casablanca</option>
                                                <option value="Fes">Fes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Adresse</label>
                                            <textarea type="text" class="form-control" name="adresse" >{{$clients->adresse}}
</textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code postal</label>
                                            <input type="text" class="form-control" name="codeposal" value="{{$clients->code_postale}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Plafan credit</label>
                                            <input type="text" class="form-control" name="plafancredit" value="{{$clients->plafan_credit}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Organisme</label>
                                            <input type="text" class="form-control" name="organisme" value="{{$clients->organisme}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Num immatriculation</label>
                                            <input type="text" class="form-control" name="num_immatriculation" value="{{$clients->num_immatriculation}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Num affiliation</label>
                                            <input type="text" class="form-control" name="num_affiliation" value="{{$clients->num_affiliation}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Description</label>
                                            <textarea type="text" class="form-control" name="description"  >{{$clients->description}}
</textarea>
                                        </div>
                                    </div>
                                </div>
                   
                   
                            </div>
                        </form>
                    </section>
                </div>
    
@endsection