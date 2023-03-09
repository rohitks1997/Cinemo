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

    <?php
    session_start();
    require_once "../db_connect.php";

    if (isset($_POST["submit"])) {
        $cinema_name = $_POST['cinema_name'];
        $location = $_POST['location'];
        $cinema_id = 0;

        $addsql = "INSERT INTO cinema (cinema_id, cinema_name, location) 
                        VALUES ('$cinema_id','$cinema_name', '$location' )";
        $query_run = mysqli_query($conn, $addsql);
        $cinema_id = mysqli_insert_id($conn);
        if ($query_run) {
            $_SESSION['status'] = "New cinema infromation has been added!";
            header('location:cinema_management.php');
        } else {
            echo "'error! Add opertation unsuccessful'";
            echo "error" . mysqli_error($conn);
        }
    }
    ?>

    <!-- Page content -->

    <!-- List of Movies Section -->
    <main class="main-content">
        <div class="container">
            <div class="page">
                <div class="row">
					<div class="btn-back">
                        <button onclick="document.location='homepage.php'" class="back">Back</button>
                    </div>	                    
                    <form method="POST" action="cinema_add.php" , enctype="">
                        <table>
                            <h2 class="w3-center">New Cinema Infomation<h2>
                                    <tr>
                                        <th class="text-center">New Cinema Name</th>
                                        <th class="text-center">Location</th>
                                    </tr>
                                    <tbody id="tbody">
                                        <tr>
                                            <td><input type='text' name='cinema_name'></td>
                                            <td><input type='text' name='location'></td>
                                        </tr>
                                    </tbody>
                        </table>
                        <div class="text-center">
                            <button type="submit" name="submit" value="Add">Add</button>
                        </div>
                    </form>

                </div> <!-- .container -->

            </div> <!-- .container -->
        </div>
    </main>

</body>

</html>
<script>

</script>