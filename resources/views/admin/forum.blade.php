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
                            <li class="nav-item"><a class="nav-link" href="/web">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/mainartikel">Article</a></li> 
                                <li class="nav-item"><a class="nav-link" href="">Diabete Analyze</a></li> 
                                 <li class="nav-item"><a class="nav-link" href="">Diet and Fitness Program</a></li> 
                                  <li class="nav-item"><a class="nav-link" href="/admin-forum">Forum</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/admin">Admin Page</a></li> 
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Forum</h2>
              
            </div>
            <div class="page_link">
              <a href="/web">Home</a>
              <a href="/admin-forum">Forum</a>
            </div>

          </div>
        </div>
      </div>
 </section>


<section class="single-post-area area-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">
           
         
       
   
    
@foreach( $forum as $forum)
<div class="single-post">
    <div>
 <div class="feature-img">
  <div class="blog_details">
    <div class="blog-author">
    <div class="media align-items-center">
        <img src="{{url('aa/img/blog/author.png')}}" alt="">
        <div class="media-body">
            <a>
                <h4>{{$forum->nama}}</h4>
            </a>
            <ul class="blog-info-link mt-3 mb-4">
            <a href="/forum-more/{{$forum->id}}" ><p>{{$forum->thread}} </p> </a>
            <ul class="blog-info-link mt-3 mb-4">
        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
        <div class="reply-btn">
       
        <a href="/forum/{{$forum->id}}/delete" class="btn-reply text-uppercase">Delete</a>

   
                        
    </div>
    </ul>

</div>
</div>
</div>                                                                  
</div>
</div>

@endforeach
</div>
</div>
</div>
</div>
</section>


</section>



























    

    


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