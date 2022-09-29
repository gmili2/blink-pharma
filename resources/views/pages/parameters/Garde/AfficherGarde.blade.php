@extends('layouts.app')

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
                                        <button type="submit" class="btn-hover color-green">Crée une garde</button>
                                    </div>
                                </div>
                            </div>




                                <div class="block-form bg-white p-4 mb-4">
                                    <table id="tableproduit" class="table table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Date debut</th>
                                                <th>Date fin</th>
                                                <th>Horaires d'ouverture</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                      <tbody>
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

                                </tbody>
                                    </table>
                                </div>

                        </form>
                    </section>

                    <div class="modal fade" id="modelsupprimerdscsf" tabindex="-1" role="dialog" aria-labelledby="modelsupprimer" aria-hidden="true">

                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form   action="DeleteGarde" method="POST" >
                                    @csrf
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">  supprimer ce garde </h5>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" id="NomGarde"  class="form-control" >


                                     </div>

                                     {{-- <div class="modal-body"> --}}

                                        <input type="text" id="IdGarde"  name="id"  class="form-control" hidden  >
                                     {{-- </div> --}}
                                     <div class="row section-footer">
                                        <div class="buttons" style="margin-top:60px"> 
                                            <a href="#" class="btn btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
            
                                            <button class="btn btn-hover color-blue spacecenter" >Supprimer</button>
    
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                   </div>



                   <div class="modal fade vente-succes search-client" id="modelsupprimer" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer cette garde</h5>
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
                                <form id="form1" action="DeleteGarde" method="post">
                                    {{-- @method('delete') --}}
                                    @csrf
                                    <input type="text" id="NomGarde"  hidden class="form-control" >

                                    <input type="text" id="IdGarde"  name="id"  class="form-control" hidden  >
                                    <div class="row section-footer">
                                    <div class="buttons" style="margin-top:60px"> 
                                        <a href="#" class="btn btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
        
                                        <button class="btn btn-hover color-blue spacecenter" >Supprimer</button>

                                    </div>
                                </div>
                            </form>

                            </div>
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

    
    
           
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>

    $(document).ready( function () {

         $('#tableproduit').DataTable({
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

    });
} );

</script>

