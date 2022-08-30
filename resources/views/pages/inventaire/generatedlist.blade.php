@extends('layouts.app')
@section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-accueil mt-3">
                    <form action="{{url('addinvent')}}" method="post">
                        @csrf
                                <div class="row">
             
                                    <div class="col-md-12">
                                    <div class="row ">

                                    <div class="col-md-6">
                                
                                  <b>Inventaire : </b> {{$invent->nom}}  <br/>
                                  <b>Date : </b>  {{$invent->created_at}} <br/>
                                  <b>Commentaire : </b>  {{$invent->commentaire}} 
                                 
                                   
</div>
                            <div class="col-md-6">
                          

                            <div class="row text-end">
                                <div class="col-md-12">
                                    <div class="buttons">
                                     
                                        <a href="invent" class="btn-hover color-white">Liste des inventaires</a>
                                        <button type='submit'  class="btn-hover color-blue">Valider l'inventaire</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                                        <div class="section-table-home mt-4 pt-3">
                                            <div class="row filtre-home pb-1">
                                            
                                                <div class="col-md-6">
                                                    <div class="title-p pb-1">
                                                        <h5>Liste des produits en stock</h5>
                                                    </div>
                                                </div>
                                         
                                            </div>
                                            <table id="table" class="table table-striped mt-3" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>N°</th>
                                                        <th>Produit</th>
                                                        <th>Gamme</th>
                                                        
                                                        <th>PPV</th>
                                                        <th>Quantité systéme</th>
                                                        <th>Quantité physique</th>
                                                        <th>Ecart</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $count=1; @endphp
                                                    @foreach($produits as $pro)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$pro->name}}</td>
                                                        <td>{{$pro->gamme}}</td>
                                                        <td><strong id="ppv{{$count}}">{{$pro->PPV_prix}}</strong> DH</td>
                                                        <td id="qtesys{{$count}}">{{$pro->quantite_disponible}}</td>
                                                        <td>
                                                            <input type='number' class="form-control" style="width:150px"
                                                            required
                                                            name='qteph_{{$count}}' 
                                                            id="qteph{{$count}}" oninput="calculate({{$count}})"/></td>
                                                        <td><b id="ecart{{$count}}">--</b></td>
                                                   
                                                    </tr>
                                                    <input hidden name="produit_{{$count}}" required value='{{$pro->id}}'/>
                                                    <input hidden name="nom_{{$count}}" value='{{$pro->name}}'/>
                                                    <input hidden name="qtesys_{{$count}}" value='{{$pro->quantite_disponible}}'/>
                                                    <input  hidden name="ppv_{{$count}}" value='{{$pro->PPV_prix}}'/>
                                                  
                                                    @php $count+=1; @endphp
                                                    @endforeach
                                                    <input  hidden name="invent_id" value='{{$invent->id}}'/>
                                                    <input  hidden name="counter" value='{{$count}}'/>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
</form>
                    </section>
                </div>
                <script>
                    function calculate(count){
                        var prix = document.getElementById('ppv'+count).innerText;
                        
                        var qtesys =parseInt(document.getElementById('qtesys'+count).innerText) ;
                        var qteph = parseInt(document.getElementById('qteph'+count).value) ;
                      
                        if(qteph-qtesys < 0)
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:red'>"+ (qteph-qtesys)*prix + " DH </b>";
                        else if (qteph-qtesys > 0)
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:green'> + "+ (qteph-qtesys)*prix + " DH </b>";
                        else
                        document.getElementById('ecart'+count).innerHTML= "<b style='color:black'>"+ (qteph-qtesys)*prix + " DH </b>";
                     
                    }
                </script>
                @endsection