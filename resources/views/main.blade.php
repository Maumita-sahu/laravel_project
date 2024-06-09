<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('public/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('public/bootstrap/css/bootstrap.bundle.min.css')}}">
	<link rel="stylesheet" href="{{url('public/css/gallery.css')}}">
	<title>photo gallery</title>
	<style>

	</style>
</head>

<body>
	<div class="container-fluid">

		<div class="row top_header2 bg-white">
			<div class="col-md-12 d-flex">
				<div class="col-md-1 meanu_logo">
					<img src="public/photoes/logo.jpg" class="imag d-block">
				</div>
				<div class="col-md-11">
					<nav class="navbar navbar-expand-lg navbar-light nv p-1">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active ml-2">
									<a class="nav-link" href="index.php">Home</a>
								</li>

								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Animal</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="#">Patient Guide</a>
										<a class="dropdown-item" href="#">Find a Doctor</a>
									</div>
								</li>

								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bird</a>

								</li>
								<li class="nav-item active">
									<a class="nav-link" href="health@home.php">Mountain</a>
								</li>
								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Flower</a>

								</li>

								<li class="nav-item active">
									<a class="nav-link" href="academic.php">Nature</a>
								</li>
								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>

								</li>
								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>

								</li>
								<li class="nav-item active">
									<a class="nav-link" href="aboutwoodland.php">AboutUs</a>
								</li>

							</ul>
							<form class="form-inline ml-3">
								<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>




								@if(Auth::guard('UserGuard')->check())
								<ul>
									<li class="nav-item dropdown active" style="list-style-type: none;">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

											

											<img src="{{url('public/photoes/defult.jpg')}}" style="height:50px;border-radius:50%;width:50px;">
											
											{{ Auth::guard('UserGuard')->user()->name }}

										</a>
										<div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="#">{{ Auth::guard('UserGuard')->user()->name }}
											<a class="dropdown-item" href="myprofile.php">My Profile</a>
											<!-- <a class="dropdown-item" href="myappointment.php">My Appointment</a> -->
										
											<a class="dropdown-item" href="{{route('Userlogout')}}"><button name="logout_user">Logout</button></a>
											
										</div>
									</li>
								</ul>
								@else
								<button type="button" class="btn  btn-round btn_submit ml-3" data-toggle="modal" data-target="#loginModal"><a href="{{route('user.login')}}">Login</a></button>

								@endif

						</div>
				</div>
				</nav>
			</div>
		</div>

		<div class="px-lg-5">
			<!-- For demo purpose -->
			<div class="row mb-4">
				<div class="col-md-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="{{url('public/photoes/carasol1.jpg')}}" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{url('public/photoes/carasol2.jpeg')}}" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="{{url('public/photoes/carasol3.jpeg')}}" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>-
				</div>
			</div>
			<!-- End -->

			<div class="row">
				<!-- Gallery item -->
				@foreach($image_data AS $key=>$data)
				<div class="col-xl-3 col-lg-4 col-md-6 mb-4">
					<div class="bg-white rounded shadow-sm show_img"><a href="{{route('animal_inner.action',$data->id)}}">
							<img src="{{url('public/image/'.$data->image)}}" alt="" class="img-fluid card-img-top"></a>
						<div class="p-4">
							<h5 class="text-center"> <a href="#" class="text-dark">{{$data->catagory_name}}</a></h5>
							<!-- <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">JPG</span></p>
              <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
            </div> -->
						</div>
					</div>

				</div>
				@endforeach
				<!-- End -->

			</div>
			<div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>
		</div>
	</div>


	
	<footer class="footer">
		<div class="container row">
			<div class="footer-col">
				<h4>company</h4>
				<ul>
					<li><a href="#">about us</a></li>
					<li><a href="#">our services</a></li>
					<li><a href="#">privacy policy</a></li>
					<li><a href="#">visit website</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>get help</h4>
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">shipping</a></li>
					<li><a href="#">returns</a></li>
					<li><a href="#">order status</a></li>
					<li><a href="#">payment options</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>online shop</h4>
				<ul>
					<li><a href="#">download</a></li>
					<li><a href="#">changelog</a></li>
					<li><a href="#">github</a></li>
					<li><a href="#">all version</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>follow us</h4>
				<div class="social-links">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{url('public/js/jquery-3.6.4.min.js')}}"></script>
	<script src="{{url('public/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{url('public/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>