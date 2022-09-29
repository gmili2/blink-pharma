@extends('layouts.app')

@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <form action="{{url('addorganisme')}}"  method="post" enctype="multipart/form-data">
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
                            <div class="section-form-client">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img" src="/assets/img/default.jpg" /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" required id="upload" name="image" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control" name="nom" />
                                        </div>
                                    
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">adresse</label>
                                            <input type="text" class="form-control" name="adresse" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" required name="email" />
                                        </div>
                                      
                                     
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Télephone</label>
                                            <input 
                                                                                       type="tel"
                                            pattern="(05|06|07)[0-9]{8}"
                                            required class="form-control" name="tel" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code posta</label>
                                            <input type="number" required class="form-control" name="code_postale" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Site web</label>
                                            <input type="url" required class="form-control" name="site" />
                                        </div>
                                      
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Pays</label>
                                            <select required class="form-select" name="pays" onchange="getVilles()"  id="pays">
                                                @foreach ($Pays as $pays)
                                                <option value="{{$pays->id}}">{{$pays->Nom}}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="col-md-4 mb-3"  id='villes'>
                                            <label class="form-label">Ville</label>
                                            <select required class="form-select" name="ville">


                                            </select>
                                        </div>
                                       
                                        {{-- <div class="col-md-4 mb-3">
                                            <label class="form-label">Adresse</label>
                                            <textarea type="text" class="form-control" name="adresse" >
                                            </textarea>
                                        </div> --}}
                                        {{-- <div class="col-md-4 mb-3">
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
                                        </div> --}}
                                       
                                    </div>
                                </div>
                   
                   
                            </div>
                            <div class="block-form bg-white p-4 mb-4">
                                <div class="section-subtitle pb-1 mb-3">
                                    <h5>Informations descriptives</h5>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-md-4 mb-3">
                                        <label class="form-label">Présentation</label>
                                        <input type="text"  value="{{old('presentation')}}" class="form-control" name="presentation" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Excipient</label>
                                        <input type="text" class="form-control" name="excipient" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Posologie pour adult</label>
                                        <input type="text"  value="{{old('padult')}}"  class="form-control" name="padult" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Posologie pour enfant</label>
                                        <input type="text"   value="{{old('penfant')}}" class="form-control" name="penfant" />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Indications</label>
                                        <input type="text"  value="{{old('indications')}}"  class="form-control" name="indications" />
                                    </div> --}}
                                    {{-- <div class="col-md-4 mb-3">
                                        <label class="form-label">Contre-indication conduit</label>
                                        <select class="chosen-select form-select"    name="ci_conduit">
                                            <option selected>...</option>
                                            @foreach ($conduit as $item)
                                              <option >{{$item->Nom}}</option>
                                            @endforeach

                                        </select>
                                    </div> --}}
{{--                                    
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Contre-indication grossesse</label>
                                        <select class="chosen-select form-select"    name="ci_grossesse">

                                                <option selected>...</option>
                                                @foreach ($grossesse as $item)
                                                  <option >{{$item->Nom}}</option>
                                                @endforeach
                                        </select>
                                    </div> --}}
                                    {{-- <div class="col-md-4 mb-3">
                                        <label class="form-label">Référence labo du produit</label>
                                        <input type="text"  value="{{old('labo_produit')}}" class="form-control" name="labo_produit" />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Conditionnement</label>
                                            <input type="text"   value="{{old('conditionnement')}}" class="form-control" name="conditionnement" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Monograph</label>
                                        <textarea name="description_monograph"  placeholder="{{old('description_monograph')}}"  class="form-control" cols="30" rows="5"></textarea>
                                    </div> --}}
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description"   placeholder="{{old('description')}}" value="{{old('description')}}"
                                        class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
    
@endsection
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    function getVillesinitiale(){
// alert("kj")

// var pays=document.getElementById("pays").value;
// alert("pays");
// if()
var rout='/getVilles1'
    axios.get(rout)
    .then(function (response)
    {
var data=response.data;
document.getElementById('villes').innerHTML=data;
// handle success
    })
    .catch(function (error)
    {
// handle error
    });
}
getVillesinitiale();

     function getVilles(){
// alert("kj")

var pays=document.getElementById("pays").value;
// alert("pays");
// if()
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
// alert("noOnechefrayon");
    });
}


</script>