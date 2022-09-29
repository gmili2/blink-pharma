@extends('layouts.app')
@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-accueil mt-3">
                    <form action="{{url('addcaisse')}}" method="post">
                        @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <b>caisse : </b>CS- {{$caisse->id}} <br/>
                                        <b>creer par  : </b>{{$user->name}} <br/>

                                        <b>montant de systeme : </b> {{$caisse->montant_sys}} <br/>
                                        <b>montant de la caisse : </b>{{$caisse->montant_caisse}} <br/>
                                       <div id="ecart">
                                        <b >ecart : </b> {{$caisse->montant_sys-$caisse->montant_caisse}} <br/>
                                        </div>
                                        <b>nombre de vente : </b>{{sizeof($ventes)}} <br/>
                                        <b >commentaire : </b> {{$caisse->commentaire}} <br/>


        
                                       
                                         
        </div>
                                    <div class="col-md-12">
                                    <div class="row ">

                                   
                           
                           
                        </div>
                                        <div class="section-table-home mt-4 pt-3">
                                            <div class="row filtre-home pb-1">
                                            
                                                <div class="col-md-6">
                                                    <div class="title-p pb-1">
                                                        <h5>Liste des ventes de la caisse</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="status-actif">
                                                        <div class="status">
                                                            <span class="on"><i class="bi bi-circle-fill"></i> Livré</span>
                                                        </div>
                                                        <div class="status">
                                                            <span class="off"><i class="bi bi-circle-fill"></i> Non livré</span>
                                                        </div>
                                                    </div>
                                                    <div class="status-actif">
                                                        <div class="status">
                                                            <span class="on"><i class="bi bi-circle-fill"></i> Payé totalement</span>
                                                        </div>
                                                        <div class="status">
                                                            <span class="ongoing"><i class="bi bi-circle-fill"></i> Payé partiellement</span>
                                                        </div>
                                                        <div class="status">
                                                            <span class="off"><i class="bi bi-circle-fill"></i> crédit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                         
                                            </div>
                                                <br/>                                                  
                                            <table id="taabledetailcaisse" class="table table-striped selvente" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>N°</th>
                                                        <th>client</th>
                                                        <th>credit</th>
                                                        <th>montant</th>
                                                        <th>montant recue</th>
                                                        <th>type paymenet</th>
                                                        <th>livre</th>
                                                        <th>status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $count=1; @endphp
                                                    @foreach($ventes as $pro)
                                                    <tr>
                                                        <td>{{$pro->id}}</td>
                                                        <td>{{$pro->nom_client}}</td>
                                                        <td>{{$pro->montant_credit}}</td>
                                                        <td><strong id="ppv{{$count}}">{{$pro->montant_PU}}</strong> DH</td>
                                                        <td id="qtesys{{$count}}">{{$pro->montant_recu}}</td>
                                                        
                                                        @if ($pro->mode_payment!=0)
                                                        <td>{{$type_payment[$pro->mode_payment-1]->nom}}</td>
                                                        @else
                                                        <td>non payee</td>
                                                        @endif 
                                                        <td>

                                                            @if ($pro->livree==1 || $pro->livree=="1")
    
                                                        <div class="status"><span class="on"><i class="bi bi-circle-fill"></i> </span></div>
                                                                
                                                            @else
    
    
                                                         
                                                        <div class="status"><span class="off"><i class="bi bi-circle-fill"></i> </span></div>
                                                                
                                                            @endif
                                                        </td>
                                                        <td>

                                                            @if ($pro->status==1 || $pro->status=="1")
    
                                                               <div class="status"><span class="on"><i class="bi bi-circle-fill"></i> </span></div>
                                                            @endif
                                                                
                                
                                                            @if (($pro->status==2 || $pro->status=="2"))
                                                            <div class="status">   
                                                                        <span class="ongoing"><i class="bi bi-circle-fill"></i> </span>
                                                            </div>
                                                            @endif
                                                            @if (($pro->status==0 || $pro->status=="0"  || $pro->status==null))
                                                            <div class="status">   
                                                                        <span class="off"><i class="bi bi-circle-fill"></i> </span>
                                                            </div>
                                                            @endif


                                                        </td>

                                                        {{-- <td id="qtesys{{$count}}">{{$pro->mode_payment}}</td> --}}


                                                        

                                                            {{-- <input type='number' class="form-control" style="width:150px"
                                                            required
                                                            name='qteph_{{$count}}'
                                                            
                                                            id="qteph{{$count}}" oninput="calculate({{$count}})"/> --}}
                                                        
                                                        {{-- <td>
                                                            <b id="ecart{{$count}}">--</b>
                                                        </td> --}}
                                                    </tr>
                                                    {{-- <input type="hidden" name="produit_{{$count}}" value='{{$pro->id}}'/>
                                                    <input type="hidden" name="nom_{{$count}}" value='{{$pro->name}}'/>
                                                    <input type="hidden" name="qtesys_{{$count}}" value='{{$pro->quantite_disponible}}'/>
                                                    <input type="hidden" name="ppv_{{$count}}" value='{{$pro->PPV_prix}}'/>
                                                   --}}
                                                    @php $count+=1; @endphp
                                                    @endforeach
                                                    {{-- <input type="" hidden name="invent_id" value='{{$invent->id}}'/> --}}
                                                    <input type=""  hidden name="counter" value='{{$count}}'/>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
