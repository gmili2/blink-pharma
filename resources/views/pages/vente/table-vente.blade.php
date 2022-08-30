<table id="table" class="table table-striped" style="width: 100%;">
    <thead>
        <tr>
            <th>Livree</th>
            <th>Numéro de transaction</th>
            <th>Client</th>
            <th>Date de creation</th>
            <th>Créer le</th>
            <th>Total</th>
            <th>Statut</th>

            <th>Téléchargement</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($ventes as $vente)
        <tr>
            <td>
                <div class="status">
                @if ($vente->livree==1)
                <span class="on"><i class="bi bi-circle-fill"></i></span>
                    
                @else
                <span class="off"><i class="bi bi-circle-fill"></i> </span>
                    
                @endif
                </div>
            </td>
            <td>{{$vente->id}}</td>
            <td>{{$vente->nom_client}}</td>
            <td>{{$vente->created_at}}</td>
            <td>{{$vente->created_at}}</td>
            <td>{{$vente->montant_PU}}</td>
            <td>
                @if ($vente->status==1 || $vente->status=="1")
                    payee
                @else

                @if (($vente->status==2 || $vente->status=="2"))
                Payé partiellement
                @else
                non payee
                    
                @endif
                @endif
                
                </td>


            <td>
                <div class="status">
                    <a href="#" class="telechargement"> <i class="bi bi-arrow-down"></i> PDF</a>
                </div>
            </td>
            <td>
                <div class="dropdown section-action">
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="facture{{$vente->id}}">Afficher</a></li>
                        <li><a class="dropdown-item" href="modifiervante{{$vente->id}}">Modifier</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Supprimer</a></li> --}}
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


{{-- @if ($paginate==1)
{{ $ventes->links() }}
@endif --}}