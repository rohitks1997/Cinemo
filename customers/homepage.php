<?php
// Get the thailand current date
date_default_timezone_set("Asia/Bangkok");
$today = date("Y-m-d");
//echo "Current date is " . $today;
require "../db_connect.php";
// Get the current showing movies query order by latest movies!
$now_movie = $conn->query("SELECT * FROM movies WHERE release_date <= '$today' ORDER BY release_date");
// The coming soon movies query:
$coming_movie = $conn->query("SELECT * FROM movies WHERE release_date > '$today' ORDER BY release_date");


//echo "number: ".$num_coming_movie;

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Cinemo Homepage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<!-- Loading third party fonts -->

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menubar.css">
	<link rel="stylesheet" href="movie.css">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
</head>


<body>

<div id="site-content">
        <header>
                <a href="index.html" id="branding">
                <img src="Cinemo Logo.JPG" alt="logo" class="logo" width="150" padding-right="30px">
                </a> <!-- #branding -->
                <nav>
            <ul class="nav-area">
                <li><a href="homepage.php">Home</a></li>
				<li><a href="aboutpage.php">About</a></li>
				<li><a href="allmovies.php">Movies</a></li>
				<li><a href="historypage.php">History</a></li>
                <li><a href="../signout.php">Log Out</a></li>
            </ul> 
        </nav>
        </header>

	</div>


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
				<button onclick="location.href='aboutpage.php' ">About Us</button>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="cinemacounter.jpg" alt="Chicago" width="1500" height="500">
		<div class="carousel-caption">
			<h3>Movies</h3>
			<p>To explore movies please click this button below</p>
			<button onclick="location.href='allmovies.php' ">Movies</button>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="cinema branch.jpg" alt="New York" width="1500" height="500">
		<div class="carousel-caption">
		<h3>History</h3>
			<p>To explore the movies you have watched please click this button below</p>
			<button onclick="location.href='historypage.php' ">History</button>
	  	</div>
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

<main class="main-content">
			<div class="page">
			    <div class="w3-container w3-padding-32" id="latest movies">
								<div class="latestmovies">
									<h1 class="w3-center">Latest Movies</h1>
								</div>
							<div class="row">
										<div class="movie-list">
											<?php while ($row = $now_movie->fetch_assoc()) {
												// if (mysqli_num_rows($row) > 0) {}
											?>
												<div class="movie">
													<figure class="movie-poster"><a href="movie_reservation.php?id=<?php echo $row['movie_id']; ?>"><img src="<?php echo $row['cover_img'] ?>" alt="#"></a></figure>
													<div class="text-center">
														<div class="movie-title"><a style="text-decoration: none;" href="movie_reservation.php?id=<?php echo $row['movie_id']; ?>"><?php echo $row['title']; ?></a></div>
													</div>
												</div>
											<?php
											}
											?>
										</div>
							</div>
				</div>

				<div class="w3-container w3-padding-32" id="latest movies">
								<div class="latestmovies">
									<h1 class="w3-center">Upcoming Movies</h1>
								</div>
							<div class="row">
										<div class="movie-list">
											<?php while ($row = $coming_movie->fetch_assoc()) {
												// if (mysqli_num_rows($row) > 0) {}
											?>
												<div class="movie">
													<figure class="movie-poster"><a href="movie_reservation.php?id=<?php echo $row['movie_id']; ?>"><img src="<?php echo $row['cover_img'] ?>" alt="#"></a></figure>
													<div class="text-center">
														<div class="movie-title"><a style="text-decoration: none;" href="movie_reservation.php?id=<?php echo $row['movie_id']; ?>"><?php echo $row['title']; ?></a></div>
													</div>
												</div>
											<?php
											}
											?>
										</div>
							</div>
				</div>

		
</main>


		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="widget">
						</div>
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