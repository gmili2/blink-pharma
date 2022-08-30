@extends('layouts.app')

@section('content')                <div class="page-content">
    @include('layouts.navparam')

    <section class="section-stock mt-3 pb-5" >
        <form action="ModifierSequence" method="POST"  >
            <div class="row text-end">
            @csrf

                <div class="col-md-12">
                    <div class="buttons">
                        <button type="submit" class="btn btn-hover color-green" >Modifier</button>
                    </div>
                </div>
            </div>
            <div class="section-information bg-white block-form mt-4 p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-p pt-1"><h5>Modifier une Sequence</h5></div>
                    </div>
                </div>
                 <div class="row mt-4 mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence facture de vente*</label>
                       <input type="text" class="form-control"  name="facture_de_vente" value="{{  $Sequence->Facteur_de_vente}}" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence retour sur vente*</label>
                        <input type="text" class="form-control"  name="retour_sur_vente" value="{{  $Sequence->Retour_sur_vente}}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence de bon de livraison*</label>
                        <input type="text" class="form-control"  name="bon_de_livraison" value="{{  $Sequence->Bon_de_livraison}}"  />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence avoir fouenisseur recu*</label>
                        <input type="text" class="form-control"  name="founi_recu" value="{{  $Sequence->Fournisseur_recu}}"  />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence inventaire stock*</label>
                        <input type="text" class="form-control"  name="inven_stock" value="{{  $Sequence->Inventaire_stock}}"  />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence facture global*</label>
                        <input type="text" class="form-control"  name="facture_global"  value="{{  $Sequence->Facture_gobal}}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence devis*</label>
                        <input type="text" class="form-control"  name="devis" value="{{  $Sequence->sequence_devis}}"  />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence bon de commande*</label>
                        <input type="text" class="form-control" name="bon_commande" value="{{  $Sequence->Bon_de_commande}}" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence avoir fournisseur émis*</label>
                        <input type="text" class="form-control" name="fourni_emis" value="{{  $Sequence->Fournisseur_emis}}" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence adjustement de stock*</label>
                        <input type="text" class="form-control"  name="adj_stock"  value="{{  $Sequence->Adjustement_de_stock}}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence N order (ordonnacier)*</label>
                        <input type="text" class="form-control"  name="order"  value="{{  $Sequence->N_order}}" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Sequence preparation*</label>
                        <input type="text" class="form-control"name="prepa" value="{{  $Sequence->preparation}}" />
                    </div>

                </div>
        </form>





    </section>



@endsection

<script>



</script>

