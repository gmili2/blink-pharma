<table id="table" class="table table-striped selvente" style="width: 100%;">
    <thead>
        <tr>
            <th>Nom</th>
         
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($confreres as $cfr)
        <tr>
            <td>{{$cfr->name}}</td>
            <td>{{$cfr->email}}</td>
            <td>{{$cfr->tele}}</td>
            <td>{{$cfr->ville}}</td>
            <td>
                <div class="dropdown section-action">
                    <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('showconfrere'.$cfr->id)}}">Afficher</a></li>
                        <li><a class="dropdown-item" href="{{url('modifyconfrere'.$cfr->id)}}">Modifier</a></li>
                        {{-- <li><a class="dropdown-item" href="{{url('deleteconfrere'.$cfr->id)}}">Supprimer</a></li> --}}
                  
                        <li>
                            <a class="dropdown-item" 
                            onclick="charger_id_produit({{$cfr->id}})"
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
{{ $confreres->links() }}
                                
                            @endif