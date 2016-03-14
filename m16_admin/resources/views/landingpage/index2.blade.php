<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>M16 District - Home</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/linea-icon.css') }}" />
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/fancy-buttons.css') }}" />
	
	<!--=== Google Fonts ===-->
	<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:600,400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<!--=== Other CSS files ===-->
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/jquery.vegas.css') }}" />
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/jquery.bxslider.css') }}" />
	
	<!--=== Main Stylesheets ===-->
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('landingpage_asset/css/responsive.css') }}" />
	
	<!--=== Color Scheme, three colors are available red.css, orange.css and gray.css ===-->
	<link rel="stylesheet" id="scheme-source" href="{{ asset('landingpage_asset/css/schemes/gray.css') }}" />
	
	<!--=== Internet explorer fix ===-->
	<!-- [if lt IE 9]>
		<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif] -->
	
	
</head>
<body>
	<!--=== Preloader section starts ===-->
	<section id="preloader">
		<div class="loading-circle fa-spin"></div>
	</section>
	<!--=== Preloader section Ends ===-->
	
	<!--=== Header section Starts ===-->
	<div id="header" class="header-section">
		<!-- sticky-bar Starts-->
		<div class="sticky-bar-wrap">
			<div class="sticky-section">
				<div id="topbar-hold" class="nav-hold container">
					<nav class="navbar" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<!--=== Site Name ===-->
						</div>
						
						<!-- Main Navigation menu Starts -->
						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="current"><a href="#header">M16</a></li>
								<li><a href="#section-aboutus">About Us</a></li>	
								<li><a href="#section-events">What's On!</a></li>
								<li><a href="#section-location">Location</a></li>
							</ul>
						</div>
						<!-- Main Navigation menu ends-->
					</nav>
				</div>
			</div>
		</div>
		<!-- sticky-bar Ends-->
		<!--=== Header section Ends ===-->
		
		<!--=== Home Section Starts ===-->
		<div id="section-home" class="home-section-wrap center">
			<div class="section-overlay"></div>
			<div class="container home">
				<div class="row">
					<h1 class="well-come"><img src="{{ asset('landingpage_asset/images/_m16logo.png') }}"></h1>
					
					<div class="col-md-12">
						<p class="intro-message">One Stop Entertainment, <i>where all your needs will be fulfilled<i></p>
						
						<div class="col-md-12">					
							<a href="#">
								<img src="{{ asset('landingpage_asset/images/_subhausLogo.png') }}">
							</a>
							<a href="#">		
								<img src="{{ asset('landingpage_asset/images/_fluxLogo.png') }}">
							</a>		
							<a href="#">		
								<img src="{{ asset('landingpage_asset/images/_monroeLogo.png') }}">
							</a>
							<br><br>
							<a href="#">
								<img src="{{ asset('landingpage_asset/images/_pitstopLogo.png') }}">
							</a>
							
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--=== Home Section Ends ===-->
	</div>

	<!--=== aboutus section Starts ===-->
	<section id="section-aboutus" class="aboutus-wrap">
		<div class="container aboutus center">
			<div class="row">
				<div class="col-lg-12">
					<h1>About Us</h1>	
				</div>
			</div>
		</div>
	</section>
	<!--=== aboutus section Ends ===-->
		
	<!--=== events section Starts ===-->
	<section id="section-events" class="events-wrap">
		<div class="container events center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Events</h1>	
				</div>
			</div>
		</div>
	</section>
	<!--=== events section Ends ===-->
	
	<!--=== location section Starts ===-->
	<section id="section-location" class="location-wrap">
		<div class="container location center">
			<div class="row">
				<div class="col-lg-12">	
					<h1>Location</h1>
				</div>
			</div>
		</div>
	</section>
	<!--=== location section Ends ===-->
		
	<!--=== Footer section Starts ===-->
	<div id="section-footer" class="footer-wrap">
		<div class="container footer center">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="footer-title"><!-- Footer Title -->
						<a class="site-name" href="#"><img src="{{ asset('landingpage_asset/images/_m16logo-s.png') }}"></a>
					</h4>
					
					<!-- Social Links -->
					<div class="social-icons">
						<ul>
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
							<li><a href="#"><i class="fa fa-flickr"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
					</div>
					
					<p class="copyright">All rights reserved &copy; 2016</p>
				</div>
			</div>
		</div>
	</div>
	<!--=== Footer section Ends ===-->
	
<!--==== Js files ====-->
<!--==== Essential files ====-->
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/bootstrapValidator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.easing.1.3.js') }}"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.baraja.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.vegas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.bxslider.min.js') }}"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.ajaxchimp.min.js') }}"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.nav.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.appear.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage_asset/js/jquery.fitvids.js') }}"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="{{ asset('landingpage_asset/js/custom.js') }}"></script>

</body>
</html>