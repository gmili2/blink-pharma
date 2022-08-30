
                @extends('layouts.app')

                @section('content')
        {{-- <form action="ajoutervente_produit_client" method="POST"> --}}
                        @csrf

                <!-- partial -->
                <div class="page-content" id="page_vente"  >
                    {{-- <form action="suivant" method="post"> --}}
                        {{-- @csrf --}}
                        <input hidden type="text" name="client_idsuivant"  value="{{$produitsdejaselected[0]->client_id}}"  id="client_idsuivant" >
                    <section class="section-stock mt-3 pb-5">
                        <div class="row">
                            <div class="col-md-12 text-end">
                                <div class="buttons" >
                                    <a   onclick="afficher_devis()" class="btn-hover color-green">Suivant</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-information pt-3">
                            <div class="row">
                                <div class="col-md-7 p-4 bg-white">
                                    {{-- <form action="#" class="mb-4"> --}}
                                        <div class="row align-items-center inventaire">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group d-flex align-items-center">
                                                    <i class="bi bi-search"></i>
                                                    <input type="text" class="form-control" placeholder="Rechercher.." id=recherch_produit
                                                    onkeyup="recherche_produit()"
                                                    name="search" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3 text-end">
                                                <div class="buttons">
                                                    <a href="#" class="btn-hover color-blue" data-bs-toggle="modal" data-bs-target="#search-client">
                                                        
                                                        <i class="bi bi-plus-lg"></i> 
                                                        <span id="choisir_client_titre">  
                                                            choisir un clients</span>
                                                        {{-- <h4 id="choisir_client_titre"> --}}
                                                           

                                                        {{-- </h4> --}}
                                                    
                                                    </a>
                                                    <button type="submit" class="btn-hover color-yellow"><i class="bi bi-search"></i> Recherche</button>
                                                </div>
                                            </div>

                                            <div class="col-md-10 mb-3">
                                                <h4>selectionner les produits</h4>
                                            
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                    <hr class="divider" />
                                    <table id="table" class="table table-striped mb-4" style="width: 100%;">
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
                                            <tr  
                                            onclick="selectproduit({{$produit->id}})"
                                                 >
                                              
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
                                                    <span>2022-11-15 <i class="bi bi-calendar ms-2"></i></span>
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
                                                <div 
                                                @if ((in_array($item->id, $ids)))
                                                {{-- hidden=false --}}
                                                @else
                                                 hidden
                                                @endif  
                                                
                                                {{-- hidden --}}
                                                
                                                id='div_quantite{{$item->id}}'>
                                                    <span>Quantité totale de produit {{$item->name}}: 
                                                        <span id="quatitevalue{{$item->id}}">1</span> </span>
                                                </div>
                                                @endforeach
                                                {{-- <span>Quantité totale : <span id="quatitevalue">1</span> </span> --}}
                                            </div>
                                            <div>
                                                <h3 id="total_apaye"></h3>
                                            </div>
                                        </div>
                                        <div class="content d-flex justify-content-between">
                                            <div>
                                                <h3 class="m-0">Client</h3>
                                                <span>nom client : <span id='nomclientselected'> </span></span>
                                            </div>

                                            {{-- <div>
                                                <h3>0.00 Dhs</h3>
                                            </div> --}}
                                        </div>

                                        <div class="content d-flex justify-content-between">
                                            <div>
                                                <h3 class="m-0">quantite total :</h3>
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
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            {{-- @foreach ($ids as $item)
                                                njnjn
                                            @endforeach --}}
                                            {{-- {{ $produitsdejaselected_id[0]->produits_id}} --}}
                                            <tbody id='tableproduitselect'>
                                                @foreach ($produits as $pr)
                                                <tr  
                                             {{-- {{kjhgf}} --}}
                                                
                                             @if ((in_array($pr->id, $ids)))
                                               @else
                                               hidden 
                                               @endif  
                                                data-bs-toggle="collapse"  id="tr_produit{{$pr->id}}"
                                                    
                                                    data-bs-target="#collapseOne"
                                                     aria-expanded="true" aria-controls="collapseOne">
                                                    <td>  
                                                    <input type="checkbox"  
                                                    @if ((in_array($pr->id, $ids)))
                                                    checked
                                                    @else
                                                     
                                                    @endif  
                                                    name="pr_select[]" value="{{$pr->id}}"
                                                     id="pr_select{{$pr->id}}">
                                                    </td>
                                                    <td id='tableproduitselectname'>{{$pr->name}}</td>
                                                    <td id="Prix_unitaire_table{{$pr->id}}">
                                                        @if ((in_array($pr->id, $ids)))

                                                        {{$produitsdejaselected[array_search($pr->id, array_values($ids))]->prix_unitaire}}
                                                        @else
                                                        @endif 
                                                    
                                                    </td>
                                                    <td  id='tableproduitselectPPV'>{{$pr->PPV}}</td>
                                                    <td  id='tableproduitselectTotal{{$pr->id}}'  > </td>
                                                    <td>
                                                        <input type="number" 
                                                        name="qty[]" 
                                                        @if ((in_array($pr->id, $ids)))
                                                        value="{{$produitsdejaselected[array_search($pr->id, array_values($ids))]->quantite}}"
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
                                                    <td>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit-vente{{$pr->id}}"><i class="bi bi-pencil"></i></a>
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
                {{-- </form> --}}
                
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
                                                <div class="status">
                                                    
                                                    <input class="form-check-input" type="radio"
                                                    name="clientselect" 
                                                    
                                                    id="clientselect" 
                                                     @if ($produitsdejaselected[0]->client_id==1000)
                                                        checked
                                                    @endif
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
                                        @foreach ($clients as $client)
                                        
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="radio"
                                                    name="clientselect" id="clientselect"  
                                                    @if ($produitsdejaselected[0]->client_id==$client->id)
                                                        checked
                                                    @endif
                                                      onclick="selectclientvente()" 
                                                      
                                                      value="{{$client->id}}" 
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
                                        {{-- <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Hamid Houssnni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="status"><input class="form-check-input" type="checkbox" value="" /></div>
                                            </td>
                                            <td>Ahmed Houssni</td>
                                            <td>+212 654 38 60 20</td>
                                            <td>Hamidhoussnni@gmail.com</td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     
                        <div class="row section-footer">
                            <div class="buttons">
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                                {{-- <a href="#" class="btn-hover color-red" class="btn btn-hover color-green mx-1" 
                                onclick="slectclient()" data-bs-dismiss="modal" aria-label="Close">Valider22</a> --}}

                                <a  class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" onclick="slectclient()"
                                
                                aria-label="Close">Valider</a>

                                {{-- <button  data-bs-dismiss="modal" aria-label="Close" onclick="slectclient()" class="btn btn-hover color-green mx-1">Valider</button> --}}
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
                                                <label class="form-label">Type de remise 
                                                    {{$produitsdejaselected[array_search($prod->id, array_values($ids))]->type_remise}}</label>
                                                <select class="form-select" 
                                                name="typeremise[]" 
                                                onchange="calcule_remise({{$prod->id}})" 
                                                 id="typeremise{{$prod->id}}" 
                                                name="categorie">
                                                    <option 
                                                    @if ( $produitsdejaselected[array_search($prod->id, array_values($ids))]->type_remise=="0")
                                                    selected
                                                @endif

                                                                                                
                                                   value="0">%</option>
                                                    <option 
                                                    @if ( $produitsdejaselected[array_search($prod->id, array_values($ids))]->type_remise=="10")
                                                    selected
                                                @endif

                                                    value="10">10%</option>
                                                    <option 
                                                    
                                                  @if ( $produitsdejaselected[array_search($prod->id, array_values($ids))]->type_remise=="20")
                                                      selected
                                                  @endif

    
                                                    value="20">20%</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Remise</label>
                                                <input type="text" 
                                               class="form-control" placeholder="Remise"
                                                name="remise[]" 
        
                                               id="remise{{$prod->id}}" />
                                            </div>
                                                {{-- <div class="col-md-3 mb-3">
                                                    <div class="buttons space-bm">
                                                        <button class="btn-hover color-blue"><i class="bi bi-plus-lg"></i> Rem. U.G</button>
                                                    </div>
                                                </div>
                                            --}}
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
                                    <a onclick="afficher_vente()" 
                                    id="Retourner" 
                                    class="btn-hover color-blue">Retourner</a>
                                    <a   class="btn-hover color-green" id="bien_ajouter" hidden>bien modier </a>
                                    <a   onclick="ajoutervente()" class="btn-hover color-green" id="approuver2">Modifier (F12)</a>
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
                                                    <label>Refrence :</label>
                                                    <span>2113.30</span>
                                                </div>
                                              
                                                <input type="text" id="mode_paymentold" hidden name="mode_paymentold" value="{{$ventes[0]->mode_payment}}">
    
                                                
                                                <div class="montant-recu d-flex gap-2">
                                                    <label>Monnaie</label>
                                                    <span id="monnaie"></span>
                                                </div>
    
                                                <div class="status-vente mt-5">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" hidden  id="mode_payment" name="mode_payment" value="1">
                                                       
                                                            <div class="mb-3 row">
                                                                <label class="col-sm-2 col-form-label m-0">Statut</label>
                                                                <div class="col-sm-10">
                                                                    <select class="form-select" name="status"
                                                                    onchange="selectmodepayment()"  id="status">
                                                                        <option @if ($produitsdejaselected[0]->status=="1")
                                                                            selected

                                                                        @endif value="1">payer</option>
                                                                        <option
                                                                        @if ($produitsdejaselected[0]->status=="0")
                                                                            selected
                                                                        @endif 

                                                                         value="0">non payer</option>
                                                                    </select>
                                                                </div>
                                                              </div>

                                                              <div class="mb-3 row" 
                                                               id="montant_visible"  >
                                                                <label class="col-sm-2 col-form-label m-0">Montant recu</label>
                                                                <div class="col-sm-10">
                                                                     <input type="number" value="{{$produitsdejaselected[0]->montant_recu}}" name="montant" id="montant"
                                                                     onkeyup="calcule_montant_rendre()"
                                                                      class="form-control">
                                                                </div>
                                                              </div>
    
                                                            
    
                                                              <div class="mb-3 row">
                                                                <label class="col-sm-2 col-form-label m-0">Livré</label>
                                                                <div class="col-sm-10">
                                                                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                                      
                                                                      @if ($produitsdejaselected[0]->livree=="1")
                                                              <script>
change_livree()
                                                              </script>
                                                                          @else
                                                                          <script>

                                                                            change_nonlivree()
                                                                          </script>
                                                                      @endif
                                                                      
                                                                        <input class="form-check-input" type="radio" 
                                                                        @if ($produitsdejaselected[0]->livree=="1")
                                                                        checked
                                                                        @endif
                                                                        onclick="change_livree()" name="livree"  id="livree">
                                                                        <label class="form-check-label" for="livree">
                                                                            Oui
                                                                        </label>
                                                                        <input class="form-check-input" type="radio" 
                                                                        onclick="change_nonlivree()"
                                                                         name="livree"  id="livree2" 
                                                                         @if ($produitsdejaselected[0]->livree=="0")
                                                                         checked
                                                                         @endif
                                                                         value="0" >
                                                                        <label class="form-check-label" for="livree2">
                                                                            Non
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                              </div>
    
                                                        </div>
    
                                                        <div class="col-md-6"  id="mode_payment_div">
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
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    <div class="row">
    
                                        <div class="col-md-6 offset-6">
                                            <div class="card-total">
    
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label ">
                                                        Date : 2015-11-15
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        Par : Dr <span id="non_client2"></span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label h5">
                                                        Total à payer :
                                                    </div>
                                                    <input type="text"  hidden id="montant_total">
                                                    <input type="text" hidden id="montant_PPV">
                                                    <input type="text" hidden id="montant_rendre">
                                                    <input type="text" hidden id="montant_credit">
                                                    <div class="flex-grow-1 ms-3 h5" id="total_apaye2">
                                                        
                                                    </div>
                                                </div>
            
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label">
                                                        Total à payer par l’organisme :
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        11.21
                                                    </div>
                                                </div>
    
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0 flex-label">
                                                        Quantité totale :
                                                    </div>
                                                    <div class="flex-grow-1 ms-3" id="quatite_total2">
                                                        
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      }
                           
    
    
                            <div class="section-aide d-flex">
                                <div class="support">
                                     <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                        <div class="icon"> <img src="/assets/icons/telephone.svg" alt=""> 
                                        </div> <span>05 30 500 500</span>
                                        <input type="text" hidden  id="id" name="id" value="{{$produitsdejaselected[0]->ventes_id}}" id="">
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
                                                 <a id='facture_lien'>Afficher la Facture</a>
                                                     
                                                                                                   </li>
                                                                                                   <li class="d-flex">
                                                                                                    <div class="icon"><img src="/assets/icons/plus.svg" alt=""></div>
                                                                                                    <a href="addventes">Créer une Nouvelle Vente</a>
                                                                                                </li>
                                                                                                <li class="d-flex">
                                                                                                    <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                                                                    <a href="">Imprimer Bon De Livraison</a>
                                                                                                </li>
                                                                                                <li class="d-flex">
                                                                                                    <div class="icon"><img src="/assets/icons/toutelesventes.svg" alt=""></div>
                                                                                                    <a href="vente">Consulter Toutes les Ventes</a>
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


        <script>


var glbalidclient;
            var quatite_total=0;
            let p_unitaire=[];
            let qty = [];
            let qtyinitiale = [];



            let pr_select = [];
            let remise = [];
            let remboursement = [];
            let typeremise = [];
            var total_apaye=0;




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
            selectmodepayment_initial();
//Depending on what I use it for I sometimes parse the json so I can work with a straight forward array:
js_arr = JSON.parse('<?php echo JSON_encode($ids);?>');
js_arr.forEach(element => {
    selectproduit_initial(element);
});
slectclient();
          
var livree=1;
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
    activeespece();
  }
   else{
   document.getElementById("mode_payment_div").hidden=true;
   document.getElementById("montant_visible").hidden =true;
}

}


