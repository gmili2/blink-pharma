
@extends('layouts.apppar')

@section('content')             

<div class="page-content">

   
    {{-- @include('layouts.navparam') --}}

    <section class="section-stock mt-3 pb-5" >
   
        <form action="AjouterUser" method="POST"   enctype="multipart/form-data">
            
            <div class="row text-end">
            @csrf

                <div class="col-md-12">
                    <div class="buttons">
                        <a href="adduser" type="submit" class="btn btn-hover color-green" >Creer</a>
                    </div>
                </div>
            </div>
           

        </form>


            {{-- <button class="form-control" placeholder="text" name="commentaire"  accept=".csv">AfficherTarce</button> --}}


    </section>
    <div class="col-md-6">
        <div class="title-p pt-1"><h5>Liste des  utilisateurs</h5></div>
    </div>

      <div id="Zones"  >
        <div class="tab"  >

            <table id="table" class="table table-striped" style="width: 100%;">
                <th>name</th>
                <th>first name</th>
                <th>Email</th>
                <th>Role</th>
                <th>last seen</th>
                <th> status</th>
                <th>created_at</th>

                <th>Action</th>
            @foreach ($users as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->firstname}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->Role}}</td>
                    <td> {{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }} </td>
                    <td> @if(Cache::has('user-is-online-' . $item->id))
                        <span class="text-success">Online</span>
                    @else
                        <span class="text-secondary">Offline</span>
                    @endif

                </td>
                    <td> {{$item->created_at}}</td>



                    <td>
                        <div class="dropdown section-action">
                            <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                            <ul class="dropdown-menu">

                                <li><a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#search-client"
                                    onclick="Remplissage('{{$item->id}}','{{$item->name}}','{{$item->firstname}}','{{$item->email}}','{{$item->Role}}')"                                    >modifier</a></li>

                                <li>
                                    <a class="dropdown-item" href=""     data-bs-toggle="modal" data-bs-target="#modelsupprimer"
                                    onclick="Remplaisage('{{$item->id}}','{{$item->name}}')"

                                        >
                                    Supprimer</a>
                                 </li>
                            </ul>
                        </div>
                    </td>

                    {{-- <td>
                        <div>

                       <a href="" data-bs-toggle="modal" data-bs-target="#search-client" >
                            <img src="/assets/icons/edit.svg" alt=""

                            onclick="Remplissage('{{$item->id}}','{{$item->name}}','{{$item->firstname}}','{{$item->email}}','{{$item->Role}}')" />



                        </a>

                           <a href='' id="open"       data-bs-toggle="modal" data-bs-target="#modelsupprimer" onclick="RemplaisageId('{{$item->id}}')"  >

                            <img src="/assets/icons/delete.svg" alt="" onclick="RemplaisageNom('{{$item->name}}')"  />



                        </a>

            </div>
            </td> --}}
        </tr>
            @endforeach

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

            <div class="modal fade" id="modelsupprimer" tabindex="-1" role="dialog" aria-labelledby="modelsupprimer" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <form   action="DeleteUser" method="POST" >
                            @csrf
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">  voullez vous vraiment Supprimer le User </h5>
                            </div>
                            <div class="modal-body">
                                <input type="text" id="name_user"  class="form-control" >


                             </div>

                             <div class="modal-body">

                                <input type="text" id="Iduser"  name="id"  class="form-control" hidden  >
                             </div>
                            <div class="modal-footer">

                        <button type="button" class="btn btn-secondary"  class="btn-close" data-bs-dismiss="modal" aria-label="Close" >Close</button>
                            <button name="deletedata" id="supprimerProduit" class="btn btn-danger" type="submit"   >oui</button>
                            </div>
                        </form>
                    </div>
            </div>
           </div>

            </table>

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


