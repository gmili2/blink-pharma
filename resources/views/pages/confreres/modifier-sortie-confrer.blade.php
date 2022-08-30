
                @extends('layouts.app')

                @section('content')
                        @csrf

                <div class="page-content" id="page_vente"   >
                   
                        <input hidden type="text" name="client_idsuivant" value="{{$produitsdejaselected[0]->confreres_id}}" id="client_idsuivant" >

                    

                    <section class="section-stock mt-3 pb-5">
                        <div class="row">
                            <div class="col-md-12 text-end">
                                <div class="buttons" >
                                    <a href="add-sortieconfrre" hidden  id="creer_autrre" class="btn-hover color-green">Crerr autre</a>
                                    {{-- <a  onclick="afficher_devisprecedent()" class="btn-hover color-green"
                                    
                                    id="approuver2"
                                    >Precedent</a> --}}
                                    <button id="sauvgardze"
                                       onclick="ajoutervente()" 
                                     class="btn-hover color-green">Sauvgarder</button>

                                     <button id="attent" hidden
                                   class="btn-hover color-green">Attent..</button>
                                </div>
                            </div>
                        </div>
                        <div class="section-information pt-3">
                            
                            <div class="row">
                                <div class="col-md-7 p-4 bg-white">
                                        <div class="row align-items-center inventaire">
                                            <div class="status-vente mt-5">
                                                <div class="row" style="    margin-top: -39px;
                                                margin-left: -6px;">
                                                    <div class="col-md-6">
                                                        <input type="text" hidden  id="mode_payment" name="mode_payment" value="1">
                                                      
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label m-0">methode</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" name="methode_echange"
                                                                onchange="selectmodepayment()" 
                                                                 id="methode_echange">
                                                                    <option value="PPH">PPH</option>
                                                                    <option value="PPV">PPV</option>
                                                                </select>
                                                            </div>
                                                          </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group d-flex align-items-center">
                                                    <i class="bi bi-search"></i>
                                                    <input type="text" class="form-control" placeholder="Rechercher" id=recherch_produit
                                                    onkeyup="recherche_produit()"
                                                    name="search" />                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3 text-end">
                                                <div class="buttons">
                                                    <a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#search-client">
                                                        
                                                        <i class="bi bi-plus-lg"></i> 
                                                        <span id="choisir_client_titre">  
                                                            choisir un confreres</span>
                                                           

                                                    
                                                    </a>
                                                    <button type="submit" class="btn-hover color-yellow"><i class="bi bi-search"></i> Recherche</button>
                                                </div>
                                            </div>

                                           
                                            <div class="col-md-10 mb-3">
                                                <h4>selectionner les produits</h4>
                                               
                                            </div>
                                        </div>
                                    <hr class="divider" />
                                    <table id="listeproduitvente2" class="table table-striped mb-4" style="width: 100%;">
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
                                    <div class="block-right pt-4 pb-4 ps-2 px-2 bg-white" style="width:33%">
                                        <div class="header">
                                            <ul class="d-flex p-0 justify-content-between">
                                                <li>
                                                    <label>Date :</label>
                                                    <span>{{date("Y/m/d")}} <i class="bi bi-calendar ms-2"></i></span>
                                                </li>
                                                <li>
                                                    <label>Par :</label>
                                                    <span>Dr {{Auth::User()->name}} <i class="bi bi-chevron-down ms-2"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div>
                                                <h3 class="m-0">Total à payer</h3>
                                                @foreach ($produits as $item)
                                                <div hidden id='div_quantite{{$item->id}}'>
                                                    <span>Quantité totale de produit {{$item->name}}: 
                                                        <span id="quatitevalue{{$item->id}}">1</span> </span>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div>
                                                <h3 id="total_apaye">
                                                    0DH
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div>
                                                <h3 class="m-0">Confrére</h3>
                                                <span>nom de confrére : <span id='nomclientselected'> </span></span>
                                            </div>

                                           
                                        </div>

                                        <div class="content d-flex justify-content-between">
                                            <div>
                                                <h3 class="m-0">quantite total</h3>
                                                <span id="quatite_total"></span>
                                            </div>

                                         
                                        </div>
                                        
                                        
                                        <hr class="divider mt-3" />

                                        <table id="table-right" class="table table-striped mb-4" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Produit</th>
                                                    <th>P.U</th>
                                                    <th>PPV</th>
                                                    <th>Total</th>
                                                    <th>Quantité</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id='tableproduitselect'>
                                                @foreach ($produits as $pr)
                                                <tr  
                                                
                                                @if ((in_array($pr->id, $ids)))
                                                @else
                                                hidden 
                                                @endif  
                                                 data-bs-toggle="collapse" 
                                                
                                                id="tr_produit{{$pr->id}}"
                                                 data-bs-target="#collapseOne" aria-expanded="true"
                                                  aria-controls="collapseOne">
                                                    <td>  
                                                    <input type="checkbox"  
                                                    @if ((in_array($pr->id, $ids)))
                                                    checked
                                                    {{$produitsdejaselected[array_search($pr->id, array_values($ids))]->prix_AU}}
                                                    {{-- @else --}}
                                                    @endif 

                                                      name="pr_select[]" value="{{$pr->id}}"
                                                     id="pr_select{{$pr->id}}">
                                                    </td>
                                                    <td id='tableproduitselectname'>{{$pr->name}}</td>
                                                    <td id="Prix_unitaire_table{{$pr->id}}">
                                                        @if ((in_array($pr->id, $ids)))

                                                        {{$produitsdejaselected[array_search($pr->id, array_values($ids))]->prix_AU}}
                                                        @else
                                                        @endif 
                                                    
                                                    </td>
                                                    <td  id='tableproduitselectPPV'>{{$pr->PPV}}</td>
                                                    <td  id='tableproduitselectTotal{{$pr->id}}'  > </td>
                                                    <td>
                                                        <input type="number" 
                                                        name="qty[]" 
                                                        @if ((in_array($pr->id, $ids)))
                                                        value="{{$produitsdejaselected[array_search($pr->id, array_values($ids))]->qte}}"
                                                        @else
                                                        value="0"

                                                        @endif 
                                                        min="1" id="changequantite{{$pr->id}}" class="form-control qty" 
                                                        onchange="changequantite22({{$pr->id}})"
                                                        onkeyup="changequantite22({{$pr->id}})"
                                                        style="width:50%"  /></td>
                                                    <td>
                                                        <a onclick="deselectionner({{$pr->id}})"><i class="bi bi-trash3"></i></a>
                                                    </td>
                                                   
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
                                <table id="listeproduitvente" class="table table-striped mb-4" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nom</th>
                                            <th>Teléphone</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       
                                            
                                        @foreach ($clients as $client)
                                        
                                        <tr>
                                            <td>
                                                <div class="status">
                                                    <input class="form-check-input" type="radio"
                                                    name="clientselect" id="clientselect"  
                                                      onclick="selectclientvente()"  value="{{$client->id}}" 
                                                 /></div>
                                            </td>
                                            <td>{{$client->name}} </td>
                                            <td>{{$client->tele}}</td>
                                            <td>{{$client->email}}</td>

                                           
                                            <input   hidden value='{{$client->name}}' id='clientname{{$client->id}}'>
                                            <input  hidden value='{{$client->tele}}' id='teleclient{{$client->id}}'>
                                            <input  hidden value='{{$client->email}}' id='emailclient{{$client->id}}'>
                                            
                                        </tr>
                                        @endforeach
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                                  
                        <div class="row section-footer">
                            <div class="buttons">
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>

                                <a  class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" onclick="selectclient()"
                                
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
                                                <label class="form-label">Prix unitaire</label>
                                                <input type="text" class="form-control"
                                                value="{{$prod->PPV_prix}}"
                                                placeholder="Prix unitaire"
                                                onkeyup="calcule_remise({{$prod->id}})"
                                                  id="p_unitaire{{$prod->id}}"
                                                   name="p_unitaire[]" />

                                                  <input type="text" class="form-control"
                                                  value="{{$prod->PPV_prix}}"
                                                  placeholder="Prix unitaire" hidden 
                                                  onkeyup="calcule_remise({{$prod->id}})"
                                                    id="p_unitaire_secour{{$prod->id}}" name="p_unitairesecour[]" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Type de remise</label>
                                                <select class="form-select" 
                                                name="typeremise[]" 
                                                onchange="calcule_remise({{$prod->id}})" 
                                                 id="typeremise{{$prod->id}}" 
                                                name="categorie">
                                            
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Remise</label>
                                                <input type="text" 
                                               class="form-control" placeholder="Remise"
                                                name="remise[]" 
        
                                               id="remise{{$prod->id}}" />
                                            </div>
                                          
                                        
                                            <div class="col-md-5 mb-3">
                                                <label class="form-label">Base de remboursement</label>
                                                <input type="text" class="form-control" placeholder="Base de remboursement" 
                                                value="{{$prod->remboursable}}" 
                                            id="remboursement{{$prod->id}}"    name="remboursement[]" />
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Taux Remb.</label>
                                                <input type="text" class="form-control" placeholder="Taux Remb." name="remb" />
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
                                    <input type="number" class="form-control text-center" value="1" min="0" name="unite-gratuite" />
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
            

                <div class="page-content" id="page_devis" hidden >
                        @csrf
                    <section class="section-achat mt-3">
                        <div class="row">
                            <div class="col-md-12 text-end">
                                <div class="buttons">
                                    <a href="addventes" id="bien_ajouter" hidden class="btn-hover color-blue">Nouvelle vente</a>
                                   
                                    <a  onclick="afficher_devis()" class="btn-hover color-green"
                                    
                                    id="approuver2"
                                    >Suivant</a>
                                 
                               </div>
                            </div>
                        </div>
    
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="table-commande mt-4">
                                    <div class="montant-vente">
                                        <div class="detail-price">
                                            <div class="shadow-block mt-4 p-4">
                                                <div class="montant-recu d-flex gap-2">
                                                  
                                                </div>
                                              
    
                                                
                                                <div class="montant-recu d-flex gap-2">
                                                   
                                                </div>
    
                                                <div class="status-vente mt-5">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" hidden  id="mode_payment" name="mode_payment" value="1">
                                                          
                                                            <div class="mb-3 row">
                                                                <label class="col-sm-2 col-form-label m-0">methode</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-select" name="methode_echange"
                                                                    onchange="selectmodepayment()" 
                                                                     id="methode_echange">
                                                                        <option value="PPH">PPH</option>
                                                                        <option value="PPV">PPV</option>
                                                                    </select>
                                                                </div>
                                                              </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input hidden type="text" id="montant_total">

    
                                  
                                </div>
                            </div>
                        
                           <input type="text" name="idsorticonfrere" hidden id="idsorticonfrere"
                           
                           value="{{ $produitsdejaselected[0]->sortie_confreres_id}}" id="">
    
    
                            <div class="section-aide d-flex">
                                <div class="support">
                                     <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                        <div class="icon"> <img src="/assets/icons/telephone.svg" alt=""> 
                                        </div> <span>05 30 500 500</span>
                                    </a> 
                                </div>
                                <div class="aide"> 
                                    <a href="" role="button" class="d-flex align-items-center">
                                        <div class="icon"> <img src="/assets/icons/aide.svg" alt=""> 
                                        </div> <span>Aide</span>
                                    </a> 
                                </div>
                                <div class="retour"> 
                                    <a href="addventes" role="button" class="d-flex align-items-center">
                                        <div class="icon"> <img src="/assets/icons/retour.svg" alt=""> </div>
                                    </a> 
                                </div>
                            </div>
    
                        </div>
                    </section>
                   
                </div>
                <div class="modal fade vente-succes" id="vente-cree" tabindex="-1" aria-labelledby="" aria-hidden="true">
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
                                             <a id='facture_lien'>Afficher Bon de Laivaison</a>
                                                  
                                                                                               </li>
                                            
                                             
                                                                                            <li class="d-flex">
                                                                                                <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                                                                <a  href="" id="bon_livraison">Imprimer Bon De Livraison</a>
                                                                                            </li>
                                                                                            <li class="d-flex">
                                                                                                <div class="icon"><img src="/assets/icons/toutelesventes.svg" alt=""></div>
                                                                                                <a href="sortie-confrer">Consulter Toutes les sorties confrére</a>
                                                                                            </li>
                                                                                            <li class="d-flex">
                                                                                                <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                                                                <a  href="add-sortieconfrre" >Creer un neveau sortie confrere</a>
                                                                                            </li>
                                                <li class="d-flex">
                                                    <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                    <a  href="" id="ticket_sortie_confrere">Imprimer ticket</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <script>

            var glbalidclient;
            var quatite_total=0;
            let p_unitaire=[];
            let qty = [];
            let pr_select = [];
            let qtyinitiale=[];
            let remise = [];
            let remboursement = [];
            let typeremise = [];
            var total_apaye=0;
