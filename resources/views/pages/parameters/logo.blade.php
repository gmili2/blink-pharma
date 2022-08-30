@extends('layouts.apppar')

@section('content')  

                <!-- partial -->
                <div class="page-content">
                    {{-- @include('layouts.navparam') --}}

                    <section class="section-client mt-3 pb-5">
                        <form action="changelogo" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Paramètres de l'application</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <button type="submit"class="btn-hover color-green">Sauvegarder</button>
                                        {{-- <a href="#" class="btn-hover color-green">Sauvegarder</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Télécharger le logo</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="wrap upload-image d-flex gap-3">
                                                <div class="thumb"><img id="img" class="img" src="/images/{{AUth::User()->logo}}" /></div>
                                                <div class="form-upload mt-5">
                                                    <input type="file" id="upload" name="logo" class="upload form-control custom-file-input" />
                                                    <span>Votre fichier ne doit pas dépasser 15 MG</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
       
       @endsection