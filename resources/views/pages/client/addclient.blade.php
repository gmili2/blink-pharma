@extends('layouts.app')

@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <form action="{{url('storeclient')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer un nouveau client</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        {{-- <a href="#" class="btn-hover color-green btn-fixed">Sauvegarder</a> --}}
                                        <button type="submit " class="btn-hover color-green btn-fixed" style="margin-top:15px" >Sauvgarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4 " style="margin-top: -11px">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                    
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control" name="nom" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Cin</label>
                                            <input type="text" class="form-control" name="cin" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Cnss</label>
                                            <input type="text" class="form-control" name="cnss" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" required name="email" />
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
                                            
                                            <input
                                            
                                             required class="form-control" 

                                            type="tel"
       pattern="(05|06|07)[0-9]{8}"
       required
                                            {{-- maxlength="10" --}}
                                            minlength="10"

                                            name="tel" />
                                        </div>
                                      
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Ville</label>
                                            <select class="form-select" name="ville">
                                                @foreach ($villes as $item)
                                                <option value="{{$item->id}}">{{$item->Nom}}</option>
                                                    
                                                @endforeach
                                               
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Adresse</label>
                                            <textarea type="text" class="form-control" name="adresse" >
</textarea>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code postal</label>
                                            <input type="text" class="form-control" name="codeposal" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Plafan credit</label>
                                            <input type="text" class="form-control" name="plafancredit" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Organisme</label>
                                            <input type="text" class="form-control" name="organisme" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Num immatriculation</label>
                                            <input type="text" class="form-control" name="num_immatriculation" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label class="form-label">Num affiliation</label>
                                            <input type="text" class="form-control" name="num_affiliation" />
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