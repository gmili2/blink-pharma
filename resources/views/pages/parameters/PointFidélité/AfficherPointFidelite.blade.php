@extends('layouts.app')

@section('content')                <div class="page-content">
    @include('layouts.navparam')

    <section class="section-stock mt-3 pb-5" >
        <form action="AjouterPoint" method="POST"   enctype="multipart/form-data">
            <div class="row text-end">
            @csrf

                <div class="col-md-12">
                    <div class="buttons">
                        <button type="submit" class="btn btn-hover color-green" >Sauvegarder</button>
                    </div>
                </div>
            </div>
            <div class="section-information bg-white block-form mt-4 p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-p pt-1"><h5>Créer un Nouveau Cadeau</h5></div>
                    </div>
                </div>
               <div class="row mt-4 mb-4">
                <div class="col-md-6 mb-3">
                <label class="form-label">Type*</label>
                <select class="form-select" onchange="slectRole()" id="Typeselect" name="Type">
                    <option value="Produit">Produit</option>
                    <option value="Avoir">Avoir</option>


                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Nom*</label>
                <select class="form-select" onchange="slectRole()" id="Nomselect" name="Nom">
                    @foreach ($produits as $produit)
                    <option value="{{$produit->name}}">{{$produit->name}}</option>
                    @endforeach




                </select>
            </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Value*</label>
                        <input type="text" class="form-control" placeholder="Value" name="Value" />
                    </div>


                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status*</label>
                        <select class="form-select" onchange="slectRole()" id="Statuselect" name="Status">
                            <option value="Actif">Actif</option>
                            <option value="Archivé">Archivé</option>


                        </select>
                    </div>

        </form>




    </section>
    <div class="col-md-6">
        <div class="title-p pt-1"><h5>Points de Fidélités</h5></div>
    </div>

      <div id="Point"  >
        <div class="tab"  >

            <table id="table" class="table table-striped" style="width: 100%;">
                <th>Type</th>
                <th>Nom</th>
                <th>Value</th>
                <th>Statue</th>

                <th>created_at</th>

                <th>Action</th>
            @foreach ($Points as $item)
                <tr>
                    <td>{{$item->Type}}</td>
                    <td>{{$item->Nom}}</td>
                    <td>{{$item->Value}}</td>
                    <td>{{$item->status}}</td>

                    <td> {{$item->created_at}}</td>



                    <td>
                        <div class="dropdown section-action">
                            <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                            <ul class="dropdown-menu">

                                <li><a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#search-client"
                                    onclick="Remplissage('{{$item->id}}','{{$item->Type}}','{{$item->Nom}}','{{$item->Value}}','{{$item->status}}')"                                    >modifier</a></li>

                                <li>
                                    <a class="dropdown-item" href=""     data-bs-toggle="modal" data-bs-target="#modelsupprimer"
                                    onclick="Remplaisage('{{$item->id}}','{{$item->Nom}}')"

                                        >
                                    Supprimer</a>
                                 </li>
                            </ul>
                        </div>
                    </td>


        </tr>
            @endforeach



            <div class="modal fade" id="modelsupprimer" tabindex="-1" role="dialog" aria-labelledby="modelsupprimer" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <form   action="DeletePoint" method="POST" >
                            @csrf
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">  voullez vous vraiment Supprimer le User </h5>
                            </div>
                            <div class="modal-body">
                                <input type="text" id="Nom_point"  class="form-control" >


                             </div>

                             <div class="modal-body">

                                <input type="text" id="Idpoint"  name="id"  class="form-control" hidden  >
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
            <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title">Modifier une point de Fidélité</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <form action="ModifierPoint" method="POST">
                                        @csrf
                                        <div class="col-md-6 mb-3">

                                            <input type="text" class="form-control" placeholder="Value" name="id"  id="id" hidden/>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Type*</label>
                                            <select class="form-select" onchange="slectRole()" id="Typeselect" name="Type">
                                                <option value="Produit">Produit</option>
                                                <option value="Avoir">Avoir</option>


                                            </select>
                                            
                                        </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nom*</label>
                                                    <input type="text" class="form-control" placeholder="Nom" name="Nom" id="Nom"/>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Value*</label>
                                                    <input type="text" class="form-control" placeholder="Value" name="Value"  id="Value"/>
                                                </div>


                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Status*</label>
                                                    <select class="form-select" onchange="slectRole()" id="Statuselect" name="Status">
                                                        <option value="Actif">Actif</option>
                                                        <option value="Archivé">Archivé</option>


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

        </div>
        <script>
         function   Remplissage(id,Type,name,Value,status){

            document.getElementById("id").value=id;

            document.getElementById("Nom").value=name;
            document.getElementById("Value").value=Value;
            document.getElementById("Statuselect").value=status;
            document.getElementById("Typeselect").value=Type;
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

alert('vkjdjv');
document.getElementById("Nom_point").value=Nom;
alert('hello');
document.getElementById("Idpoint").value=id;

}

</script>