function selectmodepayment_initial(){
 var oldmodpayment=
 document.getElementById("mode_paymentold").value;
 alert
 if(oldmodpayment==1)
activeespece()
if(oldmodpayment==2)
activecheque()
if(oldmodpayment==3)
activecartebancaire()
if(oldmodpayment==4)
activelettre()
if(oldmodpayment==5)
activeautre()

  status= document.getElementById("status").value;
  if(status==1 || status=="1"){
    document.getElementById("mode_payment_div").hidden=false;
  }
   else{
   document.getElementById("mode_payment_div").hidden=true;
   document.getElementById("montant_visible").hidden =true;
}

}
          

function ajoutervente(){
   
     pr_select.forEach(id => {
        qty.push(document.getElementById("changequantite"+id).value)
        p_unitaire.push(document.getElementById("p_unitaire"+id).value);
        remboursement.push(document.getElementById("remboursement"+id).value);
        remise.push(document.getElementById("remise"+id).value);
        typeremise.push(document.getElementById("typeremise"+id).value);
});


var modpay=document.getElementById("mode_payment").value;
if(document.getElementById("status").value==1 && document.getElementById("montant").value==0  && modpay==1 )
toastr.error("saisir un montant");
else{
var rout="modifier_produit_client"
axios.post(rout, {
       qty: qty,
       qtyinitiale:qtyinitiale,
       pr_select: pr_select,
       p_unitaire:p_unitaire,
       remboursement:remboursement,
       remise:remise,
       id:document.getElementById("id").value,
       type_remise:	typeremise,
       mode_payment:document.getElementById("mode_payment").value,
       montant_recu:document.getElementById("montant").value,
       montant_PPV:document.getElementById("montant_PPV").value,
       montant_PU:document.getElementById("montant_total").value,
       montant_rendre:document.getElementById("montant_rendre").value,
       montant_credit:document.getElementById("montant_credit").value,
       client_idsuivant:document.getElementById("client_idsuivant").value,
       references:"references",
       livree:livree,
       status:document.getElementById("status").value,
     })
  
  .then(function (response) {
    console.log(response.data);
if(response.data["codeEr"]==200){
    $('#vente-cree').modal("show");
    toastr.success("bien modiifer");
    document.getElementById("bien_ajouter").hidden=false
    document.getElementById("approuver2").hidden=true
    document.getElementById("Retourner").hidden=true

    
}
document.getElementById("facture_lien").href="facture"+response.data["id_vente"]


})

.catch(function (error) {

    console.log(error.response.data)

});


}
            }

     
            function afficher_prixunitairetable(){

            }
            function changequantite22(id){
                quatite_total=0;
               var quatite=document.getElementById("changequantite"+id).value
               document.getElementById("quatitevalue"+id).innerHTML=quatite
               quatite_total = parseInt(quatite_total)+parseInt(quatite)
               quatite= document.getElementById("changequantite"+id).value;
                quatite=parseInt(quatite)+1;
                // document.getElementById("changequantite"+id).value=parseInt(quatite);
                document.getElementById("quatitevalue"+id).innerHTML=quatite
               quatite_total=quatite_total+quatite
               
                if (!pr_select.includes(id)) {
                    pr_select.push(id);}
               
               calcule_total();
              

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
            function afficher_devis(){
                if(pr_select.length==0){
                    toastr.error("selectionner au moin un produit");
                    
                }
                else{
                document.getElementById("page_devis").hidden=false
                document.getElementById("page_vente").hidden=true
                }


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
                })
                document.getElementById("quatite_total").innerHTML=quantite
                document.getElementById("quatite_total2").innerHTML=quantite
                document.getElementById("total_apaye").innerHTML=parseInt(total_apaye)+" Dhs";
                document.getElementById("montant_total").value=parseInt(total_apaye);
                document.getElementById("total_apaye2").innerHTML=parseInt(total_apaye)+" Dhs";
                document.getElementById("montant_PPV").value=parseInt(montant_PPV);


            }
            
            function slectclient(){
                var  clientid= document.querySelector('input[name="clientselect"]:checked').value;
               var clientname=document.getElementById("clientname"+clientid).value
                document.getElementById("nomclientselected").innerHTML=clientname
                document.getElementById("non_client2").innerHTML=clientname;

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




            function selectproduit_initial(id){


                // document.getElementById("pr_select"+id).checked=true
                // document.getElementById("tr_produit"+id).hidden=false
                // document.getElementById("div_quantite"+id).hidden=false
                // quatite= document.getElementById("changequantite"+id).value;

                // calcule_remise(id)

                // quatite=parseInt(quatite)+1;
                // document.getElementById("changequantite"+id).value=parseInt(quatite);
                // document.getElementById("quatitevalue"+id).innerHTML=quatite
            //    quatite_total=quatite_total+quatite
               
                if (!pr_select.includes(id)) {
                    qtyinitiale.push(document.getElementById("changequantite"+id).value)

                    pr_select.push(id);
}
// alert(pr_select)
// alert(id)
            calcule_remise(id)
               
calcule_total();

                        }
//             function selectproduit(id){
//                 alert('lkjh')
// //                 document.getElementById("pr_select"+id).checked=true
// //                 document.getElementById("tr_produit"+id).hidden=false
// //                 document.getElementById("div_quantite"+id).hidden=false
// //                 quatite= document.getElementById("changequantite"+id).value;
// //                 quatite=parseInt(quatite)+1;
// //                 document.getElementById("changequantite"+id).value=parseInt(quatite);
// //                 document.getElementById("quatitevalue"+id).innerHTML=quatite
// //                quatite_total=quatite_total+quatite
               
// //                 if (!pr_select.includes(id)) {
// //                     pr_select.push(id);
// // }
               
// // calcule_total();

//                         }

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
                    qtyinitiale.push(document.getElementById("changequantite"+id).value)

                    pr_select.push(id);
}
               
calcule_total();

                        }
                        selectclientvente();
            function selectclientvente(){

               var  clientid= document.querySelector('input[name="clientselect"]:checked').value;
               var clientname=document.getElementById("clientname"+clientid).value
               var teleclient=document.getElementById("teleclient"+clientid).value
               document.getElementById("client_idsuivant").value=clientid;
               glbalidclient=clientid;
               calcule_total();

            }

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
            document.getElementById("espece").className = "";

            document.getElementById("lettre").className = "";
            document.getElementById("montant_visible").hidden =true;
            document.getElementById("cartebancaire").className = "";
            document.getElementById("mode_payment").value = 5
        }
        // selectmodepayment_initial();
            calcule_montant_rendre();
        </script>
          @endsection