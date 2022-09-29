







<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">          
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/scss/bootstrap.css" />
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/assets/vendor/datatables/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/assets/vendor/datatables/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/accueil.css" />
    
  <link rel="stylesheet" href="/assets/css/chosen.css">
    <link rel="stylesheet" href="/assets/css/vente.css" />
    <link rel="stylesheet" href="/assets/css/rapport.css" />

    <link rel="stylesheet" href="/assets/css/client.css" />
    <!-- <link rel="stylesheet" href="/assets/css/client.css"> -->
    <!-- <link rel="stylesheet" href="/assets/css/product.css"> -->
    <link rel="stylesheet" href="/assets/css/stock.css" />
        <link rel="stylesheet" href="/assets/css/fornisseur.css" />

    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/buttons.css" />
    <link rel="stylesheet" href="/assets/css/product.css" />
    <link rel="stylesheet" href="public\assets\css\toastr.min.css">
    <link rel="stylesheet" href="/assets/css/toastr.min.css">
    <link rel="icon" type="image/svg+xml" href="/assets/icons/icone-logo.svg">
    <title>BLINK PHARMA</title>
<style>
   .selvente tr {
    cursor: pointer;
}

.selvente tbody tr:hover {background-color: #B2DDFE; }

input[id="starting-date"] {
  width: 25px;
    padding: 0px;
    margin: 0px;
    margin-top: 0px;
    border : none;
}
input[id="starting-date"]::-webkit-calendar-picker-indicator {
    display: block;
    background: url(/assets/icons/callendar.svg) no-repeat;
    width: 25px;
    height: 17px;
    border : none;
}

.vente-succes.search-client .modal-dialog {
    min-width: 635px;
}

.spacecenter {
    margin-right: 0.55rem!important;
    margin-left: 1.25rem!important;
}
.modal-dialog .modal-content .modal-body {
    padding: 2rem;
    padding-bottom: 1rem;
}

.section-achat .table-commande .card-total {
    background: #3854D8;
    border-radius: 0px 0px 4px 4px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    padding: 20px 25px;
    color: #fff;
    display: block;
    margin-left: auto;
}
</style>

</head>
<body>


    <div class="main-wrapper" >
      <!-- partial:partials/_sidebar.html -->
      
      <nav class="sidebar" id="accordionSidebar">
        <div class="sidebar-header">
            <a href="/home" class="sidebar-brand logo-default">
                 <img src="/assets/img/logo.png" alt="" /> </a>
            <a href="/home" class="sidebar-brand logo-closed"> 
                <img src="/assets/icons/icone-logo.svg" alt="" /> </a>
        </div>
        <hr class="divider" />
        <div class="sidebar-body"  >
            {{-- <div> --}}
            <ul class="nav" >
                <li class="nav-item">
                    <a href="/home"
                    id='hrefd’acceuil'
                    aria-expanded="false"
                    onclick="menuselect('d’acceuil')"
                    class="nav-link"> <i class="bi bi-grid"></i> 
                        <div id="d’acceuil" hidden></div>

                        <span class="link-title">Page d’acceuil</span> </a>
                </li>
                <li class="nav-item" id="accordion-produit">
                    <a class="nav-link accordion-button collapsed" aria-controls="produits"
                    onclick="menuselect('produits')"
                    id='hrefproduits'
                    data-bs-toggle="collapse" href="#produits" role="button" aria-expanded="false" aria-controls="produits">
                        <i class="bi bi-archive"></i> <span class="link-title">Produits</span>
                    </a>
                    <div class="collapse" id="produits" aria-labelledby="accordion-produit" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Produits</a>
                                </li>
                            </div>
                            <li class="nav-item"><a onclick="sousmenuselect('tousproduits')" id='shreftousproduits' href="produit" class="nav-link"   >Voir tous les produits</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('ajouterproduit')" id='shrefajouterproduit' href="ajouterproduit" class="nav-link">Ajouter un produit</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="clients" id='hrefclients'
                    aria-expanded="false"
                    onclick="menuselect('clients')"
                    class="nav-link"> <i class="bi bi-people"></i>
                        <div id="clients" hidden></div>
                        <span class="link-title">Clients</span> </a>
                </li>
                <li class="nav-item" id="accordion-vente">
                    <a onclick="menuselect('ventes')"
                    id='hrefventes'
                    class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#ventes" role="button" aria-expanded="false" aria-controls="ventes">
                        <i class="bi bi-ticket"></i> <span class="link-title">Ventes</span>
                    </a>
                    <div class="collapse" id="ventes" aria-labelledby="accordion-vente" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Ventes</a>
                                </li>
                            </div>
                            <li class="nav-item"><a onclick="sousmenuselect('toutevente')" id='shreftoutevente' href="vente" class="nav-link">Voir toutes les ventes</a></li>
                            {{-- <li class="nav-item"><a href="devis" class="nav-link">Devis</a></li> --}}
                            
                            <li class="nav-item"><a onclick="sousmenuselect('addventes')" id='shrefaddventes' href="addventes" class="nav-link">Nouvelle vente</a></li>

                            {{-- <li class="nav-item"><a href="retoursurvente" class="nav-link">Retours sur ventes</a></li> --}}
                            {{-- <li class="nav-item"><a href="#" class="nav-link">Reconditionner un produit</a></li> --}}
                            {{-- <li class="nav-item"><a href="#" class="nav-link">Préparations officinales</a></li> --}}
                            {{-- <li class="nav-item"><a href="#" class="nav-link">la caisse</a></li> --}}

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" onclick="menuselect('achats')"
                    id='hrefachats'
                     data-bs-toggle="collapse" href="#achats" role="button" aria-expanded="false" aria-controls="achats">
                        <i class="bi bi-bag"></i> <span class="link-title">Achats</span>
                    </a>
                    <div class="collapse" id="achats" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"  ><b></b>Achats</a>
                                </li>
                            </div>
                            <li class="nav-item"><a onclick="sousmenuselect('achat')" id='shrefachat' href="achat" class="nav-link">Offres</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('Propositions')" id='shrefPropositions' href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#proposition-de-commande">Propositions de commande</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('Bons')" id='shrefBons' href="achat" class="nav-link">Bons de commande</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('livraison')" id='shreflivraison' href="#" class="nav-link">Bons de livraison</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('Avoirs')" id='shrefAvoirs' href="#" class="nav-link">Avoirs Fournisseur émis</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('reçus')" id='shrefreçus' href="#" class="nav-link">Avoirs Fournisseurs reçus</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('Dépenses')" id='shrefDépenses' href="#" class="nav-link">Dépenses</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('Réception')" id='shrefRéception' href="/pages/achat/reception.html" class="nav-link">Réception</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse"
                    onclick="menuselect('fournisseurs')"   id="hreffournisseurs"
                    href="#fournisseurs" role="button"  aria-expanded="false" aria-controls="fournisseurs">
                        <i class="bi bi-person"></i> <span class="link-title"   >Fournisseurs</span>
                    </a>
                    <div class="collapse" id="fournisseurs" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" onclick="menuselect('fournisseurs')" class="nav-link"><b></b>Fournisseurs</a>
                                </li>
                            </div>
                            <li class="nav-item"><a onclick="sousmenuselect('tousfourn')" id='shreftousfourn' href="fournisseurs" onclick="menuselect('fournisseurs')"
                                class="nav-link">Voir tous les fournisseurs</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('addfourn')" id='shrefaddfourn' href="addfournisseur"  onclick="menuselect('fournisseurs')" class="nav-link">Ajouter un fournisseur</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed"            
                             onclick="menuselect('confrères')"   id="hrefconfrères"

                    data-bs-toggle="collapse" href="#confrères" role="button" aria-expanded="false" aria-controls="confrères">
                        <i class="bi bi-star"></i> <span class="link-title">Confrères</span>
                    </a>
                    <div class="collapse" id="confrères" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Confrères</a>
                                </li>
                            </div>
                            <li class="nav-item"><a onclick="sousmenuselect('confrere')" id='shrefconfrere' href="confrere" class="nav-link">Confrères</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('sconfrere')" id='shrefsconfrere' href="sortie-confrer" class="nav-link">Sorties confrères</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('econfrere')" id='shrefeconfrere' href="entrer-confrer" class="nav-link">Entrées confrères</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse"
                    onclick="menuselect('organismes')"   id="hreforganismes"
                    href="#organismes" role="button" aria-expanded="false" aria-controls="organismes">
                        <i class="bi bi-diagram-2"></i> <span class="link-title">Organismes</span>
                    </a>
                    <div class="collapse" id="organismes" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            {{-- <div class="mb-1">
                                <li class="nav-item">
                                    <a onclick="sousmenuselect('Organismes')" id='shrefOrganismes' href="organisme" class="nav-link"><b></b>Organismes</a>
                                </li>
                            </div> --}}
                            <li class="nav-item"><a onclick="sousmenuselect('tOrganismes')" id='shreftOrganismes' href="organisme" class="nav-link">Voir tous les organismes</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('addOrganismes')" id='shrefaddOrganismes' href="addorganismepage" class="nav-link">Ajouter un organisme</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('fOrganismes')" id='shreffOrganismes' href="indexvente" class="nav-link">Factures organismes</a></li>
                            {{-- <li class="nav-item"><a onclick="sousmenuselect('bOrganismes')" id='shrefbOrganismes' href="#" class="nav-link">Borderaux d’envoi</a></li> --}}
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" 
                    onclick="menuselect('stock')"   id="hrefstock"

                    data-bs-toggle="collapse" href="#stock" role="button" aria-expanded="false" aria-controls="stock">
                        <i class="bi bi-pie-chart"></i> <span class="link-title">Stock</span>
                    </a>
                    <div class="collapse" id="stock" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Stock</a>
                                </li>
                            </div>
                            <li class="nav-item"><a onclick="sousmenuselect('stocks')" id='shrefstocks' href="stock" class="nav-link">Voir tous les stocks</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('istocks')" id='shrefistocks' href="invent" class="nav-link">inventaires</a></li>
                            <!--<li class="nav-item"><a onclick="sousmenuselect('pstocks')" id='shrefpstocks' href="importinventaires" class="nav-link">imports</a></li>-->
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" 
                    onclick="menuselect('Caisse')"   id="hrefCaisse"

                    data-bs-toggle="collapse" href="#Caisse" role="button" aria-expanded="false" aria-controls="Caisse">
                        <i class="bi bi-currency-dollar"></i>
                        
                        <span class="link-title">Caisse</span>
                    </a>
                    <div class="collapse" id="Caisse" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Caisse</a>
                                </li>
                            </div>
                            <li class="nav-item"><a onclick="sousmenuselect('vcaisse')" id='shrefvcaisse' href="caisse" class="nav-link">Voir la caisse</a></li>
                            <li class="nav-item"><a onclick="sousmenuselect('ccaisse')" id='shrefccaisse' href="generatecaisse" class="nav-link">clôturer la caisse</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="rapports" 
                    id='hrefrapports'
                    aria-expanded="false"
                    onclick="menuselect('rapports')"
                    class="nav-link"> <i class="bi bi-file-earmark-minus"></i>
                    <div id="rapports" hidden></div>
                    
                    <span class="link-title">Rapports</span> </a>
                </li>
           
              
                {{-- <li class="nav-item">
                    <a href="Exporation" class="nav-link"> <i class="bi bi-arrow-bar-down"></i>
                        <span class="link-title">Exportation</span> </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="profile" 

                    id='hrefparametres'
                    aria-expanded="false"
                    onclick="menuselect('parametres')"
                    class="nav-link"> 
                        <i class="bi bi-tools"></i>
                        <div id="parametres" hidden></div>

                        <span class="link-title">reglage</span> </a>
                </li> --}}
                <li class="nav-item dropend ">
               
               
               
               
               
               
               
               
               
               
                       
  <a type="button" class="nav-link "  onclick="menuselect('parametres')"   id='hrefparametres'>
        <i class="bi bi-tools"></i>
                    <div id="parametres" hidden></div>
    <span class="link-title">Reglage</span>
    <div class="dropdown-toggle offset-5"></div>
  </a>
  
  
  
 



    <div class="sidebar dropdown-menu"  id="menuparam" style="margin-left:250px;display:hidden; background-color:transparent" >
    
  <nav class=""  style="width:300px; margin-top:50px;"  >
    
       
  <div class="sidebar-body"  >
            {{-- <div> --}}
            <ul class="nav" >
           
                      <li class="nav-item" id="accordion-produit">
                        <a class="nav-link accordion-button collapsed"
                        onclick="menuselect('mespar')"
                        id='hrefmespar'
                        data-bs-toggle="collapse" href="#mespar" role="button" aria-expanded="false" aria-controls="ventes">
                            {{-- <i class="bi bi-archive"></i>  --}}
                            <span class="link-title">Mes patrametres</span>
                        </a>
                        <div class="collapse" id="mespar" aria-labelledby="accordion-produit" data-bs-parent="#accordionSidebar">
                            <ul class="nav sub-menu">
                                <div class="title-submenu mb-1">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><b>
                                            </b>Mes patrametres</a>
                                    </li>
                                </div>
                            
                                <li style="    padding-left: 12px" class="nav-item"><a
                                    onclick="sousmenuselect2('vprofil','Profil')"
                                    {{-- onclick="changetitre('Profil')" --}}
                                    id='shrefvprofil' href="profile" class="nav-link">Profil</a>
                                    </li>
                                    
                                <li  style="padding-left: 12px"  class="nav-item"
                                ><a href="codesecuritechage"  onclick="sousmenuselect2('vcodesecuritechage','Code de securite')" id='hrefvcodesecuritechage' class="nav-link">Changer le code securite</a></li>
                            </ul>
                        </div>
                    </li>

            
                <li class="nav-item" id="accordion-vente">
                    <a
                     onclick="menuselect('Utilisateur')"
                    id='hrefUtilisateur'
                    class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#Utilisateur" role="button" aria-expanded="false" aria-controls="ventes">
                      <span class="link-title">Utilisateur</span>
                    </a>
                    <div class="collapse" id="Utilisateur" aria-labelledby="accordion-vente" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Utilisateur</a>
                                </li>
                            </div>
                            <li  style="    padding-left: 12px"  class="nav-item"><a  onclick="sousmenuselect2('vuser','Utilisateur')" id='shrefvuser' href="adduser" class="nav-link">Ajouter un  utilisateur</a></li>
                            {{-- <li class="nav-item"><a href="devis" class="nav-link">Devis</a></li> --}}
                            
                            <li style="    padding-left: 12px"  class="nav-item"><a href="AfficherUser"  onclick="sousmenuselect2('vaffichuser','Historique de connexion')" id='shrefvaffichuser' class="nav-link">Historique de connexion </a></li>

                            {{-- <li class="nav-item"><a href="retoursurvente" class="nav-link">Retours sur ventes</a></li> --}}
                            {{-- <li class="nav-item"><a href="#" class="nav-link">Reconditionner un produit</a></li> --}}
                            {{-- <li class="nav-item"><a href="#" class="nav-link">Préparations officinales</a></li> --}}
                            {{-- <li class="nav-item"><a href="#" class="nav-link">la caisse</a></li> --}}

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed"
                     onclick="menuselect('Horaire')"
                    id='hrefHoraire'
                     data-bs-toggle="collapse" href="#Horaire" role="button" aria-expanded="false" aria-controls="Horaire">
                    <span class="link-title">  Horaire d'ouverture</span>
                    </a>
                    <div class="collapse" id="Horaire" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"  ><b></b>  Horaire d'ouverture</a>
                                </li>
                            </div>
                            <li  style="    padding-left: 12px" class="nav-item"><a href="EmploiduTemp" onclick="sousmenuselect2('vheur','Heures d ouverture')" id='shrefvheur' class="nav-link">Heures d'ouverture</a></li>
                            <li  style="    padding-left: 12px" class="nav-item"><a href="AfficherGarde" onclick="sousmenuselect2('vgarde','Gardes')" id='shrefvgarde'  class="nav-link">Gardes</a></li>
                          
                        </ul>
                    </div>
                </li>
             
              
                

               

                <!--<li class="nav-item">-->
                <!--    <a class="nav-link accordion-button collapsed"            -->
                <!--             onclick="menuselect('transactions')"-->
                             
                <!--             id="hreftransactions"-->

                <!--    data-bs-toggle="collapse" href="#transactions" role="button" aria-expanded="false" aria-controls="transactions">-->
                <!--         <span class="link-title">Prarmetres des transactions</span>-->
                <!--    </a>-->
                <!--    <div class="collapse" id="transactions" data-bs-parent="#accordionSidebar">-->
                <!--        <ul class="nav sub-menu">-->
                <!--            <div class="title-submenu mb-1">-->
                <!--                <li class="nav-item">-->
                <!--                    <a href="#" class="nav-link"><b></b>Prarmetres des transactions</a>-->
                <!--                </li>-->
                <!--            </div>-->
                <!--            <li  style="    padding-left: 12px" class="nav-item"><a href="ModifierRemiseparCategorie"   onclick="sousmenuselect2('vremise','Remise')" id='shrefvremise' class="nav-link">Remise max par categorie</a></li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</li>-->

            


               

                
                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" 
                    onclick="menuselect('produitv')" 
                    id="hrefproduitv"
                    data-bs-toggle="collapse" href="#produitv" role="button"
                    aria-expanded="false" aria-controls="produitv">
                      
                         <span class="link-title">Parametres de produit</span>
                    </a>
                    <div class="collapse" id="produitv" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Parametres de produit</a>
                                </li>
                            </div>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherZone"  onclick="sousmenuselect2('vzone','Zone')" id='shrefvzone'> Zone </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AfficherDci"  onclick="sousmenuselect2('vdci','DCI')" id='shrefvdci'> DCI </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherForm"  onclick="sousmenuselect2('vForms','Forms')" id='shrefvForms'> Forms </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AfficherType"  onclick="sousmenuselect2('vtype','Type')" id='shrefvtype'> Type </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AjouterVillesView"  onclick="sousmenuselect2('vville','Ville')" id='shrefvville'> Ville </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AjouterPaysView"  onclick="sousmenuselect2('vpays','Pays')" id='shrefvpays'> Pays </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherClasse"  onclick="sousmenuselect2('vgroupe','Groupe')" id='shrefvgroupe'> Groupe </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherRemise"  onclick="sousmenuselect2('vremisee','Remise')" id='shrefvremisee'> Remise </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherTva"  onclick="sousmenuselect2('vtva','TVA')" id='shrefvtva'> TVA </a></li>
                          
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherContreIndication"  onclick="sousmenuselect2('vindication','Indication')" id='shrefvindication'> Indication </a></li>


                            
                          
                        </ul>
                    </div>
                </li>
               <li class="nav-item">
                    <a href="importation" 
                    id='hrefimportation'
                    aria-expanded="false"
                    onclick="menuselect('importation')"
                    class="nav-link"> 
                    <div id="importation" hidden></div>

                        <span class="link-title">Importations</span> </a>
                </li>

           
                <li class="nav-item">
                    <a href="TermeDevis" 
                    id='hrefTermeDevis'
                    aria-expanded="false"
                    onclick="menuselect('TermeDevis')"
                    class="nav-link"> 
                    <div id="TermeDevis" hidden></div>
                    
                    <span class="link-title">Terme de Devis</span> </a>
                </li>

                
                <li class="nav-item">
                    <a href="TermeFacture" 
                    onclick="menuselect('TermeFacture')"
                    id ="hrefTermeFacture" class="nav-link">
                    <div id="TermeFacture" hidden></div>
                        <span class="link-title">Bon de livraison
                        </span> </a>
                </li>
                <li class="nav-item">
                    <a href="TermeVente" 
                    onclick="menuselect('TermeVente')"
                    id ="hrefTermeVente" class="nav-link">
                    <div id="TermeVente" hidden></div>
                        <span class="link-title">Terme de vente
                        </span> </a>
                </li>







                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" 
                    onclick="menuselect('rolev')" 
                    id="hrefrolev"
                    data-bs-toggle="collapse" href="#rolev" role="button"
                    aria-expanded="false" aria-controls="rolev">
                         <span class="link-title">Parametre de securité</span>
                    </a>
                    <div class="collapse" id="rolev" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Parametre de securité</a>
                                </li>
                            </div>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="role"
                                  onclick="sousmenuselect2('addrole','Ajouter Role')" id='shrefaddrole'>Ajouter Role </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="listerole" 
                                 onclick="sousmenuselect2('listerole','Liste des Roles')" id='shreflisterole'> Liste des Roles </a></li>
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" 
                    onclick="menuselect('recus')"   id="hrefsrecus"

                    data-bs-toggle="collapse" href="#recus" role="button" aria-expanded="false" aria-controls="recus">
                       </i> <span class="link-title">Avoir fournisseur recus</span>
                    </a>
                    <div class="collapse" id="recus" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Avoir fournisseur recus</a>
                                </li>
                            </div>
                            <li  style="    padding-left: 12px"  class="nav-item"><a href="#"  onclick="sousmenuselect2('vrecu','Raisons des avoirs fournisseurs')" id='shrefvrecu' class="nav-link">Raisons des avoirs fournisseurs</a></li>
                            {{-- <li class="nav-item"><a href="invent" class="nav-link">inventaires</a></li>
                            <li class="nav-item"><a href="importinventaires" class="nav-link">imports</a></li> --}}
                        </ul>
                    </div>
                </li>
                
<li class="nav-item">
                    <a class="nav-link accordion-button collapsed"            
                             onclick="menuselect('transactions2')"   id="hreftransactions2"

                    data-bs-toggle="collapse" href="#transactions2" role="button" aria-expanded="false" aria-controls="transactions2">
                         <span class="link-title">Prarmetres d'application</span>
                    </a>
                    <div class="collapse" id="transactions2" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Prarmetres d'application</a>
                                </li>
                            </div>
                            <li style="    padding-left: 12px"  class="nav-item"><a href="logo" class="nav-link" onclick="sousmenuselect2('vlogo','Logo')" id='hrefvlogo' >logo</a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a href="entet-pdf" class="nav-link" onclick="sousmenuselect2('ventet','Entete PDF')" id='shrefventet' >Entete PDF</a></li>
                            <li  style="    padding-left: 12px" class="nav-item"><a href="pied-pdf" class="nav-link" onclick="sousmenuselect2('vpied','Pied PDF')" id='shrefvpied'>Pied PDF</a></li>

                           
                        </ul>
                    </div>
                </li>

               
              
                
      
            
               
                <div class="setting-header">
                    <div class="parametres">
                        <a href="AfficherUser"> 
                            <div style="padding-top: 10">
                                <i class="bi bi-gear"></i>
                            </div>
                         </a>
                    </div>
                    <div class="log_out">
                        <a href="deconnexion"> 
                            <div style="padding-top: 10">
                                 <i class="bi bi-box-arrow-in-right"></i> 
                            </div>

                        </a>
                    </div>
                </div>
                
            </ul>
        </div>
        {{-- <div class="close-sidebar">
            <span class="collapse-icons"><img src="/assets/icons/collapse.svg" class="class-rotate" /></span>
        </div> --}}
    </nav>
    
    </div>

























                </li>


      
                {{-- <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" 
                    onclick="menuselect('parametres')"   id="hrefparametres"

                    data-bs-toggle="collapse" href="#parametres" role="button" aria-expanded="false"
                     aria-controls="parametres">
                        <i class="bi bi-currency-dollar"></i>
                        
                        <span class="link-title">reglage</span>
                    </a>
                   
                </li>
                --}}
                <div class="setting-header">
                    <div class="parametres">
                        <a href="profile"> 
                            <div style="padding-top: 10">
                                <i class="bi bi-gear"></i>
                            </div>
                         </a>
                    </div>
                    <div class="log_out">
                        <a href="deconnexion"> 
                            <div style="padding-top: 10">
                                 <i class="bi bi-box-arrow-in-right"></i> 
                            </div>

                        </a>
                    </div>
                </div>
                
            </ul>
        </div>
        <div class="close-sidebar" onclick='DisableParam()'>
            <span class="collapse-icons"><img src="/assets/icons/collapse.svg" class="class-rotate" /></span>
            <input type="hidden" value=0 id="stateparam"/>
        </div>
    </nav>
    </div>
  
      <div class="page-wrapper">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar">
            <a href="#" class="sidebar-toggler"> <i data-feather="menu"></i> </a>
            <div class="navbar-content" style="margin-top:-10px">
                <div class="d-flex header-navbar">
                    <div class="title-header">
                        <h1 id="titreheader">Page d'accueil</h1>
                    </div>
                    <div class="title-header">
                    
                        
                                <form class="search-form" >
                            <div class="input-group" style="padding-top:14px">
                                <div class="form-outline">
                                    {{-- <select  id="form1  class="chosen-select form-select"  name="categorie" required> --}}
                                        {{-- <option  value="" selected>...</option>
                                        @foreach($types as $type)
                                        <option  value="{{$type->id}}"  @if (old('categorie') == $type->id) {{ 'selected' }} @endif>{{$type->name}}</option>
                                        @endforeach --}}
                                     
                                    {{-- </select> --}}

                                  
                                      <input id="data1" list="data"  type="search" class="form-control" placeholder="Recherche" onChange="get_data()">
                                        <datalist id="data">
                                            <option data-customvalue="home" value="acceuil"></option>
                                            <option data-customvalue="produit" value="les Produits"></option>


                                            
                                            <option data-customvalue="vente" value="Les ventes"></option>
                                            <option data-customvalue="achat" value="Les achats"></option>
                                            <option data-customvalue="confrere" value="Les confrères"></option>
                                            <option data-customvalue="clients" value="Les Clients"></option>
                                            <option data-customvalue="fournisseurs" value="Les fournisseurs"></option>
                                            <option data-customvalue="Client" value="Les Organismes"></option>
                                            <option data-customvalue="stock" value="Stock"></option>
                                            <option data-customvalue="caisse" value="Caisse"></option>
                                            <option data-customvalue="rapports" value="Rapport"></option>
                                            <option data-customvalue="communication" value="communication"></option>
                                            <option data-customvalue="importation" value="Importation"></option>

                                            <option data-customvalue="profile" value="parametres"></option>
                                            <option data-customvalue="profile"    value="profile"></option>

                                        
                            
                                          {{-- <option value="Vetes">Les ventes</option> 
                                          <option value="two">Les achats</option>
                                          <option value="two">Les produits</option>
                                          <option value="two">Les confrères</option>
                                          <option value="two">Les fournisseurs</option>
                                          <option value="two">parametres</option>
                                          <option value="two">profile</option> --}}
                                          {{-- <option value="two">profile</option> --}}



                                      </datalist>
                                    {{-- <select type="search" id="form1" class="form-control" placeholder="Recherche"></select> --}}
                                    {{-- <input type="search" id="form1" class="form-control" placeholder="Recherche" /> --}}
                                </div>
                                <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    @php
       setlocale(LC_TIME, "fr_FR");
      $date = strftime("%d %B %Y");
                    @endphp
                    <div class="profile d-flex align-items-center">
                        
                        
                        
                        
                        
                        <div class="date dropdown">
  <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="/assets/icons/callendar.svg" alt=""> <label for=""> {{ $date }}</label>
  </div>

    
        
          <form class="dropdown-menu p-2" style="width:300px" action="{{url('Addcalendar')}}" method="post">
              @csrf
                  <div class="mb-2 mt-2">
     Programmer un rappel
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2" class="form-label">Date et heure</label>
   <input class="form-control" required  id="datereminder" name="date"  type="datetime-local" 
                             data-initialized="true" value="2017-04-07" >
    </div>
    <div class="mb-3">
    <div class="form-floating">
  <textarea class="form-control" required placeholder="Leave a comment here" id="floatingTextarea" name="comment"></textarea>
  <label for="floatingTextarea">Commentaire</label>
</div>
    </div>

    <button type="submit" class="btn btn-primary mt-2" style="font-size:12px">Sauvegarder</button>
  </form>
        
   
  
</div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                  
              
                          
                      
                          
                          
                               
                        <div class="notification" >
                            <a class="nav-item nav-link dropdown-toggle" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" onclick="listNotif()" style="padding-top:9px;padding-bottom:9px">
        <img src="/assets/icons/notification.svg" alt="" />
      </a>


<div class="dropdown-menu dropdown-menu-left " id="divnotif" >
    
     <div class="mb-2 mt-2" style="padding-left:10px">Aujourd'hui</div>
    @if(sizeof(Auth::User()->calendarsNow)==0)
      <hr class="divider mb-2" />
        <div class="mb-2"  style="font-size:12px;padding-left:10px">Aucune notification !</div>
    @endif
    @foreach(Auth::User()->calendarsNow as $cal)
       <hr class="divider mb-2" />
        <div class="mb-2"  style="font-size:12px;padding-left:10px">{{$cal->comment}} à &nbsp; <strong style="font-size:12px">{{$cal->date}}</strong></div>
        
     @endforeach
      <hr class="divider mt-2" />
      
        <div class="mb-2 mt-5" style="padding-left:10px">Avenir</div>


    @if(sizeof(Auth::User()->calendarsfutur)==0)
      <hr class="divider mb-2" />
        <div class="mb-2"  style="font-size:12px;padding-left:10px">Aucune notification !</div>
    @endif
         @foreach(Auth::User()->calendarsfutur as $cal)
          <hr class="divider mb-2" />
        <div class="mb-2"  style="font-size:12px;padding-left:10px">{{$cal->comment}} à &nbsp; <strong style="font-size:12px">{{$cal->date}}</strong></div>
        
     @endforeach
      </div>
    
                        </div>
                        <div class="block-user">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="user-profile"><img src="/images/{{Auth::User()->imageprofil}}" alt="" /> <span>Dr. {{Auth::User()->name}}</span></div>
                                </a>
                                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                    <ul class="list-unstyled p-0 mb-0">
                                        {{-- <li class="dropdown-item">
                                            <a href="profile" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="user"></i> <span>Profile</span> </a>
                                        </li> --}}
                                        <li class="dropdown-item">
                                            <a href="profile" class="text-body ms-0"
                                            
                                              onclick="sousmenuselect2('vprofil','Profil')"
                                            > <i class="me-2 icon-md" data-feather="edit"></i> <span>Editer Profile</span> </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-body ms-0"  >
 <i class="bi bi-box-arrow-in-right" style="margin-left:5px;color:red"></i>   Déconnexion
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
          </nav>
          
          <main class="">
            
            @yield('content')
            
            </main>
        </div>
          <!-- partial -->
   
  
  {{-- <div class="page-content p-5" id="app">
    <!-- Toggle button -->
   
    <!-- Demo content -->
     
  
  </div> --}}
     
  <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="/assets/js/jquery-search.js"></script>
  <script src="/assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
  <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
  <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
  <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
  <script src="/assets/vendor/datatables/js/buttons.print.min.js"></script>
  <script src="/assets/vendor/datatables/js/buttons.colVis.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/axios.js"></script>

  
  <script src="/assets/js/toastr.min.js"></script> 
   <script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
  <script src="/assets/js/init.js" type="text/javascript" charset="utf-8"></script>
  
  
  </body>


<input type="hidden" value="{{session()->get('success')}}" id="success">
<input type="hidden" value="{{session()->get('warning')}}" id="warning">
        <script>
        
        function getMinDiff(startDate, endDate) {
        const msInMinute = 60 * 1000;
        return Math.round(
            Math.round(endDate - startDate) / msInMinute
        );
}

window.onload = function(){
    var result = @json(Auth::User()->calendarsNow);
      setInterval(function(){
       for(var k in result) {
           var currentdate = new Date();
           var d = new Date(result[k]["date"]);
           currentdate.setSeconds(00);
          if(getMinDiff(
       currentdate,d)>=1 && getMinDiff(
       currentdate,d)<=1)
       {
       toastr.info("Notification", result[k]["comment"] + " à " + d.getHours() + ':' + d.getMinutes());
       result[k]["date"]=new Date(2019 - 08 - 03);
       document.getElementById("divnotif").className = "dropdown-menu dropdown-menu-left show";
       }
}
   }, 30000);
};
        
        
        
          

            $('#data1').on('input', function() {
                    var value = $(this).val();
                    if(value=='profile'|| value=='parametres'){
                    sousmenuselect2('vprofil','Profil')
                    }
                    if($('#data [value="' + value + '"]').data('customvalue')!=undefined)
                    window.location.replace($('#data [value="' + value + '"]').data('customvalue'))

});
            var schhlk = $('#success').val();
            var wrhhlk= $('#warning').val();
            if(schhlk!="")
            {
          toastr.success(schhlk);
            }
           if(wrhhlk!="")
           toastr.error(wrhhlk);
function menuselect(nom){
    localStorage.setItem("select", nom);
       if(nom=="TermeDevis" || nom=="TermeFacture" || nom=="TermeVente" || nom=="importation")
    localStorage.setItem("parametre", "1")
    else
    localStorage.setItem("parametre", "0")

    localStorage.setItem("sousselect", "ini");
    val = $("#stateparam").val();
      if(nom=='parametres' && val == 0) 
      {

          if($('#menuparam').css('display') === 'none')
{

     document.getElementById("menuparam").style.display = "inline-block";
   document.getElementById("href"+nom).setAttribute('aria-expanded','true');
    document.getElementById(nom).className = "collapse show";
}

else
{
      document.getElementById("menuparam").style.display = "none";
    document.getElementById("href"+nom).setAttribute('aria-expanded','false');
    document.getElementById(nom).className = "collapse";
}
      }
}





function selectionnermenu(){
    var res=localStorage.getItem("select");
     var type=localStorage.getItem("parametre", "1");
     var restitre=res;

     if(type=="1"){
           restitre=localStorage.getItem("select2");
        document.getElementById("hrefparametres").setAttribute('aria-expanded','true');
     }


if(res=="d’acceuil")
{
document.getElementById("titreheader").innerHTML="Acceuil  "
}
else
     document.getElementById("titreheader").innerHTML=""+restitre.charAt(0).toUpperCase() + restitre.slice(1);;
    
if(res=="Logo" || res=='Entete PDF' || res=='Pied PDF')
res='transactions2';
     document.getElementById("href"+res).setAttribute('aria-expanded','true');
    if(res!='Profil' && res!='vcodesecuritechage')
    document.getElementById(res).className = "collapse show";
    else {
        document.getElementById("hrefmespar").setAttribute('aria-expanded','true');
    document.getElementById("mespar").className = "collapse show";}
    
}




function sousmenuselect(nom){
    localStorage.setItem("sousselect", nom);
    if(nom=="TermeDevis" || nom=="TermeFacture" || nom=="TermeVente" || nom=="importation"  || nom=="Profil")
    localStorage.setItem("parametre", "1")
    else
    localStorage.setItem("parametre", "0")
}

function sousmenuselect2(nom,titre){
    document.getElementById("titreheader").innerHTML=titre;
    localStorage.setItem("select", titre);
    localStorage.setItem("sousselect",nom);
    localStorage.setItem("select2",titre);
    localStorage.setItem("parametre","1");
     
}
function selectionnersousmenu(){
   var res=localStorage.getItem("sousselect");
    if(res=="vcodesecuritechage"){
        document.getElementById("href"+res).style.color = "white";
        document.getElementById("href"+res).style.background = "#4172ed";
        document.getElementById("href"+res).style.height = "30px";
    }
    else{
    document.getElementById("shref"+res).style.color = "white";
    document.getElementById("shref"+res).style.background = "#4172ed";
    document.getElementById("shref"+res).style.height = "30px";  
    }
}
selectionnermenu();
selectionnersousmenu();
function DisableParam()
{
  val = $("#stateparam").val();
  if(val==0)
  {
  $("#stateparam").val(1);
  document.getElementById("menuparam").style.display = "none";}
  else
  {$("#stateparam").val(0);}
}





function move_up() {
    document.getElementById('ouarscroll').scrollTop += 1000;
  }

  function move_down() {
    document.getElementById('ouarscroll').scrollTop -= 1000;
  }
function scroltodiv(){
    // move_down()
 move_up()


            }


function listNotif()
{
if ( document.getElementById("divnotif").classList.contains('show') )
    document.getElementById("divnotif").classList.remove('show');
    else
    document.getElementById("divnotif").classList.add('show');
}



$(document).ready(function() {
    $('#example').dataTable();
    $('.dataTables_filter input').addClass('form-control'); // <-- add this line
    
} );





</script>
</html>

