{{-- @extends('layouts.app')

@section('content')                <div class="page-content">
    @include('layouts.navparam')

    <section class="section-stock mt-3 pb-5">
        <form action="ModifierTermeFacture" method="POST" >
            <div class="row text-end">
            @csrf

                <div class="col-md-12">
                    <div class="buttons">
                        <button type="submit" class="btn btn-hover color-green" >Sauvegarder</button>





                    </div>
                </div>
            </div>
            <div class="section-information bg-white block-form mt-4 p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-p pt-1"><h5>Modifier une Terme </h5></div>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col-md-6 mb-3">

                        <br>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Terme</label>
                            <input type="text" class="form-control"  id="Value" name="ValueFacture" value="{{$Facture->Value}}" />
                        </div>

                    </div>

        </form>





    </section>



</div>






@endsection
<script>
function RemplissageInput(){
alert("holql");

    var ddlViewBy = document.getElementById('option');
    alert (ddlViewBy); // This will output the value selected

var value = ddlViewBy.options[ddlViewBy.selectedIndex].value;
alert (value); // This will output the value selected

var text = ddlViewBy.options[ddlViewBy.selectedIndex].text;


alert (text);
// var value= document.getElementById("TermeSelected").value;
// var value= document.getElementById("option").value;
// alert(value);

 document.getElementById("Value").value=value;


       }
</script> --}}


 
@extends('layouts.apppar')

@section('content')  
                <!-- partial -->
                <div class="page-content">

                    <section class="section-client mt-3 pb-5">
                        <form  action="ModifierTermeFacture" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="title">
                                        <h1>Modifier les termes et modalités par défaut des Bons de livraison</h1>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-hover color-green" >Sauvegarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Modifier les termes et modalités</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Termes et modalités</label>
                                            <textarea  class="form-control"   id="Value" name="ValueFacture"   cols="30" rows="5">{{$Facture->Value}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
         
@endsection