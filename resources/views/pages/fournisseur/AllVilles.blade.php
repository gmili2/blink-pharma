
    <label class="form-label">Ville</label>
    <select required class="form-select" name="ville">

        @foreach ($villes as $ville)
        <option value="{{$ville->id}}">{{$ville->Nom}}</option>
        @endforeach


    </select>

    