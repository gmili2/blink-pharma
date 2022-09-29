
$(document).ready(function(){

    
    $(document).ready( function () {
        
// $(document).ready(function() {
    // $('#example').dataTable();
    // $('#example input').addClass('form-control'); 
    
    // <-- add this line
    
// } );

      var mydattable =  $('#example').DataTable({
        "bDestroy": true,

            dom: 'Bfrtip',
            columnDefs: [
                {
                    targets: 1,
                    className: 'noVis'
                }
            ],
            buttons: [
                'excel', 'print',
                   {
                   extend: 'colvis',
                   collectionLayout: 'fixed columns',
                   collectionTitle: '<h5>Titre</h5>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.'
                   }
               ],
               language: {
                search: '', 
                searchclass:"totot",
                searchPlaceholder: "Recherche...",
                 "emptyTable": "Aucune donnée disponible dans le tableau",
                 "loadingRecords": "Chargement...",
                 "processing": "Traitement...",
                 "aria": {
                     "sortAscending": ": activer pour trier la colonne par ordre croissant",
                     "sortDescending": ": activer pour trier la colonne par ordre décroissant"
                 },
                 "select": {
                     "rows": {
                         "_": "%d lignes sélectionnées",
                         "1": "1 ligne sélectionnée"
                     },
                     "cells": {
                         "1": "1 cellule sélectionnée",
                         "_": "%d cellules sélectionnées"
                     },
                     "columns": {
                         "1": "1 colonne sélectionnée",
                         "_": "%d colonnes sélectionnées"
                     }
                 },
                 "autoFill": {
                     "cancel": "Annuler",
                     "fill": "Remplir toutes les cellules avec <i>%d<\/i>",
                     "fillHorizontal": "Remplir les cellules horizontalement",
                     "fillVertical": "Remplir les cellules verticalement"
                 },
                 "searchBuilder": {
                     "conditions": {
                         "date": {
                             "after": "Après le",
                             "before": "Avant le",
                             "between": "Entre",
                             "empty": "Vide",
                             "not": "Différent de",
                             "notBetween": "Pas entre",
                             "notEmpty": "Non vide",
                             "equals": "Égal à"
                         },
                         "number": {
                             "between": "Entre",
                             "empty": "Vide",
                             "gt": "Supérieur à",
                             "gte": "Supérieur ou égal à",
                             "lt": "Inférieur à",
                             "lte": "Inférieur ou égal à",
                             "not": "Différent de",
                             "notBetween": "Pas entre",
                             "notEmpty": "Non vide",
                             "equals": "Égal à"
                         },
                         "string": {
                             "contains": "Contient",
                             "empty": "Vide",
                             "endsWith": "Se termine par",
                             "not": "Différent de",
                             "notEmpty": "Non vide",
                             "startsWith": "Commence par",
                             "equals": "Égal à",
                             "notContains": "Ne contient pas",
                             "notEnds": "Ne termine pas par",
                             "notStarts": "Ne commence pas par"
                         },
                         "array": {
                             "empty": "Vide",
                             "contains": "Contient",
                             "not": "Différent de",
                             "notEmpty": "Non vide",
                             "without": "Sans",
                             "equals": "Égal à"
                         }
                     },
                     "add": "Ajouter une condition",
                     "button": {
                         "0": "Recherche avancée",
                         "_": "Recherche avancée (%d)"
                     },
                     "clearAll": "Effacer tout",
                     "condition": "Condition",
                     "data": "Donnée",
                     "deleteTitle": "Supprimer la règle de filtrage",
                     "logicAnd": "Et",
                     "logicOr": "Ou",
                     "title": {
                         "0": "Recherche avancée",
                         "_": "Recherche avancée (%d)"
                     },
                     "value": "Valeur"
                 },
                 "searchPanes": {
                     "clearMessage": "Effacer tout",
                     "count": "{total}",
                     "title": "Filtres actifs - %d",
                     "collapse": {
                         "0": "Volet de recherche",
                         "_": "Volet de recherche (%d)"
                     },
                     "countFiltered": "{shown} ({total})",
                     "emptyPanes": "Pas de volet de recherche",
                     "loadMessage": "Chargement du volet de recherche...",
                     "collapseMessage": "Réduire tout",
                     "showMessage": "Montrer tout"
                 },
                 "buttons": {
                     "collection": "Collection",
                     "colvis": "<i class='bi bi-layout-three-columns'></i>",
                     "colvisRestore": "Rétablir visibilité",
                     "copy": "Copier",
                     "copySuccess": {
                         "1": "1 ligne copiée dans le presse-papier",
                         "_": "%ds lignes copiées dans le presse-papier"
                     },
                     "copyTitle": "Copier dans le presse-papier",
                     "csv": "CSV",
                     "excel": "Excel",
                     "pageLength": {
                         "-1": "Afficher toutes les lignes",
                         "_": "Afficher %d lignes"
                     },
                     "pdf": "PDF",
                     "print": "Imprimer",
                     "copyKeys": "Appuyez sur ctrl ou u2318 + C pour copier les données du tableau dans votre presse-papier.",
                     "createState": "Créer un état",
                     "removeAllStates": "Supprimer tous les états",
                     "removeState": "Supprimer",
                     "renameState": "Renommer",
                     "savedStates": "États sauvegardés",
                     "stateRestore": "État %d",
                     "updateState": "Mettre à jour"
                 },
                 "decimal": ",",
                 "search": "Rechercher:",
                 "datetime": {
                     "previous": "Précédent",
                     "next": "Suivant",
                     "hours": "Heures",
                     "minutes": "Minutes",
                     "seconds": "Secondes",
                     "unknown": "-",
                     "amPm": [
                         "am",
                         "pm"
                     ],
                     "months": {
                         "0": "Janvier",
                         "2": "Mars",
                         "3": "Avril",
                         "4": "Mai",
                         "5": "Juin",
                         "6": "Juillet",
                         "8": "Septembre",
                         "9": "Octobre",
                         "10": "Novembre",
                         "1": "Février",
                         "11": "Décembre",
                         "7": "Août"
                     },
                     "weekdays": [
                         "Dim",
                         "Lun",
                         "Mar",
                         "Mer",
                         "Jeu",
                         "Ven",
                         "Sam"
                     ]
                 },
                 "editor": {
                     "close": "Fermer",
                     "create": {
                         "title": "Créer une nouvelle entrée",
                         "button": "Nouveau",
                         "submit": "Créer"
                     },
                     "edit": {
                         "button": "Editer",
                         "title": "Editer Entrée",
                         "submit": "Mettre à jour"
                     },
                     "remove": {
                         "button": "Supprimer",
                         "title": "Supprimer",
                         "submit": "Supprimer",
                         "confirm": {
                             "_": "Êtes-vous sûr de vouloir supprimer %d lignes ?",
                             "1": "Êtes-vous sûr de vouloir supprimer 1 ligne ?"
                         }
                     },
                     "multi": {
                         "title": "Valeurs multiples",
                         "info": "Les éléments sélectionnés contiennent différentes valeurs pour cette entrée. Pour modifier et définir tous les éléments de cette entrée à la même valeur, cliquez ou tapez ici, sinon ils conserveront leurs valeurs individuelles.",
                         "restore": "Annuler les modifications",
                         "noMulti": "Ce champ peut être modifié individuellement, mais ne fait pas partie d'un groupe. "
                     },
                     "error": {
                         "system": "Une erreur système s'est produite (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Plus d'information<\/a>)."
                     }
                 },
                 "stateRestore": {
                     "removeSubmit": "Supprimer",
                     "creationModal": {
                         "button": "Créer",
                         "order": "Tri",
                         "paging": "Pagination",
                         "scroller": "Position du défilement",
                         "search": "Recherche",
                         "select": "Sélection",
                         "columns": {
                             "search": "Recherche par colonne",
                             "visible": "Visibilité des colonnes"
                         },
                         "name": "Nom :",
                         "searchBuilder": "Recherche avancée",
                         "title": "Créer un nouvel état",
                         "toggleLabel": "Inclus :"
                     },
                     "renameButton": "Renommer",
                     "duplicateError": "Il existe déjà un état avec ce nom.",
                     "emptyError": "Le nom ne peut pas être vide.",
                     "emptyStates": "Aucun état sauvegardé",
                     "removeConfirm": "Voulez vous vraiment supprimer %s ?",
                     "removeError": "Échec de la suppression de l'état.",
                     "removeJoiner": "et",
                     "removeTitle": "Supprimer l'état",
                     "renameLabel": "Nouveau nom pour %s :",
                     "renameTitle": "Renommer l'état"
                 },
                 "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
                 "infoEmpty": "Affichage de 0 à 0 sur 0 entrées",
                 "infoFiltered": "(filtrées depuis un total de _MAX_ entrées)",
                 "lengthMenu": "Afficher _MENU_ entrées",
                 "paginate": {
                     "first": "Première",
                     "last": "Dernière",
                     "next": "<i class='bi bi-chevron-right'></i>",
                     "previous": "<i class='bi bi-chevron-left'></i>"
                 },
                 "zeroRecords": "Aucune entrée correspondante trouvée",
                 "thousands": " "
            
             },
             initComplete: function() {
                $('.buttons-excel').html('<i class="bi bi-arrow-down"></i>')
                $('.buttons-print').html('<i class="bi bi-printer"></i>')
               },
            "processing": true,
            "serverSide": true,
            "ajax": "gettableajax",
            "defaultContent": '<a type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editMemberModal"  onclick="editMember(data[0])"> <span class="glyphicon glyphicon-edit"></span>Edit</a> / <a href="" class=class="btn btn-danger">Delete</a>'
,
            "columns": [
                // {
                //     "render": function ( data, type, row, meta ) {
                //       return 'onclick=afficchchhc()'; }
         
                //   },


                // "render": function ( data, type, row, meta ) { 
                //     return '<button data-id="'+data+'" onclick="deleteThis(event)">Delete</button>'
                //     }
                { "data": "id" },
                { "data": "nom_client" },
                { "data": "created_at" },
                { "data": "montant_PPV" },
                { "data": "qte_total" },

                { "data": "status" },
                { "data": "id" },
               

                // { "data": "montant_PU" },
                // { "data": "nom_client" },
                // { "data": "montant_credit" },
                // { "data": "status" },
                // { "data": "id" },

               
            ],
            "columnDefs": [
                {
         
                    "render": function ( data, type, row ) {
                        return '<td><div class="dropdown section-action"><a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a><ul class="dropdown-menu"><li><a class="dropdown-item" href="facture'+data+'">Afficher</a></li><li><a class="dropdown-item" href="modifiervante'+data+'">Modifier</a></li><li><a class="dropdown-item" onclick="charger_id_produit('+
                        data+')"href="" data-bs-toggle="modal" data-bs-target="#search-client" >Supprimer</a></li></ul></div></td>'
                    },
                    "targets": 6       
                
                },
                // 2022-09-23 09:22:37
                {
         
                    "render": function ( data, type, row ) {
                        let datefinale;
                        datefinale=data.substring(8,10)+"-"+data.substring(5,7)+'-'+data.substring(0,4)+"  "+data.substring(11,16)
                        return datefinale;
                        // console.log(anyString.substring(0, 10))+;

                    },
                    "targets": 2       
                
                },


                // DD-MM-YYYY HH:mm
                {
         
                    "render": function ( data, type, row ) {
                        return data +"DH"},
                    "targets": 3       
                
                },
                {
         
                    "render": function ( data, type, row ) {

                       if (data==1 || data=="1"){
                        return '<div class="status">            <span class="on"><i class="bi bi-circle-fill"></i> </span>               </div>';
                       }
                      else
                      if (data==2 || data=="2"){

                        return '<div class="status">            <span class="ongoing"><i class="bi bi-circle-fill"></i> </span>               </div>';

                      }
                      else    return '<div class="status">            <span class="off"><i class="bi bi-circle-fill"></i> </span>               </div>';
                       


                       
                    },
                    "targets": 5         
                
                },
                // {
         
                //     "render": function ( data, type, row ) {
                //         return '0'
                //     },
                //     "targets": 1           
                
                // },
                    
                { "visible": true,  "targets": [ 1 ] }
            ]
        });

        // $('#example').dataTable();
        // $('#example input').addClass('form-control'); 
        // alert("kjh")
        $('#example tbody').on( 'click','td','tr', function () {
        var data= mydattable.column( this )  ;
        var id= mydattable.row( this ).data()["id"] ;
var headers = [];

   var dataTableHeaderElements = $('#example').DataTable().columns().header();
for (var i = 0; i< dataTableHeaderElements.length; i++) {
headers.push($(dataTableHeaderElements[i]).text())    
}    

if(headers[data[0]]!="Actions"){
     window.location.replace("/facture"+id)
}

        } );
        
        
    //     $('#example tbody').on( 'click', 'tr', function (data) {
    //         // var data = mydattable.fnGetData( this );
    //         // console.log(this.parents('tr') ).data()
    //     //     alert(window.location.href)
    //     //     // window.location.replace("/detail")
    
    // //     //    alert("data");
    // //     // // alert('u')
    // //     var data = mydattable.row( $(this).parents('tr') ).data();
    // //     alert( data+"'s salary is: " );
    
    // // // console.log( 'The table has ' + data[0] + ' records' );


    //     // var data = mydattable.row( $(this).parents('tr') ).data();

    // console.log(this.dataset.td)
    //     } )
    });


   


    
    // Datatable
    
    
  // Change style search to bs5
  // $('.dataTables_filter input').addClass('form-control');


  

//   var options = {
//     series: [{
//     name: 'Net Profit',
//     data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
//   }, {
//     name: 'Revenue',
//     data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
//   }, {
//     name: 'Free Cash Flow',
//     data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
//   }],
//     chart: {
//     type: 'bar',
//     height: 350
//   },
//   plotOptions: {
//     bar: {
//       horizontal: false,
//       columnWidth: '55%',
//       endingShape: 'rounded'
//     },
//   },
//   dataLabels: {
//     enabled: false
//   },
//   stroke: {
//     show: true,
//     width: 2,
//     colors: ['transparent']
//   },
//   xaxis: {
//     categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
//   },
//   yaxis: {
//     title: {
//       text: '$ (thousands)'
//     }
//   },
//   fill: {
//     opacity: 1
//   },
//   tooltip: {
//     y: {
//       formatter: function (val) {
//         return "$ " + val + " thousands"
//       }
//     }
//   }
//   };

//   var chart = new ApexCharts(document.querySelector("#chart_bar"), options);
//   chart.render();


// // Chart js rapport principal
// var options = {
//     series: [99, 1],
//     chart: {
//     height: 350,
//     type: 'radialBar',
// },
// colors: ["#4172ED","#F5C745"],
// plotOptions: {
//     radialBar: {
//       dataLabels: {
//         name: {
//           fontSize: '22px',
//         },
//         value: {
//           fontSize: '16px',
//         },
       
//         total: {
//           show: true,
//           label: 'Total',
//           formatter: function (w) {
//             // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
//             return 249
//           }
//         }
//       }
//     }
//   },
//   stroke: {
//     lineCap: "round",
//   },
//   labels: ['Payé', 'Non Payé'],
// };

// var chart = new ApexCharts(document.querySelector("#chart_1"), options);
// chart.render();
// var options = {
//     series: [50, 50],
//     chart: {
//     height: 350,
//     type: 'radialBar',
// },
// colors: ["#4172ED","#F5C745"],
// plotOptions: {
//     radialBar: {
//       dataLabels: {
//         name: {
//           fontSize: '22px',
//         },
//         value: {
//           fontSize: '16px',
//         },
//         total: {
//           show: true,
//           label: 'Total',
//           formatter: function (w) {
//             return 249
//           }
//         }
//       }
//     }
// },
// stroke: {
//   lineCap: "round",
// },
// labels: ['Payé', 'Non Payé'],
// };

// var chart = new ApexCharts(document.querySelector("#chart"), options);
// chart.render();


})


