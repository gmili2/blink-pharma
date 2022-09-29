
@extends('layouts.app')

@section('content')             

<div class="page-content">

   
    {{-- @include('layouts.navparam') --}}

    <section class="section-stock mt-3 pb-5" >
   
        <form action="AjouterUser" method="POST"   enctype="multipart/form-data">
            
            <div class="row text-end">
            @csrf

                <div class="col-md-12">
                    <div class="buttons">
                        <button type="submit" class="btn btn-hover color-green" >Sauvgarder</button>
                    </div>
                </div>
            </div>
            <div class="section-information bg-white block-form mt-4 p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-p pt-1"><h5>Créer un nouveau Utilisateur</h5></div>
                    </div>
                </div>
               <div class="row mt-4 mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nom*</label>
                        <input type="text" class="form-control" placeholder="Nom" required name="Nom_user" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Prenom*</label>
                        <input type="text" class="form-control" placeholder="First_user" required name="Prenom" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email*</label>
                        <input type="email" class="form-control" placeholder="Email"required  name="Email" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password*</label>
                        <input type="password" class="form-control" placeholder="Password" required  name="pass_user" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Role*</label>
                        <select class="form-select" onchange="slectRole()" id="Roleselect" name="Role">

                            @foreach ($roles as $r)
                            <option value="{{$r->id}}">{{$r->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                    <a style="padding-left: 19px;" 
                    href="role">Ajouter un role</a>

        </form>
    </section>
      <div id="Zones"  >
        <div class="tab"  >


            <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title">Modifier Un User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="ModifierUser" method="POST">
                                        @csrf
                                        <div class="col-md-6 mb-3">
                                  <input type="text" class="form-control"  name="id" id="id"  hidden/>
                                        </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nom User*</label>
                                        <input type="text" class="form-control"  name="Nom_user" id="Nom_user" required />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Prenom *</label>
                                        <input type="text" class="form-control"  name="first_user" id="first_user" required />
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Eamil*</label>
                                        <input type="email" class="form-control" name="Email_user" id="Email_user"  required/>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">password*</label>
                                        <input type="password" class="form-control" placeholder="pass_user" required name="pass_user" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Role*</label>
                                        <select class="form-select" onchange="slectRole()" id="Roleselect" required name="Role">
                                            <option value="Admins">Admins</option>
                                            <option value="NormalUser">NormalUser</option>


                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="row section-footer">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>

                                    {{-- <a  class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" onclick="slectclient()"

                                    aria-label="Close" type="submit">Valider</a> --}}

                                    <button class="btn btn-hover color-green mx-1" type="submit"  data-bs-dismiss="modal">Valider</button>

                                </div>
                            </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

   
        <script>
         function   Remplissage(id,name,firstname,email,role){

            document.getElementById("id").value=id;

            document.getElementById("Nom_user").value=name;
            document.getElementById("first_user").value=firstname;
            document.getElementById("Email_user").value=email;
            document.getElementById("Role").value=role;
         }

// function RemplaisageId(id){
//     alert('mlk')


// }
        </script>

      </div>

</div>
</div>
</div>

</div>

@endsection

<script>

function Remplaisage(id,Nom){

document.getElementById("name_user").value=Nom;
document.getElementById("Iduser").value=id;

}

</script>


