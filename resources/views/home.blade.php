
                @extends('layouts.app')

                @section('content')
                <div class="page-content">
                    <section class="section-accueil mt-3">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="liste-raccourci">
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                    <span>Marketplace</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                    <span>Ventes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                    <span>Bons de livraison</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                    <span>Bons de commande</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                    <span>Offres</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" role="button">
                                                    <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                    <span>Bons de livraison</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="btn-ajoute" role="button" data-bs-toggle="modal" data-bs-target="#add-raccourci-Modal">
                                                    <span>Ajouter</span>
                                                    <div class="icon"> <div class="img" style="    padding-top: 5px;
                                                        "><i class="bi bi-plus-lg"></i></div></div>

                                                   
                                                </a>
                                            </li>
                                        </ul>
                                        <hr class="diviseur" />
                                        <div class="title">
                                            <h1>Ventes</h1>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="add-raccourci-Modal" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="">Ajouter une favoris</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text">
                                                        Cette option vous facilitera l’accès aux fonctionnalités de votre choix, <br />
                                                        d’une façon rapide, efficace et efficiente
                                                    </p>
                                                    <ul class="liste-raccourci">
                                                        <li>
                                                            <a href="#" class="active" role="button">
                                                                <div class="img"><img src="/assets/icons/archive.svg" alt="" /></div>
                                                                <span>Marketplace</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="active" role="button">
                                                                <div class="img"><img src="/assets/icons/vente.svg" alt="" /></div>
                                                                <span>Ventes</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="active" role="button">
                                                                <div class="img"><img src="/assets/icons/livrison.svg" alt="" /></div>
                                                                <span>Bons de livraison</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <div class="img"><img src="/assets/icons/offers.svg" alt="" /></div>
                                                                <span>Offres</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <div class="img"><img src="/assets/icons/commande.svg" alt="" /></div>
                                                                <span>Bons de commande</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" role="button">
                                                                <div class="img"><img src="/assets/icons/bons-livrison.svg" alt="" /></div>
                                                                <span>Bons de livraison</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-table-home mt-4 pt-3">
                                            <div class="row filtre-home pb-1">
                                                <div class="col-md-6">
                                                    <div class="title-p pb-1">
                                                        <h5>Liste des ventes</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="status-actif">
                                                        <div class="status">
                                                            <span class="on"><i class="bi bi-circle-fill"></i> Payé totalement</span>
                                                        </div>
                                                        <div class="status">
                                                            <span class="ongoing"><i class="bi bi-circle-fill"></i> Payé partiellement</span>
                                                        </div>
                                                        <div class="status">
                                                            <span class="off"><i class="bi bi-circle-fill"></i> crédit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <hr class="divider" />
                                            <br>
<div id="table">
    {{-- <table class='table'  id="example" style="width: 100%;"> --}}
        <table id="example" class="table table-striped" style="width: 100%;">

        <thead>
            <tr>
                <th>id</th>
                <th>nom_client</th>
                <th>Date</th>
                 <th>status</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>

                                                          </tbody>
    </table>

