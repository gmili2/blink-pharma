@extends('layouts.app')
@section('content')
    <form action="{{url('addinvent')}}" method="post">
@csrf
   <div id="commentaire_invet">
                <div class="page-content">


                    <section class="section-produit mt-3 pb-5">
                        
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer un nouveau inventaire</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                    <button type="button" 
                                    onclick="afficher_vente()"
                                     class="btn-hover color-green btn-fixed" >Suivant</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-fornisseur mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        {{-- <div class="col-md-4 mb-3"> --}}
                                            <input type="text" required hidden class="form-control"  id="testpr" name="testpr" />
                                        {{-- </div!> --}}
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control"  id="nom" name="nom" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Commentaire</label>
                                            <textarea name="commentairei" class="form-control" cols="30" rows="3"></textarea>
                                        </div>
                               

                                 
                                </div>
                            </div>
                    </section>
                </div>
            </div>

                <div class="page-content" id="page_vente"  hidden >
                        <section class="section-stock mt-3 pb-5">
                            <div class="row">
                                <div class="col-md-12 text-end">
                                    <div class="buttons" >
                                        <button type="submit" 
                                        onclick="test()"
                                          class="btn-hover color-green">Sauvgarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-information pt-3">
                                <div class="row">
                                    <div class="col-md-7 p-4 bg-white">
                                            <div class="row align-items-center inventaire">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-group d-flex align-items-center">
                                                        <i class="bi bi-search"></i>
                                                        <input type="text" class="form-control" placeholder="Rechercher..." id=recherch_produit
                                                        onkeyup="recherche_produit()"
                                                        name="search" />                                                </div>
                                                </div>
    
                                        
                                                <div class="col-md-10 mb-3">
                                                    <h4>selectionner les produits</h4>
                                              
                                                </div>
                                            </div>
                                        <hr class="divider" />
                                        <table id="tableproduit" class="table table-striped mb-4" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Forme</th>
                                                    <th>PPV</th>
                                                    <th>Zone</th>
                                                    <th>Disp.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    
                                                @foreach ($produits as $produit)
                                                <tr  onclick="selectproduit({{$produit->id}})" >
                                               
                                                    <td>{{$produit->name}}</td>
                                                    <td>{{$produit->nameform}}</td>
                                                    <td>{{$produit->PPV}}</td>
                                                    <td>{{$produit->zone}}</td>
                                                    <td>{{$produit->quantite_disponible}}</td>
                                                    <input hidden value='{{$produit->name}}' id='nameproduit{{$produit->id}}'>
                                                    <input hidden value='{{$produit->nameform}}' id='nameform{{$produit->id}}'>
                                                    <input hidden value='{{$produit->PPV}}' id='PPV{{$produit->id}}'>
                                                    <input hidden value='{{$produit->zone}}' id='zone{{$produit->id}}'>
                                                    <input hidden value='{{$produit->quantite_disponible}}' id='quantite_disponible{{$produit->id}}'>
    
    
                                                </tr>
                                                @endforeach
                                               
                                                
                                            </tbody>
                                        </table>
                                        <div class="modal fade filtre" id="add-filtre" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header justify-content-between">
                                                        <h5 class="modal-title">Filter</h5>
                                                        <div class="icon">
                                                            <a href="#">
                                                                <i class="bi bi-arrow-counterclockwise"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                    <div class="section-information">
                                                                        <div class="row">
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select" name="dci">
                                                                                    <option value="">DCI</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <input type="text" class="form-control" placeholder="PPV" name="ppv" />
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select active" name="categorie">
                                                                                    <option value="">Catégorie</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select active" name="forme">
                                                                                    <option value="">Forme</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 mb-3">
                                                                                <select class="form-select" name="zone">
                                                                                    <option value="">Zone</option>
                                                                                    <option value="2">Two</option>
                                                                                    <option value="3">Three</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-4 mb-4">
                                                                        <div class="col-md-12">
                                                                            <div class="text-info d-flex">
                                                                                <span><img src="/assets/icons/group-person.svg" /></span>
                                                                                <p>Vous pouvez modifier le filtre par défaut pour toutes les recherches ultérieurement.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="buttons d-flex justify-content-end">
    
                                                                            <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                                                          
                                                                            <a  class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" aria-label="Close">Sauvegarder</a>
                                                                          
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="block-right pt-4 pb-4 ps-2 px-2 bg-white" style="width:33%
                                         ;
    overflow: scroll;
    overflow-x: hidden;
                                        ">
                                            <div class="header">
                                                <ul class="d-flex p-0 justify-content-between">
                                                    <li>
                                                        <label>Date :</label>
                                                        <span>2022-11-15 <i class="bi bi-calendar ms-2"></i></span>
                                                    </li>
                                                    <li>
                                                        <label>Par :</label>
                                                        <span>Dr {{Auth::User()->name}} <i class="bi bi-chevron-down ms-2"></i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                      
                                            
                                            
                                            <hr class="divider mt-3" />
    
                                            <table id="table-right" class="table table-striped mb-4" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Produit</th>
                                                        <th>PPV</th>
                                                        <th>Qte sys</th>
                                                        <th>Qte physique</th>
                                                        <th>Ecart</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody id='tableproduitselect'>
                                                    @foreach ($produits as $pr)
                                                    <tr  hidden data-bs-toggle="collapse"  id="tr_produit{{$pr->id}}" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <td>  
                                                        <input type="checkbox"   name="pr_select[]" value="{{$pr->id}}"
                                                         id="pr_select{{$pr->id}}">
                                                        </td>
                                                        <td id='tableproduitselectname'>{{$pr->name}}</td>
                                                        <td  id='tableproduitselectPPV'>{{$pr->PPV}}</td>
                                                        <td  id='tableproduitselectqtesys{{$pr->id}}'  >{{$pr->quantite_disponible}} </td>
                                                        <td>
                                                    <input hidden id="qtesysprodui_selected{{$pr->id}}" value='{{$pr->quantite_disponible}}'/>

                                                            <input type='number'  class="form-control qty" style="width:60px"
                                                            
                                                            id='qtephprodui_selected{{$pr->id}}' 
                                                            oninput="calculate({{$pr->id}})"/></td>
                                                        <td><b id="ecart{{$pr->id}}">--</b></td>
                                        
                                                        <td>
                                                            <a onclick="deselectionner({{$pr->id}})"><i class="bi bi-trash3"></i></a>
                                                        </td>
                                                        <td>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-vente{{$pr->id}}"><i class="bi bi-pencil"></i></a>
                                                        </td>



                                                        <input  hidden   id="idprodui_selected{{$pr->id}}" value='{{$pr->id}}'/>
                                                        <input  hidden id="nomprodui_selected{{$pr->id}}" value='{{$pr->name}}'/>
                                                        <input   hidden id="ppv_produi_selected{{$pr->id}}" value='{{$pr->PPV_prix}}'/>
                                                    
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    
            <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Choisir un Client</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div>
                            <p class="text text-center mt-4">
                                Cette fonction vous facilitera l’accès aux fonctionnalités de votre choix,<br />
                                d’une façon rapide, efficace et efficiente;
                            </p>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="table-client" class="table table-striped mb-4" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nom</th>
                                                <th>Teléphone</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
    
                                            <tr>
                                                <td>
                                                    <div class="status"><input class="form-check-input" type="radio"
                                                        name="clientselect" id="clientselect"  checked
                                                          onclick="selectclientvente()"  value="1000" 
                                                     /></div>
                                                </td>
                                                <td>client </td>
                                                <td>client</td>
                                                <td>client</td>
    
                                               
                                                <input   hidden value='Client' id='clientnamenull'>
                                                <input  hidden value='Client' id='teleclientnull'>
                                                <input  hidden value='Client' id='emailclientnull'>
                                                
                                            </tr>
                                       
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                                      
                            <div class="row section-footer">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
    
                                    <a  class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" onclick="slectclient()"
                                    
                                    aria-label="Close">Valider</a>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $count=0;
            @endphp
            @foreach ($produits as $prod)
            
            <div class="modal fade filtre" id="edit-vente{{$prod->id}}" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between">
                            <h5 class="modal-title">{{$prod->name}}</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="section-information">
                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <label class="form-label">Commentaire</label>
                                                    <textarea  id="commentaire{{$prod->id}}"   style="width: 505px;"
                                                        class="form-control" cols="60" rows="3"></textarea>
                                               
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="buttons d-flex justify-content-end">
                                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                                <a  class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" onclick="calcule_total()" aria-label="Close">Sauvegarder</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
            $count=$count+1;
        @endphp  
            @endforeach
    
            
            <div class="modal fade vente-succes unite-gratuite" id="unite-gratuite" tabindex="-1" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header flex-column">
                            <h5 class="modal-title">Unités gratuites</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div>
                                <p class="text text-center m-0">Veuillez entrer les unités gratuites</p>
                            </div>
                        </div>
    
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="number" class="form-control text-center" required value="1" min="0" name="unite-gratuite" />
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="buttons d-flex justify-content-end">
                                        <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                        <button type="submit" class="btn btn-hover color-green mx-1">Valider</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
                    </div>
            </form>
