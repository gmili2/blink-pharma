



 
@extends('layouts.app')

@section('content')  
                <!-- partial -->
                <div class="page-content">
                    {{-- @include('layouts.navparam') --}}
{{-- <br> --}}

                    <section class="section-client mt-3 pb-5">
                        <form  action="ModifierTermeVente" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="title">
                                        <h1>Modifier les termes et modalités par défaut des Ventes</h1>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-hover color-green" >Sauvegarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Modifier les termes et modalités</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Termes et modalités</label>
                                            <textarea  class="form-control"   id="Value" name="ValueVente"   cols="30" rows="5">{{$Vente->Value}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
         
@endsection