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
    <link rel="stylesheet" href="/assets/css/rapport.css" />
    <link rel="stylesheet" href="/assets/css/client.css" />
    <link rel="stylesheet" href="/assets/css/stock.css" />
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
                    class="nav-link">
                     <i class="bi bi-grid"></i> 
                        <div id="d’acceuil" hidden></div>

                        <span class="link-title">Page d'acceuil</span> </a>
                </li>
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
                                 onclick="sousmenuselect('vprofil','Profil')"
                                {{-- onclick="changetitre('Profil')" --}}
                                id='shrefvprofil' href="profile" class="nav-link">Profil</a></li>
                            <li  style="    padding-left: 12px"  class="nav-item"><a href="codesecuritechage"  onclick="sousmenuselect('vcodesecuritechage','Code de securite')" id='shrefvcodesecuritechage' class="nav-link">Changer le code securite</a></li>
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
                            <li  style="    padding-left: 12px"  class="nav-item"><a  onclick="sousmenuselect('vuser','Utilisateur')" id='shrefvuser' href="adduser" class="nav-link">Ajouter un  utilisateur</a></li>
                            {{-- <li class="nav-item"><a href="devis" class="nav-link">Devis</a></li> --}}
                            
                            <li style="    padding-left: 12px"  class="nav-item"><a href="AfficherUser"  onclick="sousmenuselect('vaffichuser','Historique de connexion')" id='shrefvaffichuser' class="nav-link">Historique de connexion </a></li>

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
                            <li  style="    padding-left: 12px" class="nav-item"><a href="EmploiduTemp" onclick="sousmenuselect('vheur','Heures d ouverture')" id='shrefvheur' class="nav-link">Heures d'ouverture</a></li>
                            <li  style="    padding-left: 12px" class="nav-item"><a href="AfficherGarde" onclick="sousmenuselect('vgarde','Gardes')" id='shrefvgarde'  class="nav-link">Gardes</a></li>
                          
                        </ul>
                    </div>
                </li>
                <br>
              
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
                            <li style="    padding-left: 12px"  class="nav-item"><a href="logo" class="nav-link" onclick="sousmenuselect('vlogo','Logo')" id='shrefvlogo' >logo</a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a href="entet-pdf" class="nav-link" onclick="sousmenuselect('ventet','Entete PDF')" id='shrefventet' >Entete PDF</a></li>
                            <li  style="    padding-left: 12px" class="nav-item"><a href="pied-pdf" class="nav-link" onclick="sousmenuselect('vpied','Pied PDF')" id='shrefvpied'>Pied PDF</a></li>

                           
                        </ul>
                    </div>
                </li>

