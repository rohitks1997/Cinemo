<?php
session_start();
require_once "../db_connect.php";
if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];

    // Check whether img file upload
    if (isset($_FILES['pp']['name'])) {
        $img_name = $_FILES['pp']['name'];
        $tmp_name = $_FILES['pp']['tmp_name'];
        $id = 0;

        // For img extensions
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_to_lc = strtolower($img_ex);
        // Extensions list
        $allowed_exs = array('jpg', 'jpeg', 'png');

        if (in_array($img_ex_to_lc, $allowed_exs)) {
            $new_img_name =  uniqid($id, true).'.' . $img_ex_to_lc;
            $img_upload_path = 'images/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            // echo $title,$genre,$description,$release_date;
            // ADD to Database

            $addsql = "INSERT INTO movies (movie_id, title,Genre, cover_img, description, release_date) 
                        VALUES ('$id','$title', '$genre' ,'$new_img_name', '$description','$release_date')";
            $query_run = mysqli_query($conn, $addsql);
            $id = mysqli_insert_id($conn);
            if($query_run)
    {
        $_SESSION['status'] = "New movie infromation has been added!";
        header('location:moviemanagement.php');
    }
    else{
        echo "'error! Add opertation unsuccessful'";
	    echo "error".mysqli_error($conn);

    }
            
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Cinemo Movie Management</title>

    <!-- Loading third party fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menubar.css">
    <link rel="stylesheet" href="../css/backbutton.css">

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




    <!-- Page content -->
    <form method="POST" action="movie_add.php" , enctype="multipart/form-data">
        <!-- List of Movies Section -->
        <main class="main-content">
            <div class="container">
                <div class="page justify-content-center">
					<div class="btn-back">
                    <button onclick="document.location='moviemanagement.php'" class="back">Back</button>
                    </div>	
                        <div class="title">
                            <h1 class="w3-center">New movie information Form</h1>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center; ">
                        <label for="title" class="col-1 col-form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Movie Name">
                    </div>
                    <div class="form-group" style="text-align: center; ">
                        <label for="genre" class="col-1 col-form-label">Genre</label>
                        <input type="text" style="padding-left:15px" class="form-control" name="genre" id="genre" placeholder="Genre">
                    </div>
                    <div class="form-group-row" style=" text-align: center;  padding:center">
                        <label for="cover_img" class="col-form-label">Cover_img</label>
                        <input type="file" class="form-control-file" name="cover_img" id="cover_img" >
                            <br></br>
                    </div>
                    <div class="form-group" style="text-align: center;  padding-right:80px">
                        <label for="description" class="col-1 col-form-label">Description</label>
                        <textarea class="form-group-row" name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group" style="text-align: center;  padding-right:80px">
                        <label for="release_date" class="col-form-label">Release Date</label>
                        <input type="date" name="release_date" id="release_date" >
                    </div>
                    <div class="w3-center">
                    <button type="submit" name="submit" value="add">Add</button>
                    </div>
                </div>
            </div>
        </main>
    </form>
</body>
<script>

</script>