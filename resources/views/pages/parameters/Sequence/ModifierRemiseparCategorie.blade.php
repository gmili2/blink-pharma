@extends('layouts.apppar')

@section('content')


<div class="page-content">
    {{-- @include('layouts.navparam') --}}

                    <section class="section-client mt-3 pb-5">
                        <form action="AjouterGarde" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Modifier Remise max par Categorie</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <button type="submit" class="btn-hover color-green">Sauvegarder</button>
                                    </div>
                                </div>
                            </div>





                        <div class="section-form-client mt-4">
                            <div class="block-form bg-white p-4 mb-4">
                                <div class="section-subtitle pb-1 mb-3">
                                    <h5>Complement Alimentaire(33.330%)(X DHS =Y points)</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Type*</label>
                                        <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type33" >
                                            <option value="Pourcentage">Pourcentage</option>



                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label"> Remise *</label>
                                        <input type="text" class="form-control" name="Equivalent33" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Complement Alimentaire(33.0%)(X DHS =Y points)</h5>
                                    </div>

                                    <div class="row">

                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Type*</label>
                                                <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type33" >
                                                    <option value="Pourcentage">Pourcentage</option>



                                                </select>
                                            </div>


                                        <div class="col-md-6 mb-3">
                                            <label class="form-label"> Remise *</label>
                                            <input type="text" class="form-control" name="Equivalent33" />
                                        </div>
                                    </div>

                            </div>

                            <div class="row">
                                <div class="section-subtitle pb-1 mb-3">
                                    <h5>Diététique(15.0%)(X DHS =Y points)</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label"> Type *</label>
                                        <input type="text" class="form-control" name="Type15" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label"> Remise *</label>
                                        <input type="text" class="form-control" name="Equivalent15" />
                                    </div>
                                </div>

                        </div>

                        <div class="row">
                            <div class="section-subtitle pb-1 mb-3">
                                <h5>Divers(00.0%)(X DHS =Y points)</h5>
                            </div>
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                                <label class="form-label">Type*</label>
                                                <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type">
                                                    <option value="Pourcentage">Pourcentage</option>



                                                </select>
                                            </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label"> Remise *</label>
                                    <input type="text" class="form-control" name="Equivalentt" />
                                </div>
                            </div>

                    </div>

                    <div class="row">
                        <div class="section-subtitle pb-1 mb-3">
                            <h5>Homeopathie(33.930%)(X DHS =Y points)</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Type*</label>
                                <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type33H">
                                    <option value="Pourcentage">Pourcentage</option>



                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label"> Remise *</label>
                                <input type="text" class="form-control" name="Equivalent33H" />
                            </div>
                        </div>

                </div>


                <div class="row">
                    <div class="section-subtitle pb-1 mb-3">
                        <h5>Médicament(33.930%)(X DHS =Y points)</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Type*</label>
                            <select class="form-select" onchange="slectRole()" id="Roleselect"name="Type33M">
                                <option value="Pourcentage">Pourcentage</option>



                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label"> Remise *</label>
                            <input type="text" class="form-control" name="Equivalent33M" />
                        </div>
                    </div>

            </div>

            <div class="row">
                <div class="section-subtitle pb-1 mb-3">
                    <h5>Médicament(29.747%)(X DHS =Y points)</h5>
                </div>
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Type*</label>
                        <select class="form-select" onchange="slectRole()" id="Roleselect"name="Type29M">
                            <option value="Pourcentage">Pourcentage</option>



                        </select>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label class="form-label"> Remise *</label>
                        <input type="text" class="form-control" name="Equivalent29M" />
                    </div>
                </div>

        </div>

        <div class="row">
            <div class="section-subtitle pb-1 mb-3">
                <h5>Médicament(300)(X DHS =Y points)</h5>
            </div>
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Type*</label>
                    <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type300M">
                        <option value="Pourcentage">Pourcentage</option>



                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label"> Remise *</label>
                    <input type="text" class="form-control" name="Equivalent300M" />
                </div>
            </div>

    </div>

    <div class="row">
        <div class="section-subtitle pb-1 mb-3">
            <h5>Médicament(400)(X DHS =Y points)</h5>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Type*</label>
                <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type400M">
                    <option value="Pourcentage">Pourcentage</option>



                </select>
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label"> Remise *</label>
                <input type="text" class="form-control" name="Equivalent400M" />
            </div>
        </div>

</div>


<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Médicament(30.000%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type30M">
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>


        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent30M" />
        </div>
    </div>

</div>


<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Parapharmacie(25.000%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type25P" >
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent25P" />
        </div>
    </div>

</div>

<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Parapharmacie(30.000%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type30P"  >
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent30P" />
        </div>
    </div>

</div>

<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Parapharmacie(15.000%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type15P" >
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent15P" />
        </div>
    </div>

</div>


<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Parapharmacie(33.330%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type33P" >
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent33P" />
        </div>
    </div>

</div>

<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Preparation(00.000%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type0P"  >
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent0P" />
        </div>
    </div>

</div>


<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Produit chimique(00.000%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type0PC"  >
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent0PC" />
        </div>
    </div>

</div>



<div class="row">
    <div class="section-subtitle pb-1 mb-3">
        <h5>Produit Vétérinaires(30.000%)(X DHS =Y points)</h5>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Type*</label>
            <select class="form-select" onchange="slectRole()" id="Roleselect" name="Type30PV"  >
                <option value="Pourcentage">Pourcentage</option>



            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label"> Remise *</label>
            <input type="text" class="form-control" name="Equivalent30PV" />
        </div>
    </div>

</div>



                            </div>
                        </div>
                    </form>


    @endsection