</div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <section class="section-actualite">
                                    <div class="title d-flex align-items-center">
                                        <div class="icon"><img src="/assets/icons/actualite.svg" style="    padding-top: 11px;
                                            " alt="" /></div>
                                        <h1>Actualités</h1>
                                    </div>
                                    <div class="image"><img src="/assets/img/actualite.png" alt="" /></div>
                                    <div class="promotion d-flex justify-content-between">
                                        <p>Promotion</p>
                                        <span>il y a 12h</span>
                                    </div>
                                    <div class="content">Possibilité de retourner en arrière dans le temps...</div>
                                    <button class="btn btn-primary voir-plus">Voir plus</button>
                                </section>
                                <section class="section-statistique">
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/cmdencours.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Commandes total</h3>
                                                <div class="nombre-total">00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/derniervent.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Dernières ventes</h3>
                                                <div class="nombre-total">{{sizeof($ventes)}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/depense.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Dépenses</h3>
                                                <div class="nombre-total">00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="header d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/produit.svg" alt="" /></div>
                                            <div class="content">
                                                <h3>Produits</h3>
                                                <div class="nombre-total">{{$produits}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="section-stock">
                                    <a href="stock" role="button">
                                        <div>
                                            <div class="icon"><img src="/assets/icons/stock.svg" alt="" /></div>
                                            <span>Voir le Stock</span>
                                        </div>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </section>
                                <section class="section-aide d-flex">
                                    <div class="support">
                                        <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                            <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                            <span>05 30 500 500</span>
                                        </a>
                                    </div>
                                    <div class="aide">
                                        <button
                                            type="button"
                                            id="help-popup"
                                            role="button"
                                            class="d-flex align-items-center"
                                            data-bs-toggle="popover"
                                            title="Comment pouvons-nous aider ?"
                                            data-bs-content="Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page,
                                             le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum. Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum"
                                        >
                                            <div class="icon"><img src="/assets/icons/aide.svg" alt="" /></div>
                                            <span>Aide</span>
                                        </button>
                                    </div>

                                    <div class="retour">
                                        <a class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#raccourcis">
                                            <div class="icon"><img src="/assets/icons/retour.svg" alt="" /></div>
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="modal fade vente-succes proposition-commande" id="proposition-de-commande" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Proposition de commande</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <ul class="d-flex flex-wrap">
                                    <li class="d-flex active">
                                        <a href="#">Génerer selon méthode prévisionnelle</a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Générer pour une période de coverture de stock </a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Génerer selon Stock Max</a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="#">Générer selon la consemmation d’une période</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="buttons d-flex justify-content-center">
                                <a href="#" class="btn-hover color-green mx-1">Confirmer</a>
                                <a href="#" class="btn-hover color-red" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="raccourcis" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" id="block-rac">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="popup-raccourcis">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" id="search" class="form-control" />
                            </div>

                            <ul id="items-to-search">
                                <li>
                                    <span>Han Solo</span>
                                    <span>Ctrl+A</span>
                                </li>
                                <li>
                                    <span>Darth Vader</span>
                                    <span>Win+R</span>
                                </li>
                                <li>
                                    <span>Boba Fett</span>
                                    <span>Shift+R</span>
                                </li>
                                <li>
                                    <span>R2-D2</span>
                                    <span>Win+K</span>
                                </li>
                                <li>
                                    <span>Chewbacca</span>
                                    <span>Win+L</span>
                                </li>
                                <li>
                                    <span>Yoda</span>
                                    <span>Ctrl+B</span>
                                </li>
                                <li>
                                    <span>Luke Skywalker</span>
                                    <span>Ctrl+D</span>
                                </li>
                                <li>
                                    <span>Darth Maul</span>
                                    <span>Ctrl+N</span>
                                </li>
                                <li>
                                    <span>Stormtrooper</span>
                                    <span>Ctrl+O</span>
                                </li>
                                <li>
                                    <span>Princess Leia</span>
                                    <span>Ctrl+Alt+F5</span>
                                </li>
                                <li>
                                    <span>Ben Kenobi</span>
                                    <span>Ctrl+Alt+F12</span>
                                </li>
                                <li>
                                    <span>Anakin Skywalker</span>
                                    <span>Ctrl+Alt+F15</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endsection



                <div class="modal fade vente-succes search-client" id="search-client" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer ce confrere</h5>
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
                                <form id="form1" action="deletevente" method="post">
                                    @method('delete')
                                    @csrf
                                   <input type="text"  id="vente_id" hidden name="vente_id">
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
    
                    function recherche_produit(){
            var res=document.getElementById('recherch_produit').value;
            rout="get_vente"+res
            if(res=="")
            rout="gett_vente"
            axios.get(rout)
                        .then(function (response) {
                            document.getElementById("table").innerHTML= response.data;

                        
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                                
           }
           function charger_id_produit(id){
                        document.getElementById("vente_id").value=id;
                    }
    

                </script>
