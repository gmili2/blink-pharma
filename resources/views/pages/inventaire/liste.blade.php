@extends('layouts.app')
@section('content')
<br/>
<div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="{{url('addinvent')}}" class="btn-hover color-blue">Ajouter un nouveau inventaire</a>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-client mt-4 pt-3">
                            <div class="row filtre-client pb-1">
                                <div class="col-md-12">
                                    <div class="title-p pt-1"><h5>Liste des Inventaires</h5></div>
                                </div>
                            </div>
                            <table id="tableinventaire" class="table table-striped" style="width: 100%;">

                                <thead>
                                    <tr>
                                        <th>id</th>

                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="table" rowspan="1" 
                                    colspan="1" aria-sort="ascending"
                                     aria-label="Invenraire: activer pour trier la colonne par ordre décroissant"
                                      style="width: 89px;">Inventaire</th>
                                        <th>Commentaire</th>
                                        <th>Créer_par</th>
                                        <th>Date création</th>
                                        <th>statut</th>
                                      
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invents as $frn)
                                    <tr>
                                        <td>{{$frn->id}}</td>

                                        <td>{{$frn->nom}}</td>
                                        <td>{{$frn->commentaire}}</td>
                                        <td>{{$frn->name_user}}</td>
                                        <td>{{$frn->created_at}}</td>
                                        <td>
                                            <div class="status">
                                                <a href="#" class="telechargement"> @if($frn->statut>0) 
                                                    <i class="bi bi-check-all" style=" color: rgb(0, 128, 55);"></i>  
                                                     Validé le <b>{{$frn->date_inventaire}}</b>
                                                     par <strong>{{$frn->name_user}}</strong> 
                                                      @else <i class="bi bi-pause-fill" style=" color: rgb(255, 0, 0);"></i>
                                                        En attente @endif</a>
                                            </div>
                                        </td>
                                        <td>
                                       
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    @if($frn->statut>0)
                                                <li><a class="dropdown-item" href="{{url('inventdetail'.$frn->id)}}">Détail</a></li>
                                                @else
                                                    <li><a class="dropdown-item" href="{{url('deleteinvent/'.$frn->id)}}">Supprimer</a></li>
                                                    <li><a class="dropdown-item" href="{{url('generateinvent'.$frn->id)}}">Génerer</a></li>
                                                @endif
                                                
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                          @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer ce fournisseur</h5>
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
                                <form id="form1" action="deletefournisseur" method="post">
                                    @method('delete')
                                    @csrf
                                   <input type="text"  id="fr_id" name="fr_id">
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
                        document.getElementById("fr_id").value=id;
                    }
                </script>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

                <script>
                
                
                $(document).ready(function () {
                
                
                    $('#tableinventaire').DataTable({
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