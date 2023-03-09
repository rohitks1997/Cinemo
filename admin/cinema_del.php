<?php
session_start();
require_once "../db_connect.php";

$del_id = $_GET['id'];

if (strlen($del_id)>0){
	$query = mysqli_query($conn, "DELETE FROM cinema WHERE cinema_id = $del_id");

    if($query)
    {
        $_SESSION['status'] = "Cinema data has been deleted!";
        header('location:cinema_management.php');
    }
    else{
        echo "'error! Delete opertation unsuccessful'";
	    echo "error".mysqli_error($conn);

    }
	
}
