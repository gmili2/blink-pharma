
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
<table class="table table-striped mb-4" style="width: 100%;">
    <thead>
        <tr>
            <th>N°</th>
            <th>Montant</th>
            <th>Date</th>
            <th>Client</th>
            <th>status</th>
            <th>Credit</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ventes as $vente)
        <tr>
           
            <td>{{$vente->id}}</td>
            <td>{{$vente->montant_PU}}</td>
            <td>{{$vente->created_at}}</td>
            <td>{{$vente->nom_client}}</td>
          

              <td>
               
                @if ($vente->status==1 || $vente->status=="1")
                <div class="status">
                    <span class="on"><i class="bi bi-circle-fill"></i> </span>
                </div>
@else

@if (($vente->status==2 || $vente->status=="2"))
<div class="status">
    <span class="ongoing"><i class="bi bi-circle-fill"></i></span>
</div>                                            @else
<div class="status">
    <span class="off"><i class="bi bi-circle-fill"></i> </span>
</div>                                                
@endif
@endif
                
                </td>

            <td>{{$vente->montant_credit}}</td>


                <td>
                    <div class="dropdown section-action">
                        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="facture{{$vente->id}}">Afficher</a></li>
                            <li><a class="dropdown-item" href="modifiervante{{$vente->id}}">Modifier</a></li>
                            <li>
                                <a class="dropdown-item" 
                                onclick="charger_id_produit({{$vente->id}})"
                                href="" data-bs-toggle="modal" data-bs-target="#search-client" >
                                Supprimer</a>
                             </li>
                        </ul>
                    </div>
                </td>
        </tr>
        @endforeach

                                                      </tbody>
</table>

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