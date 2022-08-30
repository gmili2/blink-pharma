@extends('layouts.apppar')

@section('content')  
                <!-- partial -->
                <div class="page-content">

                    <section class="section-client mt-3 pb-5">
                        <form action="changeentet" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="title">
                                        <h1>Modifier entete</h1>
                                    </div>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="buttons">
                                        <button  type="submit" class="btn-hover color-green">Sauvegarder</button>

                                        {{-- <a href="#" class="btn-hover color-green">Sauvegarder</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Modifier l'entet de page PDF</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">entete</label>
                                            <input type="file" name="entete" class="form-control" id="">
                                            {{-- <textarea name="terme" class="form-control" cols="30" rows="5"></textarea> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
         
@endsection