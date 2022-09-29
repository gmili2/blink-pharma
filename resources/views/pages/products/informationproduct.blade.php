    
                @extends('layouts.app')

                @section('content')
 
                <!-- partial:partials/_navbar.html -->
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    @if ($produit->active==1)
                                    <a  href="desactiverproduit{{$produit->id}}/0" class="btn-hover color-red">Désactiver</a>
                                        @else
                                    <a  href="avtiverproduit{{$produit->id}}/0" class="btn-hover color-green">Activer</a>
                                    @endif
                                    <a href="modifierproduitformule{{$produit->id}}" class="btn-hover color-green">Modifier</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-information mt-4 pt-3">
                            <div class="row pb-1">
                                <div class="col-md-9">
                                    <div class="information-general p-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="pb-1 mb-3">Information générales</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="stock">
                                                    <div class="d-flex justify-content-end gap-2">
                                                        <label>Status:</label>
                                                        <p class="result-stock">En stock</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info d-flex">
                                                    <div class="image"><img src="/images/{{$produit->image}}" alt="" /></div>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Nom :</label> <span>   {{$produit->name}}</span></li>
                                                            <li><label>PPV :</label> <span>   {{$produit->PPV}} Dhs</span></li>
                                                            <li><label>PPH :</label> <span>   {{$produit->PPH}}Dhs</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1 mb-3">Détails</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Code barre</label> <span>   {{$produit->code_bare}}</span></li>
                                                            <li><label>Code barre 2</label> <span>   {{$produit->code_bare2}}</span></li>
                                                            <li><label>Catégorie</label> <span>   {{$produit->nametype}}</span></li>
                                                            <li class="full"><label>Classe thérapeutique</label> <span>   {{$produit->nameclasse}}</span></li>
                                                            <li><label>Forme galénique</label> <span>   {{$produit->nameform}}</span></li>
                                                            <li><label>DCI</label> <span>   {{$produit->namedci}}</span></li>
                                                            <li><label>Gamme</label> <span>   {{$produit->gamme}}</span></li>
                                                            <li><label>Laboratoire</label> <span>   {{$produit->laboratoire}}</span></li>
                                                            <li><label>Zone</label> <span>  {{$produit->image}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1">Informations du stock</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>PPH</label> <span> {{$produit->PPH}}</span></li>
                                                            <li><label>PPV</label> <span> {{$produit->PPV}}</span></li>
                                                            <li><label>TVA sur Achat</label> <span> {{$produit->TVA}}%</span></li>
                                                            <li><label>Est de remboursement</label> <span> {{$produit->remboursable}}</span></li>
                                                            <li><label>Base de remboursement</label> <span> {{$produit->image}}</span></li>
                                                            <li><label>Stock min</label> <span>Aucun</span></li>
                                                            <li><label>Stock max</label> <span>Aucun</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="information-prix mt-4 p-4">
                                        <h5>Prix du produit</h5>
                                 

                                        </h4>
                                        <div class="buttons">
                                            <a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#add-prix-Modal">Creer</a>
                                        </div>
                                    </div>
                                    @if (sizeof($prixproduits)>0)
                                        

                                    <table id="tableprix" class="table table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>PPH</th>
                                                <th>PPV</th>
                                                <th>date create</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($prixproduits as $p)
                                          
                                            <tr>
                                                
                                                <td>{{$p->PPH}}</td>
                                                <td>{{$p->PPV}}</td>
                                                <th>{{$p->created_at}}</th>

                                            
                                                
                                            </tr>
                                            @endforeach
        
                                         
                                        </tbody>
        
                                    </table>
        
                                   
                                    @endif

                                    <div class="modal fade" id="add-prix-Modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajouter un prix au produit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text">Information sur prix</p>
                                                    <form method="POST" action="addprixproduits{{$produit->id}}">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-5"><label class="form-label">PPH</label> <input type="number" class="form-control" placeholder="50.00" value="{{$produit->PPH_prix}}" name="pph_prix" /></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-5"><label class="form-label">PPV</label> <input type="number" class="form-control" placeholder="50.00" value ="{{$produit->PPV_prix}}" name="ppv_prix" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="buttons">
                                                            @if($produit->PPV_prix==null || $produit->PPV_prix=="null"  )
                                                            <button type="submit" class="btn-hover btn color-green">Sauvegarder</button> <button type="button" class="btn-hover btn color-red" data-bs-dismiss="modal">Annuler</button>
                                                       @else
                                                       <button type="submit" class="btn-hover btn color-green">Sauvegarder</button> <button type="button" class="btn-hover btn color-red" data-bs-dismiss="modal">Annuler</button>

                                                        @endif
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-prix mt-4 p-4">
                                        <h5>Dates de péremption du produit : {{$produit->date_peremption}}</h5>
                                        <div class="buttons"><a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#add-date-Modal">
                                            Créer
                                          
                                            </a></div>
                                    </div>

                                    @if (sizeof($Datepremptionproduit)>0)
                                    <table id="tabledate" class="table table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>mise a jour le </th>
                                                <th>action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Datepremptionproduit as $p)
                                          
                                            <tr>
                                                
                                                <tr>
                                                    <td>{{$p->dateperemption}}</td>
                                                    <td>{{$p->updated_at}}</td>
                                                    <td>
                                                        <div class="dropdown section-action">
                                                            <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#" class="btn-hover color-blue"
                                                                     data-bs-toggle="modal" 
                                                                      data-bs-target="#modifier-date-Modal{{$p->id}}"
                                                                   >Modifier</a></li>
                                                                <li>
                                                                    <a class="dropdown-item" 
                                                                    onclick="charger_id_produit({{$p->id}})"
                                                                    href="" data-bs-toggle="modal" data-bs-target="#search-client" >
                                                                    Supprimer</a>
                                                                 </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                                
                                            </tr>
                                            <div class="modal fade" id="modifier-date-Modal{{$p->id}}" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Ajouter date péremption produit</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text">Information sur date de péremption</p>
                                                            <form method="POST" action="modifier_date_peremption">
                                                                @csrf
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-5">
                                                                            <input type="text" hidden name="id" value="{{$p->id}}">
                                                                            <label class="form-label">Date de péremption</label>
                                                                            
                                                                            <input type="date"
                                                                             class="form-control" value="{{$p->dateperemption}}" placeholder="50.00" 
                                                                             name="add_date_peremption" /></div>
                                                                    </div>
                                                                </div>
                                                                <div class="buttons">
                                                                    <button type="submit" class="btn-hover btn color-green">Sauvegarder</button> <button type="button" class="btn-hover btn color-red" data-bs-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
        
                                         
                                        </tbody>
        
                                    </table>
                                   
                                          
                                    </table>
                                    @endif
                                    <div class="information-prix mt-4 p-4">
                                        <h5>historique des produits</h5>
                                    </div>
                                    <div class="modal fade" id="add-date-Modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ajouter date péremption produit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text">Information sur date de péremption</p>
                                                    <form method="POST" action="add_date_peremption">
                                                        @csrf
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-5">
                                                                    <input type="text" hidden name="id" value="{{$produit->id}}">
                                                                    <label class="form-label">Date de péremption</label>
                                                                    
                                                                    <input type="date"
                                                                     class="form-control" value="{{$produit->date_peremption}}" placeholder="50.00" 
                                                                     name="add_date_peremption" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="buttons">
                                                            <button type="submit" class="btn-hover btn color-green">Sauvegarder</button> <button type="button" class="btn-hover btn color-red" data-bs-dismiss="modal">Annuler</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-right">
                                        <div class="block-header">
                                            <div class="block">
                                                <div class="image"><img src="/assets/icons/etatstock.svg" alt="" /></div>
                                                <div class="content px-3">
                                                    <h3>quantité en stock</h3>
                                                    <span>Dont un avoir de : 0 Dhs</span>
                                                </div>
                                                <div class="fornisseur-price"><span>{{$produit->quantite_disponible}} Piece</span></div>
                                            </div>
                                        </div>

                                        <div class="block-information">
                                            <h5>Informations de traçabilité</h5>
                                            <ul>
                                                <li class="bg-color"><span>Créer par</span> <span>Dr {{$creer_par->name}}</span></li>
                                                <li><span>Créer le</span> <span>{{$produit->created_at}}</span></li>
                                                <li class="bg-color"><span>Mise à jour par</span> <span>Dr {{$creer_par->name}}</span></li>
                                                <li><span>Mise à jour le </span> <span>{{$produit->updated_at}}</span></li>
                                            </ul>
                                        </div>
                                        <div class="section-aide d-flex">
                                            <div class="support">
                                                <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                                    <span> {{Auth::User()->tele}}</span>
                                                </a>
                                            </div>
                                            <div class="aide">
                                                <a href="" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/aide.svg" alt="" /></div>
                                                    <span>Aide</span>
                                                </a>
                                            </div>
                                            <div class="retour">
                                                <a href="" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/retour.svg" alt="" /></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                <form id="form1" action="delete_date_peremption" method="post">
                                    @method('delete')
                                    @csrf
                                   <input type="text"  id="date_id" hidden name="date_id">
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
@endsection
<script>
     function charger_id_produit(id){
                        document.getElementById("date_id").value=id;
                    }
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

      <script>
      
      function goo(id){
        window.location.replace("/detailcaisse"+id)    }
      $(document).ready(function () {
        $('#tableprix').DataTable({
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
          $('#tabledate').DataTable({
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