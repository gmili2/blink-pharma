@extends('layouts.app')
@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">

                    <form action="{{url('updatefournisseur'.$fournisseurs->id)}}"
                        enctype="multipart/form-data"
                         method="post">

                        @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer un nouveau fornisseur</h1>
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

                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img" src="/images/{{$fournisseurs->image}}"

                                                    /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload"  name="image" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control" name="nom" value="{{$fournisseurs->name}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">E-mail</label>
                                            <input type="text" class="form-control" name="email" value="{{$fournisseurs->email}}" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Téléphone</label>
                                            <input type="text" class="form-control" name="telephone"  value="{{$fournisseurs->tele}} "/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Fax</label>
                                            <input type="text" class="form-control" name="fax" value="{{$fournisseurs->fax}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Site internet</label>
                                            <input type="text" class="form-control" name="siteinternet" value="{{$fournisseurs->site}}" />
                                        </div>

                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-4 mt-4">Adresse</h5>
                                                <hr class="divider" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Adresse</label>
                                            <input type="text" class="form-control" name="adresse"  value="{{$fournisseurs->adresse}}"/>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code postal</label>
                                            <input type="text" class="form-control" name="codepostal"  value="{{$fournisseurs->code_postale}}"/>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Pays</label>
                                            <select required class="form-select" name="Pays" onchange="getVilles()"  id="pays" >
                                                @foreach ($Pays as $pays)
                                                   @if ($fournisseurs->pays== $pays->id )
                                                   <option value="{{$pays->id}}" selected>{{$pays->Nom}}</option>
                                                @else
                                                <option value="{{$pays->id}}" >{{$pays->Nom}}</option>
                                                @endif

                                                @endforeach


                                            </select>
                                        </div>


                                        <div class="col-md-4 mb-3"  id='villes'>
                                            <label class="form-label">Ville</label>
                                            <select required class="form-select" name="ville">
                                                @foreach ($villes as $ville)
                                                @if ($fournisseurs->ville == $ville->id )

                                                <option value="{{$ville->id}}" selected>{{$ville->Nom}}</option>
                                             @else
                                             <option value="{{$ville->id}}" >{{$ville->Nom}}</option>
                                             @endif

                                             @endforeach


                                            </select>
                                       </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control" cols="30" rows="1"> {{$fournisseurs->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
@endsection
<script>
    function getVilles(){

   alert('hello')
       var pays=document.getElementById("pays").value;

       var rout='/getVilles'+pays

           axios.get(rout)
           .then(function (response)
           {
       var data=response.data;
       // alert(data)
       document.getElementById('villes').innerHTML=data;
       // handle success
           })
           .catch(function (error)
           {
       // handle error
           });
       }





   </script>

