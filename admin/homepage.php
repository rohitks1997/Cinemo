<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Cinemo Theater Owner Homepage</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menubar.css">

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
                <li><a href="../signout.php">Log Out</a></li>
            </ul> 
        </nav>
        </header>

	</div> <!-- .main-navigation -->

	<!-- Page content -->
	<!-- Page content -->

	<!-- List of Movies Section -->
	<main class="main-content">
			<div class="page">
				<div class="row">
					<div class="w3-container w3-padding-32" id="latest movies">
						<div class="title">
							<h1 class="w3-center">Feature Menu</h1>
							<h4 class="w3-center">Please Select the button</h4>
						</div>
						<div class="text-center">
							<div class="btn-group">
								<button onclick="document.location='cinemamanagement.php'">Cinema Management</button>
								<button onclick="document.location='theaterroommanagement.php'">Theater Room Management</button>
								<button onclick="document.location='moviemanagement.php'">Movie Management</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>


	</div> <!-- .container -->

	</div> <!-- .container -->

	</footer>
	</div>
	<!-- Default snippet for navigation -->



	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/app.js"></script>

</body>

</html>