@extends('layouts.apppar')

@section('content')                <div class="page-content">
    {{-- @include('layouts.navparam') --}}

    <section class="section-stock mt-3 pb-5">
        <form action="AjouterForm" method="POST"   enctype="multipart/form-data">
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
                        <div class="title-p pt-1"><h5>Créer une nouvelle Form</h5></div>
                    </div>
                </div>
                  <div class="row mt-4 mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nom Form*</label>
                        <input type="text" class="form-control" placeholder="Nom_Form" name="Nom_Form" />
                    </div>
                    {{-- <div class="col-md-6 mb-3">
                        <label class="form-label">Ref Dci*</label>
                        <input type="text" class="form-control" placeholder="Ref_Dci" name="Ref_Dci" />
                    </div> --}}

                    <div class="col-md-3 mb-3">

        </form>


            {{-- <button class="form-control" placeholder="text" name="commentaire"  accept=".csv">AfficherTarce</button> --}}


    </section>
    <div class="col-md-6">
        <div class="title-p pt-1"><h5>Liste des forms  des produits</h5></div>
    </div>

    <div class="tab" >
        <table id="table" class="table table-striped" style="width: 100%;">
            <th>Nom_Form</th>
        <th>created_at</th>
        <th>Action</th>
    @foreach ($Forms as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td> {{$item->created_at}}</td>

            <td>
                <div class="dropdown section-action">
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                    <ul class="dropdown-menu">

                        <li><a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#search-client" 
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
            {{-- <td>
                <div>

               <a href="" data-bs-toggle="modal" data-bs-target="#search-client" onclick="Remplissage('{{$item->id}}','{{$item->name}}')">
                    <img src="/assets/icons/edit.svg" alt=""  />



                </a>

                   <a href=""  id="open"       data-bs-toggle="modal" data-bs-target="#modelsupprimer" onclick="RemplaisageId('{{$item->id}}')" >

                    <img src="/assets/icons/delete.svg" alt=""  onclick="RemplaisageNom('{{$item->name}}')" /> </a>

    </div>
    </td> --}}
</tr>
    @endforeach
    <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Modifier Une Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="ModifierForm" method="POST">
                                @csrf
                                <div class="col-md-6 mb-3">
                          <input type="text" class="form-control"  name="id" id="id"  hidden/>
                                </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nom Form*</label>
                                <input type="text" class="form-control" placeholder="Nom_Dci" name="Nom_Form" id="Nom_Form"  />
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
    {{-- POP UP DELETE --}}
    <div class="modal fade" id="modelsupprimer" tabindex="-1" role="dialog" aria-labelledby="modelsupprimer" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="DeleteForm">
                    @csrf
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">  voullez vous vraiment Supprimer la Form </h5>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="NomForm"  class="form-control" >


                     </div>

                     <div class="modal-body">

                        <input type="text" id="IdForm"  name="id"  class="form-control" hidden   >
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
{{-- pop up pour modifier --}}

        {{-- pop pour modifier --}}

        {{-- <div class="modal-body" style="    position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding-left: 3rem;">

        </div> --}}
</div>
</div>
</div>

</div>

{{-- <script  type="text/javascript">
function show(){
alert('ge');
$(document).ready(function() { $('#popup').modal('show') });

}
</script> --}}

@endsection


<script>
    function RemplaisageNom(Nom){

        document.getElementById("NomForm").value=Nom;

    }
    function RemplaisageId(id){
        document.getElementById("IdForm").value=id;

    }
    function   Remplissage(id,Nom){
                          
                            document.getElementById("id").value=id;

                            document.getElementById("Nom_Form").value=Nom;

                         }



  </script>
