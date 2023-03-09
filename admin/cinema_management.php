<?php
include('../db_connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Cinemo Cinema Management</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="table.css">
	<link rel="stylesheet" href="menubar.css">

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
					<div class="w3-container w3-padding-150" id="Menu">
					<div class="btn-back">
                        <button onclick="document.location='homepage.php'" class="back">Back</button>
                    </div>		
						<div class="title">
							<h1 class="w3-center">Cinema Management</h1>
						</div>
					</div>
					<div class="btn-addcinema">
							<button onclick="location.href='cinema_add.php'" type="button">Add Cinema</button>
					</div>
					<div class="container-fluid">
						<div class="row">
							<?php
							if (isset($_SESSION['status'])) {
								echo $_SESSION['status'];
								unset($_SESSION['status']);
							};
							?>
						</div>
            <div class="container">
						<table>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Cinema Name</th>
									<th class="text-center">Location</th>
									<th colspan="2" class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$movie = $conn->query("SELECT * FROM cinema ORDER BY cinema_name");
								while ($row = $movie->fetch_assoc()) {
								?>
									<tr>
										<td><?php echo $i++ ?></td>
										<td><?php echo ucwords($row['cinema_name']) ?></td>
										<td><?php echo ucwords($row['location']) ?></td>
										<td>
											<button type="button" name="" value="" onclick="location.href='cinema_edit.php?id=<?php echo $row['cinema_id']; ?>'">Edit</a>
					</div>
					</td>
					<td>
						<button class="delete" type="button" name="" value="" onclick="location.href='cinema_del.php?id=<?php echo $row['cinema_id']; ?>'"> Delete</a>
					</td>
					</td>
					</tr>
				<?php
								} ?>
				</tbody>
				</table>
			</div> <!-- .container -->
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

	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>