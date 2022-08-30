@extends('layouts.app')

@section('content')


<div class="page-content">
    @include('layouts.navparam')
<br>
<br>
<br>
<br>
                    <section class="section-client mt-3 pb-5">
                        <form action="updateEmploi" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Modifier les horaires d'ouverture par défaut</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <button type="submit" class="btn-hover color-green">Sauvegarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                @foreach ($data as $data)


                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>{{$data->jour}}</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 1</label>
                                            <input type="time" class="form-control"   name=  {{'debut1'.$data->jour}}    value={{substr( $data->debut1,0,5)}} />
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 1</label>
                                            <input type="time"    class="form-control" name=  {{'fin1'.$data->jour}}   value={{substr( $data->fin1,0,5)}} />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 2</label>
                                            <input type="time" class="form-control"   name={{'debut2'.$data->jour}} value={{substr( $data->debut2,0,5)}} />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 2 {{$data->id}}2</label>
                                            <input type="time" class="form-control"   name={{'fin2'.$data->jour}}    value= {{substr( $data->fin2,0,5)}} />
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                </div>

                        </form>
                    </section>
                </div>
    @endsection
