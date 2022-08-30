@extends('layouts.app')

@section('content')      
                <!-- partial -->
                <div class="page-content">
                    <section class="section-chart mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-chart p-4">
                                    <div class="row head-chart mb-4">
                                        <div class="col-md-6">
                                            <div class="section-subtitle">
                                                <h5>Vente</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="buttons">
                                                <a href="#" class="btn-hover color-blue">Détails</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div id="chart" class="chart-circle">


                                    </div> --}}
                                    <div id="app" ></div>

                                    <div class="row total-price mt-3">
                                        <div class="col-md-6">
                                            <div class="list-chart">
                                                <p class="m-0">
                                                    <span class="chart-blue"></span>
                                                   
                                                    Payé (00): <span id="payemontant">
                                                         0 Dhs
                                                    </span>
                                                </p>
                                                <p class="m-0"><span class="chart-yellow"></span>Non Payé (00): <span id="nonpayemontant">
                                                    0 Dhs
                                               </span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-end">Total(00) :
                                                
                                                 <span id="totalmontant">
                                                    0 Dhs
                                               </span>
                                              </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-chart p-4">
                                    <div class="row head-chart mb-4">
                                        <div class="col-md-6">
                                            <div class="section-subtitle">
                                                <h5>Achats</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="buttons">
                                                <a href="#" class="btn-hover color-blue">Détails</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div id="chart_1" class="chart-circle"></div> --}}
                                    <div id="app2" ></div>

                                    <div class="row total-price mt-3">
                                        <div class="col-md-6">
                                            <div class="list-chart">
                                                <p class="m-0"><span class="chart-blue"></span>Payé (00): 7 029,46 Dhs</p>
                                                <p class="m-0"><span class="chart-yellow"></span>Non Payé (00): 7 029,46 Dhs</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-end">Total(00) : 7 029,46 Dhs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        {{-- dd($ventesnonpaye,$ventespaye, $touslesvente,$montantnonpaye,$montantapaye,$montantpaye); --}}

<input type="text" hidden id="ventesnonpaye" value="{{$ventesnonpaye}}">
<input type="text"  hidden id="ventespaye" value="{{$ventespaye}}">
<input type="text" hidden id="touslesvente" value="{{$touslesvente}}">
<input type="text" hidden id="montantnonpaye" value="{{$montantnonpaye}}">
<input type="text" hidden id="montantapaye" value="{{$montantapaye}}">
<input type="text" hidden id="montantpaye" value="{{$montantpaye}}">



                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="p-4 bg-white">
                                    <table id="table" class="table table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Est actif</th>
                                                <th>Produit</th>
                                                <th>Catégorie</th>
                                                <th>Forme galénique</th>
                                                <th>PPV</th>
                                                <th>PPH</th>
                                                <th>Code barre</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($produits as $produit)
                                          
                                            <tr>
                                                <td>
                                                    <div class="status">
                                                        <span @if ($produit->active==1)
                                                            class="on"
                                                            @else
                                                            class="off"
                                                        @endif ><i class="bi bi-circle-fill"></i></span>
                                                    </div>
                                                </td>
                                                <td>{{$produit->name}}</td>
                                                <td>{{$produit->nameclasse}}</td>
                                                <td>{{$produit->nameform}}</td>
                                                <td>{{$produit->PPV}}</td>
                                                <td>{{$produit->PPH}}</td>
                                                <td>{{$produit->code_bare}}</td>
                                                <td>
                                                    <div class="dropdown section-action">
                                                        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="informationproduct{{$produit->id}}">Afficher</a></li>
                                                            {{-- <li><a class="dropdown-item" href="modifierproduitformule{{$produit->id}}">Modifier</a></li>
                                                            @if ($produit->active==1)
                                                            <li><a class="dropdown-item" href="desactiverproduit{{$produit->id}}">Désactiver</a></li>
                                                                @else
                                                            <li><a class="dropdown-item" href="avtiverproduit{{$produit->id}}">Activer</a></li>
                                                            @endif
                                                            <li>
                                                                <a class="dropdown-item" 
                                                                onclick="charger_id_produit({{$produit->id}})"
                                                                href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a>
                                                             </li> --}}
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    {{ $produits->links() }}        
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
          @endsection


          <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
          <script src="https://cdn.jsdelivr.net/npm/react@16.12/umd/react.production.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/react-dom@16.12/umd/react-dom.production.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/prop-types@15.7.2/prop-types.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
          <script src="https://cdn.jsdelivr.net/npm/react-apexcharts@1.3.6/dist/react-apexcharts.iife.min.js"></script>
          <script>
            // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
            // Based on https://gist.github.com/blixt/f17b47c62508be59987b
            var _seed = 42;
            Math.random = function() {
              _seed = _seed * 16807 % 2147483647;
              return (_seed - 1) / 2147483646;
            };
          </script>
        {{-- dd($ventesnonpaye,$ventespaye, $touslesvente,$montantnonpaye,$montantapaye,$montantapaye); --}}
    <script type="text/babel">

        // dd($ventesnonpaye,$ventespaye, $touslesvente,$montantnonpaye,$montantnonpaye,$montantnonpaye);
       var  ventesnonpaye= document.getElementById("ventesnonpaye").value;
       var  ventespaye= document.getElementById("ventespaye").value;
       var  touslesvente= document.getElementById("touslesvente").value;
       var  montantnonpaye= document.getElementById("montantnonpaye").value;
       var  montantpaye= document.getElementById("montantpaye").value;
       var  montantapaye= document.getElementById("montantapaye").value;
       var pventesnonpaye=(ventesnonpaye/touslesvente)*100
       var pvventespaye=(ventespaye/touslesvente)*100
       document.getElementById("nonpayemontant").innerHTML=montantnonpaye+"DH"
       document.getElementById("payemontant").innerHTML=montantpaye+"DH"
       document.getElementById("totalmontant").innerHTML=montantapaye+"DH"



