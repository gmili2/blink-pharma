{{-- <!DOCTYPE html>
<html lang="en"> --}}

        {{-- <div class="main-wrapper">
            <div class="page-wrapper"> --}}
              
                @extends('layouts.app')

                @section('content')
                <!-- partial -->
                <div class="page-content">
                    <section class="section-client mt-3 pb-5">
                        <div class="row text-end">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <a href="#" class="btn-hover color-white">Ajouter aux favoris</a>
                                    <a href="#" class="btn-hover color-white">Archives</a>
                                    <a href="#" class="btn-hover color-white">Importer</a>
                                    <a href="addclient" class="btn-hover color-blue">Créer</a>
                                </div>
                            </div>
                        </div>

                        <div class="section-table-client mt-4 pt-3">
                            <div class="row filtre-client pb-1">
                                <div class="col-md-12">
                                    <div class="title-p pt-1"><h5>Liste des clients</h5></div>
                                </div>
                            </div>
                            <table id="table" class="table table-striped" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Type</th>
                                        <th>E-mail</th>
                                        <th>Téléphone</th>
                                        <th>CIN</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A120130</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="informationclient1">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A120130</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="informationclient">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A120130</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/client/informationclient.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A120130</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/client/informationclient.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A120132</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/client/informationclient.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A120180</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/client/informationclient.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A20130</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/client/informationclient.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khalid lhouma</td>
                                        <td>Client régulier</td>
                                        <td>Exemple@gmail.com</td>
                                        <td>05 74 56 46 46</td>
                                        <td>A20130</td>
                                        <td>
                                            <div class="dropdown section-action">
                                                <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/pages/client/informationclient.html">Afficher</a></li>
                                                    <li><a class="dropdown-item" href="#">Modifier</a></li>
                                                    <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                @endsection
            {{-- </div>
        </div> --}}

{{--        
    </body>
</html> --}}
