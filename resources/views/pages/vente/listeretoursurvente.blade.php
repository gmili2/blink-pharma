
                @extends('layouts.app')

                @section('content')
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Ajouter aux favoris</a>
                                    <a href="#" class="btn-hover color-white">Historique des opérations</a>
                                    <a href="addretousurventepage" 
                                    class="btn-hover color-blue">Nouvelle reur sur vente vente</a>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-product mt-4 pt-3">
                            {{-- <div class="row filtre-product pb-1">
                                <div class="col-md-6">
                                    <div class="title-p pt-1"><h5>Liste des retours sur Vente</h5></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="status-actif">
                                        <div class="status">
                                            <span class="on"><i class="bi bi-circle-fill"></i> Livré</span>
                                        </div>
                                        <div class="status">
                                            <span class="off"><i class="bi bi-circle-fill"></i> Non livré</span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-6 mb-3">
                                <div class="form-group d-flex align-items-center">
                                    <i class="bi bi-search"></i>
                                    <input type="text" style="    width: 205px;
                                    margin: 17px" class="form-control" placeholder="Search" id=recherch_produit
                                    onkeyup="recherche_produit()"
                                    name="search" />                                                </div>
                            </div>


                            <hr class="divider" />

                            
                            <table id="table" class="table table-striped selvente" style="width: 100%;">
                                <thead>
                                    <tr>
                                        {{-- <th>Livree</th> --}}
                                        <th>Numéro de transaction</th>
                                        <th>Client</th>
                                        <th>Date de creation</th>
                                        <th>Créer le</th>
                                        <th>Total restitue</th>
                                        <th>Téléchargement</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($ventes as $vente)
                                    <tr>

                                        <td>{{$vente->id}}</td>
                                        <td>{{$vente->nom_client}}</td>
                                        <td>{{$vente->created_at}}</td>
                                        <td>{{$vente->created_at}}</td>
                                        <td>{{$vente->montant_restitue}}</td>
                                        <td>
                                            <div class="status">
                                                <a href="#" class="telechargement"> <i class="bi bi-arrow-down"></i> PDF</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="factureretursurvente{{$vente->id}}">Afficher</a></li>
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
{{ $ventes->links() }}

                        </div>
                    </section>

                    <div class="modal fade vente-succes" id="vente-cree" >
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Vente(s) crée(s) avec succés</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="d-flex flex-wrap">
                                                    <li class="d-flex" role="button">
                                                        <div class="icon"><img src="/assets/icons/facture.svg" alt=""></div>
                                                        <a href="/pages/vente/facture.html">Afficher la Facture</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                        <a href="">Imprimer Ticket</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/plus.svg" alt=""></div>
                                                        <a href="/pages/vente/add-vente.html">Créer une Nouvelle Vente</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                        <a href="">Imprimer Bon De Livraison</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/toutelesventes.svg" alt=""></div>
                                                        <a href="/pages/vente/liste.html">Consulter Toutes les Ventes</a>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="icon"><img src="/assets/icons/imprimer.svg" alt=""></div>
                                                        <a href="">Imprimer Facture</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer ce sur vente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div>
                                <p class="text text-center mt-4">
                                   
                                </p>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                       </div>
                                </div>
                                <form id="form1" action="deletesurvente" method="post">
                                    @method('delete')
                                    @csrf
                                   <input type="text"  id="vente_id"  name="vente_id">
                                <div class="row section-footer">
                                    <div class="buttons">
                                        <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
        
                                        <button class="btn btn-hover color-green mx-1" data-bs-dismiss="modal" 
                                        
                                        aria-label="Close">Supprimer</button>

                                    </div>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function charger_id_produit(id){
                        document.getElementById("vente_id").value=id;
                    }
                    function recherche_produit(){
            var res=document.getElementById('recherch_produit').value;
            rout="gettable_vente"+res
if(res=="")
rout="gettablee_vente"
            axios.get(rout)
     .then(function (response) {
        document.getElementById("table").innerHTML= response.data;

       
     })
     .catch(function (error) {
         // handle error
         console.log(error);
     });
            
           }
                </script>
    @endsection
         
      