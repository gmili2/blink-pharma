
<div class="row">



              <img src="{{ public_path() ."/assets/img/logo.png"}}" style=" height: 2cm;width:3cm">

</div>

 <table width='100%' cellspacing='0' cellpadding='0'>
      <tr>
        <td valign='top' width='35%' style='font-size:12px;'> <strong >   {{$facture[0]->nom_client}} </strong><br /> 
Adresse : {{$facture[0]->adressclient}}  <br/>
<!--SIRET: [SIRET du client]-->
<!--<br /-->
<!-->No de TVA: [Numéro de TVA du client]<br />-->

</td>
        <td valign='top' width='35%'>
</td>
        <td valign='top' width='30%' style='font-size:12px;'>Date de facturation: {{$date}}<br/>
		Échéance: 28/07/2021 <br/>
		
		
		</td>

      </tr>
    </table>
    <table width='100%' height='100' cellspacing='0' cellpadding='0'>
      <tr>
        <td><div align='center' style='font-size: 14px;font-weight: bold;'>Facture №  553 </div></td>
      </tr>
    </table>

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
                <td valign='top' style='font-size:12px;'>
                  @if ($f->remise==null)
                      0%
                  @else
                  {{$f->remise}}%
                  @endif
                 </td>
                <td valign='top' style='font-size:12px;'>{{$f->prix_unitaire}}</td>
                <td valign='top' style='font-size:12px;'>{{$f->quantite}}</td>
                <td valign='top' style='font-size:12px;'>{{$f->TVA}}</td>
                <td valign='top' style='font-size:12px;'>{{$f->prix_unitaire*$f->quantite}}</td>

              </tr>
        @endforeach

</td></tr>
    </table>
    
    <table width='100%' cellspacing='0' cellpadding='2' border='0'>
      <tr>
        <td style='font-size:12px;width:50%;'><strong> </strong></td>
        <td><table width='100%' cellspacing='0' cellpadding='2' border='0'>
<!--  <tr>-->
<!--<td align='right' style='font-size:12px;' >Total</td>-->
<!--    <td  align='right' style='font-size:12px;'>   {{$facture[0]->montant_PU}} Dhs<td>-->
<!--  </tr>-->
  <tr>
   
    <td  align='right' style='font-size:12px;'><b>Total TTC</b></td>
    <td  align='right' style='font-size:12px;'><b>   {{$facture[0]->montant_PU}} Dhs </b></td>
  </tr>
  <tr>
   
    <td  align='right' style='font-size:12px;'><b>Total TTC</b></td>
    <td  align='right' style='font-size:12px;'><b>   {{$facture[0]->montant_PU}} Dhs </b></td>
  </tr>
  </table>
</td>
      </tr>
</table> 
  <table  width='100%' cellspacing='0' cellpadding='2'>
      <tr>
        {{-- <td width='33%' style='border-top:double medium #CCCCCC;font-size:12px;' valign='top' ><b>{{Auth::User()->name}}</b><br/>
SIRET:  [SIRET]<br/>

</td> --}}
        <td width='33%' style='border-top:double medium #CCCCCC; font-size:12px;' align='center' valign='top'>
          {{Auth::User()->adresse}} <br/>
{{Auth::User()->tele}}<br/>
{{-- </td>

        <td valign='top' width='34%' style='border-top:double medium #CCCCCC;font-size:12px;' align='right'>[Nom de la banque]<br/> [Compte bancaire (IBAN)] {{Auth::User()->pied_pdf}} <br/>SWIFT/BIC: [SWIFT/BIC] <br/>     
 </td> --}}
      </tr>
    </table>
    

    
