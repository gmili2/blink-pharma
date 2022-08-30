<!-- partial -->
@extends('layouts.apppar')

@section('content')
<div class="page-content">
    <section class="section-produit mt-3 pb-5">
        

        <div class="section-table-product section-horaire mt-4 pt-3">
            <div class="row text-end">
                <div class="col-md-12">
                    <div class="buttons">
                        <a href="ModifierEmploi" class="btn-hover color-green">Modifier</a>
                    </div>
                </div>
            </div>
            <div class="row filtre-product pb-1">
                <div class="col-md-12">
                    <div class="title-p pt-1"><h5>Heures d'ouverture par défaut</h5></div>
                </div>
            </div>
            <table id="" class="tables table-striped" style="width: 100%;">
                <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Heures d'ouverture</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)

                    <tr class="" role="button">


                        <td>{{$data->jour}}</td>
                        <td>{{$data->debut1}} - {{$data->fin1}} | {{$data->debut2}} - {{$data->fin2}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
