
                @extends('layouts.app')

                @section('content')      
                
                <div class="page-content">

                    <section class="section-stock mt-3 pb-5">
                        <form action="Ajouter" method="POST"   enctype="multipart/form-data">
                            <div class="row text-end">

                                {{-- @csrf --}}
                             
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
                                        <div class="title-p pt-1"><h5>Créer une nouvelle importation</h5></div>
                                    </div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Table*</label>
                                        <select class="form-select" onchange="slecttfile()"
                                        id="fileselected" name="methode">
                                            <option value="client-Exemple.csv">Client</option>
                                            <option value="fournisseur-Exemple.csv">Fourissuer</option>
                                            <option value="Confrere-Exemple.csv">Confrere</option>
                                            <option value="Produit-Exemple.csv">Produit</option>

                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">File CSV</label>
                                     
                                        <input type="file" class="form-control" placeholder="text" name="commentaire" 
                                         accept=".csv"/>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label class="form-label">Exemple CSV</label>

                                        {{-- <a href="/exemple-csv/client-Exemple.csv"
   download="Pacman_Kiwi.csv">Télécharger csv</a> --}}
                                <a id="lien" href=" "> telecherger un exemple  </a>
                                                   </div>
                            </div>
                        </form>
                        <div class="row filtre-product pb-1">
                            <div class="col-md-6">
                                <div class="title-p pt-1"><h5>Liste des produits</h5></div>
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="status-actif">
                                    <div class="status">
                                        <span class="on"><i class="bi bi-circle-fill"></i> Oui</span>
                                    </div>
                                    <div class="status">
                                        <span class="off"><i class="bi bi-circle-fill"></i> Non</span>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group d-flex align-items-center">
                                <i class="bi bi-search"></i>
                                <input type="text" style="    width: 205px;
                                margin: 17px" class="form-control" placeholder="Search" id=recherch_produit
                                onkeyup="recherche_produit()"
                                name="search" />                                                </div>
                        </div>
                        <div id="table2">
                        <table id="tabletrace" class="table table-striped" style="width: 100%;">
                            {{-- <table id="tabletrace" class="table table-striped"   style="width: 100%;"> --}}
                                <th>File_name</th>
                            <th>Date_creation</th>
                            <th>lien_telech</th>
                        @foreach ($file as $item)
                            <tr>
                                <td>{{$item->file_name}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>    <a id="lienn" href="Files CSV/{{$item->file_name}}" > telecherger ici  </a>  </td>
                            </tr>
                        @endforeach
                        </table>
                        {{-- {{ $produits->links() }} --}}
</div>

                  
                    </section>
                    {{-- <div class="buttons"  id="buttontraceaffiche">
                        <button class="btn-hover color-green" id="trace"
                         onclick="afficherTrace()"
                         
                         >Affiche Trace</button>
                    </div>
                    <div class="buttons" hidden id="buttontrace">
                        <button class="btn-hover color-green" id="trace"
                         onclick="haddentrace()"
                         
                         >hidden la trace</button>
                    </div> --}}
                  
                <script>
                  
function afficherTrace(){
    // alert("tabletrace")
    document.getElementById("tabletrace").hidden=false;
    document.getElementById("buttontraceaffiche").hidden=true;
    document.getElementById("buttontrace").hidden=false;


    

}
function haddentrace(){
    // alert("tabletrace")
    document.getElementById("tabletrace").hidden=true;
    document.getElementById("buttontraceaffiche").hidden=false;
    document.getElementById("buttontrace").hidden=true;



}



                    function slecttfile(){


           var file= document.getElementById("fileselected").value;
           console.log(file);
           document.getElementById("lien").href="exemple-csv/"+file;
                            }


                  </script>
          @endsection
