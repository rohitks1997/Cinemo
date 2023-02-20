<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Cinemo Seat Reservation</title>

    <!-- Loading third party fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="seatingstyle.css">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="menubar.css">

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

        <!-- List of Movies Section -->
        <main class="main-content">
                <div class="page">
                    <div class="row">
                        <div class="title">
                            <h1 class="w3-center">Seating Reservation</h1>
                            <h3 class="w3-center">The Invitation</h3>
                        </div>
                        <img src="The Invitation.jpg" alt="HTML5 Icon" style="width:300px;height:300px;" class="img-center">
                    </div>


                <div class="container">
                    <ul class="showcase">
                        <li>
                            <div class="seat"></div>
                            <small>N/A</small>
                        </li>
                        <li>
                            <div class="seat selected"></div>
                            <small>Selected</small>
                        </li>
                        <li>
                            <div class="seat occupied"></div>
                            <small>Occupied</small>
                        </li>
                    </ul>

                    <div class="movie-screen">
                        <img src='screen.JPG' alt='screen' />
                    </div>

                    <div class="row-container">
                            <div class="row justify-content-center" id="standard">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                            </div>    
                            <div class="row justify-content-center" id="luxury">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                            </div>  
                            <div class="row justify-content-center" id="luxury">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                            </div>  
                                                
                    </div>
                        <h5 class='subtitle'>Standard - 500 Baht</h5>
                        <div class="row-container">
                                <div class="row justify-content-center" id="luxury">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                </div>
                                <div class="row justify-content-center" id="luxury">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                </div>
                                <div class="row justify-content-center" id="luxury">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                </div>

                                <div class="row justify-content-center" id="luxury">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                </div>

                                <div class="row justify-content-center" id="luxury">
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                        <div class="seat"></div>
                                </div>
                            <h5 class='subtitle'>Luxury - 500 Baht</h5>
                            <div class="text-center">
                                <div class="text-wrapper">
                                    <p class="text">Selected Seats <span id='count'>0</span>
                                    <p class="text">Total Price <span id="total">0</span></p>
                                </div>
                            </div>
                            <div class="btn-next">
                            <!-- Pass to the payment page according to what value? -->
                            <button onclick="document.location='payment.php'">Next</button>
                            </div>
                        </div>

                    </div>
                </div>




                <!-- <div class="text-wrapper">
        <p class="text">Selected Seats <span id='count'>0</span>
            <p class="text">Total Price ₹<span id="total">0</span></p>
    </div> -->
                <script>
                    const seat_booked = "<?php echo $_SESSION['seats_booked']; ?> ";
                    var first_row_number = parseInt("<?php echo $_SESSION['first_row_number']; ?>");
                    var first_column_number = parseInt("<?php echo $_SESSION['first_column_number']; ?>");
                    var first_seat_price = parseInt("<?php echo $_SESSION['first_seat_price']; ?>");
                    var total_first_seats = first_column_number * first_row_number;

                    var second_row_number = parseInt("<?php echo $_SESSION['second_row_number']; ?>");
                    var second_column_number = parseInt("<?php echo $_SESSION['second_column_number']; ?>");
                    var second_seat_price = parseInt("<?php echo $_SESSION['second_seat_price']; ?>");

                    //console.log("Fisrt : ", first_row_number, first_column_number, first_seat_price, );
                    //console.log("Second : ", second_row_number, second_column_number, second_seat_price);
                    //console.log("total-first-number : ", total_first_seats);
                    // Get the num list of seat_booked from php connecting to the database:

                    const array_seat_booked = seat_booked.split(",");
                    for (let i = 0; i < array_seat_booked.length; i++) {
                        var num = parseInt(array_seat_booked[i]);
                        // Make the number is the same as the seat_booked in database become occupied status (add the classname "occupied")
                        const occupiedSeats = document.getElementById(num);
                        occupiedSeats.classList.add("occupied");
                    }
                </script>
                <script src='seats-reservation.js'></script>
            </div>
        </main>
    </div>
    </main>
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