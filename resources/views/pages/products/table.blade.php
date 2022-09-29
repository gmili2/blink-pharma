{{-- <table id="table" class="table table-striped" style="width: 100%;"> --}}
    <table id="table" class="table table-striped mb-4 selvente" style="width: 100%;">

    <thead>
        <tr>
            <th>Est actif</th>
            <th>Produit</th>
            <th>Catégorie</th>
            <th>Forme galénique</th>
            <th>PPV</th>
            <th>PPH</th>
            <th>Code barre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produits as $produit)
      
        <tr>
            <td>
                <div class="status">
                    <span @if ($produit->active==1)
                        class="on"
                        @else
                        class="off"
                    @endif ><i class="bi bi-circle-fill"></i></span>
                </div>
            </td>
            <td>{{$produit->name}}</td>
            <td>{{$produit->nameclasse}}</td>
            <td>{{$produit->nameform}}</td>
            <td>{{$produit->PPV}}</td>
            <td>{{$produit->PPH}}</td>
            <td>{{$produit->code_bare}}</td>
            <td>
                <div class="dropdown section-action">
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="informationproduct{{$produit->id}}">Afficher</a></li>
                        <li><a class="dropdown-item" href="modifierproduitformule{{$produit->id}}">Modifier</a></li>
                        @if ($produit->active==1)
                        <li><a class="dropdown-item" href="desactiverproduit{{$produit->id}}">Désactiver</a></li>
                            @else
                        <li><a class="dropdown-item" href="avtiverproduit{{$produit->id}}">Activer</a></li>
                        @endif
                        <li>
                            <a class="dropdown-item" 
                            onclick="charger_id_produit({{$produit->id}})"
                            href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a>
                         </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

     
    </tbody>
</table>
{{-- {{ $produits->links() }} --}}
