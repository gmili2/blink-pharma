@extends('layouts.app')

@section('content')                <div class="page-content">
    @include('layouts.navparam')

    <section class="section-stock mt-3 pb-5">
        <div class="row text-end" style="margin-top: 100px">

                <div class="col-md-12">
                    <div class="buttons">
                        <button type="submit" class="btn btn-hover color-green" >Nouveau model</button>
                    </div>
                </div>
            </div>
            <div class="section-information bg-white block-form mt-4 p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-p pt-1"><h5>Modéles d'emails</h5></div>
                    </div>
                </div>








    <div class="tab" >
        <table id="table" class="table table-striped" style="width: 100%;">
            <th>Document</th>
        <th>Nom</th>
        <th>Valeur par defaut</th>
        <th>Action</th>
    @foreach ($models as $item)
        <tr>
            <td>{{$item->Document}}</td>
            <td> {{$item->Nom}}</td>
            <td>{{$item->defaut_value}}</td>
            <td>
                <div class="dropdown section-action">
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                    <ul class="dropdown-menu">

                        <li><a href="ModifierModelEmai" class="dropdown-item"
                            onclick="Remplissage('{{$item->id}}','{{$item->name}}')"
                            >modifier</a></li>

                        <li>
                            <a class="dropdown-item" href=""     data-bs-toggle="modal" data-bs-target="#modelsupprimer"
                            onclick="RemplaisageId('{{$item->id}}')"
                            onclick="RemplaisageNom('{{$item->name}}')"
                                >
                            Supprimer</a>
                         </li>
                    </ul>
                </div>
            </td>

</tr>
    @endforeach
    <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Modifier Un Dci</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="ModifierDci" method="POST">
                                @csrf
                                <div class="col-md-6 mb-3">
                          <input type="text" class="form-control"  name="id" id="id"  hidden/>
                                </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom Dci*</label>
                                <input type="text" class="form-control" placeholder="Nom_Dci" name="Nom_Dci" id="Nom_Dci"  />
                            </div>


                        </div>
                    </div>


                    <div class="row section-footer">
                        <div class="buttons">
                            <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>

                            <button class="btn btn-hover color-green mx-1" type="submit"  data-bs-dismiss="modal">Valider</button>

                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- POP UP DELETE --}}
    <div class="modal fade" id="modelsupprimer" tabindex="-1" role="dialog" aria-labelledby="modelsupprimer" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="DeleteDci">
                    @csrf
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">  voullez vous vraiment Supprimer la Zone </h5>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="NomDci"  class="form-control" >


                     </div>

                     <div class="modal-body">

                        <input type="text" id="IdDci"  name="id"  class="form-control" hidden   >
                     </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" class="btn btn-secondary"  class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button name="deletedata" id="supprimerProduit" class="btn btn-danger" type="submit"   >oui</button>
                    </div>
                </form>
            </div>
    </div>
   </div>
    </table>

</div>
</section>

</div>
</div>
</div>

</div>


@endsection


<script>
    function RemplaisageNom(Nom){

        document.getElementById("NomDci").value=Nom;

    }
    function RemplaisageId(id){
        document.getElementById("IdDci").value=id;

    }
    function   Remplissage(id,Nom){

                            document.getElementById("id").value=id;

                            document.getElementById("Nom_Dci").value=Nom;

                         }



  </script>