//        alert(pventesnonpaye)
// alert(ventesnonpaye)
      class ApexChart extends React.Component {
        constructor(props) {
          super(props);

          this.state = {
          
            series: [pventesnonpaye,pvventespaye],
            options: {
              chart: {
                height: 350,
                type: 'radialBar',
              },
              colors: ["#4172ED","#F5C745"],

plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '22px',
        },
        value: {
          fontSize: '16px',
        },
        total: {
          show: true,
          label: 'Total',
          formatter: function (w) {
            return touslesvente
          }
        }
      }
    }
},
stroke: {
  lineCap: "round",
},
labels: ['Payé', 'Non Payé'],            },
          
          
          };
        }

      

        render() {
          return (
            <div>
              <div id="chart">
                <ReactApexChart options={this.state.options} series={this.state.series} type="radialBar" height={350} />
              </div>
              <div id="html-dist"></div>
            </div>
          );
        }
      }

      const domContainer = document.querySelector('#app');
      ReactDOM.render(React.createElement(ApexChart), domContainer);
    </script>


<script type="text/babel">
    class ApexChart extends React.Component {
      constructor(props) {
        super(props);

        this.state = {
        
          series: [80.20,90.10],
          options: {
            chart: {
              height: 350,
              type: 'radialBar',
            },
colors: ["#4172ED","#F5C745"],

plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '22px',
        },
        value: {
          fontSize: '16px',
        },
        total: {
          show: true,
          label: 'Total',
          formatter: function (w) {
            return 249
          }
        }
      }
    }
},
stroke: {
  lineCap: "round",
},
labels: ['Payé', 'Non Payé'],          },
        
        
        };
      }

    

      render() {
        return (
          <div>
            <div id="chart">
              <ReactApexChart options={this.state.options} series={this.state.series} type="radialBar" height={350} />
            </div>
            <div id="html-dist"></div>
          </div>
        );
      }
    }

    const domContainer = document.querySelector('#app2');
    ReactDOM.render(React.createElement(ApexChart), domContainer);
  </script>


    
{{-- 
          <script>
            
            
        alert('lkjh')
     
        var options = {
    series: [20,80],
    chart: {
    height: 350,
    type: 'radialBar',
},
colors: ["#4172ED","#F5C745"],
plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '22px',
        },
        value: {
          fontSize: '16px',
        },
       
        total: {
          show: true,
          label: 'Total',
          formatter: function (w) {
            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
            return 249
          }
        }
      }
    }
  },
  stroke: {
    lineCap: "round",
  },
  labels: ['Payé', 'Non Payé'],
};

var chart = new ApexCharts(document.querySelector("#chart_13"), options);
// chart.render();
// chart.exec();


chart1.updateOptions({
   xaxis: {
      categories: year
   },
   series: [{
      data:  [20,80]
   }],
});
// chart.updateSeries(
//    [20,80]
//    )

alert(typeof(chart))
// console.console.log(chart);





          </script> --}}
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script> -->
        {{-- <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

        <script src="/assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
        <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.print.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.colVis.min.js"></script> --}}
        {{-- <script src="/assets/js/main.js"></script> --}}
   
