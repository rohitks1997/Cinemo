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
		<link rel="stylesheet" href="payment.css">

		
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
                <li><a href="homepage.php">Home</a></li>
				<li><a href="aboutpage.php">About</a></li>
				<li><a href="allmovies.php">Movies</a></li>
				<li><a href="historypage.php">History</a></li>
                <li><a href="../signin.php">Log Out</a></li>
            </ul> 
        </nav>
        </header>

	</div>
		
 <!-- .main-navigation -->

          <!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">
  <!-- List of Movies Section -->
  <main class="main-content">
					<div class="page">
						<div class="row">
						<div class="title">
                    <h3 class="w3-center">Cinema 1</h3>
					</div>
					<img src="The Invitation.jpg" alt="HTML5 Icon" style="width:300px;height:300px;">
					<div class="col">
						<h3 class="w3-center">Ticket Information</h3>
						<div class=w3-center>
                        <h4>Date</h4>
						<div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required" style="width:160px"></div>
						</div>
						<div class=w3-center>
						<h4>Time</h4>
						<input type="text" id="cname" name="cardname" placeholder="" style="width:160px">
						</div>
						<div class=w3-center>
                        <h4>Seat</h4>
					<input type="text" id="cname" name="cardname" placeholder="" style="width:160px">
					</div>
</div>
</div>
<div class="col-50">
    <h3>Invitation</h3>
	<div class="container mt-5 px-5">

<div class="w3-center">
	<h2>Payment</h2>	
</div>


<div class="row">

<div class="col-md-15">
	

	<div class="card p-3">


		<h6 class="text-uppercase">Payment details</h6>
		<div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Full Name</span> </div>
		<div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Email</span> </div>

		<div class="row">

			<div class="col-md-10">

				<div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 


				</div>
				

			</div>

			<div class="col-md-15">

				 <div class="d-flex flex-row">


					 <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>

				  <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>
					 

				 </div>
				

			</div>
			

		</div>
				
			</div>

		</div>

	</div>


	<div class="w3-center">
				<button class="btn btn-success px-3">Pay</button>
			</div>

</div>

<div class="col-md-15">
		
	</div>
	
</div>

</div>


</div>

				</div> <!-- .container -->
		</div>
		<!-- Default snippet for navigation -->
		
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
					</div>
				</div>
				<div class="colophon">Copyright 2022 Cinemo</div>
			</div> <!-- .container -->

		</footer>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>