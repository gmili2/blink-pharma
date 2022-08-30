<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="resourcefoodeals/images/logo.svg">
    <title>Foodeals</title>
        <!-- Color picker plugins css -->
        <link href="resourcefoodeals/plugins/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
        <!-- toast CSS -->
    <!-- Bootstrap Core CSS -->
    <link href="resourcefoodeals/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resourcefoodeals/plugins/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="resourcefoodeals/css/bootstraptoggle.min.css">
    <link href="resourcefoodeals/plugins/wizard/steps.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="resourcefoodeals/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="resourcefoodeals/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="resourcefoodeals/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="resourcefoodeals/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="resourcefoodeals/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="resourcefoodeals/css/colors/blue.css" id="theme" rel="stylesheet">
    <link href="resourcefoodeals/css/jquery-ui.css" rel="stylesheet">
    
    <!-- firebase-->
    <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
    <link rel="manifest" href="manifest.json">

    

  
    <!-- Vector CSS -->
    <link href="resourcefoodeals/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Calendar CSS -->
    <link href="resourcefoodeals/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="resourcefoodeals/css/toastr.min.css">
    <link rel="stylesheet" href="resourcefoodeals/css/sweetalert.css"> 
    <!-- <link rel="stylesheet" href="css/bootstraptoggle.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Foodeals</title>


<script src="resourcefoodeals/js/jquery.min.js" ></script> 
 <script src="resourcefoodeals/js/toastr.min.js"></script> 
<!-- <script src="js/alert.js" ></script> -->
<script src="resourcefoodeals/js/vue.js" ></script>
<script src="resourcefoodeals/js/axios.js" ></script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-85622565-1', 'auto');
    ga('send', 'pageview');
    </script>
<!-- <script src="js/bootstrap.min.js" ></script> -->

<!-- <script src="js/bootstrap-toggle.min.js"></script> -->

    <!-- Scripts -->
   

    <!-- Scripts -->


    <!-- Fonts -->


    <!-- Styles -->
     <link href="resourcefoodeals/css/pagination.css" rel="stylesheet"> 
     <link href="resourcefoodeals/css/style-v2.css" rel="stylesheet"> 
       



</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" style="margin-bottom:0px;">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header" >
                
                         <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                   
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span >
                         <!-- dark Logo text -->
                         <!-- Light Logo text -->   
                         <img src="resourcefoodeals/img/donate.png" style="   width: 30VH;height:auto;  color:blue;  "  alt="Foodeals"></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse" >
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                      <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                     
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                   
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                       
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                        </li>
                        <!-- User profile and Notifications -->
                    <!-- ============================================================== -->

                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/{{Auth::User()->pathimage}}" alt="user" style="width: 58px;" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{Auth::User()->pathimage}}" 
                                                salt="user"></div>
                                            <div class="u-text">
                                                <h4></h4>
                                        </div>
                                    </li>
                                    
                                

                                    <li role="separator" class="divider"></li>
                                    <li><a href="profile"><i class="ti-user"></i>Profil</a></li>
                                    <li role="deconnexion" class="divider">Deconnexion</li>
                                    
                       
              </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" style="position:fixed;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    
                    <!-- User profile text-->
                
                </div>
            
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"></li>
                        <li>
                            <a href="{{ url('Statistique')}}" aria-expanded="false"><i class="fas fa-chart-line" aria-hidden="true"></i><span class="hide-menu">Statistiques</span></a>
                        </li>
                        <li>
                            <a href="{{ url('commande') }}" aria-expanded="false" ><i class="fa fa-list" aria-hidden="true"></i><span class="hide-menu">Commande </span></a>
                        </li>
                        <li>
                            <a href="{{ route('offre') }}" aria-expanded="false"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span class="hide-menu">Mes Offres</span></a>
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        @if (Auth::User()->chefepartenaire==0)
                        <li>
                            <a href="{{ url('getsoucompte') }}" aria-expanded="false"><i class="mdi mdi-account-multiple-plus" aria-hidden="true"></i><span class="hide-menu">Sous Compte</span></a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ url('deconnexion')}}" aria-expanded="false"><i class="mdi mdi-arrow-left-thick"></i><span class="hide-menu">Deconnexion</span></a>
                        </li>
                
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
            
     
            </div>
            <!-- End Bottom points-->
        </aside>



@yield('content')



      
    <script src="resourcefoodeals/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="resourcefoodeals/plugins/bootstrap/js/popper.min.js"></script>
    <script src="resourcefoodeals/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="resourcefoodeals/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="resourcefoodeals/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="resourcefoodeals/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="resourcefoodeals/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="resourcefoodeals/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <script src="resourcefoodeals/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="resourcefoodeals/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- axios JS -->
    <script src="resourcefoodeals/js/axios.js"></script>
    <!-- Chart JS -->
    <script src="resourcefoodeals/plugins/echarts/echarts-all.js"></script>
    <script src="resourcefoodeals/js/dashboard5.js"></script>
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="resourcefoodeals/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="resourcefoodeals/js/bootstrap-toggle.min.js"></script>
        <!-- Color Picker Plugin JavaScript -->
        <script src="resourcefoodeals/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="resourcefoodeals/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="resourcefoodeals/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <script src="resourcefoodeals/plugins/dropify/dist/js/dropify.min.js"></script>
    <script src="resourcefoodeals/plugins/moment/moment.js"></script>
    <script src="resourcefoodeals/plugins/wizard/jquery.steps.min.js"></script>
    <script src="resourcefoodeals/plugins/wizard/jquery.validate.min.js"></script>
    
    <script src="resourcefoodeals/js/jquery.repeatable.js"></script>
    <script src="resourcefoodeals/js/jquery-ui.js"></script>
    <!-- Sweet-Alert  -->
    <script src="resourcefoodeals/plugins/wizard/steps.js"></script>


    <script src="resourcefoodeals/js/myscript.js" ></script>
    <script src="resourcefoodeals/js/Timer.js" ></script>

    <script src="{{ asset('js/firebase.js') }}"></script>









    <script src="resourcefoodeals/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="resourcefoodeals/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->

    <script src="resourcefoodeals/plugins/calendar/dist/fullcalendar.min.js"></script>
    <script src="resourcefoodeals/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="resourcefoodeals/plugins/calendar/dist/cal-init.js"></script>
    <!-- sparkline chart -->
    <script src="resourcefoodeals/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="resourcefoodeals/js/dashboard4.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="resourcefoodeals/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
        <input type="hidden" value="{{Session::get('success')}}" id="success">
        <input type="hidden" value="{{session()->get('warning')}}" id="warning">
        <script>
            var schhlk = $('#success').val();
            var wrhhlk= $('#warning').val();
           // toastr.success(schhlk);
            if(schhlk!="")
            toastr.success(schhlk);
           if(wrhhlk!="")
           toastr.error(wrhhlk);

</script>
     
</html>