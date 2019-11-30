<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{url('aa/img/favicon.png')}}" type="{{url('aa/image/png')}}">
    <title>Diabetes Analyze</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('aa/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('aa/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('aa/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('aa/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('aa/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('aa/vendors/animate-css/animate.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{url('aa/css/style.css')}}">
    <link rel="stylesheet" href="{{url('aa/css/responsive.css')}}">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/"><img src="{{url('aa/img/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="/pengguna">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/pengguna-artikel">Article</a></li> 
                                <li class="nav-item"><a class="nav-link" href="/pengguna-diagnosa">Diabete Analyze</a></li> 
                                <!--  <li class="nav-item"><a class="nav-link" href="/pengguna">Diet and Fitness Program</a></li>  -->
                                  <li class="nav-item"><a class="nav-link" href="/pengguna-forum">Forum</a></li> 
                              <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href=/pengguna>Profile</a></li>
                                     <li class="nav-item"><a class="nav-link" href="{{route('mypost', Auth::user()->name  ) }}"  >My Post</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                                    
                                </ul>
                            </li> 
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>


@yield('container')

    <script src="{{url('aa/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{url('aa/js/popper.js')}}"></script>
<script src="{{url('aa/js/bootstrap.min.js')}}"></script>
<script src="{{url('aa/js/stellar.js')}}"></script>
<script src="{{url('aa/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{url('aa/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{url('aa/js/waypoints.min.js')}}"></script>
<script src="{{url('aa/js/mail-script.js')}}"></script>
<script src="{{url('aa/js/contact.js')}}"></script>
<script src="{{url('aa/js/jquery.form.js')}}"></script>
<script src="{{url('aa/js/jquery.validate.min.js')}}"></script>
<script src="{{url('aa/js/mail-script.js')}}"></script>
<script src="{{url('aa/js/theme.js')}}"></script>
</body>
</html>