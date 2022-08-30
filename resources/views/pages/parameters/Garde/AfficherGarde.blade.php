@extends('layouts.apppar')

@section('content')

{{-- @include('layouts.navparam') --}}
<div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <form action="AjouterGardeView" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>journée de Garde</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <button type="submit" class="btn-hover color-green">Crée</button>
                                    </div>
                                </div>
                            </div>




                                <div class="block-form bg-white p-4 mb-4">
                                    <table id="table" class="table table-striped" style="width: 100%;">
                                        <th>Nom</th>
                                        <th>Date debut</th>
                                        <th>Date fin</th>
                                        <th>Horaires d'ouverture</th>
                                        <th>Action</th>
                                    @foreach ($gardes as $garde)
                                        <tr>
                                            <td>{{$garde->Nom}}</td>
                                            <td>{{$garde->Date_debut}}</td>

                                            <td> {{$garde->Date_fin}}</td>
                                            @if ($garde->debut1==null && $garde->fin1==null & $garde->debut2==null && $garde->fin2==null)
                                            <td>Toute la journée</td>

                                            @else
                                            <td> {{$garde->debut1}}/{{$garde->fin1}}_
                                                {{$garde->debut2}}/{{$garde->fin2}}</td>
                                            @endif






                                            <td>
                                                <div class="dropdown section-action">
                                                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                    <ul class="dropdown-menu">

                                                      <li>
                                                            <a class="dropdown-garde" href=""     data-bs-toggle="modal" data-bs-target="#modelsupprimer"

                                                            onclick="Remplaisage('{{$garde->id}}','{{$garde->Nom}}')" >Supprimer</a>

                                                         </li>
                                                    </ul>
                                                </div>
                                            </td>





                                </tr>
                                    @endforeach


                                    </table>
                                </div>

                        </form>
                    </section>

                    <div class="modal fade" id="modelsupprimer" tabindex="-1" role="dialog" aria-labelledby="modelsupprimer" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form   action="DeleteGarde" method="POST" >
                                    @csrf
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">  voullez vous vraiment Supprimer le User </h5>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="NomGarde"  class="form-control" >


                                     </div>

                                     <div class="modal-body">

                                        <input type="text" id="IdGarde"  name="id"  class="form-control" hidden  >
                                     </div>
                                    <div class="modal-footer">

                                <button type="button" class="btn btn-secondary"  class="btn-close" data-bs-dismiss="modal" aria-label="Close" >Close</button>
                                    <button name="deletedata" id="supprimerProduit" class="btn btn-danger" type="submit"   >oui</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                   </div>
<script>
// function RemplaisageNom(Nom){

// document.getElementById("NomGarde").value=Nom;

// }
function Remplaisage(id,Nom){
document.getElementById("IdGarde").value=id;

document.getElementById("NomGarde").value=Nom;

}
</script>
    @endsection
