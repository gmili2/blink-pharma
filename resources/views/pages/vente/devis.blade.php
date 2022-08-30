
                @extends('layouts.app')
                @section('content')
                
            <div class="page-content">
                <form action="ajoutervente" class="form-vente" method="POST">
                    @csrf
                <section class="section-achat mt-3">
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <div class="buttons">
                                <a href="addventes" class="btn-hover color-blue">Retourner</a>
                                {{-- <a href="#" class="btn-hover color-green" data-bs-toggle="modal" data-bs-target="#vente-cree">Approuver (F12)</a> --}}
                                <button  type="submit" class="btn-hover color-green" data-bs-toggle="modal" data-bs-target="#vente-cree">Approuver (F12)</button>
                           </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="table-commande mt-4">
                                <div class="montant-vente">
                                    <div class="detail-price">
                                        <div class="shadow-block mt-4 p-4">
                                            <div class="montant-recu d-flex gap-2">
                                                <label>Montant Reçu (Dhs)</label>
                                                <span>2113.30</span>
                                            </div>
                                          
                                            {{-- <input type="text" id="namdproduit" name="nomproduit"> --}}

                                            
                                            <div class="montant-recu d-flex gap-2">
                                                <label>Monnaie</label>
                                                <span>0 Dhs</span>
                                            </div>

                                            <div class="status-vente mt-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                       <form action="" class="form-vente">


                                                        {{-- <input type="text" hidden id="namdproduit" name="nomproduit" value="{{$vente->produits_id}}">
                                                        <input type="text" hidden id="id_produit" name="id_produit" value="{{$vente->produits_id}}">
                                                        <input type="text" hidden id="id_client" name="id_client" value="{{$vente->client_id}}">
                                                        <input type="text"  hidden id="PPV" name="PPV" value="{{$vente->PPV}}">
                                                        <input type="text"  hidden id="quantite" name="quantite" value="{{$vente->quantite}}">
                                                        <input type="text" hidden  id="mode_payment" name="mode_payment" value="1">
                                                         --}}
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label m-0">Statut</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-select" name="status">
                                                                    <option selected>...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                          </div>

                                                          <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label m-0">Réferance</label>
                                                            <div class="col-sm-10">
                                                                 <input type="text" name="references" class="form-control">
                                                            </div>
                                                          </div>

                                                          <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label m-0">Livré</label>
                                                            <div class="col-sm-10">
                                                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                                    <input class="form-check-input" type="radio" name="livree" value="1" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Oui
                                                                    </label>
                                                                    <input class="form-check-input" type="radio" name="livree" value="0" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Non
                                                                    </label>
                                                                </div>
                                                            </div>
                                                          </div>

                                                       </form>
                                                    </div>

                                                    <div class="col-md-6">
                                                         <div>
                                                            <ul class="liste-raccourci">
                                                                <li>
                                                                   <a role="button" class="active" id='espece' onclick="activeespece()">
                                                                      <div class="img"> <i class="bi bi-wallet2"></i> </div>
                                                                      <span>Espéces</span>
                                                                   </a>
                                                                </li>

                                                                <li>
                                                                    <a id="cheque" onclick="activecheque()" role="button" >
                                                                       <div class="img"> <i class="bi bi-credit-card-2-front"></i> </div>
                                                                       <span>Chéque</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a  role="button" id="cartebancaire" onclick="activecartebancaire()">
                                                                       <div class="img"> <i class="bi bi-credit-card"></i> </div>
                                                                       <span>Carte bancaire </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a id="lettre" onclick="activelettre()" role="button">
                                                                       <div class="img"> <i class="bi bi-file-earmark-text"></i> </div>
                                                                       <span>Lettre de change</span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a id="autre" onclick="activeautre()" role="button">
                                                                       <div class="img"> <i class="bi bi-exclamation-triangle"></i> </div>
                                                                       <span>Autre</span>
                                                                    </a>
                                                                </li>

                                                             </ul>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">

                                    <div class="col-md-6 offset-6">
                                        <div class="card-total">

                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label ">
                                                    Date : 2015-11-15
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    Par : Dr Salim
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label h5">
                                                    Total à payer :
                                                </div>
                                                <div class="flex-grow-1 ms-3 h5">
                                                    160,09
                                                </div>
                                            </div>
        
                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label">
                                                    Total à payer par l’organisme :
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    11.21
                                                </div>
                                            </div>

                                            <div class="d-flex mb-2">
                                                <div class="flex-shrink-0 flex-label">
                                                    Quantité totale :
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    9
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- {{
$_SESSION["firstname"]

                        }} --}}
                       


                        <div class="section-aide d-flex">
                            <div class="support">
                                 <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                    <div class="icon"> <img src="/assets/icons/telephone.svg" alt=""> 
                                    </div> <span>05 30 500 500</span>
                                </a> 
                            </div>
                            <div class="aide"> 
                                <a href="" role="button" class="d-flex align-items-center">
                                    <div class="icon"> <img src="/assets/icons/aide.svg" alt=""> 
                                    </div> <span>Aide</span>
                                </a> 
                            </div>
                            <div class="retour"> 
                                <a href="addventes" role="button" class="d-flex align-items-center">
                                    <div class="icon"> <img src="/assets/icons/retour.svg" alt=""> </div>
                                </a> 
                            </div>
                        </div>

                    </div>
                </section>
                <div class="modal fade vente-succes" id="vente-cree" tabindex="-1" aria-labelledby="" aria-hidden="true">
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
        
   
    <script>
        function activeespece(){
            document.getElementById("espece").className = "active";
            document.getElementById("cheque").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("cartebancaire").className = "";
            document.getElementById("mode_payment").value = 1;

            
        }
        function activecheque(){
            document.getElementById("cheque").className = "active";
            document.getElementById("espece").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("cartebancaire").className = "";
            document.getElementById("mode_payment").value ="2"
        }

        function activecartebancaire(){
            document.getElementById("cartebancaire").className = "active";
            document.getElementById("espece").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("cheque").className = "";
            document.getElementById("mode_payment").value = 3
        }

        function activelettre(){
            document.getElementById("lettre").className = "active";
            document.getElementById("espece").className = "";
            document.getElementById("autre").className = "";
            document.getElementById("cheque").className = "";
            document.getElementById("cartebancaire").className = "";

            document.getElementById("mode_payment").value = 4
        }
        function activeautre(){
            document.getElementById("autre").className = "active";
            document.getElementById("cheque").className = "";
            document.getElementById("cheque").className = "";
            document.getElementById("lettre").className = "";
            document.getElementById("cartebancaire").className = "";

            document.getElementById("mode_payment").value = 5
        }

    </script>
       @endsection