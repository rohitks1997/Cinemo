<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Cinemo Homepage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Loading third party fonts -->

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menubar.css">
	<link rel="stylesheet" href="moviecontainer.css">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
</head>


<body>

<div id="site-content">
        <header>
                <a href="" id="branding">
                <img src="Cinemo Logo.JPG" alt="logo" class="logo" width="150" padding-right="30px">
                </a> <!-- #branding -->
                <nav>
            <ul class="nav-area">
                <li><a href="homepage.html">Home</a></li>
				<li><a href="aboutpage.html">About</a></li>
				<li><a href="allmovies.html">Movies</a></li>
				<li><a href="historypage.html">History</a></li>
                <li><a href="">Log Out</a></li>
            </ul> 
        </nav>
        </header>

	</div>

<!-- Carousel -->
<div class="container">
<div id="demo" class="carousel slide" data-bs-ride="carousel">

	<!-- Indicators/dots -->
	<div class="carousel-indicators">
	  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
	  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
	  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
	</div>
	
	<!-- The slideshow/carousel -->
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="movie hall.jpg" alt="Los Angeles" width="1500" height="500">
		<div class="carousel-caption">
			<h3>Welcome to Cinemo</h3>
			<p>To know more please click this button below</p>
				<button href="aboutpage.html">About Us</button>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="cinemacounter.jpg" alt="Chicago" width="1500" height="500">
		<div class="carousel-caption">
			<h3>Movies</h3>
			<p>To explore movies please click this button below</p>
				<button href="allmovies.html">About Us</button>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="cinema branch.jpg" alt="New York" width="1500" height="500">
	  </div>
	</div>
	
	<!-- Left and right controls/icons -->
	<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon"></span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
	  <span class="carousel-control-next-icon"></span>
	</button>
  </div>
</div>
		
		<!-- Page content -->
		<main class="main-content">
			<div class="page">
			    <div class="w3-container w3-padding-32" id="latest movies">
								<div class="latestmovies">
									<h1 class="w3-center">Latest Movies</h1>
								</div>
							<div class="row">
							    <div class="movie-container">
							    </div>
							    <div class="movie-container">
							    </div>
								<div class="movie-container">
							    </div>							    
								<div class="movie-container">
							    </div>
							</div>
				<div class="w3-container w3-padding-32" id="latest movies">
								<div class="popularmovies">
									<h1 class="w3-center">Popular Movies</h1>
								</div>
							<div class="row">
									<div class="movie-container">
									</div>
								   <div class="movie-container">
								   </div>
								   <div class="movie-container">
								   </div>							    
								   <div class="movie-container">
								   </div>
							</div>
			</div>
		</main>
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
					</div>
				</div>
				<div class="colophon">Copyright 2022 Cinemo</div>
			</div> <!-- .container -->

		</footer>

		</footer>
	</div>
	<!-- Default snippet for navigation -->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

</body>

</html>