var livree=1;
js_arr = JSON.parse('<?php echo JSON_encode($ids);?>');
js_arr.forEach(element => {

    selectproduit_initial(element);
});

function selectproduit_initial(id){
if (!pr_select.includes(id)) {
    qtyinitiale.push(document.getElementById("changequantite"+id).value)
    pr_select.push(id);
}
calcule_total();
        }
        selectclient_initial();
        function  selectclient_initial(){
            var  clientid= document.getElementById("client_idsuivant").value
            glbalidclient=clientid
var clientname=document.getElementById("clientname"+clientid).value

 document.getElementById("nomclientselected").innerHTML=clientname



document.getElementById("client_idsuivant").value=glbalidclient

     if(glbalidclient=="1000")
document.getElementById("choisir_client_titre").innerHTML="choisir un client"
else 
document.getElementById("choisir_client_titre").innerHTML=clientname

calcule_total();    

        }

function recherche_produit(){
            var res=document.getElementById('recherch_produit').value;
            rout="produit_table"+res
if(res=="")
rout="produit_ttable"

            axios.get(rout)
     .then(function (response) {
        document.getElementById("table").innerHTML= response.data;

       
     })
     .catch(function (error) {
         // handle error
         console.log(error);
     });
            
           }
function calcule_remise(id){
    var PU_old=document.getElementById("p_unitaire_secour"+id).value;
    var PU_old_modifier=document.getElementById("p_unitaire"+id).value;

    var remise_old=document.getElementById("remise"+id).value;

  var remise_type=document.getElementById("typeremise"+id).value;
  var remis_calculer = (parseInt(PU_old)*(parseInt(remise_type)))/100
  document.getElementById("remise"+id).value=remis_calculer;
  document.getElementById("p_unitaire"+id).value=parseInt(PU_old)-parseInt(remis_calculer);


}
function change_livree(){
    livree=1;

}
function change_nonlivree(){
    livree=0;

}
function calcule_montant_rendre(){
              var montant_recu=  document.getElementById("montant").value;
              var montant_rendre=parseInt(montant_recu)-parseInt(document.getElementById("montant_total").value)
              document.getElementById("monnaie").innerHTML= montant_rendre+"Dh";
              if(montant_rendre>0){
                document.getElementById("montant_rendre").value=montant_rendre;
                document.getElementById("montant_credit").value=0;

              }
              else{
                document.getElementById("montant_rendre").value=0;
                document.getElementById("montant_credit").value=montant_rendre;
              }
            }
      
