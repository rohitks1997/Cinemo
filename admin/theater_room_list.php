<?php
session_start();

ini_set('display_errors', 1);
include('../db_connect.php');

$sql = "SELECT DISTINCT cinema.cinema_name,cinema.cinema_id FROM cinema JOIN theater_room";
$result = mysqli_query($conn, $sql);

?>
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
    <link rel="stylesheet" href="table.css">

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

    <!-- List of Movies Section -->
    <main class="main-content">
            <div class="page">
                <div class="row">
                <div class="btn-back">
                        <button onclick="document.location='home.php'" class="back">Back</button>
                    </div>	                    
                    <div class="title">
                        <h1 class="w3-center">Theater Room Management</h1>
                    </div>
                    <script type="text/javascript" src="../js/room.js"></script>
                    <?php
                    if (isset($_SESSION['status'])) {
                        echo $_SESSION['status'];
                        unset($_SESSION['status']);
                    };
                    ?>

                    <div class="btn-addcinema-2">
                        <button onclick="location.href='theater_room_add.php'" type="button">Add Theater Room</button>
                    </div>

                    <div class="cinema">
                        <form id="f1" method="POST">
                            <select id="get_cinema_name" name="get_cinema_name" onchange="selectcinema()">
                                <option value=""> -- Please select cinema --</option>
                                <?php
                                while ($rows = mysqli_fetch_array($result)) {
                                ?>
                                    <option id="<?php echo $rows['cinema_id']; ?>"> <?php echo $rows['cinema_name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </form>
                    </div>
                </div>

                <script>
                    // Js for get the cinema name from the selected option
                    function selectcinema() {
                        var j1 = document.getElementById('get_cinema_name').value;
                        document.getElementById("f1").submit();
                    }
                </script>

        <div class="container">
                <table class>
                    <thead>
                        <th class="text-center">Cinema name</th>
                        <th class="text-center">Theater room number</th>
                        <th class="text-center">Theater room type</th>
                        <th colspan="4" class="text-center">Action</th>
                    </thead>

                    <?php
                    // Display a table

                    if (isset($_POST["get_cinema_name"])) {
                        $p2 = $_POST["get_cinema_name"];
                        // echo $p2;
                        $sql = "SELECT * from theater_room INNER JOIN cinema ON theater_room.cinema_id = cinema.cinema_id WHERE cinema_name = '$p2'";
                        $result = mysqli_query($conn, $sql);
                        while ($rows = mysqli_fetch_array($result)) {
                    ?>
                            <tr>
                                <td><?php echo ($rows['cinema_name']) ?></td>
                                <td><?php echo ($rows['room_number']) ?></td>
                                <td><?php echo ($rows['room_type']) ?></td>
                                <td>
                                    <button type="button" name="" value="" onclick="location.href='room_schedule_list.php?id=<?php echo $rows['theater_room_id']; ?>'"> Room Schedule</a>
                                </td>
                                <td>
                                    <button type="button" name="" value="" onclick="location.href='room_template_edit.php?id=<?php echo $rows['theater_room_id']; ?>'">Edit room template</a>
                                </td>
                                <td>
                                    <button type="button" name="" value="" onclick="location.href='theater_room_edit.php?id=<?php echo $rows['theater_room_id']; ?>'">Edit</a>
                                </td>
                                <td>
                                    <button class="delete" type="button" name="" value="" onclick="location.href='theater_room_del.php?id=<?php echo $rows['theater_room_id']; ?>'"> Delete</a>
                                </td>
            </div>
            </td>
            </tr>
    <?php
                        }
                    }
    ?>
    </table>
        </div>
        </div>
        </div>
        </div>
    </main>
</body>

<script>

</script>


<script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>