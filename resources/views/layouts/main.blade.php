
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AgriXpress') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo.png" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>


</head>

<body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

<!-- Topbar Start -->
<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">

        <!-- LOGO -->
        <h4><a href="/dashboard" class="topnav-logo"> Nicole Covid-19 App </a></h4>
{{--            <span class="topnav-logo-lg">--}}
{{--                <img src="assets/images/xpress/logo-full.png" alt="" height="95">--}}
{{--            </span>--}}
{{--            <span class="topnav-logo-sm">--}}
{{--                <img src="assets/images/xpress/logo-full.png" alt="" height="95">--}}
{{--            </span>--}}






        <ul class="list-unstyled topbar-right-menu float-right mb-0">


            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">
                             <span>
                                <span style="color:#ffffff" class="account-user-name">Nicole Covid-19 App</span>
                                <span style="color:#ffffff" class="account-position">
                                    Murevi
                                </span>
                            </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="/other_details" target="_blank"  class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle mr-1"></i>
                        <span>About</span>
                    </a>

                    <!-- item-->
                    <a href="/support"  target="_blank"   class="dropdown-item notify-item">
                        <i class="mdi mdi-account-edit mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="/support" target="_blank"  class="dropdown-item notify-item">
                        <i class="mdi mdi-lifebuoy mr-1"></i>
                        <span>Support</span>
                    </a>


                </div>
            </li>

        </ul>
        <a class="button-menu-mobile disable-btn">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        <div class="app-search dropdown">

            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="uil-notes font-16 mr-1"></i>
                    <span>Analytics Report</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="uil-life-ring font-16 mr-1"></i>
                    <span>How can I help you?</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="uil-cog font-16 mr-1"></i>
                    <span>User profile settings</span>
                </a>

                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                </div>

                <div class="notification-list">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="media">
                            <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                            <div class="media-body">
                                <h5 class="m-0 font-14">Erwin Brown</h5>
                                <span class="font-12 mb-0">UI Designer</span>
                            </div>
                        </div>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="media">
                            <img class="d-flex mr-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                            <div class="media-body">
                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                <span class="font-12 mb-0">Developer</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Topbar -->

<!-- Start Content-->
<div class="container-fluid">

    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu left-side-menu-detached">

            <div class="leftbar-user">
                <a href="javascript: void(0);">

                    <center>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-primary rounded-circle shadow-sm">
                            NC
                            </span>
                        </div>
                    </center>

                    <span class="leftbar-user-name">Nicole Covid-19 App</span>
                </a>
            </div>

            <!--- Sidemenu -->
            <ul class="metismenu side-nav">

                <li class="side-nav-title side-nav-item">Navigation</li>



                <li class="side-nav-item">
                    <a href="/dashboard" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span class="badge badge-success float-right">new</span>
                        <span> Dashboard</span>
                    </a>

                </li>



                <li class="side-nav-title side-nav-item">Apps</li>
                <li class="side-nav-item">
                    <a href="/other_details" class="side-nav-link">
                        <i class="uil-snowflake"></i>
                        <span>Covid-19 Info</span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="/support" class="side-nav-link">
                        <i class=" uil-book-reader"></i>
                        <span>Help</span>
                    </a>
                </li>


            </ul>



            <!-- End Sidebar -->

            <div class="clearfix"></div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <div class="content-page">
           @yield('content')
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Nicole Covid-19 App
                        </div>
{{--                        <div class="col-md-6">--}}
{{--                            <div class="text-md-right footer-links d-none d-md-block">--}}
{{--                                <a href="/about" target="_blank">About</a>--}}
{{--                                <a href="/support" target="_blank" >Support</a>--}}
{{--                                <a href="javascript: void(0);">Documentation</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div> <!-- content-page -->

    </div> <!-- end wrapper-->
</div>
<!-- END Container -->





<!-- end demo js-->

@livewireScripts








</body>
<script>
    var botmanWidget = {
	title:'Nicole Covid 19 ChatBot',
    introMessage: "✋ Hi! I'm Nicole from <br>" +"Covid-19 TaskForce. Press 'Hello' to start a conversation<br> ",
    mainColor:'#1c4b27',
    aboutText:'',
    bubbleBackground:'#1c4b27',
    headerTextColor: '#fff',
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>

<!-- Apex js -->
<script src="assets/js/vendor/apexcharts.min.js"></script>

{{--<!-- Todo js -->--}}
{{--<script src="assets/js/ui/component.todo.js"></script>--}}

<!-- demo app -->
<script src="assets/js/pages/demo.dashboard-crm.js"></script>
@yield('scripts')

</html>