// Collapse side menu 
$('.collapse-icons').click(function(){

  $('.sidebar .sidebar-body').toggleClass('change-position');
  $('.sidebar-body>.nav').toggleClass('remove-padding');
  $('.sidebar').toggleClass('sidebar-closed');
  $('.nav span').toggleClass('hide-span');
  // $('.sidebar-header').toggleClass('hide-span');
  $('.navbar').toggleClass('page-wrapper-left')
  $('.page-wrapper').toggleClass('page-wrapper-left');
  $('.accordion-button:after').toggleClass('hide-span');
  $('.nav .nav-item .collapse').removeClass('show');
  $('.nav .nav-item .nav-link.accordion-button').attr('aria-expanded','false');
  $('.class-rotate').toggleClass('rotate-collapse');
  $('.nav .nav-item .nav-link.accordion-button').addClass('collapsed');
  $('.setting-header').toggleClass('icon-setting');

 })

$('.nav .nav-item .nav-link.accordion-button').click(function(){

  $('.sidebar').removeClass('sidebar-closed');
  $('.nav span').removeClass('hide-span');
  $('.sidebar-header').removeClass('hide-span');
  $('.navbar').removeClass('page-wrapper-left')
  $('.page-wrapper').removeClass('page-wrapper-left');
  $('.accordion-button:after').removeClass('hide-span');
  $('.setting-header').removeClass('icon-setting');
  $('.sidebar-body').removeClass('change-position');
  $('.sidebar .nav').removeClass('remove-padding');

})

