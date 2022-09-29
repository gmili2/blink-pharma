      
                @extends('layouts.app')

                @section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                {{-- <div class="buttons">
                                    <span>                             
                                        <form action="export-csv" method="POST"   enctype="multipart/form-data">
                                                            @csrf
                                                            
                                                            <input type="text" hidden  name="valuecherche"   id="valuecherche">   

                                                                <input type="text" hidden value="Produit" name="table_choisie">   
                                                                <button type="submit" class="btn-hover color-white" >Exporter</button>
                                                                    </form>
                                                    </span>
                                </div> --}}
                                <div class="buttons" style="margin-top:0px">
                                    {{-- <a href="#" class="btn-hover color-white">Ajouter aux favoris</a> --}}
                                    <a href="ajouterproduit" class="btn-hover color-blue">Ajouter un nouveau produit</a>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="title-p pt-1"><h5>Liste des produits</h5></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Oui</span>
                                        </div>
                                        <div class="status">
                                            <span class="off"><i class="bi bi-circle-fill"></i> Non</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                    
                            <div id="table2" >
                                       

                        
                                    <table id="tableproduit" class="table table-striped selvente" style="width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Est actif</th>
                                        <th>Produit</th>
                                        <th>Catégorie</th>
                                        <th>Forme galénique</th>
                                        <th>PPV</th>
                                        <th>PPH</th>
                                        <th>Code barre</th>
                                        <th>Quantite Disp</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($produits as $produit)
                                  
                                    <tr>
                                        <td>
                                            <div class="status">
                                                <span @if ($produit->active==1)
                                                    class="on"
                                                    @else
                                                    class="off"
                                                @endif ><i class="bi bi-circle-fill"></i></span>
                                            </div>
                                        </td>
                                        <td>{{$produit->name}}</td>
                                        <td>{{$produit->nameclasse}}</td>
                                        <td>{{$produit->nameform}}</td>
                                        <td>{{$produit->PPV}}</td>
                                        <td>{{$produit->PPH}}</td>
                                        <td>{{$produit->code_bare}}</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="informationproduct{{$produit->id}}">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="modifierproduitformule{{$produit->id}}">Modifier</a></li>
                                                    @if ($produit->active==1)
                                                    <li><a class="dropdown-item" href="desactiverproduit{{$produit->id}}">Désactiver</a></li>
                                                        @else
                                                    <li><a class="dropdown-item" href="avtiverproduit{{$produit->id}}">Activer</a></li>
                                                    @endif
                                                    <li>
                                                        <a class="dropdown-item" 
                                                        onclick="charger_id_produit({{$produit->id}})"
                                                        href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a>
                                                     </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach --}}

                                 
                                </tbody>

                            </table>
</div>
{{-- {{ $produits->links() }} --}}


                        </div>
                               
                          </section>
                </div>
                <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered" >
                        <div class="modal-content" >
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
                                 
                                </div>
                                <form id="form1" action="supprimerproduit" method="post">
                                    @method('delete')
                                    @csrf
                                   <input type="text" hidden id="produit_id" name="produit_id">
                                <div class="row section-footer" >
                                    <div class="buttons" style="margin-top:60px">
                                        <a href="#" class="btn btn-hover color-red"  data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                        <button class="btn btn-hover color-blue spacecenter"
                                        >Supprimer</button>

                                    </div>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

                <script>
                    $(document).ready( function () {
                        $('#tableproduit tbody').on( 'click','td','tr', function () {
        //    var id= mydattableproduit.row( this ).data()["id"] ;
        // window.location.replace("/informationproduct"+id)
        var data= mydattableproduit.column( this )  ;
        var id= mydattableproduit.row( this ).data()["id"] ;
var headers = [];

   var dataTableHeaderElements = $('#tableproduit').DataTable().columns().header();
for (var i = 0; i< dataTableHeaderElements.length; i++) {
headers.push($(dataTableHeaderElements[i]).text())    
}    
if(headers[data[0]]!="Actions"){
     window.location.replace("/informationproduct"+id)
}

        } );
                        var mydattableproduit =  $('#tableproduit').DataTable({
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
               },
            "processing": true,
            "serverSide": true,
            "ajax": "gettableproduitajax",
            "defaultContent": '<a type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editMemberModal"  onclick="editMember(data[0])"> <span class="glyphicon glyphicon-edit"></span>Edit</a> / <a href="" class=class="btn btn-danger">Delete</a>'
,
            "columns": [
    { "data": "active" },
     { "data": "name" },
     { "data": "nameclasse" },
     { "data": "nameform" },
     { "data": "PPV" },
     { "data": "PPH" },
     { "data": "code_bare" },

     { "data": "quantite_disponible" },
     
     { "data": "id" }
               


               
            ],
            "columnDefs": [

              {  "render": function ( data, type, row ) {
         console.log(row);
         if (data==1 || data=="1"){
          return '<div class="status"><span class="on"><i class="bi bi-circle-fill"></i> </span></div>';
         }
        else    return '<div class="status"><span class="off"><i class="bi bi-circle-fill"></i> </span>               </div>';
         
      },
      "targets": 0         
  
  },
                {
         
                    "render": function ( data, type, row ) {
                        if(row.active==1)
                        return '<td><div class="dropdown section-action"><a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a><ul class="dropdown-menu"><li><a class="dropdown-item" href="informationproduct'+row.id+'">Afficher</a></li><li><a class="dropdown-item" href="modifierproduitformule'+row.id+'">Modifier</a></li><li><a class="dropdown-item" href="desactiverproduit'+row.id+'/0">Désactiver</a></li><li><a class="dropdown-item" onclick="charger_id_produit('+row.id+')"href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a></li></ul></div></td>'
                  else 
                  return '<td><div class="dropdown section-action"><a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a><ul class="dropdown-menu"><li><a class="dropdown-item" href="informationproduct'+row.id+'">Afficher</a></li><li><a class="dropdown-item" href="modifierproduitformule'+row.id+'">Modifier</a></li><li><a class="dropdown-item" href="avtiverproduit'+row.id+'/0">Activer</a></li><li><a class="dropdown-item" onclick="charger_id_produit('+row.id+')"href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a></li></ul></div></td>'

                    },
                    "targets": 8       
                
                },
              
                    
                { "visible": true,  "targets": [ 1 ] }
            ]
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
    