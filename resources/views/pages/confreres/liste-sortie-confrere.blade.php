
                @extends('layouts.app')

                @section('content')
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <span>                             
                                        <form action="export-csv" method="POST"   enctype="multipart/form-data">
                                                            @csrf
                                                            <input hidden value="{{$sortie}}" id='typesortieentrer'>
                                                            @if ($sortie==1)
                                                            <input type="text" hidden value="SortieConfere" name="table_choisie">
                                                                
                                                            @else
                                                            <input type="text" hidden value="EntrerConfere" name="table_choisie">
                                                                
                                                            @endif

                                                                {{-- <button type="submit" class="btn-hover color-white" >Exporter</button> --}}
                                                                    </form>
                                                    </span>
                                </div>
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Ajouter aux favoris</a>
                                    {{-- <a href="#" class="btn-hover color-white">Historique des opérations</a> --}}
                                    @if ($sortie==1)
                                    <a href="add-sortieconfrre" class="btn-hover color-blue">Crerr</a>
                                        
                                    @else
                                    <a href="add-entrerconfrre" class="btn-hover color-blue">Crerr</a>
                                        
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="title-p pt-1"><h5>
                                        @if ($sortie==1)
                                      
                                        Liste des Sorties confrères
                                            
                                        @else
                                         
                                        Liste des sntrées confrères
                                            
                                        @endif
                                       </h5></div>
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
                                </div>
                            </div>
                            <table id="tablesortie" class="table table-striped" style="width: 100%;">
                                <thead>

 
                                    <tr>
                                        <th>Numéro de transaction</th>
                                        <th>Confrere</th>
                                        <th>Date de creation</th>
                                        <th>Créer le</th>
                                        <th>Total</th>
                                        {{-- <th>Téléchargement</th> --}}
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </section>
                    {{-- <button  onclick="showModal()" >Approuver (F12)</button> --}}

                    <div class="modal fade vente-succes" id="vente-cree" >
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Vente(s) crée(s) avec succés</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="d-flex flex-wrap">
                                                    <li class="d-flex" role="button">
                                                        <div class="icon"><img src="/assets/icons/facture.svg" alt=""></div>
                                                        <a href="/pages/vente/facture.html">Afficher la Facture</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                        <a href="">Imprimer Ticket</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/plus.svg" alt=""></div>
                                                        <a href="/pages/vente/add-vente.html">Créer une Nouvelle Vente</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                        <a href="">Imprimer Bon De Livraison</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/toutelesventes.svg" alt=""></div>
                                                        <a href="/pages/vente/liste.html">Consulter Toutes les Ventes</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                        <a href="">Imprimer Facture</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer ce confrere</h5>
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
                                <form id="form1" action="delete-sortieconfrere" method="post">
                                    @method('delete')
                                    @csrf
                                   <input type="text"  id="vente_id" hidden name="vente_id">
                                <div class="row section-footer">
                                    <div class="buttons">
                                        <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
        
                                        <button class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" 
                                        
                                        aria-label="Close">Supprimer</button>

                                    </div>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function charger_id_produit(id){
                        document.getElementById("vente_id").value=id;
                    }
                </script>
                
 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script>

var rout=""
var type=document.getElementById('typesortieentrer').value;
if(type==1)
rout="gettableconfreresortieajax"
else
rout="gettableconfrereentrerajax"

// alert(rout)

 $(document).ready(function () {
    // var mydattablesortie =  $('#tablesortie').DataTable({
           
    //     });

        var mydattablesortie =  $('#tablesortie').DataTable({
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
              "ajax": rout,
              "defaultContent": '<a type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editMemberModal"  onclick="editMember(data[0])"> <span class="glyphicon glyphicon-edit"></span>Edit</a> / <a href="" class=class="btn btn-danger">Delete</a>'
  ,
              "columns": [
                { "data": "id" },
     { "data": "confrere_name" },
     { "data": "created_at" },
     { "data": "created_at" },
     { "data": "total" },
     { "data": "id" },
    

    
    
                 
  
              ],
              "columnDefs": [
  
  
                  {

                    
                                                    
           
                      "render": function ( data, type, row ) {
                          // if(row.active==1)
                          return  ' <td><div class="dropdown section-action"><a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a><ul class="dropdown-menu"><li><a class="dropdown-item" href="sortie-confrere-detail'+row.id+'">Afficher</a></li><li><a class="dropdown-item" href="modifier-entrerconfrre'+row.id+'}">Modifier</a></li><li><a class="dropdown-item" onclick="charger_id_produit('+row.id+')"href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a></li></ul></div></td>'
                      },
                      "targets": 5     
                  
                  },
                
                      
                  { "visible": true,  "targets": [ 1 ] }
              ]
          });
          $('#tablesortie tbody').on( 'click','td','tr', function () {
                            var data= mydattablesortie.column( this ) ;
        var id= mydattablesortie.row( this ).data()["id"] ;
var headers = [];

   var dataTableHeaderElements = $('#tablesortie').DataTable().columns().header();
for (var i = 0; i< dataTableHeaderElements.length; i++) {
headers.push($(dataTableHeaderElements[i]).text())    
}    
if(headers[data[0]]!="Actions"){
     window.location.replace("/sortie-confrere-detail"+id)
}

                            
          } );
          
});
   
    </script>
    @endsection
         
        {{-- <script>
            function showModal() {
      alert('1')

      $('#vente-cree').modal("show");
      alert('kknjnjn')

    //   $('#myModal').modal('toggle'); // Show if closed, close if shown
// $('#myModal').modal('hide'); // Hide modal
  }
  if(1==1)
  showModal() ;
  
        </script> --}}