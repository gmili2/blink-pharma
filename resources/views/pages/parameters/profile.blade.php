
            <!-- partial:partials/_sidebar.html -->

            @extends('layouts.app')

            @section('content')

                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <form method="POST" action="modifierprofile"  enctype="multipart/form-data">
                            @csrf

                        {{-- <form action="modifierprofile" method="post"> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Profil</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <a href="home" class="btn-hover color-red">Annuler</a>
                                        <button class="btn-hover color-green" type="submit">Sauvegarder</button>
                                        {{-- <a href="#" class="btn-hover color-green">Sauvegarder</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations personnelles</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img"
                                                    @if(Auth::User()->imageprofil==null)
                                                    src="/assets/img/default.jpg"
                                                    @else
                                                    src="/images/{{Auth::User()->imageprofil}}"
                                                    @endif
                                                    /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload"   name="image" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                    @error('image')
                                        
                                                    <span>
                                                        <strong style="color: red">a remplir</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">E-mail</label>
                                            <input type="text" class="form-control" name="email" disabled value="{{Auth::User()->email}}" required/>
                                            @error('email')

                                            <span>
                                                <strong style="color: red">email</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Prénom</label>
                                            <input type="text" class="form-control" name="prenom"  value="{{Auth::User()->firstname}}" />
                                            @error('prenom')
                                      <span>
                                                <strong style="color: red">à remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom</label>
                                            <input type="text" class="form-control" name="nom"  value="{{Auth::User()->name}}" required/>
                                            @error('nom')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Date de naissance </label>
                                            <input type="date" class="form-control" name="date_naissance"  value="{{Auth::User()->date_naissance}}" required/>
                                            @error('date_naissance')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Titre</label>
                                            <input type="text" class="form-control" name="titre" value="{{Auth::User()->titre}}" />
                                            @error('date_naissance')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Téléphone</label>
                                            <input  class="form-control"
                                            
                                            type="tel"
                                            pattern="(05|06|07)[0-9]{8}"
                                            required
                                            name="telephone"  maxlength="10" minlength="10"  value="{{Auth::User()->tele}}" required />
                                            @error('telephone')
                                      <span>
                                                <strong style="color: red">number de taile 100</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Portable</label>
                                            <input type="tel" class="form-control" name="portable"  value="{{Auth::User()->portable}}"  required/>
                                            @error('portable')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Fax</label>

                                            <input  class="form-control" name="fax" 
                                            
                                               type="tel"
                                            pattern="(05)[0-9]{8}"
                                            required
                                            value="{{Auth::User()->fax}}"/>
                                            @error('fax')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Site internet</label>
                                            <input type="url" class="form-control" name="url_internet"   value="{{Auth::User()->site}}"/>
                                            @error('url_internet')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="section-subtitle pb-1 mb-3">
                                            <h5>Adresse</h5>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Adresse</label>

                                            <input type="text" class="form-control" name="adresse"  value="{{Auth::User()->adresse}}"/>
                                            @error('adresse')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Pays</label>
                                            <select required class="chosen-select form-select"
                                            name="Pays"
                                             onchange="getVilles()"
                                              id="paysselect"
                                               value="{{Auth::User()->pays}}">
                                                @foreach ($Pays as $pays)
                                                   @if ( Auth::User()->pays == $pays->id )
                                                   <option value="{{$pays->id}}" selected>{{$pays->Nom}}</option>
                                                @else
                                                <option value="{{$pays->id}}" >{{$pays->Nom}}</option>
                                                @endif

                                                @endforeach
                                                @error('Pays')

                                                <span>
                                                    <strong style="color: red">a remplir</strong>
                                                </span>

                                            @enderror


                                            </select>
                                        </div>


                                        <div class="col-md-4 mb-3"  id='villes'>
                                            <label class="form-label">Ville</label>
                                            <select required class="form-select chosen-select" name="ville">
                                                @foreach ($villes as $ville)
                                                @if (Auth::User()->ville == $ville->id )

                                                <option value="{{$ville->id}}" selected>{{$ville->Nom}}</option>
                                             @else
                                             <option value="{{$ville->id}}" >{{$ville->Nom}}</option>
                                             @endif

                                             @endforeach
                                             @error('ville')

                                             <span>
                                                 <strong style="color: red">a remplir</strong>
                                             </span>

                                         @enderror


                                            </select>
                                       </div>






                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Région</label>
                                            <input type="text" class="form-control" name="region"  value="{{Auth::User()->region}}"/>
                                            @error('region')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code postal</label>
                                            <input type="text" class="form-control" name="code_postal"  value="{{Auth::User()->code_postal}}"/>
                                            @error('code_postal')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Mot de passe</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Ancien mot de passe*</label>
                                            <input type="password" class="form-control" id='ancien_passe' name="ancien_passe"
                                             onkeyup="requerdinputnouveauepasswword()" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nouveau mot de passe</label>
                                            <input type="password" class="form-control" name="nv_passe"  id="nv_passe" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Confirmation du mot de passe</label>
                                             <input type="text" hidden id='erreurmatchinput'>
                                            <input type="password" class="form-control"  onkeyup="validerpassword()"
                                            name="confime_passe" id="confime_passe" />
                                            <span style="display: none" id="erreurmatch">
                                                <strong style="color: red">le mot de passe ne correspond pas</strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <script>
                      function  requerdinputnouveauepasswword(){
                        var ancien_passe = document.getElementById("ancien_passe").value;
                        var nv_passe = document.getElementById("nv_passe");
                        var confime_passe = document.getElementById("confime_passe");


// alert('jjj')
                        if(String(ancien_passe)==""){
                            nv_passe.removeAttribute('required');
                            confime_passe.removeAttribute('required');
                        }
                        else{
                            nv_passe.setAttribute('required', '');
                            confime_passe.setAttribute('required', '');
                        }

               }

              function validerpassword(){
                  var erreurmatchinput = document.getElementById("erreurmatchinput");
                        var erreurmatch = document.getElementById("erreurmatch");
                // alert(String(confime_passe.value))
                        if(confime_passe.value==nv_passe.value){
                            // alert('jjjj')
                            erreurmatchinput.removeAttribute('required');
                        erreurmatch.style.display='none'
                        }
                        else{
                            // alert("kkkk")

                            erreurmatch.style.display='block'
                            erreurmatchinput.setAttribute('required', '');



                        }

              }
                    </script>
          @endsection
          <script>
          function getVilles(){
            var pays=document.getElementById("paysselect").value;
            var rout='/getVilles'+String(pays)
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





        </script>
