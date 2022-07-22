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
    <link rel="stylesheet" href="/assets/css/buttons.css" />
    <link rel="stylesheet" href="/assets/css/product.css" />
    <link rel="stylesheet" href="public\assets\css\toastr.min.css">
    <link rel="stylesheet" href="/assets/css/toastr.min.css">
    {{-- <link rel="stylesheet" href="/assets/css/toastr.min.css"> --}}
    <link rel="stylesheet" href="/assets/css/sweetalert.css"> 


        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/scss/bootstrap.css" />
        <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="/assets/vendor/datatables/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="/assets/vendor/datatables/css/buttons.dataTables.min.css" />
        <link rel="stylesheet" href="/assets/css/product.css" />
        <link rel="stylesheet" href="/assets/css/client.css" />
        <link rel="stylesheet" href="/assets/css/buttons.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />

    <title>BLINK PHARMA</title>


</head>
<body>


  <div class="main-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar" id="accordionSidebar">
      <div class="sidebar-header">
          <a href="/home" class="sidebar-brand logo-default"> <img src="/assets/img/logo.png" alt="" /> </a>
          <a href="/home" class="sidebar-brand logo-closed"> <img src="/assets/icons/icone-logo.svg" alt="" /> </a>
      </div>
      <hr class="divider" />
      <div class="sidebar-body">
          <ul class="nav">
              <li class="nav-item">
                  <a href="/home.html" class="nav-link active"> <i class="bi bi-grid"></i> <span class="link-title">Page d’acceuil</span> </a>
              </li>
              <li class="nav-item" id="accordion-produit">
                  <a class="nav-link accordion-button collapsed" aria-controls="produits" data-bs-toggle="collapse" href="#produits" role="button" aria-expanded="false" aria-controls="produits">
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
                  <a href="client" class="nav-link"> <i class="bi bi-people"></i> <span class="link-title">Clients</span> </a>
              </li>
              <li class="nav-item" id="accordion-vente">
                  <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#ventes" role="button" aria-expanded="false" aria-controls="ventes">
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
                          <li class="nav-item"><a href="devis" class="nav-link">Devis</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Retours sur ventes</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Reconditionner un produit</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Préparations officinales</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#achats" role="button" aria-expanded="false" aria-controls="achats">
                      <i class="bi bi-bag"></i> <span class="link-title">Achats</span>
                  </a>
                  <div class="collapse" id="achats" data-bs-parent="#accordionSidebar">
                      <ul class="nav sub-menu">
                          <div class="title-submenu mb-1">
                              <li class="nav-item">
                                  <a href="#" class="nav-link"><b></b>Achats</a>
                              </li>
                          </div>
                          <li class="nav-item"><a href="/pages/achat/achat.html" class="nav-link">Offres</a></li>
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
                  <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#fournisseurs" role="button" aria-expanded="false" aria-controls="fournisseurs">
                      <i class="bi bi-person"></i> <span class="link-title">Fournisseurs</span>
                  </a>
                  <div class="collapse" id="fournisseurs" data-bs-parent="#accordionSidebar">
                      <ul class="nav sub-menu">
                          <div class="title-submenu mb-1">
                              <li class="nav-item">
                                  <a href="#" class="nav-link"><b></b>Fournisseurs</a>
                              </li>
                          </div>
                          <li class="nav-item"><a href="fournisseur" class="nav-link">Voir tous les fournisseurs</a></li>
                          <li class="nav-item"><a href="ajoutefournisseur" class="nav-link">Ajouter un fournisseur</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#confrères" role="button" aria-expanded="false" aria-controls="confrères">
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
                          <li class="nav-item"><a href="#" class="nav-link">Sorties confrères</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Entrées confrères</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#organismes" role="button" aria-expanded="false" aria-controls="organismes">
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
                  <a class="nav-link accordion-button collapsed" data-bs-toggle="collapse" href="#stock" role="button" aria-expanded="false" aria-controls="stock">
                      <i class="bi bi-pie-chart"></i> <span class="link-title">Stock</span>
                  </a>
                  <div class="collapse" id="stock" data-bs-parent="#accordionSidebar">
                      <ul class="nav sub-menu">
                          <div class="title-submenu mb-1">
                              <li class="nav-item">
                                  <a href="#" class="nav-link"><b></b>Stock</a>
                              </li>
                          </div>
                          <li class="nav-item"><a href="/pages/stock/liste.html" class="nav-link">Voir tous les stocks</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">inventaires</a></li>
                          <li class="nav-item"><a href="/pages/stock/import.html" class="nav-link">imports</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="/pages/rapport/rapport.html" class="nav-link"> <i class="bi bi-file-earmark-minus"></i> <span class="link-title">Rapports</span> </a>
              </li>
              <li class="nav-item">
                  <a href="/pages/communication/communication.html" class="nav-link"> <i class="bi bi-chat-dots"></i> <span class="link-title">Communication</span> </a>
              </li>
              <div class="setting-header">
                  <div class="parametres">
                      <a href="profile"> <i class="bi bi-gear"></i> </a>
                  </div>
                  <div class="log_out">
                      <a href="/login.html"> <i class="bi bi-box-arrow-in-right"></i> </a>
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
                      <h1>Page d'accueil</h1>
                  </div>
                  <div class="title-header">
                      <form class="search-form">
                          <div class="input-group">
                              <div class="form-outline"><input type="search" id="form1" class="form-control" placeholder="Recherche" /></div>
                              <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                      </form>
                  </div>
                  <div class="profile d-flex align-items-center">
                      <div class="date"><img src="/assets/icons/callendar.svg" alt="" /> <label for="">Nov 30, 2021</label></div>
                      <div class="notification">
                          <a href=""> <img src="/assets/icons/notification.svg" alt="" /> </a>
                      </div>
                      <div class="block-user">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <div class="user-profile"><img src="/assets/img/user.png" alt="" /> <span>Dr. {{Auth::User()->name}}</span></div>
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
{{-- <script src="/assets/js/toastr.js"></script> --}}

<script src="/assets/js/toastr.min.js"></script> 

 {{-- <script src="public\assets\vendor\datatables\js\toastr.js"></script>  --}}

</body>


<input type="hidden" value="{{session()->get('success')}}" id="success">
<input type="hidden" value="{{session()->get('warning')}}" id="warning">
        <script>
            toastr.success("holallalallalalla");
            toastr.error("jhg");
            var schhlk = $('#success').val();
            var wrhhlk= $('#warning').val();
            //toastr.success(schhlk);
            if(schhlk!="")
            {
          // alert("bhbhbhbh")
          toastr.success(schhlk);

            }
           if(wrhhlk!="")
           toastr.error(wrhhlk);

</script>
</html>

