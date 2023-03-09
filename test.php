<?php
session_start();
include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Cinemo Homepage</title>

	<!-- Loading third party fonts -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menubar.css">
	<link rel="stylesheet" href="title.css">

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
                <li><a href="home.php">Home</a></li>
				<li><a href="aboutpage.php">About</a></li>
				<li><a href="allmovies.php">Movies</a></li>
				<li><a href="historypage.php">History</a></li>
                <li><a href="../signout.php">Log Out</a></li>
            </ul> 
        </nav>
        </header>

	</div>

		<!-- .main-navigation -->

		<!-- Page content -->
		<!-- List of Movies Section -->
		<main class="main-content">
				<div class="page">
					<div class="row">
						<div class="w3-container w3-padding-32">
							<div class="title">
								<h1 class="w3-center">Movies</h1>
								<?php
								if (isset($_SESSION['status'])) {
									echo $_SESSION['status'];
									unset($_SESSION['status']);
								};
								?>
							</div>
							<div class="movie-list">
								<?php
								$i = 1;
								$movie = $conn->query("SELECT * FROM movies ORDER BY release_date");
								while ($row = $movie->fetch_assoc()) {
								?>
									<div class="movie">
										<figure class="movie-poster"><a href="movie_reservation.php?id=<?php echo $row['movie_id']; ?>"><img src="images/<?php echo $row['cover_img'] ?>" alt=""></a></figure>
										<div class="text-center">
											<div class="movie-title"><a style="text-decoration: none;" href="movie_reservation.php?id=<?php echo $row['movie_id']; ?>"><?php echo ucwords($row['title']) ?></a></div>
										</div>
									</div>

								<?php
								} ?>
							</div> <!-- .movie-list -->
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
	<!-- Default snippet for navigation -->



	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/app.js"></script>

</body>

</html>