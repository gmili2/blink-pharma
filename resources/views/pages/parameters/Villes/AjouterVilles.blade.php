@extends('layouts.apppar')

@section('content')                <div class="page-content">

    <section class="section-stock mt-3 pb-5" >
        <form action="AjouterVille" method="POST"   enctype="multipart/form-data">
            <div class="row text-end">
            @csrf

                <div class="col-md-12">
                    <div class="buttons">
                        <button type="submit" class="btn btn-hover color-green" >Ajouter</button>
                    </div>
                </div>
            </div>
            <div class="section-information bg-white block-form mt-4 p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-p pt-1"><h5>Créer un nouvel Ville</h5></div>
                    </div>
                </div>
               <div class="row mt-4 mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nom Ville*</label>
                        <input type="text" class="form-control" placeholder="Nom_ville" name="Nom_ville" />
                    </div>


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Pays*</label>
                        <select class="form-select" onchange="slectRole()" id="Paysselect" name="Pays">
                            @foreach ($Pays as $pays)
                                            <option value="{{$pays->id}}">{{$pays->Nom}}</option>
                                            @endforeach




                        </select>
                    </div>

        </form>





    </section>
    <div class="col-md-6">
        <div class="title-p pt-1"><h5>Liste des Villes</h5></div>
    </div>

      <div id="Zones"  >
        <div class="tab"  >

            <table id="table" class="table table-striped" style="width: 100%;">
                <th>Nom_villes</th>
                <th>Nom_pays</th>
                <th>created_at</th>
                <th>Action</th>
            @foreach ($villes as $item)
                <tr>
                    <td>{{$item->Nom}}</td>
                    <td>{{$item->pays_Nom}}</td>

                    <td> {{$item->created_at}}</td>

                    <td>
                        <div class="dropdown section-action">
                            <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                            <ul class="dropdown-menu">

                                <li><a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#search-client"
                                    onclick="Remplissage('{{$item->id}}','{{$item->Nom}}','{{$item->pays_Nom}}')"
                                    >modifier</a></li>

                                <li>
                                    <a class="dropdown-item" href=""     data-bs-toggle="modal" data-bs-target="#modelsupprimer"

                                    onclick="Remplaisagee('{{$item->Nom}}','{{$item->id}}')"


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

                            <h5 class="modal-title">Modifier Une Ville</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="ModifierVille" method="POST">
                                        @csrf
                                        <div class="col-md-6 mb-3">
                                  <input type="text" class="form-control"  name="id" id="id"  hidden/>
                                        </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nom Ville*</label>
                                        <input type="text" class="form-control" placeholder="Nom_ville" name="Nom_ville" id="Nom_ville"  />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Pays*</label>
                                        <select class="form-select" onchange="slectRole()" id="Paysselect" name="Pays">
                                            @foreach ($Pays as $pays)
                                            <option value="{{$pays->id}}">{{$pays->Nom}}</option>
                                            @endforeach




                                        </select>
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


           </div>

            </table>
            <div class="modal fade" id="modelsupprimer" tabindex="-1" role="dialog" aria-labelledby="modelsupprimer" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" action="DeleteVille">
                            @csrf
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">  voullez vous vraiment Supprimer la Ville </h5>
                            </div>
                            <div class="modal-body">
                                <input type="text" id="Nom_Villes"  class="form-control" >


                             </div>

                             <div class="modal-body">

                                <input type="text" id="IdVille"  name="id"  class="form-control" hidden >
                             </div>
                            <div class="modal-footer">
                        </form>
                        <button type="button" class="btn btn-secondary"  class="btn-close" data-bs-dismiss="modal" aria-label="Close" >Close</button>
                            <button name="deletedata" id="supprimerProduit" class="btn btn-danger" type="submit"   >oui</button>
                            </div>
                        </form>
                    </div>
            </div>

        </div>
        <script>
         function   Remplissage(id,Nom,Ref){

            document.getElementById("id").value=id;

            document.getElementById("Nom_ville").value=Nom;

         }

        </script>

      </div>

</div>
</div>
</div>

</div>

@endsection

<script>
function Remplaisagee(Nom,id){

document.getElementById("Nom_Villes").value=Nom;
document.getElementById("IdVille").value=id;

}
// function RemplaisageId(id){


// }


</script>



