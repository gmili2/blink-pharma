
                @extends('layouts.app')

                @section('content')      
                
                <div class="page-content">

                    <section class="section-stock ">
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

                                <a id="lien" href=" "> Télécharger un exemple  </a>
                                                   </div>
                            </div>
                        </form>
                        <div class="row filtre-product pb-1">
                            <div class="col-md-6">
                                <div class="title-p pt-1"><h5>Liste des historiques d'impotation</h5></div>
                            </div>

                           
                        </div>
              

                            <table id="example44" class="table table-striped" style="width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Nom </th>
                                        <th>Date creation</th>
                                        <th>Lien de Telech</th>
                                    </tr>
                                </thead>
                             <tbody>
                                              
                                @foreach ($file as $item)
                            <tr>
                                <td>{{$item->file_name}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>   
                                     <a id="lienn" href="Files CSV/{{$item->file_name}}" > Télécharger  </a>  
                                </td>
                            </tr>
                        @endforeach
                         </tbody>
                        </table>
                    </section>
                <script>
function afficherTrace(){
    document.getElementById("tabletrace").hidden=false;
    document.getElementById("buttontraceaffiche").hidden=true;
    document.getElementById("buttontrace").hidden=false;
}
function haddentrace(){
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
