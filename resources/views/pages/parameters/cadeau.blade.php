@extends('layouts.app')

@section('content')   

<style>
    @media all and (min-width: 992px) {
	.dropdown-menu li{ position: relative; 	}
	.nav-item .submenu{ 
		display: none;
		position: absolute;
		left:100%; top:-7px;
	}
	.nav-item .submenu-left{ 
		right:100%; left:auto;
	}
	.dropdown-menu > li:hover{ background-color: #f1f1f1 }
	.dropdown-menu > li:hover > .submenu{ display: block; }
}	
/* ============ desktop view .end// ============ */

/* ============ small devices ============ */
@media (max-width: 991px) {
  .dropdown-menu .dropdown-menu{
      margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
  }
}
</style>

                <div class="page-content">
                    {{-- @extends('layouts.navparam') --}}
                    @include('layouts.navparam')


                    <section class="section-client mt-3 pb-5">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title">
                                        <h1>Créer nouvelle journée de garde</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="buttons">
                                        <a href="#" class="btn-hover color-green">Sauvegarder</a>
                                    </div>
                                </div>
                            </div>
                            <div class="section-form-client mt-4">
                                <div class="block-form bg-white p-4 mb-4">
                                    <div class="section-subtitle pb-1 mb-3">
                                        <h5>Informations générales</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Nom *</label>
                                            <input type="text" class="form-control" name="nom" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="section-subtitle pb-1 mb-3">
                                            <h5>Période</h5>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Date début 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Date fin 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="section-subtitle pb-1 mb-3">
                                            <h5>Heures d'ouverture (Toute la journée)</h5>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 1 *</label>
                                            <input type="date" class="form-control" name="" required />
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Début 2</label>
                                            <input type="date" class="form-control" name="" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Fin 2</label>
                                            <input type="date" class="form-control" name="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
       @endsection

       <script>
        document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('click', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
// DOMContentLoaded  end

       </script>