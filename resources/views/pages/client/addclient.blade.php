@extends('layouts.app')

@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <form action="sauvgarderclient"  method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer un nouveau clients</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        {{-- <a href="#" class="btn-hover color-green btn-fixed">Sauvegarder</a> --}}
                                        <button type="submit " class="btn-hover color-green btn-fixed" >Sauvgarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img" src="/assets/img/default.jpg" /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control" name="nom" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Cin</label>
                                            <input type="text" class="form-control" name="cin" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Cnss</label>
                                            <input type="text" class="form-control" name="cnss" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Classe thérapeutique</label>
                                            <select class="form-select" name="ctherapeutique">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Forme galénique</label>
                                            <select class="form-select" name="fgalenique">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">DCI</label>
                                            <select class="form-select" name="dci">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Laboratoire</label>
                                            <input type="text" class="form-control" name="laboratoire" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Gamme</label>
                                            <input type="text" class="form-control" name="gamme" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Sous-gamme</label>
                                            <input type="text" class="form-control" name="sousgamme" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Produit tableau</label>
                                            <select class="form-select" name="tproduit">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" />
                                                <label class="form-check-label" for="inlineCheckbox1">Nécessite une prescription</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" />
                                                <label class="form-check-label" for="inlineCheckbox2">Produit marché</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations du stock</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">PPH*</label>
                                            <input type="text" class="form-control" name="pph" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">PPV*</label>
                                            <input type="text" class="form-control" name="ppv" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">TVA sur achat</label>
                                            <select class="form-select" name="tva_achat">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">TVA sur vente</label>
                                            <select class="form-select" name="tva_vente">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Est remboursable</label>
                                            <select class="form-select" name="remboursable">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Base de remboursement</label>
                                            <input type="text" class="form-control" name="base_remboursable" />
                                        </div>
                                    </div>
                                </div>
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations descriptives</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Présentation</label>
                                            <input type="text" class="form-control" name="Presentation" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Excipient</label>
                                            <input type="text" class="form-control" name="excipient" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Posologie pour adulte</label>
                                            <input type="text" class="form-control" name="padulte" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Posologie pour enfant</label>
                                            <input type="text" class="form-control" name="penfant" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Indications</label>
                                            <input type="text" class="form-control" name="indications" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Contre-Indication conduite</label>
                                            <select class="form-select" name="ci_conduit">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Contre-indication allaitement</label>
                                            <select class="form-select" name="ci_allaitement">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Contre-indication grossesse</label>
                                            <select class="form-select" name="ci_grossesse">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Réferance labo du produit</label>
                                            <input type="text" class="form-control" name="labo_produit" />
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Conditionnement</label>
                                                <input type="text" class="form-control" name="conditionnement" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Monograph</label>
                                            <textarea name="description_monograph" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
    
@endsection