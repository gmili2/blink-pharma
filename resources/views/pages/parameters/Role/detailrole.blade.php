      
                @extends('layouts.app')

                @section('content')
                <form action="modifierrole" method="POST">
                    @csrf
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                             
                                <div class="buttons">
                                    <button href="ajouterproduit" class="btn-hover color-blue">Sauvgarder</button>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Nom de role *</label>

                                        <input type="text" hidden  value="{{$role->id}}"  class="form-control" placeholder="nome role" required name="id" />

                                        <input type="text"  value="{{$role->nom}}" required class="form-control" placeholder="nome role" required name="nom_role" />
                                    </div>
                                </div>

                               
                            </div>
               
                            <div id="table2">
                                        <hr class="divider mt-3" />

                                    <table id="tableproduit" class="table table-striped" style="width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Module/Action</th>
                                        <th>Produit</th>
                                        <th>Vente</th>
                                        <th>Achat</th>
                                        <th>Parametre</th>
                                        <th>Confrere</th>
                                        <th>Fournisseur</th>
                                        <th>Organisme</th>
                                        <th>Inventaire</th>
                                        <th>caisse</th>

                                        <th>Importation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                 <tr>
                                    <tr>
                                        <td style="    color: blue">Ajouter</td>
                                        <td>
                                            <input type="checkbox" name="produitA" 
                                            @if ($role->produitA==1)
                                                checked
                                            @endif
                                            
                                            value="1" >
                                        </td>
                                        <td>
                                            <input type="checkbox"
                                            @if ($role->achatA==1)
                                            checked
                                        @endif
                                            name="achatA" value="1">
                                        </td>
                                        <td>
                                            <input type="checkbox"
                                            @if ($role->venteA==1)
                                            checked
                                        @endif
                                            name="venteA" value="1">
                                        </td>
                                        <td>
                                            <input type="checkbox"
                                            @if ($role->parametreA==1)
                                            checked
                                        @endif
                                            name="parametreA" value="1">
                                        </td>
                                        <td>
                                            <input type="checkbox" name="confrereA" 
                                            @if ($role->confrereA==1)
                                            checked
                                        @endif
                                            value="1">
                                        </td>
                                        <td>
                                            <input type="checkbox" name="fournisseurA"
                                            @if ($role->fournisseurA==1)
                                            checked
                                        @endif
                                            value="1">
                                        </td>
                                        <td>
                                            <input type="checkbox" name="organismeA"
                                            @if ($role->organismeA==1)
                                            checked
                                        @endif
                                            value="1">
                                        </td>
                                        <td><input type="checkbox" name="inventaireA"
                                            @if ($role->caisseA==1)
                                            checked
                                        @endif
                                            value="1"></td>
                                        <td><input type="checkbox" name="caisseA" 
                                            @if ($role->caisseA==1)
                                            checked
                                        @endif
                                            value="1"></td>
                                        <td><input type="checkbox"
                                            @if ($role->importationA==1)
                                            checked
                                        @endif
                                            name="importationA" value="1"></td>
                                    </tr>
                                 </tr>
                                 <tr>
                                    <tr>
                                        <td style="    color: green">Modifier</td>
                                        <td><input type="checkbox" 
                                            @if ($role->produitM==1)
                                            checked
                                        @endif
                                            name="produitM" value="1"></td>
                                        <td><input type="checkbox" 
                                            @if ($role->achatM==1)
                                            checked
                                        @endif
                                            name="achatM" value="1">
                                        
                                        </td>
                                        <td>
                                            <input type="checkbox" 
                                            @if ($role->venteM==1)
                                                checked
                                            @endif
                                            name="venteM" value="1">
                                        
                                        </td>
                                        <td><input type="checkbox"
                                            @if ($role->parametreM==1)
                                            checked
                                        @endif
                                            name="parametreM" value="1">
                                        
                                        
                                        </td>
                                        <td>
                                            <input type="checkbox" @if ($role->confrereM==1)
                                                checked
                                            @endif
                                            
                                            name="confrereM" value="1">
                                        </td>
                                        <td>
                                            <input type="checkbox" @if ($role->fournisseurM==1)
                                                checked
                                            @endif name="fournisseurM" value="1"></td>
                                        <td><input type="checkbox" @if ($role->organismeM==1)
                                                checked
                                            @endif name="organismeM" value="1"></td>
                                        <td><input type="checkbox" @if ($role->caisseM==1)
                                                checked
                                            @endif name="inventaireM" value="1"></td>
                                        <td><input type="checkbox" @if ($role->caisseM==1)
                                                checked
                                            @endif name="caisseM" value="1"></td>
                                        <td><input type="checkbox" @if ($role->importationM==1)
                                                checked
                                            @endif name="importationM" value="1"></td>
                                    </tr>
                                 </tr> 
                                 <tr>
                                    <tr>
                                        <td style="    color: red" >Supprimer</td>
                                        <td><input type="checkbox" @if ($role->produitS==1)
                                                checked
                                            @endif name="produitS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->achatS==1)
                                                checked
                                            @endif name="achatS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->venteS==1)
                                                checked
                                            @endif name="venteS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->parametreS==1)
                                                checked
                                            @endif name="parametreS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->confrereS==1)
                                                checked
                                            @endif name="confrereS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->fournisseurS==1)
                                                checked
                                            @endif name="fournisseurS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->organismeS==1)
                                                checked
                                            @endif name="organismeS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->caisseS==1)
                                                checked
                                            @endif name="inventaireS" value="1"></td>
                                        <td><input type="checkbox" @if ($role->caisseS==1)
                                                checked
                                            @endif name="caisseS" value="1"></td>

                                        <td><input type="checkbox" @if ($role->importationS==1)
                                                checked
                                            @endif name="importationS" value="1"></td>
                                    </tr>
                                 </tr>
                                </tbody>

                            </table>
                            
</div>


                        </div>
                                            </section>
                </div>
                <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer ce produit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div>
                                <p class="text text-center mt-4">
                                   
                                </p>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                       </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

                <script>
                    $(document).ready( function () {
    
                        var mydattableproduit =  $('#tableproduit').DataTable({
            dom: 'Bfrtip',
            columnDefs: [
                {
                    targets: 1,
                    className: 'noVis'
                }
            ],
       
            
             initComplete: function() {
                $('.buttons-excel').html('<i class="bi bi-arrow-down"></i>')
                $('.buttons-print').html('<i class="bi bi-printer"></i>')
               },
            "processing": true,
            "defaultContent": '<a type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editMemberModal"  onclick="editMember(data[0])"> <span class="glyphicon glyphicon-edit"></span>Edit</a> / <a href="" class=class="btn btn-danger">Delete</a>'
,
 

        });
} );

                </script>
                <script>
       

                    function charger_id_produit(id){
                        document.getElementById("produit_id").value=id;
                    }
                    function recherche_produit(){
                    var res=document.getElementById('recherch_produit').value;
            document.getElementById('valuecherche').value=res;

                    rout="get_produit"+res
                    if(res==""){
                        rout="gett_produit"
                              } 
                    axios.get(rout)
                        .then(function (response) {
                            document.getElementById("table2").innerHTML= response.data;
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                    
           }

                </script>
                @endsection
    