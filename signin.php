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
    <link rel="stylesheet" href="css/signinpage.css"> 
    <link rel="stylesheet" href="link.css"> 

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
</head>

<div class="center">
    <div class="row">
        <div class="col-lg-5">
            <img src="images/Cinemo Logo (No Background).png" class="avatar" alt="" width="400">
        </div>
    <div class="col-lg-7">
        <form action="signin-check.php" method="post">
            <div class="signin">
            <h3>Please Sign-In</h3>
            </div>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <div class="username">
                <b>Username</b>
            </div>
            <input type="text" name="uname" placeholder="User Name"><br>
            <div class="password">
                <b>Password</b>
            </div>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <div class="login">
                 <button type="submit">Login</button>
                <br></br>
            </div>   
            <div class="signin_link">
                <span>Don't have an account? <a style="text-decoration:none" href="signup.php">Sign Up</a></span>
            </div>
            <div class="signin_link_2">
                <a style="text-decoration:none" href="admin/signin.php">Admin</a>
            </div>
        </form>
    </div>
</div>


<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/app.js"></script>


</body>

</html>
