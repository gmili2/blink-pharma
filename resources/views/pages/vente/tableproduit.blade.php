<table id="table" class="table table-striped mb-4" style="width: 100%;">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Forme</th>
            <th>PPV</th>
            <th>Zone</th>
            <th>Disp.</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($produits as $produit)
        <tr  onclick="selectproduit({{$produit->id}})" >
          
            <td>{{$produit->name}}</td>
            <td>{{$produit->nameform}}</td>
            <td>{{$produit->PPV}}</td>
            <td>{{$produit->zone}}</td>
            <td>{{$produit->quantite_disponible}}</td>
            <input hidden value='{{$produit->name}}' id='nameproduit{{$produit->id}}'>
            <input hidden value='{{$produit->nameform}}' id='nameform{{$produit->id}}'>
            <input hidden value='{{$produit->PPV}}' id='PPV{{$produit->id}}'>
            <input hidden value='{{$produit->zone}}' id='zone{{$produit->id}}'>
            <input hidden value='{{$produit->quantite_disponible}}' id='quantite_disponible{{$produit->id}}'>


        </tr>
        @endforeach
       
        
    </tbody>
</table>