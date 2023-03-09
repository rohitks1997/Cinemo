<?php
require_once "../db_connect.php";

if (isset($_GET['cinema_id']) && isset($_POST['editForm'])) {
    $cinema_id = $_GET['cinema_id'];
    $cinema_name = $_POST['cinema_name'];
    $location = $_POST['location'];

    $updatesql = "UPDATE `cinema` SET 
                                `cinema_name`= '$cinema_name',
                                `location`= '$location'
                                WHERE cinema_id = '$id'";
    mysqli_query($conn, $updatesql);
    header('location:cinema_management.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Cinemo Cinema Management</title>

	<!-- Loading third party fonts -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menubar.css">
	<link rel="stylesheet" href="../css/backbutton.css">

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
                <li><a href="../signout.php">Log Out</a></li>
            </ul> 
        </nav>
        </header>

    </div>

		<?php
		require_once "../db_connect.php";

		$id = $_GET['id'];
		$movie = $conn->query("SELECT * FROM cinema WHERE cinema_id = $id");

		if ($movie->num_rows != 1) {
			// redirect to show page
			header('location:cinema_management.php');
			print_r($id);
			die('id is not in db');
		}
		$data = $movie->fetch_assoc();
		// print_r($data);

		?>


		<!DOCTYPE html>
		<html lang="en">
		<!-- Page content -->
		<!-- List of Movies Section -->
		<main class="main-content">
			<div class="container">
				<div class="page">
					<div class="row">
					<div class="btn-back">
                        <button onclick="document.location='cinema_management.php'" class="back">Back</button>
                    </div>	
						<body>
							<div class>
							</div>
							<div class>
								<div class>
									<form action="cinema_management.php?id=<?= $id ?>" method="POST">
										<h1 class="w3-center">Edit Cinema Infromation</h1>
										<div class="form-group" style="text-align: center; padding-left:15px">
											<label for="cinema_name" class="col-1 col-form-control">Cinema Name</label>
											<input type="text" class="form-control" name="cinema_name" id="cinema_name" value="<?= $data['cinema_name'] ?>">
										</div>
										<div class="form-group" style="text-align: center; padding-left:20px">
											<label for="location" class="col-1 col-form-control">Cinema Location</label>
											<input type="text" class="form-control" name="location" id="location" value="<?= $data['location'] ?>">
										</div>
										<div class="text-center">
											<button class="submit" type="submit" name="editForm" value="submit">Submit</button>
										</div>
									</form>
								</div> <!-- .container -->

							</div> <!-- .container -->
					</div>
				</div>
			</div>
		</main>

</body>

</html>