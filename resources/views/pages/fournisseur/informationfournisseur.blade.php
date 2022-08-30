@extends('layouts.app')
@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Ajouter aux favoris</a> <a href="{{url('modifyfournisseur'.$fournisseurs->id)}}" class="btn-hover color-white">Modifier</a> <a href="#" class="btn-hover color-blue">Régulariser les impayés </a>
                                </div>
                            </div>
                        </div>
                        <div class="section-information mt-4 pt-3">
                            <div class="row pb-1">
                                <div class="col-md-9">
                                    <div class="information-general p-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="pb-1 mb-3">Information générales</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info d-flex">
                                                    <div class="image"><img  id="img" src="/images/{{$fournisseurs->image}}"alt="" /></div>
                                                    <div class="content block-detail">
                                                        <ul>
                                                            <li><label>Nom :</label> <span>{{$fournisseurs->name}}</span></li>
                                                            <li><label>Téléphone :</label> <span>{{$fournisseurs->tele}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information-general p-4 mt-4">
                                        <h5 class="pb-1 mb-3">Informations de l’organisme</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="block-info">
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Email</label> <span>{{$fournisseurs->email}}</span></li>
                                                            <li><label>Fax</label> <span>{{$fournisseurs->fax}}</span></li>
                                                            <li><label>Site internet</label> <span>{{$fournisseurs->site}}</span></li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="mb-2 mt-4">Adresse</h5>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Adresse</label> <span>{{$fournisseurs->adresse}}</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="content">
                                                        <ul>
                                                            <li><label>Ville</label> <span>{{$fournisseurs->ville}}</span></li>
                                                            <li><label>Pays</label> <span>{{$fournisseurs->pays}}</span></li>
                                                            <li><label>Code postal</label> <span>{{$fournisseurs->code_postale}}</span></li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="mb-2 mt-4">Informations descriptives</h5>
                                                    <div class="content">
                                                        <ul>
                                                            <li class="full"><label>Description</label> <span>{{$fournisseurs->description}}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-right info-fornisseur">
                                        <div class="block-header">
                                            <div class="block">
                                                <div class="image"><img src="/assets/icons/database.svg" alt="" /></div>
                                                <div class="content px-3">
                                                    <h3>Total non payé</h3>
                                                    <span>Dont un avoir de : 0dh</span>
                                                </div>
                                                <div class="fornisseur-price"><span>0 Dhs</span></div>
                                            </div>
                                        </div>

                                        <div class="block-information">
                                            <h5>Commentaires (2)</h5>
                                            <form action="">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Ajouter un commentaire" name="comment" />
                                                    <div class="send-message buttons d-flex align-items-center">
                                                        <button type="submit" class="btn btn-hover color-blue d-flex align-items-center"><i class="bi bi-send"></i></button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="commentaire d-flex flex-column mt-3">
                                                <div class="header justify-content-between"><span class="auteure">Par : Dr Hicham</span> <span class="date">Juin-12-2022</span></div>
                                                <div class="text mt-2">Lorem Ipsum est simplement un faux texte de l'industrie de l'impression et de la composition.</div>
                                            </div>
                                            <div class="commentaire d-flex flex-column mt-3">
                                                <div class="header justify-content-between"><span class="auteure">Par : Dr Hicham</span> <span class="date">Juin-12-2022</span></div>
                                                <div class="text mt-2">Lorem Ipsum est simplement un faux texte de l'industrie de l'impression et de la composition.</div>
                                            </div>
                                        </div>
                                        <div class="section-aide d-flex">
                                            <div class="support">
                                                <a href="tel:05 30 500 500" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/telephone.svg" alt="" /></div>
                                                    <span>05 30 500 500</span>
                                                </a>
                                            </div>
                                            <div class="aide">
                                                <a href="" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/aide.svg" alt="" /></div>
                                                    <span>Aide</span>
                                                </a>
                                            </div>
                                            <div class="retour">
                                                <a href="" role="button" class="d-flex align-items-center">
                                                    <div class="icon"><img src="/assets/icons/retour.svg" alt="" /></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
      @endsection