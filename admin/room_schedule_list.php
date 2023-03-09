<?php
session_start();
require_once "../db_connect.php";
$theater_room_id = $_GET['id'];

// Get a query that includes movie title, movie id and all data in movie schedule accroding to theater_room_id(=room_schedule.theater_room_idd)
$schedule = "SELECT theater_room.theater_room_id,room_schedule.*,movies.movie_id,movies.title FROM room_schedule JOIN theater_room,movies 
WHERE theater_room.theater_room_id = room_schedule.theater_room_idd AND room_schedule.movie_idd = movies.movie_id AND room_schedule.theater_room_idd = $theater_room_id
ORDER BY room_schedule.movie_showdate";
$result = mysqli_query($conn, $schedule);

$room = "SELECT * FROM cinema JOIN theater_room 
WHERE theater_room.theater_room_id = $theater_room_id AND cinema.cinema_id = theater_room.cinema_id";
$result2 = mysqli_query($conn, $room);
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
    <link rel="stylesheet" href="../css/btn-addcinema.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/backbutton.css">

</head>


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
                <button onclick="document.location='theater_room_list.php'" class="back">Back</button>
            </div>	 
                <div class="title">
                    <h1 class="w3-center">Room Schedule</h1>
                </div>
                <!-- Here can load the cinema name and theater room accroding to the theater room id-->
                <h4><?php while ($r = mysqli_fetch_array($result2)) {
                                    echo $r['cinema_name']; ?></h4>
                <h2>Room number: <?php echo $r['room_number'];
                                } ?></h2>
                <?php
                if (isset($_SESSION['status'])) {
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                };
                ?>
                <div class="btn-addcinema-2">
                    <button name="" value="" onclick="location.href='room_schedule_add.php?id=<?php echo $theater_room_id ?>'">Add schedule</button>
                </div>
    <div class="container">
                <table>
                    <thead>
                        <th class="text-center">Movie name</th>
                        <th class="text-center">Movie show date</th>
                        <th class="text-center">Movie show time</th>
                        <th colspan="3" class="text-center">Action</th>
                    </thead>
                    <?php
                    while ($rows = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $rows['title']; ?>
                            </td>
                            <td>
                                <?php echo $rows['movie_showdate'] ?>
                            </td>
                            <td>
                                <?php echo $rows['movie_showtime'] ?>
                            </td>
                            <td>
                                <button class="delete" type="button" name="" value="" onclick="location.href='room_schedule_del.php?id=<?php echo $rows['room_schedule_id'] ?>'">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>
    </div>
</main>

</html>

<script>
</script>