</form>
                    </section>
                </div>
                <script>

function calculateecart(){
    // alert("kk")
    
    var montant_caisse = parseInt(document.getElementById('montant_caisse').value) ;
    var montant_sys = parseInt(document.getElementById('montant_sys').value) ;
    var rest=montant_sys-montant_caisse
if(rest>0){
    document.getElementById('ecart').innerHTML= "<b >ecart : </b><b  style='color:red' > "+ 
        -(montant_sys-montant_caisse) + " DH </b>";
}
else
document.getElementById('ecart').innerHTML= "<b >ecart : </b><b  style='color:green' > "+ 
        -(montant_sys-montant_caisse) + " DH </b>";

// alert('j')


    // <b >ecart : </b> 0dh <br/>//

}
                    function calculate(count){
                        var prix = document.getElementById('ppv'+count).innerText;
                        
                        var qtesys =parseInt(document.getElementById('qtesys'+count).innerText) ;
                        var qteph = parseInt(document.getElementById('qteph'+count).value) ;
                        // alert(qteph-qtesys)
                        // if(qtesys>=0)
                        // {
                            // alert("positive")
                        if(qteph-qtesys < 0)
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:red'>"+ (qteph-qtesys)*prix + " DH </b>";
                        else if (qteph-qtesys > 0)
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:green'> + "+ (qteph-qtesys)*prix + " DH </b>";
                        else
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:black'>"+ (qteph-qtesys)*prix + " DH </b>";
                        // }
                        // else
                        // {
                        //     alert("negative")

                        //     qtesys = qtesys * (-1);
                        // alert(qtesys)

                        //     if(qtesys < qteph)
                        // document.getElementById('ecart'+count).innerHTML= "<b style='color:green'> +"+ (qtesys-qteph)*prix + " DH </b>";
                        // else if (qtesys > qteph)
                        // document.getElementById('ecart'+count).innerHTML= "<b style='color:red'>  "+ (qtesys-qteph)*prix + " DH </b>";
                        // else
                        // document.getElementById('ecart'+count).innerHTML= "<b style='color:black'>"+ (qtesys-qteph)*prix + " DH </b>";
                        // }
                    }
                </script>
                
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>