<br>
                
                <br>

                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed"            
                             onclick="menuselect('transactions')"
                             
                             id="hreftransactions"

                    data-bs-toggle="collapse" href="#transactions" role="button" aria-expanded="false" aria-controls="transactions">
                         <span class="link-title">Prarmetres des transactions</span>
                    </a>
                    <div class="collapse" id="transactions" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Prarmetres des transactions</a>
                                </li>
                            </div>
                            <li  style="    padding-left: 12px" class="nav-item"><a href="ModifierRemiseparCategorie"   onclick="sousmenuselect('vremise','Remise')" id='shrefvremise' class="nav-link">Remise max par categorie</a></li>
                        </ul>
                    </div>
                </li>

                <br>


               

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
                            <li  style="    padding-left: 12px"  class="nav-item"><a href="#"  onclick="sousmenuselect('vrecu','Raisons des avoirs fournisseurs')" id='shrefvrecu' class="nav-link">Raisons des avoirs fournisseurs</a></li>
                            {{-- <li class="nav-item"><a href="invent" class="nav-link">inventaires</a></li>
                            <li class="nav-item"><a href="importinventaires" class="nav-link">imports</a></li> --}}
                        </ul>
                    </div>
                </li>

                <br>
                
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
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherZone"  onclick="sousmenuselect('vzone','Zone')" id='shrefvzone'> Zone </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AfficherDci"  onclick="sousmenuselect('vdci','DCI')" id='shrefvdci'> DCI </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherForm"  onclick="sousmenuselect('vForms','Forms')" id='shrefvForms'> Forms </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AfficherType"  onclick="sousmenuselect('vtype','Type')" id='shrefvtype'> Type </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AjouterVillesView"  onclick="sousmenuselect('vville','Ville')" id='shrefvville'> Ville </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="AjouterPaysView"  onclick="sousmenuselect('vpays','Pays')" id='shrefvpays'> Pays </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherClasse"  onclick="sousmenuselect('vgroupe','Groupe')" id='shrefvgroupe'> Groupe </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherRemise"  onclick="sousmenuselect('vremisee','Remise')" id='shrefvremisee'> Remise </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherTva"  onclick="sousmenuselect('vtva','TVA')" id='shrefvtva'> TVA </a></li>
                          
                            <li style="    padding-left: 12px"  class="nav-item"><a class="nav-link" href="AfficherContreIndication"  onclick="sousmenuselect('vindication','Indication')" id='shrefvindication'> Indication </a></li>


                            
                          
                        </ul>
                    </div>
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
                                  onclick="sousmenuselect('addrole','Ajouter Role')" id='shrefaddrole'>Ajouter Role </a></li>
                            <li style="    padding-left: 12px"  class="nav-item"><a  class="nav-link" href="listerole" 
                                 onclick="sousmenuselect('listerole','Liste des Roles')" id='shreflisterole'> Liste des Roles </a></li>
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
  
      <div class="page-wrapper">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar">
            <a href="#" class="sidebar-toggler"> <i data-feather="menu"></i> </a>
            <div class="navbar-content">
                <div class="d-flex header-navbar">
                    <div class="title-header">
                        <h1 id="titreheader"></h1>
                    </div>
                    <div class="title-header">
                 
                        
                                <form class="search-form">
                            <div class="input-group">
                                <div class="form-outline">
                                 
                                  
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
                                            <option data-customvalue="profile" value="profile"></option>

                                        
                            
            



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
                        <div class="date row"> <div class="col-1"><input class="form-control user-success" style="padding-top: 3px;" id="starting-date" name="date"  type="datetime-local" 
                             data-initialized="true" value="2017-04-07" ></div> <div class="col"> <label 
                            style="padding-top: 3px;"
                            for="">
                                                    {{ $date }}
                        
                        </label></div> 
                        
                      
                        
                        </div>
                        <div class="notification">
                            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" onclick="listNotif()">
        <img src="/assets/icons/notification.svg" alt="" />
      </a>

<div class="dropdown-menu dropdown-menu-right " id="divnotif">
        <a class="dropdown-item" href="#">Aucune notification !</a>
   
      </div>
                        </div>
                        <div class="block-user">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="user-profile"><img src="/images/{{Auth::User()->imageprofil}}" alt="" /> <span>Dr. {{Auth::User()->name}}</span></div>
                                </a>
                                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                    <ul class="list-unstyled p-0 mb-0">
                                        <li class="dropdown-item">
                                            <a href="profile" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="user"></i> <span>Profile</span> </a>
                                        </li>
                                        {{-- <li class="dropdown-item">
                                            <a href="profile" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="edit"></i> <span>Editer Profile</span> </a>
                                        </li> --}}
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
   
   {{-- <script src="public\assets\vendor\datatables\js\toastr.js"></script>  --}}
  
  </body>


<input type="hidden" value="{{session()->get('success')}}" id="success">
<input type="hidden" value="{{session()->get('warning')}}" id="warning">
        <script>

function changetitre(titre){
   
}

            // alert('lkjh')
          
            $('#data1').on('input', function() {
    var value = $(this).val();
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
}function sousmenuselect(nom,titre){
    // alert(titre);
    document.getElementById("titreheader").innerHTML=titre;
    localStorage.setItem("titreheader", titre);
    localStorage.setItem("sousselect", nom);
}
function selectionnersousmenu(){
    var res=localStorage.getItem("sousselect");   
    document.getElementById("shref"+res).style.color = "white";
    document.getElementById("shref"+res).style.background = "#4172ed";
    document.getElementById("shref"+res).style.height = "30px";    
}
// selectionnermenu();
selectionnersousmenu();

function selectionnermenu(){
    var res=localStorage.getItem("select");
    var titre=localStorage.getItem("titreheader");
    document.getElementById("titreheader").innerHTML=titre;

    document.getElementById("href"+res).setAttribute('aria-expanded','true');

    document.getElementById(res).className = "collapse show";


    
}
selectionnermenu();
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

</script>
</html>

