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
    <link rel="stylesheet" href="/assets/css/vente.css" />
    <link rel="stylesheet" href="/assets/css/rapport.css" />

    <link rel="stylesheet" href="/assets/css/client.css" />
    <!-- <link rel="stylesheet" href="/assets/css/client.css"> -->
    <!-- <link rel="stylesheet" href="/assets/css/product.css"> -->
    <link rel="stylesheet" href="/assets/css/stock.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/buttons.css" />
    <link rel="stylesheet" href="/assets/css/product.css" />
    <link rel="stylesheet" href="public\assets\css\toastr.min.css">
    <link rel="stylesheet" href="/assets/css/toastr.min.css">
    
    <title>BLINK PHARMA</title>


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

                        <span class="link-title">Page d’acceuil</span> </a>
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
                          
                            <li class="nav-item"><a href="profile" class="nav-link">Profil</a></li>
                            <li class="nav-item"><a href="codesecuritechage" class="nav-link">Changer le code securite</a></li>
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
                            <li class="nav-item"><a href="AfficherUser" class="nav-link">Listes des utilisateurs</a></li>
                            {{-- <li class="nav-item"><a href="devis" class="nav-link">Devis</a></li> --}}
                            
                            <li class="nav-item"><a href="addventes" class="nav-link">historique de connexion </a></li>

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
                            <li class="nav-item"><a href="EmploiduTemp" class="nav-link">Heures d'ouverture</a></li>
                            <li class="nav-item"><a href="AfficherGarde" class="nav-link">Gardes</a></li>
                          
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
                            <li class="nav-item"><a href="logo" class="nav-link">logo</a></li>
                            <li class="nav-item"><a href="entet-pdf" class="nav-link"> Entete PDF</a></li>
                            <li class="nav-item"><a href="entet-pdf" class="nav-link">  Pied PDF</a></li>

                           
                        </ul>
                    </div>
                </li>

<br>
                {{-- <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse"
                    onclick="menuselect('application')"   id="hrefapplication"
                    href="#fournisseurs" role="button"  aria-expanded="false" aria-controls="application">
                        <span class="link-title"   >Parametre d'application</span>
                    </a>
                    <div class="collapse" id="application" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="title-submenu mb-1">
                                <li class="nav-item">
                                    <a href="#" onclick="menuselect('application')" class="nav-link"><b></b>Parametre d'application</a>
                                </li>
                            </div>
                            <li class="nav-item"><a href="logo" onclick="menuselect('application')"
                                class="nav-link">logo</a></li>
                            <li class="nav-item"><a href="entet-pdf"  onclick="menuselect('application')" class="nav-link"> Entete PDF</a></li>
                            <li class="nav-item"><a href="pied-pdf"  onclick="menuselect('application')" class="nav-link"> Pied PDF</a></li>
                       
                        </ul>
                    </div>
                </li> --}}
                <br>

                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed"            
                             onclick="menuselect('transactions')"   id="hreftransactions"

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
                            <li class="nav-item"><a href="AfficherSequence" class="nav-link">Sequence</a></li>
                            <li class="nav-item"><a href="ModifierRemiseparCategorie" class="nav-link">Remise max par categorie</a></li>
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
                            <li class="nav-item"><a href="#" class="nav-link">Raisons des avoirs fournisseurs</a></li>
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
                            <li class="nav-item"><a class="nav-link" href="AfficherZone"> Zone </a></li>
                            <li class="nav-item"><a  class="nav-link" href="AfficherDci"> DCI </a></li>
                            <li class="nav-item"><a class="nav-link" href="AfficherForm"> Forms </a></li>
                            <li class="nav-item"><a  class="nav-link" href="AfficherType"> Type </a></li>
                            <li class="nav-item"><a  class="nav-link" href="AjouterVillesView"> Ville </a></li>
                            <li class="nav-item"><a  class="nav-link" href="AjouterPaysView"> Pays </a></li>
                            <li class="nav-item"><a class="nav-link" href="AfficherClasse"> Groupe </a></li>
                            {{-- <li class="nav-item"><a class="nav-link">raisons des avoirs fournisseurs</a></li> --}}
                          
                        </ul>
                    </div>
                </li>


               
                {{-- <li class="nav-item">
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
                            <li class="nav-item"><a href="caisse" class="nav-link">Voir la caisse</a></li>
                            <li class="nav-item"><a href="generatecaisse" class="nav-link">cloture de caisse</a></li>

                        </ul>
                    </div>
                </li> --}}
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
                    <a href="imporjjjbtation" 
                    id='hrefimportation'
                    aria-expanded="false"
                    {{-- onclick="menuselect('importation')" --}}
                    class="nav-link"> 
                    <div id="importation" hidden></div>

                        <span class="link-title">Parametre de securité</span> </a>
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
                        <h1 id="titreheader">Page des parametres</h1>
                    </div>
                    <div class="title-header">
                        <form class="search-form">
                            <div class="input-group">
                                <div class="form-outline"><input type="search" id="form1" class="form-control" placeholder="Recherche" /></div>
                                <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    @php
                         setlocale(LC_TIME, "fr_FR");
      $date = strftime("%d %B %Y");
                    @endphp
                    <div class="profile d-flex align-items-center">
                        <div class="date"><img src="/assets/icons/callendar.svg" alt="" /> <label for="">{{$date}}</label></div>
                        <div class="notification">
                            <a href=""> <img src="/assets/icons/notification.svg" alt="" /> </a>
                        </div>
                        <div class="block-user">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="user-profile"><img src="/images/{{Auth::User()->logo}}" alt="" /> <span>Dr. {{Auth::User()->name}}</span></div>
                                </a>
                                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                    <ul class="list-unstyled p-0 mb-0">
                                        <li class="dropdown-item">
                                            <a href="profile" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="user"></i> <span>Profile</span> </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="javascript:;" class="text-body ms-0"> <i class="me-2 icon-md" data-feather="edit"></i> <span>Edit Profile</span> </a>
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
        {{-- <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
        <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.print.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.colVis.min.js"></script>
        <script src="/assets/js/main.js"></script> --}}

  {{-- <script src="/assets/js/toastr.js"></script> --}}
  
  <script src="/assets/js/toastr.min.js"></script> 
  
   {{-- <script src="public\assets\vendor\datatables\js\toastr.js"></script>  --}}
  
  </body>


<input type="hidden" value="{{session()->get('success')}}" id="success">
<input type="hidden" value="{{session()->get('warning')}}" id="warning">
        <script>
            // alert('lkjh')
          


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
}

function selectionnermenu(){
    var res=localStorage.getItem("select");
    document.getElementById("href"+res).setAttribute('aria-expanded','true');

    document.getElementById(res).className = "collapse show";
// if(res=="'d’acceuil")
// document.getElementById("titreheader").innerHTML="page  "+res
// else
//     document.getElementById("titreheader").innerHTML="page des "+res

    
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

    // document.getElementById('ouarscroll').scrollIntoView(
//   behavior: 'smooth'
// );




//     var objDiv = document.getElementById("ouarscroll");
// objDiv.scrollTop = 0;
// alert('kj')
    // document.getElementById("ouarscroll").scrollIntoView();


//             $("#ouarscroll")[0].scrollIntoView();

//             const element = document.getElementById('ouarscroll');

// if (element) {
//     window.scroll({
//         top: element.scrollTop,
//         behavior: 'smooth',
//     }) 
// }
       


            }


</script>
</html>