// Search bar live
$('#items-to-search li').jqSearch({
  searchInput: '#search',
  searchTarget: 'text',
});

// Function popover for help
$(document).ready(function(){
   var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
   var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
     return new bootstrap.Popover(popoverTriggerEl)
   });

   $('#help-popup').click(function(e) {
    $('.popover-header').append('<button id="popovercloseid" type="button" class="close-btn"><i class="bi bi-x-lg"></i></button>');
    $(this).popover();
  });
  
  $(document).click(function(e) {
    if(e.target.id=="popovercloseid" )
    {
        $('#help-popup').popover('hide');                
    }
  });
})

 

$(document).ready(function() {
   // Upload image
  function preview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) { 
        var img = new Image;
                img.onload = function() {		
                $('.img').attr({'src':e.target.result,'width':img.width});
                };
        img.src = reader.result;}
        reader.readAsDataURL(input.files[0]);   
    }
  }
  $(".upload").change(function(){
      $(".img").css({top: 0, left: 0});
          preview(this);
          $(".img").draggable({ containment: 'parent',scroll: false});
  });


   

    // Input qty 
    var quantity = 0;
    $('.quantity-increment').click(function(){;
    var t = $(this).siblings('.quantity');
    var quantity = parseInt($(t).val());
    $(t).val(quantity + 1); 
        
    });


    // Efeito spinner sem plugin - pagina carrinho - decrement
    $('.quantity-decrement').click(function(){
    var t = $(this).siblings('.quantity');
    var quantity = parseInt($(t).val());
    if(quantity > 1){
        $(t).val(quantity - 1);
    }
    }); 
    
} );


// Select change show/hide Montant avoir de la page Cadeau (Rubrique paramètres)
$(function() {
  $('#montant-filter').hide(); 
  $('#type').change(function(){
      if($('#type').val() == 'avoir') {
          $('#produit-filter').hide(); 
          $('#montant-filter').show();  
      } else {
          $('#produit-filter').show(); 
          $('#montant-filter').hide(); 
      } 
  });
});
 







var table = [
  "ActionScript",
  "AppleScript",
  "Asp",
  "BASIC",
  "C",
  "C++",
  "Clojure",
];

$("#nom-produit").autocomplete({
  minLength: 0,
  source: table,
  position: {  collision: "flip"  },

  focus: function (event, ui) {

    $("#nom-produit").val(ui.item.label);
    return false;

  },

  select: function (event, ui) {

      $("#nom-produit").val(ui.item.label);
      return false;

  }
})
  .autocomplete("instance")._renderItem = function (ul, item) {
  return $("<li>")
      .append("<div>" + item.label + "</div>")
      .appendTo(ul);
};



 
 