@endsection




<script>
    function test(){
        if(
        document.getElementById("testpr").value==""
        )
        toastr.warning("selectionner au moin un produit");

    }
function recherche_produit(){
            var res=document.getElementById('recherch_produit').value;
            rout="produit_table"+res
if(res=="")
rout="produit_ttable"
            axios.get(rout)
     .then(function (response) {
        document.getElementById("tableproduit").innerHTML= response.data;

       
     })
     .catch(function (error) {
         // handle error
         console.log(error);
     });
            
           }
         function calculate(count){
                        
                        var qtesys =parseInt(document.getElementById('qtesysprodui_selected'+count).value) ;
                        var qteph = parseInt(document.getElementById('qtephprodui_selected'+count).value) ;
                      
                        if(qteph-qtesys < 0)
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:red'>"+ (qteph-qtesys) + " </b>";
                        else if (qteph-qtesys > 0)
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:green'> + "+ (qteph-qtesys) + " </b>";
                        else
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:black'>"+ (qteph-qtesys) + " </b>";
                     
                    
                    }
     function deselectionner(id){

document.getElementById("pr_select"+id).checked=false
document.getElementById("tr_produit"+id).hidden=true
document.getElementById("qtephprodui_selected"+id).required=false;
document.getElementById("idprodui_selected"+id).name="";
            document.getElementById("qtesysprodui_selected"+id).name="";
            document.getElementById("qtephprodui_selected"+id).name="";
            document.getElementById("nomprodui_selected"+id).name="";
            document.getElementById("ppv_produi_selected"+id).name="";
            document.getElementById("commentaire"+id).name="";
// alert(document.getElementById("qtephprodui_selected"+id).value)
// 
// document.getElementById("div_quantite"+id).hidden=true

var index = pr_select.indexOf(id);

 if(index!=-1){
        pr_select.splice(index, 1);
  }
//   pr_select.length()
//   alert(pr_select.length)
//   if(pr_select.length==0)
//   document.getElementById("testpr").value=""


//   calcule_total();

}
var glbalidclient;
            var quatite_total=0;
            let p_unitaire=[];
            let qty = [];
            let pr_select = [];
            let remise = [];
            let remboursement = [];
            let typeremise = [];
            var total_apaye=0;
        function selectproduit(id){
            document.getElementById("testpr").value="true"
            document.getElementById("pr_select"+id).checked=true
            document.getElementById("tr_produit"+id).hidden=false
            document.getElementById("idprodui_selected"+id).name="idprodui_select[]";
            document.getElementById("qtesysprodui_selected"+id).name="qtesysprodui_selected[]";
            document.getElementById("qtephprodui_selected"+id).name="qtephprodui_selected[]";
            document.getElementById("qtephprodui_selected"+id).required='true';
            document.getElementById("nomprodui_selected"+id).name="nomprodui_selected[]";
            document.getElementById("ppv_produi_selected"+id).name="ppv_produi_selected[]";
            document.getElementById("commentaire"+id).name="commentaire[]";

            if (!pr_select.includes(id)) {
                pr_select.push(id);
}

                    }
                 
      function afficher_devis(){
              
                document.getElementById("commentaire_invet").hidden=false
                document.getElementById("page_vente").hidden=true

            }
            function afficher_vente(){
                if(document.getElementById("nom").value==""){
                    toastr.warning("le champ nom est obligatoire");
                }
                else{
                    document.getElementById("page_vente").hidden=false
                document.getElementById("commentaire_invet").hidden=true

                }
               

            }
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>


$(document).ready(function () {
  $('#listeproduitvente').DataTable({
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
      }
      
    });
}); 

</script>