$(document).ready(function () {


    $('#taabledetailcaisse').DataTable({
      dom: 'Bfrtip',
      columnDefs: [
          {
              targets: 1,
              className: 'noVis'
          }
      ],
      buttons: [
       'excel', 'print',
          {
          extend: 'colvis',
          collectionLayout: 'fixed columns',
          collectionTitle: '<h5>Titre</h5>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.'
          }
      ],
      language: {
         search: '', searchPlaceholder: "Recherche...",
          "emptyTable": "Aucune donnée disponible dans le tableau",
          "loadingRecords": "Chargement...",
          "processing": "Traitement...",
          "aria": {
              "sortAscending": ": activer pour trier la colonne par ordre croissant",
              "sortDescending": ": activer pour trier la colonne par ordre décroissant"
          },
          "select": {
              "rows": {
                  "_": "%d lignes sélectionnées",
                  "1": "1 ligne sélectionnée"
              },
              "cells": {
                  "1": "1 cellule sélectionnée",
                  "_": "%d cellules sélectionnées"
              },
              "columns": {
                  "1": "1 colonne sélectionnée",
                  "_": "%d colonnes sélectionnées"
              }
          },
          "autoFill": {
              "cancel": "Annuler",
              "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
              "fillHorizontal": "Remplir les cellules horizontalement",
              "fillVertical": "Remplir les cellules verticalement"
          },
          "searchBuilder": {
              "conditions": {
                  "date": {
                      "after": "Après le",
                      "before": "Avant le",
                      "between": "Entre",
                      "empty": "Vide",
                      "not": "Différent de",
                      "notBetween": "Pas entre",
                      "notEmpty": "Non vide",
                      "equals": "Égal à"
                  },
                  "number": {
                      "between": "Entre",
                      "empty": "Vide",
                      "gt": "Supérieur à",
                      "gte": "Supérieur ou égal à",
                      "lt": "Inférieur à",
                      "lte": "Inférieur ou égal à",
                      "not": "Différent de",
                      "notBetween": "Pas entre",
                      "notEmpty": "Non vide",
                      "equals": "Égal à"
                  },
                  "string": {
                      "contains": "Contient",
                      "empty": "Vide",
                      "endsWith": "Se termine par",
                      "not": "Différent de",
                      "notEmpty": "Non vide",
                      "startsWith": "Commence par",
                      "equals": "Égal à",
                      "notContains": "Ne contient pas",
                      "notEnds": "Ne termine pas par",
                      "notStarts": "Ne commence pas par"
                  },
                  "array": {
                      "empty": "Vide",
                      "contains": "Contient",
                      "not": "Différent de",
                      "notEmpty": "Non vide",
                      "without": "Sans",
                      "equals": "Égal à"
                  }
              },
              "add": "Ajouter une condition",
              "button": {
                  "0": "Recherche avancée",
                  "_": "Recherche avancée (%d)"
              },
              "clearAll": "Effacer tout",
              "condition": "Condition",
              "data": "Donnée",
              "deleteTitle": "Supprimer la règle de filtrage",
              "logicAnd": "Et",
              "logicOr": "Ou",
              "title": {
                  "0": "Recherche avancée",
                  "_": "Recherche avancée (%d)"
              },
              "value": "Valeur"
          },
          "searchPanes": {
              "clearMessage": "Effacer tout",
              "count": "{total}",
              "title": "Filtres actifs - %d",
              "collapse": {
                  "0": "Volet de recherche",
                  "_": "Volet de recherche (%d)"
              },
              "countFiltered": "{shown} ({total})",
              "emptyPanes": "Pas de volet de recherche",
              "loadMessage": "Chargement du volet de recherche...",
              "collapseMessage": "Réduire tout",
              "showMessage": "Montrer tout"
          },
          "buttons": {
              "collection": "Collection",
              "colvis": "<i class='bi bi-layout-three-columns'></i>",
              "colvisRestore": "Rétablir visibilité",
              "copy": "Copier",
              "copySuccess": {
                  "1": "1 ligne copiée dans le presse-papier",
                  "_": "%ds lignes copiées dans le presse-papier"
              },
              "copyTitle": "Copier dans le presse-papier",
              "csv": "CSV",
              "excel": "Excel",
              "pageLength": {
                  "-1": "Afficher toutes les lignes",
                  "_": "Afficher %d lignes"
              },
              "pdf": "PDF",
              "print": "Imprimer",
              "copyKeys": "Appuyez sur ctrl ou u2318 + C pour copier les données du tableau dans votre presse-papier.",
              "createState": "Créer un état",
              "removeAllStates": "Supprimer tous les états",
              "removeState": "Supprimer",
              "renameState": "Renommer",
              "savedStates": "États sauvegardés",
              "stateRestore": "État %d",
              "updateState": "Mettre à jour"
          },
          "decimal": ",",
          "search": "Rechercher:",
          "datetime": {
              "previous": "Précédent",
              "next": "Suivant",
              "hours": "Heures",
              "minutes": "Minutes",
              "seconds": "Secondes",
              "unknown": "-",
              "amPm": [
                  "am",
                  "pm"
              ],
              "months": {
                  "0": "Janvier",
                  "2": "Mars",
                  "3": "Avril",
                  "4": "Mai",
                  "5": "Juin",
                  "6": "Juillet",
                  "8": "Septembre",
                  "9": "Octobre",
                  "10": "Novembre",
                  "1": "Février",
                  "11": "Décembre",
                  "7": "Août"
              },
              "weekdays": [
                  "Dim",
                  "Lun",
                  "Mar",
                  "Mer",
                  "Jeu",
                  "Ven",
                  "Sam"
              ]
          },
          "editor": {
              "close": "Fermer",
              "create": {
                  "title": "Créer une nouvelle entrée",
                  "button": "Nouveau",
                  "submit": "Créer"
              },
              "edit": {
                  "button": "Editer",
                  "title": "Editer Entrée",
                  "submit": "Mettre à jour"
              },
              "remove": {
                  "button": "Supprimer",
                  "title": "Supprimer",
                  "submit": "Supprimer",
                  "confirm": {
                      "_": "Êtes-vous sûr de vouloir supprimer %d lignes ?",
                      "1": "Êtes-vous sûr de vouloir supprimer 1 ligne ?"
                  }
              },
              "multi": {
                  "title": "Valeurs multiples",
                  "info": "Les éléments sélectionnés contiennent différentes valeurs pour cette entrée. Pour modifier et définir tous les éléments de cette entrée à la même valeur, cliquez ou tapez ici, sinon ils conserveront leurs valeurs individuelles.",
                  "restore": "Annuler les modifications",
                  "noMulti": "Ce champ peut être modifié individuellement, mais ne fait pas partie d'un groupe. "
              },
              "error": {
                  "system": "Une erreur système s'est produite (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Plus d'information<\/a>)."
              }
          },
          "stateRestore": {
              "removeSubmit": "Supprimer",
              "creationModal": {
                  "button": "Créer",
                  "order": "Tri",
                  "paging": "Pagination",
                  "scroller": "Position du défilement",
                  "search": "Recherche",
                  "select": "Sélection",
                  "columns": {
                      "search": "Recherche par colonne",
                      "visible": "Visibilité des colonnes"
                  },
                  "name": "Nom :",
                  "searchBuilder": "Recherche avancée",
                  "title": "Créer un nouvel état",
                  "toggleLabel": "Inclus :"
              },
              "renameButton": "Renommer",
              "duplicateError": "Il existe déjà un état avec ce nom.",
              "emptyError": "Le nom ne peut pas être vide.",
              "emptyStates": "Aucun état sauvegardé",
              "removeConfirm": "Voulez vous vraiment supprimer %s ?",
              "removeError": "Échec de la suppression de l'état.",
              "removeJoiner": "et",
              "removeTitle": "Supprimer l'état",
              "renameLabel": "Nouveau nom pour %s :",
              "renameTitle": "Renommer l'état"
          },
          "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
          "infoEmpty": "Affichage de 0 à 0 sur 0 entrées",
          "infoFiltered": "(filtrées depuis un total de _MAX_ entrées)",
          "lengthMenu": "Afficher _MENU_ entrées",
          "paginate": {
              "first": "Première",
              "last": "Dernière",
              "next": "<i class='bi bi-chevron-right'></i>",
              "previous": "<i class='bi bi-chevron-left'></i>"
          },
          "zeroRecords": "Aucune entrée correspondante trouvée",
          "thousands": " "
     
      },
      initComplete: function() {
       $('.buttons-excel').html('<i class="bi bi-arrow-down"></i>')
       $('.buttons-print').html('<i class="bi bi-printer"></i>')
      }
      
    });
}); 

</script>
                @endsection