
                   @extends('layouts.app')

                   @section('content')
                   <!-- partial -->
                <!-- partial -->
                <div class="page-content">
                    <section class="section-produit mt-3 pb-5">
                        <form action="updateproduct{{$produit->id}}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Ajouter un produit</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        {{-- <a href="#" class="btn-hover color-green btn-fixed">Sauvegarder</a> --}}
                                        <button type="submit" class="btn-hover color-green btn-fixed" style="margin-top:15px"> Sauvegarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-product mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img" src="/images/{{$produit->image}}" /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload"   name="image" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG /imags/{{$produit->image}}</span>
                                                    @error('image')
                                        
                                                    <span>
                                                        <strong style="color: red">a remplir</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" src="/assets/img/default.png" /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload" name="image" class="form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Nom*</label>
                                            <input type="text" class="form-control"  value="{{$produit->name}}" required name="nom" />
                                            @error('nom')
                                        
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code barre</label>
                                            <input type="text" class="form-control"  required value="{{$produit->code_bare}}"  name="codebarre" />
                                            @error('codebarre')
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Code barre 2</label>
                                            <input type="text" class="form-control" value="{{$produit->code_bare2}}"  name="codebarre2" />
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Catégorie</label>
                                            <select class="chosen-select form-select "  name="categorie" required>
                                                <option   selected>...</option>
                                                @foreach($types as $type)
                                                <option  value="{{$type->id}}"  @if($produit->types_id==$type->id) selected @endif>{{$type->name}}</option>

                                                @endforeach
                                              
                                            </select>
                                            @error('categorie')
                                        
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Classe thérapeutique</label>
                                            <select class="chosen-select form-select "   required name="classe">
                                                <option   selected>...</option>
                                                @foreach($classes as $classe)
                                                <option  value="{{$classe->id}}"  @if($produit->classes_id==$classe->id) selected @endif>{{$classe->name}}</option>

                                                @endforeach
                                              
                                            </select>
                                            @error('classe')
                                        
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Forme galénique</label>
                                            <select  class="chosen-select form-select "   required name="fgalenique">
                                                <option    selected>...</option>
                                                @foreach($forms as $form)
                                                <option  value="{{$form->id}}"  @if($produit->forms_id==$form->id) selected @endif>{{$form->name}}</option>
                                                @endforeach
                                              
                                            </select>
                                            @error('fgalenique')
                                        
                                            <span>
                                                <strong style="color: red" >a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">DCI</label>
                                            <select class="chosen-select form-select "    required name="dci">
                                                <option    selected>...</option>
                                                @foreach($dcis as $dci)
                                                <option  value="{{$dci->id}}" @if($produit->dcis_id==$dci->id) selected @endif >{{$dci->name}}</option>
                                                @endforeach
                                             
                                            </select>
                                            @error('dci')
                                        
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Laboratoire</label>
                                            <input type="text" class="form-control" value="{{$produit->laboratoire}}" name="laboratoire" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Gamme</label>
                                            <input type="text" class="form-control"  value="{{$produit->gamme}}" name="gamme" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Sous-gamme</label>
                                            <input type="text" class="form-control"  value="{{$produit->sous_gamme}}" name="sousgamme" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Produit tableau</label>
                                            <select class="chosen-select form-select "   value="{{old('tproduit')}}"name="tproduit">
                                                <option selected>...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input"  value="1" type="checkbox" 
                                                @if($produit->prescription==1) checked @endif 
                                                id="inlineCheckbox1" name="prescription"/>
                                                <label class="form-check-label" for="inlineCheckbox1">Nécessite une prescription</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input"  value="1" type="checkbox" 
                                                @if($produit->produit_marche==1) checked @endif 
                                                id="inlineCheckbox2" name="produit_marche"/>
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
                                            <input type="text" class="form-control" value="{{$produit->PPH}}" name="pph" />
                                            @error('pph')
                                        
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">PPV*</label>
                                            <input type="text" class="form-control" value="{{$produit->PPV}}" name="ppv" />
                                            @error('ppv')
                                        
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>


                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Quantite </label>
                                            <input type="text" class="form-control" value="{{$produit->quantite}}" name="quantite" />
                                            @error('ppv')
                                        
                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">TVA sur achat</label>
                                            <select class="chosen-select form-select "    name="tva_achat">
                                                @foreach ($TvaAchat as $item)
                                                  <option value="{{$item->Valeur}}"
                                                    @if ($item->id==$produit->TVA)
                                                    selected                                                    @endif
                                                    >{{$item->Nom_Tva}} : {{$item->Valeur}}</option>
                                                @endforeach

                                            </select>
                                            @error('tva_achat')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">TVA sur vente</label>

                                            <select class="chosen-select form-select "    name="tva_vente">
                                                {{-- <option selected>...</option> --}}
                                                @foreach ($TvaVente as $item)
                                                  <option value="{{$item->Valeur}}"
                                                    @if ($item->id==$produit->TVA_vente)
                                                        selected                                                    @endif
                                                    >{{$item->Nom_Tva}} :  {{$item->Valeur}}</option>
                                                @endforeach

                                            </select>

                                            @error('tva_vente')

                                            <span>
                                                <strong style="color: red">a remplir</strong>
                                            </span>
                                        @enderror
                                        </div>


                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Zone</label>
                                            <select class="chosen-select form-select "    name="zone" required>
                                                <option >...</option>
                                                @foreach ($zone as $item)
                                                  <option 
                                                  @if ($item->id==$produit->zone)
                                                  selected  @endif
                                                  value="{{$item->id}}">{{$item->Nom_zone}} :  {{$item->Ref_zone}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Est remboursable</label>
                                            <select class="chosen-select form-select "   value="{{old('remboursable')}}" name="remboursable">
                                                <option selected>...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Base de remboursement</label>
                                            <input type="text" class="form-control" value="{{$produit->gamme}}" name="base_remboursable" />
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
                                            <input type="text" class="form-control"  value="{{$produit->présentation}}"name="presentation" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Excipient</label>
                                            <input type="text" class="form-control"  value="{{$produit->excipient}}" name="excipient" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Posologie pour adult</label>
                                            <input type="text" class="form-control"  value="{{$produit->posologie_adult}}" name="padult" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Posologie pour enfant</label>
                                            <input type="text" class="form-control" value="{{$produit->posologie_enfant}}" name="penfant" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Indications</label>
                                            <input type="text" class="form-control"value="{{$produit->indications}}"  name="indications" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Contre-indication conduit</label>
                                            <select class="chosen-select form-select " name="ci_conduit">
                                                <option selected>...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Contre-indication monograph</label>
                                            <select class="chosen-select form-select " name="ci_monograph">
                                                <option selected>...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Contre-indication grossesse</label>
                                            <select class="chosen-select form-select " name="ci_grossesse">
                                                <option selected>...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label">Référence labo du produit</label>
                                            <input type="text" class="form-control"  value="{{$produit->reference_labo_produit}}" name="labo_produit" />
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Conditionnement</label>
                                                <input type="text" class="form-control" value="{{$produit->conditionnement}}"  name="conditionnement" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Monograph</label>
                                            <textarea name="description_monograph"  placeholder="{{$produit->monograph}}" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" placeholder="{{$produit->description}}" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
         
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
           @endsection
















