@extends('layouts.apppar')

@section('content')  

                <!-- partial -->
                <div class="page-content">
                    {{-- @include('layouts.navparam') --}}
<br>
<br>
<br>
<br>
                    <section class="section-client mt-3 pb-5">
                        <form action="changecode" method="POST">
                            @csrf
                         
                        <div class="block-form bg-white p-4 mb-4">
                            <div class="section-subtitle pb-1 mb-3">
                                <h5>Changer le code securite</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Ancien mot de passe*</label>
                                    <input type="password" required class="form-control" id='ancien_passe' name="ancien_passe"
                                     onkeyup="requerdinputnouveauepasswword()" />
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Nouveau code securite</label>
                                    <input type="password" class="form-control" name="nv_passe"  id="nv_passe" />
                                </div>
                              <div class="col-md-4 mb-3">
                            <label class="form-label">confirmation code securite</label>
                             <input  type="text" hidden id='erreurmatchinput'>
                            <input type="password" class="form-control " required onkeyup="validerpassword()"
                            name="confime_passe" id="confime_passe" />
                            <span style="display: none" id="erreurmatch">
                                <strong style="color: red">le mot de passe ne correspond pas</strong>
                            </span>
                        </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="buttons">
                                <button type="submit" class="btn btn-hover color-green" >Modifier</button>
                            </div>
                        </div>
                    </form>

                        <br>
                      

                    </section>
                </div>
       
       @endsection

       <script>
           function  requerdinputnouveauepasswword(){
                        var ancien_passe = document.getElementById("ancien_passe").value;
                        var nv_passe = document.getElementById("nv_passe");
                        var confime_passe = document.getElementById("confime_passe");


// alert('jjj')
                        if(String(ancien_passe)==""){
                            nv_passe.removeAttribute('required');
                            confime_passe.removeAttribute('required');
                        }
                        else{
                            nv_passe.setAttribute('required', '');
                            confime_passe.setAttribute('required', '');
                        }

               }

              function validerpassword(){
                  var erreurmatchinput = document.getElementById("erreurmatchinput");
                        var erreurmatch = document.getElementById("erreurmatch");
                // alert(String(confime_passe.value))
                        if(confime_passe.value==nv_passe.value){
                            // alert('jjjj')
                            erreurmatchinput.removeAttribute('required');
                        erreurmatch.style.display='none'
                        }
                        else{
                            // alert("kkkk")

                            erreurmatch.style.display='block'
                            erreurmatchinput.setAttribute('required', '');



                        }

              }
       </script>