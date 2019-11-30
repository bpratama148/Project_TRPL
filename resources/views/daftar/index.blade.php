

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{url('img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Sign Up</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{url('bb/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/slider.min.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/pweb.css')}}">
	<link rel="stylesheet" href="{{url('bb/css/main.css')}}">
</head>

<body>
		
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{url('bb/img/regis.jpg')}}" alt="">
						<div class="hover">
							<h4>Already Have an Account?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="/login">Sign In</a>
						</div>
						
					</div>
				</div>

				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>SIgn Up</h3>
						<form action="/daftar" class="row login_form"  method="POST" >

					   {{csrf_field()}}
					   <div class="col-md-12 form-group">
								<input type="text" class="form-control"  name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control"  name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control"   name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
							</div>
							<div class="col-md-12 form-group">
								
									
								</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="Login" class="primary-btn">Sign Up</button>
								
								<a href="/">Back</a>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	
	<!-- End footer Area -->


	<script src="{{url('bb/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{url('bb/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.sticky.js')}}"></script>
	<script src="{{url('bb/js/nouislider.min.js')}}"></script>
	<script src="{{url('bb/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('bb/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{url('bb/js/gmaps.min.js')}}"></script>
	<script src="{{url('bb/js/main.js')}}"></script>
</body>

</html>