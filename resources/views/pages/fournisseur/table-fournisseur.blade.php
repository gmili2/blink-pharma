

                            <table id="table" class="table table-striped selvente" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Fournisseurs</th>
                                        <th>Téléphone</th>
                                        <th>Ville</th>
                                        <th>Solde</th>
                                        <th>Téléchargement</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($fournisseurs as $frn)
                                    <tr>
                                        <td>{{$frn->name}}</td>
                                        <td>{{$frn->tele}}</td>
                                        <td>{{$frn->ville}}</td>
                                        <td>1 097</td>
                                        <td>
                                            <div class="status">
                                                <a href="#" class="telechargement"> <i class="bi bi-arrow-down"></i> PDF</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{url('showfournisseur'.$frn->id)}}">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="{{url('modifyfournisseur'.$frn->id)}}">Modifier</a></li>
                                                    {{-- <li><a class="dropdown-item" href="{{url('deletefournisseur'.$frn->id)}}">Supprimer</a></li> --}}
                                                    <li>
                                                        <a class="dropdown-item"
                                                        onclick="charger_id_produit({{$frn->id}})"
                                                        href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a>
                                                     </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                          @endforeach
                                </tbody>
                            </table>



                            {{-- @if ($paginate==1)
{{ $fournisseurs->links() }}

                            @endif --}}
