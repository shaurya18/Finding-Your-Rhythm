<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Music taste </title>

	<!-- *********Loading  fonts ***********-->
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	<!--***************** Loading css styles *****************-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

	<div class="jumbotron home home-fullscreen" id="home">
		<div class="mask"></div>
		<a href="#" class="logo">
			<img src="img/logo.png" alt="Logo"  style="margin-top: 50px;">
			
		</a>
		<a href="" class="menu-toggle" id="nav-expander">
		<i class="fa fa-bars"></i>
		</a>
		
		
		<!-- Offsite navigation -->
		<nav class="navbar navbar-inverse"   style="margin-top: -50px;">
		
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FINDING YOUR RHYTHM</a>
    </div>
    <div>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
		<div class="container">
			<div class="header-info">
				<h1>FINDING YOUR RHYTHM</h1>
				<p>Find the music you love. Discover new tracks.<br>
                           Share with your friends.
				</p>
				<a href="generic.php" class="btn btn-primary">ABOUT US</a>
			</div>
		</div>
	</div>
	
	<!-- Services section start -->
	
	<section id="services">
		<div class="container">
  <h2>Responsive Embed</h2>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/iAmybbwQrl0"></iframe>
  </div>
</div>

	</section>
	
	
	<!-- Services section end -->
	<!-- Portfolio section start -->
	
	<section id="portfolio" class="darker">
	     <div class="container">
			<header>
				<h2>Gallery</h2> 
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img\projects\633x422.jpg" alt="Chania" width="1500" height="345"  align="center">
    </div>

    <div class="item">
      <img src="img\projects\backstreet_boys_music_photos_free_desktop_hd_wallpaper.jpg" alt="Chania" width="1500" height="345"  align="center">
    </div>

    <div class="item">
      <img src="img\projects\I16A4366.jpg" alt="Flower"  width="1500" height="345" align="center">
    </div>

    <div class="item">
      <img src="img\projects\old_nacky_backstreet_boys.jpg" alt="Flower"  width="1500" height="345" align="center">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</header>
		</div>
	</section>
	<!-- Portfolio section end -->
	<!-- Contact section start -->
	<section id="contact">
		<div class="container">
			<header>
				<h2>Get in Touch</h2>
				
			</header>
			<div class="map-wrapper">
				<div class="map-canvas" id="map-canvas">Loading map...</div>
				<div class="marker">
					<span>We Are Here</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<form class="row" action="feedback.php"   method="post">
						<div class="form-group col-md-6">
							<input name="name" type="text" placeholder="Your Name" class="form-control" required />
						</div>
						<div class="form-group col-md-6">
							<input name="mail" type="email" placeholder="Your Email" class="form-control"required />
						</div>
						<div class="form-group col-md-12">
							<textarea name="message" class="form-control" rows="10" placeholder="Message"required></textarea>
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-lg btn-primary">Send</button>
						</div>
					</form>
				</div>
				
				
				
				
				
				<div class="col-md-3 col-md-offset-1">
					<address>
						<span>Our Address</span>
						<p>
						A-10, Sector-62, Noida,<br> Uttar Pradesh 201307
						<br>
                          India						
						</p>
					</address>
					<address>
						<span>Email</span>
						      
									
					</address>
					<address>
						<span>Phone</span>
						<p>+91-97117838225 <p>
					</address>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
	<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
				</div>
				<div class="col-md-4">
					<ul class="social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-behance"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end  -->

	<!-- Load jQuery -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Load custom js for theme -->
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>