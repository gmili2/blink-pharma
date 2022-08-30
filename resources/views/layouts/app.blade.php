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
                            <li class="nav-item"><a href="produit" class="nav-link">Voir tous les produits</a></li>
                            <li class="nav-item"><a href="ajouterproduit" class="nav-link">Ajouter un produit</a></li>
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
                            <li class="nav-item"><a href="vente" class="nav-link">Voir toutes les ventes</a></li>
                            {{-- <li class="nav-item"><a href="devis" class="nav-link">Devis</a></li> --}}
                            
                            <li class="nav-item"><a href="addventes" class="nav-link">Nouvelle vente</a></li>

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
                            <li class="nav-item"><a href="achat" class="nav-link">Offres</a></li>
                            <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#proposition-de-commande">Propositions de commande</a></li>
                            <li class="nav-item"><a href="achat" class="nav-link">Bons de commande</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Bons de livraison</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Avoirs Fournisseur émis</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Avoirs Fournisseurs reçus</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Dépenses</a></li>
                            <li class="nav-item"><a href="/pages/achat/reception.html" class="nav-link">Réception</a></li>
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
                            <li class="nav-item"><a href="fournisseurs" onclick="menuselect('fournisseurs')"
                                class="nav-link">Voir tous les fournisseurs</a></li>
                            <li class="nav-item"><a href="addfournisseur"  onclick="menuselect('fournisseurs')" class="nav-link">Ajouter un fournisseur</a></li>
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
                            <li class="nav-item"><a href="confrere" class="nav-link">Confrères</a></li>
                            <li class="nav-item"><a href="sortie-confrer" class="nav-link">Sorties confrères</a></li>
                            <li class="nav-item"><a href="entrer-confrer" class="nav-link">Entrées confrères</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse"
                    onclick="menuselect('organismes')"   id="hreforganismess"

                    href="#organismes" role="button" aria-expanded="false" aria-controls="organismes">
                        <i class="bi bi-diagram-2"></i> <span class="link-title">Organismes</span>
                    </a>
                    <div class="collapse" id="organismes" data-bs-parent="#accordionSidebar">
                        <ul class="nav sub-menu">
                            <div class="mb-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><b></b>Organismes</a>
                                </li>
                            </div>
                            <li class="nav-item"><a href="#" class="nav-link">Voir tous les organismes</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Factures organismes</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Borderaux d’envoi</a></li>
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
                            <li class="nav-item"><a href="stock" class="nav-link">Voir tous les stocks</a></li>
                            <li class="nav-item"><a href="invent" class="nav-link">inventaires</a></li>
                            <li class="nav-item"><a href="importinventaires" class="nav-link">imports</a></li>
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
                            <li class="nav-item"><a href="caisse" class="nav-link">Voir la caisse</a></li>
                            <li class="nav-item"><a href="generatecaisse" class="nav-link">cloture de caisse</a></li>

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
                <li class="nav-item"
                
                >
                    <a href="communication" 
                    onclick="menuselect('Communication')"

                    id ="hrefCommunication" class="nav-link"> <i class="bi bi-chat-dots"></i>
                    <div id="Communication" hidden></div>
                        
                        <span class="link-title">
                        
                        Communication</span> </a>
                </li>
                <li class="nav-item">
                    <a href="importation" 
                    id='hrefimportation'
                    aria-expanded="false"
                    onclick="menuselect('importation')"
                    class="nav-link"> <i class="bi bi-arrow-bar-up"></i>
                    <div id="importation" hidden></div>

                        <span class="link-title">Importations</span> </a>
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
                <li class="nav-item">
                    <a href="profile" 
                    id='hrefparametres'
                    aria-expanded="false"
                    onclick="menuselect('parametres')"
                    class="nav-link">
                    <i class="bi bi-tools"></i>
                    <div id="parametres" hidden></div>


                        <span class="link-title">Reglage</span> </a>
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
        <div class="close-sidebar">
            <span class="collapse-icons"><img src="/assets/icons/collapse.svg" class="class-rotate" /></span>
        </div>
    </nav>
    
    </div>
  
      <div class="page-wrapper">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar">
            <a href="#" class="sidebar-toggler"> <i data-feather="menu"></i> </a>
            <div class="navbar-content">
                <div class="d-flex header-navbar">
                    <div class="title-header">
                        <h1 id="titreheader">Page d'accueil</h1>
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
if(res=="'d’acceuil")
document.getElementById("titreheader").innerHTML="page  "+res
else
    document.getElementById("titreheader").innerHTML="page des "+res

    
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

