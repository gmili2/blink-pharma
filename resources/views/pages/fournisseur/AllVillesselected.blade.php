
    <label class="form-label">Ville</label>
    <select required class="form-select" name="ville">

        @foreach ($villes as $v)
        <option value="{{$v->id}}"
            @if ($ville==$v->id)
                selected
            @endif
            >{{$v->Nom}}</option>
        @endforeach


    </select>

    