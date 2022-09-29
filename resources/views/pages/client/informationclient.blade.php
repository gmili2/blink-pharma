
                <!-- partial:partials/_navbar.html -->
                <!-- partial -->
                    
                {{-- @extends('layouts.app')

                @section('content') --}}
{{-- </br> --}}
@extends('layouts.app')

@section('content')
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                @if ($clients->credit==0)
                                <div class="buttons">
                                    <a onclick="affichermessage()" class="btn-hover color-white">Régularisation du solde</a>
                                    <a href="{{url('modifyclient'.$clients->id)}}" class="btn-hover color-green">Modifier</a>
                                </div>
                                @else
                                <div class="buttons">
                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#search-client" class="btn-hover color-white">Régularisation du solde</a>
                                    <a href="{{url('modifyclient'.$clients->id)}}" class="btn-hover color-green">Modifier</a>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                        <div class="section-information mt-4 pt-3">
                            <div class="row pb-1">
                                <div class="col-md-9">
                                    <div class="information-general p-4">
                                        <h5 class="pb-1 mb-3">Informations générales</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-header d-flex">
                                                    <!--<div class="image"><img src="/images/{{$clients->image}}" style="width: 94px;" alt="" /></div>-->

                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Nom :</label> <span>{{$clients->name}}</span></li>
                                                            <li><label>Téléphone :</label> <span>{{$clients->tele}}</span></li>
                                                            <li><label>CNSS :</label> <span>{{$clients->cnss}}</span></li>
                                                            <li><label>CIN : </label> <span>{{$clients->cin}}</span></li>
                                                            <li><label>Email :</label> <span>{{$clients->email}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Gestionnaire</label> <span>{{$clients->name}}</span></li>
                                                            <li><label>Nom</label> <span>Client carte bancaire</span></li>
                                                            <li><label>Type</label> <span>{{$clients->type}}</span></li>
                                                            <li><label>CIN</label> <span>{{$clients->cin}}</span></li>
                                                            <li><label>CNSS</label> <span>{{$clients->cnss}}</span></li>
                                                            <li><label>Plafond de crédit</label> <span>{{$clients->plafan_credit}}</span></li>
                                                            <li><label>Téléphone</label> <span>{{$clients->tele}}</span></li>
                                                            <li><label>E-mail</label> <span>{{$clients->email}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1">Informations de l’organisme</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Organisme</label> <span>{{$clients->organisme}}</span></li>
                                                            <li><label>Numéro d'immatriculation</label> <span>{{$clients->num_immatriculation}}</span></li>
                                                            <li><label>Numéro d’affiliaton</label> <span>{{$clients->num_affiliation}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <h5 class="mb-2 mt-4">Adresse</h5>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Adresse</label> <span>{{$clients->adresse}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Ville</label> <span>{{$clients->ville}}</span></li>
                                                            <li><label>Pays</label> <span>{{$clients->pays}}</span></li>
                                                            <li><label>Code postal</label> <span>{{$clients->code_postale}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <h5 class="mb-2 mt-4">Informations déscriptives</h5>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Déscreption</label> <span>{{$clients->description}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="information-history mt-4 p-4">
                                        <div class="col-md-6">
                                            <div class="title-p pb-1">
                                                <h5>Regulerasion de solde</h5>
                                            </div>
                                        </div>
                                        <table id="tablereg" class="table table-striped mt-3 selvente" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th >credit</th>
                                                    <th>montant  recue</th>
                                                    <th>reste</th>
                                                    <th>type paiment</th>
                                                    <th>date effectuer</th>

                                                  
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($reg_solde as $reg)
                                                    
                                                <tr>
                                                    <td>{{ $reg->montant_credit+$reg->montant_paye}}</td>
                                                    <td>{{ $reg->montant_paye}}</td>
                                                    <td>{{ $reg->montant_credit}}</td>

                                                    <td>{{$type_payment[ $reg->mode_paiement-1]->nom}}</td>
                                                    <td>{{ $reg->date_effectuer}}</td>

                                                    {{-- <td>{{ $reg->mode_paiement}}</td> --}}

                                                   
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="information-history mt-4 p-4">
                                        <div class="col-md-6">
                                            <div class="title-p pb-1">
                                                <h5>Historique des produits</h5>
                                            </div>
                                        </div>
                                        <table id="tableproduitvente" class="table table-striped mt-3 selvente" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Produit</th>
                                                    <th>Quantité</th>
                                                    <th>Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($produits as $pr)
                                                    
                                                <tr>
                                                    <td>2021-11-24 10:16</td>
                                                    <td>Vente</td>
                                                    <td>{{$pr->name}}</td>
                                                    <td>-{{$pr->quantite}}</td>
                                                    <td>-{{$pr->quantite}}</td>
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="information-vente mt-4 p-4">
                                        <div class="col-md-6">
                                            <div class="title-p pb-1">
                                                <h5>Ventes</h5>
                                            </div>
                                        </div>
                                        <table id="venteofclient" class="table table-striped mt-3 selvente" style="width: 100%;">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Numéro de transaction</th>
                                                    <th>Date de vente</th>
                                                    <th>Total</th>
                                                    <th>Livré</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($ventes as $v)
                                                    
                                                <tr>
                                                    <td>{{$v->id}}</td>
                                                    <td>{{$v->created_at}}</td>
                                                    <td>{{$v->montant_PU}}</td>
                                                   
                                                   @if ($v->livree=="1")
                                                   <td>


                                                    <div class="status"><span class="yes">Oui</span></div>
                                                </td> 
                                                   @else
                                                   <td>


                                                    <div class="status"><span class="no">Non</span></div>
                                                </td>
                                                   @endif
                                                   

                                                   @if ($v->status=="1")
                                                   <td>
                                                    <div class="status"><span class="text-yes">Complété</span></div>
                                                </td>
                                                   @else
                                                   <td>


                                                    <div class="status"><span class="no">Non</span></div>
                                                </td>
                                                   @endif
                                                   
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-right" style="
                                        max-height: 608px;
    overflow-y: auto;">
                                        <div class="block-header">
                                            <div class="block">
                                                <div class="image"><img 
                                                    src="/assets/icons/database.svg" alt="" /></div>
                                                <div class="content px-3">
                                                    <h3>Total non payé</h3>
                                                    <span>Dont un avoir de : 0dh</span>
                                                </div>credit
                                                <div class="fornisseur-price"><span>{{$clients->credit}} dh
                                                    {{-- @if (sizeof($credit)>0)
                                                    {{$credit[0]->credit_total}} Dhs   
                                                    @else
                                                    0DH
                                                    @endif --}}
                                                    </span></div>
                                            </div>
                                        </div>

                                        <div class="block-information">
                                            <h5>Informations de traçabilité</h5>
                                            <ul>
                                                <li class="bg-color"><span>Créer par</span> <span>Dr {{$creer_par->name}}</span></li>
                                                <li><span>Créer le</span> <span>{{ substr($creer_par->created_at, 8,3) ."-".substr($creer_par->created_at, 5, 2)."-".substr($creer_par->created_at, 0, 4)." "
 .substr($creer_par->created_at, 11, 5)}}}</span></li>
                                                <li class="bg-color"><span>Mise à jour par</span> <span>Dr {{$creer_par->name}}</span></li>
                                                <li><span>Mise à jour le </span> <span>
                                                
                                                 
                                                {{ substr($creer_par->updated_at, 8,3) ."-".substr($creer_par->updated_at, 5, 2)."-".substr($creer_par->updated_at, 0, 4)." "
 .substr($creer_par->updated_at, 11, 5)}}
                                                </span></li>
                                            </ul>
                                        </div>
                                        <div class="section-aide d-flex">
                                            <div class="support">
                                                <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                                    <span>05 30 500 500</span>
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
                                <h5 class="modal-title">payer le credit de  ce client</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="form1" action="credit_client" method="post">
                                @csrf
                            <div class="montant-vente">
                                <div class="detail-price">
                                    <div class="shadow-block mt-4 p-4">
                                        <div class="status-vente mt-5">
                                            <div class="row">
                                                <div class="col-md-6" style="    height: 92px;">
                                                    <input type="text" hidden  id="mode_payment" name="mode_payment" value="1">
                                                 
                                                    <h5  id="affichemontant" class="modal-title">montant non payé :
                                                        {{$clients->credit}}
                    
                                                    </h5>          
                                                    <input type="number" id="montantreg"  min="1"
                                                    required
                                                    name="montantreg" placeholder="montant regulire" class="form-control"
                                                    onchange="calculermontantnonpaye()"
                                                    onkeyup="calculermontantnonpaye()">
                                                     <input type="text" hidden
                                                      value=" {{$clients->credit}}" id="creditmontant" name="creditmontant"  placeholder="montant regulire"
                                                     onkeyup="calculermontantnonpaye()">
                                                     <input type="text" hidden
                                                     value=" {{$clients->id}}"   id="idclient" name="idclient" placeholder="montant regulire">
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="col-md-20"  id="mode_payment_div">
                                                     <div>
                                                        <ul class="liste-raccourci">
                                                            <li>
                                                               <a role="button" class="active" id='espece' onclick="activeespece()">
                                                                  <div class="img"> <i class="bi bi-wallet2"></i> </div>
                                                                  <span>Espéces</span>
                                                               </a>
                                                            </li>

                                                            <li>
                                                                <a id="cheque" onclick="activecheque()" role="button" >
                                                                   <div class="img"> <i class="bi bi-credit-card-2-front"></i> </div>
                                                                   <span>Chéque</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a  role="button" id="cartebancaire" onclick="activecartebancaire()">
                                                                   <div class="img"> <i class="bi bi-credit-card"></i> </div>
                                                                   <span>Carte bancaire </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a id="lettre" onclick="activelettre()" role="button">
                                                                   <div class="img"> <i class="bi bi-file-earmark-text"></i> </div>
                                                                   <span>Lettre de change</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a id="autre" onclick="activeautre()" role="button">
                                                                   <div class="img"> <i class="bi bi-exclamation-triangle"></i> </div>
                                                                   <span>Autre</span>
                                                                </a>
                                                            </li>

                                                         </ul>
                                                         
                            {{-- <div class="row" style="    margin-right: 261px;
                            margin-top: 61px;">

                               
                            </div> --}}
                                                     </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label class="form-label">Date : </label>

                                                    
<input type="datetime-local" id="meeting-time" class="form-control"
name="date_effectuer">

                                                    {{-- <input type="datetime" class="form-control" name="date_naissance"  /> --}}
                                             
                                                </div>

                                                <div class="row" style="    padding-left: 24px;
                                                ">
                                                    <textarea name="commentaire" placeholder="commentaire" id="" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                        </div>
                        <div class="row section-footer">
                            <div class="buttons" style="padding-left: 554px">
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>

                                <button class="btn btn-hover color-green mx-1" 
                                
                             >Valider</button>

                            </div>
                        </div>
                       </form>
                    </div>
                        </div>
                    </div>
                </div>
       @endsection

       <script>
        function calculermontantnonpaye(){

           var credit= document.getElementById("creditmontant").value ;
           var montantsaisir= document.getElementById("montantreg").value;
            if(parseInt(credit)<parseInt(montantsaisir)){
                document.getElementById("montantreg").value=parseInt(credit)
            }
            document.getElementById("affichemontant").innerHTML="montant non payé :"+
           (document.getElementById("creditmontant").value - document.getElementById("montantreg").value);
        }

        function affichermessage(){
            toastr.warning("auncun credit pour ce client");

        }
       </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

        <script>
        
        
        $(document).ready(function () {
            $('#tablereg').DataTable({
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
          $('#tableproduitvente').DataTable({
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
            $('#venteofclient').DataTable({
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
        activeespece();

function activeespece(){
    document.getElementById("affichemontant").innerHTML="montant non payé :"+
           (document.getElementById("creditmontant").value - document.getElementById("montantreg").value);

           
document.getElementById("espece").className = "active";
document.getElementById("cheque").className = "";
document.getElementById("autre").className = "";
document.getElementById("lettre").className = "";
document.getElementById("cartebancaire").className = "";
document.getElementById("mode_payment").value = 1;
document.getElementById("montantreg").hidden =false;
document.getElementById("montantreg").required ='true';




}
function activecheque(){
    document.getElementById("affichemontant").innerHTML="montant non payé : 0 DH";
document.getElementById("cheque").className = "active";
document.getElementById("espece").className = "";
document.getElementById("autre").className = "";
document.getElementById("lettre").className = "";
document.getElementById("cartebancaire").className = "";
document.getElementById("mode_payment").value ="2"
document.getElementById("montantreg").hidden =true;
document.getElementById("montantreg").required =false;
document.getElementById("montantreg").min =false;



}

function activecartebancaire(){
    document.getElementById("affichemontant").innerHTML="montant non payé : 0 DH";

document.getElementById("cartebancaire").className = "active";
document.getElementById("espece").className = "";
document.getElementById("autre").className = "";
document.getElementById("lettre").className = "";
document.getElementById("cheque").className = "";
document.getElementById("montantreg").hidden =true;
document.getElementById("montantreg").required =false;

document.getElementById("mode_payment").value = 3
}

function activelettre(){
    document.getElementById("affichemontant").innerHTML="montant non payé : 0 DH";

document.getElementById("lettre").className = "active";
document.getElementById("espece").className = "";
document.getElementById("autre").className = "";
document.getElementById("cheque").className = "";
document.getElementById("montantreg").hidden =true;
document.getElementById("montantreg").required =false;

document.getElementById("cartebancaire").className = "";

document.getElementById("mode_payment").value = 4
}
function activeautre(){
    document.getElementById("affichemontant").innerHTML="montant non payé : 0 DH";

document.getElementById("autre").className = "active";
document.getElementById("cheque").className = "";
document.getElementById("cheque").className = "";
document.getElementById("lettre").className = "";
document.getElementById("espece").className = "";

document.getElementById("montantreg").hidden =true;
document.getElementById("montantreg").required =false;

document.getElementById("cartebancaire").className = "";
document.getElementById("mode_payment").value = 5
}
        </script>