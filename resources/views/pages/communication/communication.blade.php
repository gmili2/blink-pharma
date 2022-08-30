@extends('layouts.app')

@section('content')                <!-- partial -->
                <div class="page-content">
                    <section class="section-stock mt-3 pb-5">
                        <form action="">
                            <div class="row text-end">
                                <div class="col-md-12">
                                    <div class="buttons">
                                        <button type="submit" class="btn btn-hover color-green">Sauvegarder</button>
                                    </div>
                                </div>
                            </div>
                            <div class="section-information bg-white block-form mt-4 p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Communication</label>
                                        <select class="form-select" name="communication">
                                            <option value="Communication groupee">Communication groupée</option>
                                            <option value="Communication Individuelle">Communication individuelle</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">opération</label>
                                        <select class="form-select" name="operation">
                                            <option value="">En se basant sur les ID des Produits</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Type communication*</label>
                                        <select class="form-select" name="typecommunication">
                                            <option value="sms">SMS</option>
                                            <option value="mail">Mail</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
           @endsection

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous"></script> -->
        <script src="/assets/vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/bootstrap/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="/assets/vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
        <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
        <script src="/assets/vendor/datatables/js/jszip.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.html5.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.print.min.js"></script>
        <script src="/assets/vendor/datatables/js/buttons.colVis.min.js"></script>
        <script src="/assets/js/main.js"></script>
   
