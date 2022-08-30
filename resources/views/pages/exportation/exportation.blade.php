@extends('layouts.app')

@section('content')                <div class="page-content">

    <section class="section-stock mt-3 pb-5">
        <form action="export-csv" method="POST"   enctype="multipart/form-data">
            <div class="row text-end">
            @csrf
           <div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Table*</label>
                <select class="form-select" onchange="slecttfile()"
                id="fileselected" name="table_choisie">
                    <option value="client">Client</option>
                    <option value="fournisseur">Fourissuer</option>
                    <option value="Confrere">Confrere</option>
                    <option value="Produit">Produit</option>
                    <option value="Vente">Vente</option>
                    <option value="EntrerConfere">EntrerConfere</option>
                    <option value="SortieConfere">SortieConfere</option>

                </select>

                 
                </div>
                
            </div>
            <span class="buttons">
                <button type="submit" class="btn btn-hover color-green" >Exporter</button>





            </span>
        </form>
    </section>
</div>
<script>



//     function slecttfile(){


// var file= document.getElementById("fileselected").value;
// console.log(file);
// document.getElementById("lien").href="exemple-csv/"+file;
//             }
// function  ExporterRoute(){
// alert('jjjkzf');
// window.location='/Exporation';
// var rout='/Exporation';
// axios.get(rout)
// .then(function (response){()

// });
// }
  </script>
@endsection
