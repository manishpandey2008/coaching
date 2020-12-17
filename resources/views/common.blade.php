<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kashyap Mathematics</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/fonts/flaticon.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/animate.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/idCard.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('dashboard/js/modernizr-3.6.0.min.js')}}"></script>
     <style type="text/css">
        @font-face{
            font-family:pandey;
            src:url('{{asset('dashboard/Karate.ttf')}}');

        }
        .logo-custom {
            font-family:pandey; 
            max-height: 40px;
             color: rgb(120,150,200);
        }
    </style>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="#">
                         <p class="logo-custom" href="#">Kashyap Mathematics</p>
                        <!--  <img src="{{asset('assets/img/km3.png')}}" style="width: 100px;height: 50px"> -->
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">{{$user['first_name']}}</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="{{asset('dashboard/img/figure/admin.jpg')}}" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">{{$user['first_name']}}</h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>

                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="{{route('login')}}"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color" style="height: 700px;">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{asset('dashboard/img/logo1.png')}}" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content" >
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item">
                            <a href="{{ route('admin-home',['userName'=>$user['user_name']])}}" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('admin-studentAll',['userName'=>$user['user_name']])}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Students</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-newStudent',['userName'=>$user['user_name']])}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Add New Student</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('admin-allClassList',['userName'=>$user['user_name']])}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin-newClass',['userName'=>$user['user_name']])}}" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Class</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-id-card" aria-hidden="true"></i><span>Test Activate</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Class Student</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Outer Student</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>All Exam
                                        Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>New Daily Exam</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>New Weak Exam</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>New Complete Exam</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-script"></i><span>Notes</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Notes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Add New Notes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Profile</span></a>
                        </li>
                    </ul>
                </div>
            </div>

<!---------------------------Contant--------------------------->

@yield('main_page')

<!---------------------------Contant--------------------------->

                <!-- Footer Area Start Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">pandey</a> 2019. All rights reserved. Designed by <a
                            href="#">PsdBosS</a></div>
                </footer>
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
     <script src="{{asset('dashboard/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('dashboard/js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('dashboard/js/jquery.scrollUp.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('dashboard/js/main.js')}}"></script>
<!---------------------------Script--------------------------->
 @yield('script_section')
 <!---------------------------Script--------------------------->
</body>

</html>