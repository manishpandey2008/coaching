<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
             font-size: 40px;
             color: #abcdef;
        }
    </style>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap ">
        <div class="login-page-content ">
            <div class="login-box">
                <div class="item-logo">
                    <a class="logo-custom" href="#">Kashyap Mathematics</a>
                </div>
                <!-- <div>
                    <p class="text-center">MANISH</p>
                </div> -->
                <form action="{{route('login')}}" class="login-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Pass Code <span style="color: red">*</span></label>
                        <input type="text" placeholder="Enter usrename" class="form-control" name="passCode" pattern="[a-zA-Z0-9]*" maxlength="10" required="">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <label>Password <span style="color: red">*</span></label>
                        <input type="password" placeholder="Enter password" class="form-control" name="password" required="">
                        <i class="fas fa-lock"></i>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <a href="#" class="forgot-btn float-right">Forgot Password?</a>
                    </div>
                </form>
                <a href="{{route('home')}}" class="btn btn-primary" style="width: 100%;font-size:20px">HOME</a>
                <div class="login-social">
                    <ul>
                      <!--   <li><a href="#" class="btn btn-primary" style="width: 100%">HOME</a></li> -->
                        <!-- <li><a href="#" class="bg-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="bg-gplus"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="bg-git"><i class="fab fa-github"></i></a></li> -->
                    </ul>
                </div>
            </div>
            <!-- <div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div> -->
        </div>
    </div>
    <!-- Login Page End Here -->
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

</body>
</html>