function selectmodepayment(){
  status= document.getElementById("status").value;
  if(status==1 || status=="1"){
    document.getElementById("mode_payment_div").hidden=false;
    activeespece()
;
  }
   else{
   document.getElementById("mode_payment_div").hidden=true;
   document.getElementById("montant_visible").hidden =true;

}

}

            function ajoutervente(){
                if(pr_select.length==0){
                    toastr.error("selectionner au moin un produit");
                    
                }
                else{
                    
 
                    
                    pr_select.forEach(id => {
        qty.push(document.getElementById("changequantite"+id).value)
        p_unitaire.push(document.getElementById("p_unitaire"+id).value);

});
if(document.getElementById("client_idsuivant").value=="")
toastr.error("selectionner un confrere");
else{
    document.getElementById("attent").hidden=false
    document.getElementById("sauvgardze").hidden=true
var rout="modifier_sortie"
axios.post(rout, {
       qty: qty,
       pr_select: pr_select,
       p_unitaire:p_unitaire,
       qtyinitiale:qtyinitiale,
       id:document.getElementById("idsorticonfrere").value, 
       methode_echange:document.getElementById("methode_echange").value,
       //si 0 c est une sortie si 1  c est ue entrer
       type:"0",

       montant_PU:document.getElementById("montant_total").value,

       client_idsuivant:document.getElementById("client_idsuivant").value,
       references:"references",
    methode_echange:document.getElementById("methode_echange").value,
     })
  
  .then(function (response) {
    console.log(response.data);
if(response.data["codeEr"]==200){
toastr.success("bien ajouter");

    $('#vente-cree').modal("show");
    document.getElementById("attent").hidden=true

    document.getElementById("creer_autrre").hidden=false
    document.getElementById("sauvgardze").hidden=true

    
}
document.getElementById("facture_lien").href="sortie-confrere-detail"+response.data["id_sortie"]


})

.catch(function (error) {

    console.log(error.response.data)

});
                }

            }
            }

            function afficher_prixunitairetable(){

            }
            function changequantite22(id){
                quatite_total=0;
               var quatite=document.getElementById("changequantite"+id).value
               document.getElementById("quatitevalue"+id).innerHTML=quatite
               quatite_total = parseInt(quatite_total)+parseInt(quatite)

               
               calcule_total();
              

            }
    
            function afficher_devis(){
                document.getElementById("page_devis").hidden=true
                document.getElementById("page_vente").hidden=false
            }
            function afficher_devisprecedent(){
                document.getElementById("page_devis").hidden=false
                document.getElementById("page_vente").hidden=true
            }
            function afficher_vente(){
                document.getElementById("page_devis").hidden=true
                document.getElementById("page_vente").hidden=false


            }
            function calcule_total(){
                total_apaye=0;
                quantite=0;
                montant_PPV=0;
pr_select.forEach(id => {
   

                    document.getElementById("Prix_unitaire_table"+id).innerHTML=
                     document.getElementById("p_unitaire"+id).value;

                    document.getElementById("tableproduitselectTotal"+id).innerHTML=parseInt( document.getElementById("p_unitaire"+id).value)
                    *parseInt(document.getElementById("changequantite"+id).value);

                    quantite=quantite+parseInt(document.getElementById("changequantite"+id).value)

                   
                total_apaye=parseInt(total_apaye)+(parseInt(document.getElementById("p_unitaire"+id).value)*parseInt(document.getElementById("changequantite"+id).value));
                
                montant_PPV=parseInt(montant_PPV)+(parseInt(document.getElementById("PPV"+id).value)*parseInt(document.getElementById("changequantite"+id).value));
              
});

               

                document.getElementById("quatite_total").innerHTML=quantite


                document.getElementById("total_apaye").innerHTML=parseInt(total_apaye)+" Dhs";

                document.getElementById("montant_total").value=parseInt(total_apaye);




            }
            function selectclient(){
                var  clientid= document.querySelector('input[name="clientselect"]:checked').value;

               var clientname=document.getElementById("clientname"+clientid).value

                document.getElementById("nomclientselected").innerHTML=clientname



               document.getElementById("client_idsuivant").value=glbalidclient

                    if(glbalidclient=="1000")
               document.getElementById("choisir_client_titre").innerHTML="choisir un client"
               else 
               document.getElementById("choisir_client_titre").innerHTML=clientname
            }

            function deselectionner(id){

                document.getElementById("pr_select"+id).checked=false
                document.getElementById("tr_produit"+id).hidden=true
                document.getElementById("div_quantite"+id).hidden=true

                var index = pr_select.indexOf(id);

                 if(index!=-1){
                        pr_select.splice(index, 1);
                  }
                  calcule_total();

            }
            function selectproduit(id){
                document.getElementById("pr_select"+id).checked=true
                document.getElementById("tr_produit"+id).hidden=false
                document.getElementById("div_quantite"+id).hidden=false
                quatite= document.getElementById("changequantite"+id).value;
                    quatite=parseInt(quatite)+1;
                document.getElementById("changequantite"+id).value=parseInt(quatite);

                document.getElementById("quatitevalue"+id).innerHTML=quatite
               quatite_total=quatite_total+quatite
               
                if (!pr_select.includes(id)) {
                    pr_select.push(id);
}

               
calcule_total();

                        }
            function selectclientvente(){

               var  clientid= document.querySelector('input[name="clientselect"]:checked').value;
               var clientname=document.getElementById("clientname"+clientid).value
               var teleclient=document.getElementById("teleclient"+clientid).value
               glbalidclient=clientid;
               calcule_total();

            }
            activeespece();

            function activeespece(){
            document.getElementById("espece").className = "active";
            document.getElementById("cheque").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("cartebancaire").className = "";
            document.getElementById("mode_payment").value = 1;
            document.getElementById("montant_visible").hidden =false;

            
        }
        function activecheque(){
            document.getElementById("cheque").className = "active";
            document.getElementById("espece").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("cartebancaire").className = "";
            document.getElementById("mode_payment").value ="2"
            document.getElementById("montant_visible").hidden =true;

        }

        function activecartebancaire(){
            document.getElementById("cartebancaire").className = "active";
            document.getElementById("espece").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("cheque").className = "";
            document.getElementById("montant_visible").hidden =true;

            document.getElementById("mode_payment").value = 3
        }

        function activelettre(){
            document.getElementById("lettre").className = "active";
            document.getElementById("espece").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("cheque").className = "";
            document.getElementById("montant_visible").hidden =true;

            document.getElementById("cartebancaire").className = "";

            document.getElementById("mode_payment").value = 4
        }
        function activeautre(){
            document.getElementById("autre").className = "active";
            document.getElementById("cheque").className = "";
            document.getElementById("cheque").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("montant_visible").hidden =true;

            document.getElementById("cartebancaire").className = "";
            document.getElementById("mode_payment").value = 5
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
                      $('#listeproduitvente2').DataTable({
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