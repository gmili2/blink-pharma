<table width='100%' cellspacing='0' cellpadding='2' border='1' bordercolor='#CCCCCC'>
      <tr>


        {{-- <th>Produit</th>
        <th>P.U d’origine</th>
        <th>R</th>
        <th>P.U</th>
        <th>Qté.</th>
        <th>TVA</th>
        <th>Total</th> --}}

        <td width='35%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Produit </strong></td>
    <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>P.U d’origine</strong></td>
    <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>R</strong></td>
    <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>P.U</strong></td>
    <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Qté</strong></td>
    <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>TVA</strong></td>
    <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Total</strong></td>

  
     </tr>
    @foreach ($facture as $f)                              
       

          <tr>
            <td valign='top' style='font-size:12px;'>{{$f->name}}</td>
            <td valign='top' style='font-size:12px;'>
                {{$f->PPV_prix}}
            </td>
            <td valign='top' style='font-size:12px;'>{{$f->remise}}%</td>
            <td valign='top' style='font-size:12px;'>{{$f->prix_unitaire}}</td>
            <td valign='top' style='font-size:12px;'>{{$f->quantite}}</td>
            <td valign='top' style='font-size:12px;'>{{$f->TVA}}</td>
            <td valign='top' style='font-size:12px;'>{{$f->prix_unitaire*$f->quantite}}</td>

          </tr>
    @endforeach

</td></tr>
    </table>
  @php
     $some=0 ;
    foreach ($facture as $ff) {
      $some= $some+$ff->prix_unitaire*$ff->quantite;
    }
        
    @endphp
    
        <table>
     <tr>
   
    <td  align='right' style='font-size:12px;'><b>Total </b></td>
    <td  align='right' style='font-size:12px;'><b>   {{$some}} Dhs </b></td>
  </tr>
      </table>
    