<table width='100%' cellspacing='0' cellpadding='2' border='1' bordercolor='#CCCCCC'>
    <tr>


      <td width='35%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Produit </strong></td>
      <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>P.U</strong></td>
      <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Qté</strong></td>
      <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px;'><strong>Total</strong></td>


      </tr>
      @foreach ($facture as $f)                              
         

            <tr>
              <td valign='top' style='font-size:12px;'>{{$f->name}}</td>
              <td valign='top' style='font-size:12px;'>
                  {{$f->prix_AU}}
              </td>
              <td valign='top' style='font-size:12px;'>{{$f->qte}}</td>
              {{-- <td valign='top' style='font-size:12px;'>{{$f->quantite}}</td> --}}
              <td valign='top' style='font-size:12px;'>{{$f->prix_AU*$f->qte}} DH</td>

            </tr>
      @endforeach

</td></tr>
  </table>
  <Strong>
  Totatl={{$facture[0]->total }}DH

  </Strong>



  