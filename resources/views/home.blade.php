
                @extends('layouts.app')

                @section('content')
                <style>
                    div.dataTables_filter > label > input {
        font-family: Arial, sans-serif;
        font-size: .6em;
      };
                </style>
                <div class="page-content">
                    <section class="section-accueil mt-3">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="liste-raccourci">
                                            
                                            @if ($favhome->favoris==1)
                                            <li>
                                                <a href="home" role="button">
                                                    <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                    <span>Home</span>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($favvente->favoris==1)
                                            
                                            <li>
                                                <a href="vente" role="button">
                                                    <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                    <span>Ventes</span>
                                                </a>
                                            </li>
                                            @endif

                                            @if ($favaddvente->favoris==1)
                                            
                                            <li>
                                                <a href="addventes" role="button">
                                                    <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                    <span>Ajouter vente</span>
                                                </a>
                                            </li>
                                            @endif
                                            

                                            @if ($favachat->favoris==1)

                                            <li>
                                                <a href="achat" role="button">
                                                    <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                    <span>Achats</span>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($favorganisme->favoris==1)

                                            <li>
                                                <a href="organisme" role="button">
                                                    <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                    <span>Organisme</span>
                                                </a>
                                            </li>
                                            @endif   @if ($favaddorg->favoris==1)

                                            <li>
                                                <a href="addorganismepage" role="button">
                                                    <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                    <span>Ajouter organisme</span>
                                                </a>
                                            </li>
                                            @endif


                                            



                                            @if ($favclient->favoris==1)
                                            <li>
                                                <a href="client" role="button">
                                                    <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                    <span>Clients</span>
                                                </a>
                                            </li>
                                            @endif

                                            @if ($favconfrere->favoris==1)
                                            <li>
                                                <a href="confrere" role="button">
                                                    <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                    <span>Confèrers</span>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($favaddentrer->favoris==1)
                                            <li>
                                                <a href="entrer-confrer" role="button">
                                                    <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                    <span>Entrées confèrers</span>
                                                </a>
                                            </li>
                                            @endif @if ($favaddsortie->favoris==1)
                                            <li>
                                                <a href="sortie-confrer" role="button">
                                                    <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                    <span>Sorties confèrers</span>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($favfournisseurs->favoris==1)
                                            <li>
                                                <a href="fournisseurs" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>Fournisseurs</span>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($favaddfour->favoris==1)
                                            <li>
                                                <a href="addfournisseur" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>Ajouter fournisseurs</span>
                                                </a>
                                            </li>
                                            @endif

                                            @if ($favproduit->favoris==1)
                                            <li>
                                                <a href="produit" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>Produits</span>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($favaddproduit->favoris==1)
                                            <li>
                                                <a href="ajouterproduit" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>Ajouter produits</span>
                                                </a>
                                            </li>
                                            @endif


                                            @if ($favcaisse->favoris==1)<li>
                                                <a href="caisse" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>Caisse</span>
                                                </a>
                                            </li>
                                            @endif

                                            @if ($favaddcloturecaisse->favoris==1)<li>
                                                <a href="caisse" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>clôture la caisse</span>
                                                </a>
                                            </li>
                                            @endif

                                            @if ($favstock->favoris==1)
                                            <li>
                                                <a href="stock" role="button">
                                                    <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                    <span>Stock</span>
                                                </a>
                                            </li>
                                            @endif
                                            @if ($favinventaire->favoris==1)
                                            <li>
                                                <a href="invent" role="button">
                                                    <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                    <span>Inventaire</span>
                                                </a>
                                            </li>
                                            @endif

                                            @if ($favprofile->favoris==1) <li>
                                                <a href="profile" role="button">
                                                    <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                    <span>Parametres</span>
                                                </a>
                                            </li> 
                                            @endif
                                            {{-- @if ($favhome->favoris==1) --}}
                                            <li>
                                                <a href="" class="btn-ajoute" role="button" data-bs-toggle="modal" data-bs-target="#add-raccourci-Modal">
                                                    <span>Ajouter</span>
                                                    <div class="icon"> <div class="img" style="    padding-top: 5px;
                                                        "><i class="bi bi-plus-lg"></i></div></div>

                                                   
                                                </a>
                                            </li>

                                        </ul>
                                        <hr class="diviseur" />
                                  
                                    </div>
                                    <div class="modal fade" id="add-raccourci-Modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="updatefavoris" method="POST">
                                                    @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="">Ajouter une favoris</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--<p class="text">-->
                                                    <!--    Cette option vous facilitera l’accès aux fonctionnalités de votre choix, <br />-->
                                                    <!--    d’une façon rapide, efficace et efficiente-->
                                                    <!--</p>-->
                                                    <ul class="liste-raccourci"  style="height: 260;">
                                                        <li>
                                                            <a href="#"
                                                            @if ($favhome->favoris==1)
                                                            class="active"
                                                            @endif id="home" onclick="selectfavpois('home')" role="button">
                                                                <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                                <span>Acceuil</span>
                                                                <input type="text" value="{{$favhome->favoris}}" hidden name="home" id="homeinput">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                            @if ($favvente->favoris==1)
                                                            class="active"
                                                            @endif
                                                            id="vente" role="button" onclick="selectfavpois('vente')">
                                                                <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                                <span>Ventes</span>
                                                                <input type="text"  value="{{$favvente->favoris}}"  hidden name="vente" id="venteinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                            @if ($favaddvente->favoris==1)
                                                            class="active"
                                                            @endif
                                                            id="addvente" role="button" onclick="selectfavpois('addvente')">
                                                                <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                                <span>Ajouter vente</span>
                                                                <input type="text"  value="{{$favaddvente->favoris}}"  hidden name="addvente" id="addventeinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                            @if ($favachat->favoris==1)
                                                            class="active"
                                                            @endif
                                                            id="achat"  role="button" onclick="selectfavpois('achat')">
                                                                <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                                <span>Achat</span>
                                                                <input type="text"   value="{{$favachat->favoris}}"
                                                                 hidden name="achat" id="achatinput">

                                                            </a>
                                                        </li>





                                                        <li>
                                                            <a href="#"
                                                            @if ($favorganisme->favoris==1)
                                                            class="active"
                                                            @endif
                                                            id="organisme"  role="button" onclick="selectfavpois('organisme')">
                                                                <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                                <span>Organisme</span>
                                                                <input type="text"   value="{{$favorganisme->favoris}}"
                                                                 hidden name="organisme" id="organismeinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                            @if ($favaddorg->favoris==1)
                                                            class="active"
                                                            @endif
                                                            id="addorganisme"  role="button" onclick="selectfavpois('addorganisme')">
                                                                <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                                <span>Ajouter organisme</span>
                                                                <input type="text"   value="{{$favaddorg->favoris}}"
                                                                 hidden name="addorg" id="addorganismeinput">

                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#"
                                                            
                                                            @if ($favproduit->favoris==1)
                                                            class="active"
                                                            @endif
                                                            id="produit" role="button" onclick="selectfavpois('produit')">
                                                                <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                                <span>Produits</span>
                                                                <input type="text" 
                                                                value="{{$favproduit->favoris}}"
                                                                  hidden name="produit" id="produitinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                            
                                                            @if ($favproduit->favoris==1)
                                                            class="active"
                                                            @endif
                                                            id="addproduit" role="button" onclick="selectfavpois('addproduit')">
                                                                <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                                <span>Ajouter produits</span>
                                                                <input type="text" 
                                                                value="{{$favaddproduit->favoris}}"
                                                                  hidden name="addproduit" id="addproduitinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                            @if ($favclient->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="1clients" role="button" onclick="selectfavpois('1clients')">
                                                                <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                                <span>Clients</span>
                                                                <input type="text"
                                                                value="{{$favclient->favoris}}"
                                                                 hidden name="1clients" id="1clientsinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                            @if ($favfournisseurs->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="1fournisseurs" role="button" onclick="selectfavpois('1fournisseurs')">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Fournisseurs</span>
                                                                <input type="text" value="1"
                                                                 value="{{$favfournisseurs->favoris}}"
                                                                  hidden name="1fournisseurs" id="1fournisseursinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                            @if ($favaddfour->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="add1fournisseurs" role="button" onclick="selectfavpois('add1fournisseurs')">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Ajouter fournisseurs</span>
                                                                <input type="text" value="1"
                                                                 value="{{$favaddfour->favoris}}"
                                                                  hidden name="addfour" id="add1fournisseursinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                            @if ($favconfrere->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="confrere" role="button" onclick="selectfavpois('confrere')">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Confrères</span>
                                                                <input type="text" value="{{$favconfrere->favoris}}"  hidden name="confrere" id="confrereinput">

                                                            </a>
                                                        </li> 
                                                        <li>
                                                            <a 
                                                            @if ($favaddentrer->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="sortconfrere" role="button" onclick="selectfavpois('sortconfrere')">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Entrées confèrers</span>
                                                                <input type="text" value="{{$favaddentrer->favoris}}"  hidden name="addentrer" id="sortconfrereinput">

                                                            </a>
                                                        </li>  <li>
                                                            <a 
                                                            @if ($favaddsortie->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="addconfrere" role="button" onclick="selectfavpois('addconfrere')">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Sorties confrères</span>
                                                                <input type="text" value="{{$favaddsortie->favoris}}"  hidden name="addsortie" id="addconfrereinput">

                                                            </a>
                                                        </li> 
                                                         <li>
                                                            <a 
                                                            @if ($favstock->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="1stock" role="button" onclick="selectfavpois('1stock')">
                                                               <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                                <span>stock</span>
                                                                <input type="text" value="{{$favstock->favoris}}"  hidden name="1stock" id="1stockinput">

                                                            </a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a 
                                                            @if ($favinventaire->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="Inventaire" role="button" onclick="selectfavpois('Inventaire')">
                                                                 <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                                <span>Inventaire</span>
                                                                <input type="text" value="{{$favinventaire->favoris}}"  hidden name="inventaire" id="Inventaireinput">

                                                            </a>
                                                        </li>

                                                        
                                                         <li>
                                                            <a 
                                                            @if ($favcaisse->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="caisse" role="button" onclick="selectfavpois('caisse')">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Caisse</span>
                                                                <input type="text" value="{{$favcaisse->favoris}}"   hidden name="caisse" id="caisseinput">

                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a 
                                                            @if ($favaddcloturecaisse->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="cloturecaisseid" role="button" onclick="selectfavpois('cloturecaisseid')">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>clôture la caisse</span>
                                                                <input type="text" value="{{$favaddcloturecaisse->favoris}}"   hidden name="addcloturecaisse" id="cloturecaisseidinput">

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                            @if ($favprofile->favoris==1)
                                                            class="active"
                                                            @endif
                                                            href="#" id="profile" role="button" onclick="selectfavpois('profile')">
                                                              <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                                <span>Parametres</span>
                                                                <input type="text" value="{{$favprofile->favoris}}" hidden name="profile" id="profileinput">

                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="row section-footer">
                                                        <div class="buttons">
                                                            <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                            
                                                            <button class="btn btn-hover color-green mx-1" 
                                                            
                                                         >Valider</button>
                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <form >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-table-home mt-0 pt-3">
                                            <div class="row filtre-home pb-1">
                                                <div class="col-md-6">
                                                    <div class="title-p pb-1">
                                                        <h5>Liste des ventes</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
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
                                            {{--  --}}
                                         
                                            <br>
<div id="table">

        <table id="example2" class="table table-striped selvente" style="width: 100%;">

        <thead>
            <tr>
                <th>Id</th>
                <th>Client</th>
                <th>Date</th>
                <th>Prix</th>
                <th>Quantite</th>

                 <th>Status</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>

                                                          </tbody>
    </table>

</div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <section class="section-actualite">
                                    <div class="title d-flex align-items-center">
                                        <div class="icon"><img src="/assets/icons/actualite.svg" style="    padding-top: 11px;
                                            " alt="" /></div>
                                        <h1>Actualités</h1>
                                    </div>
                                    <div class="image"><img src="/assets/img/actualite.png" alt="" /></div>
                                    <div class="promotion d-flex justify-content-between">
                                        <p>Promotion</p>
                                        <span>il y a 12h</span>
                                    </div>
                                    <div class="content">Possibilité de retourner en arrière dans le temps...</div>
                                    <a href="achat" class="btn btn-primary voir-plus">Voir plus</a>
                                </section>
                                <section class="section-statistique">
                                    <div class="block" style="width: 1">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/cmdencours.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Commandes total</h3>
                                                <div class="nombre-total">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/derniervent.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Dernières ventes</h3>
                                                <div class="nombre-total">{{sizeof($ventes)}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/depense.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Dépenses</h3>
                                                <div class="nombre-total">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/produit.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Produits</h3>
                                                <div class="nombre-total">{{$produits}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="section-stock">
                                    <a href="stock" role="button">
                                        <div>
                                            <div class="icon"><img src="/assets/icons/stock.svg" alt="" /></div>
                                            <span>Voir le Stock</span>
                                        </div>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </section>
                                <section class="section-aide d-flex">
                                    <div class="support">
                                        <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                            <span>05 30 500 500</span>
                                        </a>
                                    </div>
                                    <div class="aide" >
                                        <button 
                                            type="button"
                                            id="help-popup"
                                            role="button"
                                            class="d-flex align-items-center"
                                            data-bs-toggle="popover"
                                            title="Comment pouvons-nous aider ?"
                                            data-bs-content="Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page,
                                             le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum. Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum"
                                        >
                                            <div class="icon" style="padding-top:8px"><img src="/assets/icons/aide.svg" alt="" /></div>
                                            <span>Aide</span>
                                        </button>
                                      
                                    </div>

                                    <div class="retour" style="width: 1;">
                                        <a class="d-flex align-items-center" 
                                        style="    width: 36px;
                                      "
                                        {{-- data-bs-toggle="modal" --}}
                                         data-bs-target="#raccourcis">
                                            <div class="icon"><img src="/assets/icons/retour.svg" alt="" /></div>
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="modal fade vente-succes proposition-commande" id="proposition-de-commande" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Proposition de commande</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <ul class="d-flex flex-wrap">
                                    <li class="d-flex active">
                                        <a href="#">Génerer selon méthode prévisionnelle</a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Générer pour une période de coverture de stock </a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Génerer selon Stock Max</a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Générer selon la consemmation d’une période</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="buttons d-flex justify-content-center">
                                <a href="#" class="btn-hover color-green mx-1">Confirmer</a>
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="raccourcis" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="block-rac">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="popup-raccourcis">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" id="search" class="form-control" />
                            </div>

                            <ul id="items-to-search">
                                <li>
                                    <span>Han Solo</span>
                                    <span>Ctrl+A</span>
                                </li>
                                <li>
                                    <span>Darth Vader</span>
                                    <span>Win+R</span>
                                </li>
                                <li>
                                    <span>Boba Fett</span>
                                    <span>Shift+R</span>
                                </li>
                                <li>
                                    <span>R2-D2</span>
                                    <span>Win+K</span>
                                </li>
                                <li>
                                    <span>Chewbacca</span>
                                    <span>Win+L</span>
                                </li>
                                <li>
                                    <span>Yoda</span>
                                    <span>Ctrl+B</span>
                                </li>
                                <li>
                                    <span>Luke Skywalker</span>
                                    <span>Ctrl+D</span>
                                </li>
                                <li>
                                    <span>Darth Maul</span>
                                    <span>Ctrl+N</span>
                                </li>
                                <li>
                                    <span>Stormtrooper</span>
                                    <span>Ctrl+O</span>
                                </li>
                                <li>
                                    <span>Princess Leia</span>
                                    <span>Ctrl+Alt+F5</span>
                                </li>
                                <li>
                                    <span>Ben Kenobi</span>
                                    <span>Ctrl+Alt+F12</span>
                                </li>
                                <li>
                                    <span>Anakin Skywalker</span>
                                    <span>Ctrl+Alt+F15</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endsection



                  <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer ce vente</h5>
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
                                <form id="form1" action="deletevente" method="post">
                                    @method('delete')
                                    @csrf
                                   <input type="text"  id="vente_id" hidden name="vente_id">
                                <div class="row section-footer">
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
                <script>
                
                
  
                
                
                
     function  selectfavpois(id){
        // alert(id)
        var classf=   document.getElementById(id).className;
// alert(classf);
if(classf=="active"){
    document.getElementById(id).className=""
    document.getElementById(id+"input").value="0"
}
else{
    document.getElementById(id+"input").value="1"
    document.getElementById(id).className="active"

}

                  }
                    function recherche_produit(){
            var res=document.getElementById('recherch_produit').value;
            rout="get_vente"+res
            if(res=="")
            rout="gett_vente"
            axios.get(rout)
                        .then(function (response) {
                            document.getElementById("table").innerHTML= response.data;

                        
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                                
           }
           function charger_id_produit(id){
                        document.getElementById("vente_id").value=id;
                    }


                                     
    
    

                </script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>
    
$(document).ready(function(){

    
$(document).ready( function () {

  var mydattable =  $('#example2').DataTable({
    "bDestroy": true,

        dom: 'Brtip',
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
            search: '', 
            searchclass:"totot",
            searchPlaceholder: "Recherche...",
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
        "ajax": "gettableajax",
        "defaultContent": '<a type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editMemberModal"  onclick="editMember(data[0])"> <span class="glyphicon glyphicon-edit"></span>Edit</a> / <a href="" class=class="btn btn-danger">Delete</a>'
,
        "columns": [
            // {
            //     "render": function ( data, type, row, meta ) {
            //       return 'onclick=afficchchhc()'; }
     
            //   },


            // "render": function ( data, type, row, meta ) { 
            //     return '<button data-id="'+data+'" onclick="deleteThis(event)">Delete</button>'
            //     }
            { "data": "id" },
            { "data": "nom_client" },
            { "data": "created_at" },
            { "data": "montant_PPV" },
            { "data": "qte_total" },

            { "data": "status" },
            { "data": "id" },
           

            // { "data": "montant_PU" },
            // { "data": "nom_client" },
            // { "data": "montant_credit" },
            // { "data": "status" },
            // { "data": "id" },

           
        ],
        "columnDefs": [
            {
     
                "render": function ( data, type, row ) {
                    return '<td><div class="dropdown section-action"><a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a><ul class="dropdown-menu"><li><a class="dropdown-item" href="facture'+data+'">Afficher</a></li><li><a class="dropdown-item" href="modifiervante'+data+'">Modifier</a></li><li><a class="dropdown-item" onclick="charger_id_produit('+
                    data+')"href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a></li></ul></div></td>'
                },
                "targets": 6       
            
            },
            // 2022-09-23 09:22:37
            {
     
                "render": function ( data, type, row ) {
                    let datefinale;
                    datefinale=data.substring(8,10)+"-"+data.substring(5,7)+'-'+data.substring(0,4)+"  "+data.substring(11,16)
                    return datefinale;
                    // console.log(anyString.substring(0, 10))+;

                },
                "targets": 2       
            
            },


            // DD-MM-YYYY HH:mm
            {
     
                "render": function ( data, type, row ) {
                    return data +"DH"},
                "targets": 3       
            
            },
            {
     
                "render": function ( data, type, row ) {

                   if (data==1 || data=="1"){
                    return '<div class="status">            <span class="on"><i class="bi bi-circle-fill"></i> </span>               </div>';
                   }
                  else
                  if (data==2 || data=="2"){

                    return '<div class="status">            <span class="ongoing"><i class="bi bi-circle-fill"></i> </span>               </div>';

                  }
                  else    return '<div class="status">            <span class="off"><i class="bi bi-circle-fill"></i> </span>               </div>';
                   


                   
                },
                "targets": 5         
            
            },
            // {
     
            //     "render": function ( data, type, row ) {
            //         return '0'
            //     },
            //     "targets": 1           
            
            // },
                
            { "visible": true,  "targets": [ 1 ] }
        ]
    });

    // $('#example').dataTable();
    // $('#example input').addClass('form-control'); 
    // alert("kjh")
    $('#example2 tbody').on( 'click','td','tr', function () {
    var data= mydattable.column( this )  ;
    var id= mydattable.row( this ).data()["id"] ;
var headers = [];

var dataTableHeaderElements = $('#example2').DataTable().columns().header();
for (var i = 0; i< dataTableHeaderElements.length; i++) {
headers.push($(dataTableHeaderElements[i]).text())    
}    

if(headers[data[0]]!="Actions"){
 window.location.replace("/facture"+id)
}

    } );
    
    
//     $('#example tbody').on( 'click', 'tr', function (data) {
//         // var data = mydattable.fnGetData( this );
//         // console.log(this.parents('tr') ).data()
//     //     alert(window.location.href)
//     //     // window.location.replace("/detail")

// //     //    alert("data");
// //     // // alert('u')
// //     var data = mydattable.row( $(this).parents('tr') ).data();
// //     alert( data+"'s salary is: " );

// // // console.log( 'The table has ' + data[0] + ' records' );


//     // var data = mydattable.row( $(this).parents('tr') ).data();

// console.log(this.dataset.td)
//     } )
});






// Datatable


// Change style search to bs5
// $('.dataTables_filter input').addClass('form-control');




//   var options = {
//     series: [{
//     name: 'Net Profit',
//     data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
//   }, {
//     name: 'Revenue',
//     data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
//   }, {
//     name: 'Free Cash Flow',
//     data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
//   }],
//     chart: {
//     type: 'bar',
//     height: 350
//   },
//   plotOptions: {
//     bar: {
//       horizontal: false,
//       columnWidth: '55%',
//       endingShape: 'rounded'
//     },
//   },
//   dataLabels: {
//     enabled: false
//   },
//   stroke: {
//     show: true,
//     width: 2,
//     colors: ['transparent']
//   },
//   xaxis: {
//     categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
//   },
//   yaxis: {
//     title: {
//       text: '$ (thousands)'
//     }
//   },
//   fill: {
//     opacity: 1
//   },
//   tooltip: {
//     y: {
//       formatter: function (val) {
//         return "$ " + val + " thousands"
//       }
//     }
//   }
//   };

//   var chart = new ApexCharts(document.querySelector("#chart_bar"), options);
//   chart.render();


// // Chart js rapport principal
// var options = {
//     series: [99, 1],
//     chart: {
//     height: 350,
//     type: 'radialBar',
// },
// colors: ["#4172ED","#F5C745"],
// plotOptions: {
//     radialBar: {
//       dataLabels: {
//         name: {
//           fontSize: '22px',
//         },
//         value: {
//           fontSize: '16px',
//         },
   
//         total: {
//           show: true,
//           label: 'Total',
//           formatter: function (w) {
//             // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
//             return 249
//           }
//         }
//       }
//     }
//   },
//   stroke: {
//     lineCap: "round",
//   },
//   labels: ['Payé', 'Non Payé'],
// };

// var chart = new ApexCharts(document.querySelector("#chart_1"), options);
// chart.render();
// var options = {
//     series: [50, 50],
//     chart: {
//     height: 350,
//     type: 'radialBar',
// },
// colors: ["#4172ED","#F5C745"],
// plotOptions: {
//     radialBar: {
//       dataLabels: {
//         name: {
//           fontSize: '22px',
//         },
//         value: {
//           fontSize: '16px',
//         },
//         total: {
//           show: true,
//           label: 'Total',
//           formatter: function (w) {
//             return 249
//           }
//         }
//       }
//     }
// },
// stroke: {
//   lineCap: "round",
// },
// labels: ['Payé', 'Non Payé'],
// };

// var chart = new ApexCharts(document.querySelector("#chart"), options);
// chart.render();


})


// Collapse side menu 
$('.collapse-icons').click(function(){

$('.sidebar .sidebar-body').toggleClass('change-position');
$('.sidebar-body>.nav').toggleClass('remove-padding');
$('.sidebar').toggleClass('sidebar-closed');
$('.nav span').toggleClass('hide-span');
// $('.sidebar-header').toggleClass('hide-span');
$('.navbar').toggleClass('page-wrapper-left')
$('.page-wrapper').toggleClass('page-wrapper-left');
$('.accordion-button:after').toggleClass('hide-span');
$('.nav .nav-item .collapse').removeClass('show');
$('.nav .nav-item .nav-link.accordion-button').attr('aria-expanded','false');
$('.class-rotate').toggleClass('rotate-collapse');
$('.nav .nav-item .nav-link.accordion-button').addClass('collapsed');
$('.setting-header').toggleClass('icon-setting');

})

$('.nav .nav-item .nav-link.accordion-button').click(function(){

$('.sidebar').removeClass('sidebar-closed');
$('.nav span').removeClass('hide-span');
$('.sidebar-header').removeClass('hide-span');
$('.navbar').removeClass('page-wrapper-left')
$('.page-wrapper').removeClass('page-wrapper-left');
$('.accordion-button:after').removeClass('hide-span');
$('.setting-header').removeClass('icon-setting');
$('.sidebar-body').removeClass('change-position');
$('.sidebar .nav').removeClass('remove-padding');

})

// Search bar live
$('#items-to-search li').jqSearch({
searchInput: '#search',
searchTarget: 'text',
});

// Function popover for help
$(document).ready(function(){
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
 return new bootstrap.Popover(popoverTriggerEl)
});

$('#help-popup').click(function(e) {
$('.popover-header').append('<button id="popovercloseid" type="button" class="close-btn"><i class="bi bi-x-lg"></i></button>');
$(this).popover();
});

$(document).click(function(e) {
if(e.target.id=="popovercloseid" )
{
    $('#help-popup').popover('hide');                
}
});
})



$(document).ready(function() {
// Upload image
function preview(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) { 
    var img = new Image;
            img.onload = function() {		
            $('.img').attr({'src':e.target.result,'width':img.width});
            };
    img.src = reader.result;}
    reader.readAsDataURL(input.files[0]);   
}
}
$(".upload").change(function(){
  $(".img").css({top: 0, left: 0});
      preview(this);
      $(".img").draggable({ containment: 'parent',scroll: false});
});




// Input qty 
var quantity = 0;
$('.quantity-increment').click(function(){;
var t = $(this).siblings('.quantity');
var quantity = parseInt($(t).val());
$(t).val(quantity + 1); 
    
});


// Efeito spinner sem plugin - pagina carrinho - decrement
$('.quantity-decrement').click(function(){
var t = $(this).siblings('.quantity');
var quantity = parseInt($(t).val());
if(quantity > 1){
    $(t).val(quantity - 1);
}
}); 

} );


// Select change show/hide Montant avoir de la page Cadeau (Rubrique paramètres)
$(function() {
$('#montant-filter').hide(); 
$('#type').change(function(){
  if($('#type').val() == 'avoir') {
      $('#produit-filter').hide(); 
      $('#montant-filter').show();  
  } else {
      $('#produit-filter').show(); 
      $('#montant-filter').hide(); 
  } 
});
});








var table = [
"ActionScript",
"AppleScript",
"Asp",
"BASIC",
"C",
"C++",
"Clojure",
];

$("#nom-produit").autocomplete({
minLength: 0,
source: table,
position: {  collision: "flip"  },

focus: function (event, ui) {

$("#nom-produit").val(ui.item.label);
return false;

},

select: function (event, ui) {

  $("#nom-produit").val(ui.item.label);
  return false;

}
})
.autocomplete("instance")._renderItem = function (ul, item) {
return $("<li>")
  .append("<div>" + item.label + "</div>")
  .appendTo(ul);
};





</script>