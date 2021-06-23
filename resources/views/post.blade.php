<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Template Main CSS File -->
	<link href="{{ asset("/css/style.css")}}" rel="stylesheet">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<style>
		.button {
			background: #149ddd;
			border: 0;
			padding: 10px 24px;
			color: #fff;
			transition: 0.4s;
			border-radius: 4px;
			text-decoration: none;
		}

		.button:hover {
			background: #37b3ed;
			color: #fff;
			text-decoration: none;
		}
	</style>
</head>
<body>

<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="fas fa-bars"></i></button>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

	<div class="profile">
	  <img src="{{ asset("/img/profile-img.jpg")}}" alt="" class="img-fluid rounded-circle">
	  <h1 class="text-light"><a href="/">Sam Boesjes</a></h1>
	  <div class="social-links mt-3 text-center">
		<a href="https://www.linkedin.com/in/sam-boesjes/" class="linkedin" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
		<a href="https://github.com/Siluq/" class="twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-github" ></i></a>
		<a href="https://www.instagram.com/sam.boesjes/" class="instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
		<a href="https://www.facebook.com/sam.boesjes" class="facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
		<a href="https://twitter.com/SamBoesjes" class="facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter-square"></i></a>
	  </div>
	</div>

	<nav class="nav-menu">
	  <ul>
		<li class="active"><a href="/#hero"><i class="fas fa-home"></i> <span>Home</span></a></li>
		<li><a href="/#about"><i class="fas fa-user-tie"></i> <span>About</span></a></li>
		<li><a href="/#resume"><i class="far fa-file-alt"></i> <span>Resume</span></a></li>
		<li><a href="/#portfolio"><i class="far fa-address-book"></i> Portfolio</a></li>
		<li><a href="/admin"><i class="fas fa-unlock-alt"></i>Login in</a></li>
	  </ul>
	</nav><!-- .nav-menu -->
	<button type="button" class="mobile-nav-toggle d-xl-none"><i class="fas fa-bars"></i></button>

  </div>
</header><!-- End Header -->

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<div class="section-title">
					<h2>{{ $post->title }}</h2>
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<p>{!! $post->body !!}</p>
					<br />
					<p><a class="button" href="https://samboesjes.nl/#portfolio">Back</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- ======= Footer ======= -->
	<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sam Boesjes</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{ asset("/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{ asset("/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
  <script src="{{ asset("/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{ asset("/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
  <script src="{{ asset("/vendor/counterup/counterup.min.js")}}"></script>
  <script src="{{ asset("/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{ asset("/vendor/venobox/venobox.min.js")}}"></script>
  <script src="{{ asset("/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
  <script src="{{ asset("/vendor/typed.js/typed.min.js")}}"></script>
  <script src="{{ asset("/vendor/aos/aos.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("/js/main.js")}}"></scrip

</body>
</html>