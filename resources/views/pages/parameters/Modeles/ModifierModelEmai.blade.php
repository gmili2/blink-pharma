@extends('layouts.app')

@section('content')                <div class="page-content">
    @include('layouts.navparam')

    <section class="section-stock mt-3 pb-5" >
        <form action="AjouterVille" method="POST"   enctype="multipart/form-data">
            <div class="row text-end">
            @csrf

                <div class="col-md-12">
                    <div class="buttons">
                        <button type="submit" class="btn btn-hover color-green"  style="margin-top: 50px">Ajouter</button>
                    </div>
                </div>
            </div>
            <div class="section-information bg-white block-form mt-4 p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-p pt-1"><h5>Modifier Modéle Emails</h5></div>
                    </div>
                </div>
               <div class="row mt-4 mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nom *</label>
                        <input type="text" class="form-control" placeholder="Nom" name="Nom" />
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Model *</label>
                        <textarea type="text" class="form-control" name="model" >
</textarea>
                    </div>





        </form>





    </section>




</div>
</div>
</div>

</div>

@endsection

<script>
function Remplaisagee(Nom,id){

document.getElementById("Nom_Villes").value=Nom;
document.getElementById("IdVille").value=id;

}
// function RemplaisageId(id){


// }


</script>





