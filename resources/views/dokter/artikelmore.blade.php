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
                            <li class="nav-item"><a class="nav-link" href="/dokter">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/dokter-artikel">Article</a></li> 
                                <li class="nav-item"><a class="nav-link" href="/">Diabete Analyze</a></li> 
                                 <li class="nav-item"><a class="nav-link" href="/">Diet and Fitness Program</a></li> 
                                  <li class="nav-item"><a class="nav-link" href="/">Forum</a></li> 
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
                                    
                                </ul>
                            </li> 
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <!--================Home Banner Area =================-->
 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Article</h2>
              <p>{{ $artikel->judul }}</p>
            </div>
            <div class="page_link">
              <a href="/dokter">Home</a>
              <a href="/dokter-artikel">Article</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================End Home Banner Area =================-->


    <!--================ Feature section start =================-->      
    
    
    <!-- ================ testimonial section end ================= -->    

    <!-- ================ Hotline Area Starts ================= -->  
    
    <!-- ================ Hotline Area End ================= -->  
   <section class="blog_area single-post-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mb-5 mb-lg-0 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="card-img rounded-0" src="{{url('images/'.$artikel->gambar) }}" alt="">
                    </div>

<div class="blog_details">
    <h2>{{ $artikel->judul}}</h2>
 
    <p class="excert">
       {{$artikel->konten}}
    </p>
    


    
</div>
</div>

               
              </section>



    
    <!--================ End Brands Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area area-padding-top">
        <div class="container">
            <div class="row">
                
                
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
           
        </div>
    </div>
</footer>
<!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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