<table id="table" class="table table-striped" style="width: 100%;">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>CIN</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $clt)
        <tr>
            <td>{{$clt->name}}</td>
            <td>{{$clt->type}}</td>
            <td>{{$clt->email}}</td>
            <td>{{$clt->tele}}</td>
            <td>{{$clt->cin}}</td>
            <td>
                <div class="dropdown section-action">
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('showclient'.$clt->id)}}">Afficher</a></li>
                        <li><a class="dropdown-item" href="{{url('modifyclient'.$clt->id)}}">Modifier</a></li>
                   
                        <li>
                            <a class="dropdown-item" 
                            onclick="charger_id_produit({{$clt->id}})"
                            href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a>
                         </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@if ($paginate==1)
{{ $clients->links() }}
@endif