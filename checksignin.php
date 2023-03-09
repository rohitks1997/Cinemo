<?php
session_start();
require_once "db_connect.php";

$_SESSION['A']='ABC';
echo $_SESSION['A'];
if (isset($_POST['adminLogin'])) {
    $username = $_POST['username'];
    $password = md5($_POST['psw']);
    //echo $username;
    //echo $password;
    $sql = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password' AND `role` = 'admin';";
    $sql_run = mysqli_query($conn, $sql);
    $row = $sql_run->fetch_assoc();
    if (mysqli_num_rows($sql_run) > 0) {
        $_SESSION["userid"] = $row["user_id"];
        $_SERVER["auth"] = "true";
        $_SESSION["userName"] = $row['name'] . "  " . $row['surname'];
        $_SESSION["userrole"] = $row['role'];
        //echo "user id is: ".$_SESSION['userid']; 
        //echo "Admin Login successfully";
        header('location:admin/homepage.php');
    } else {
        $_SESSION["errors"] = "Username or password is incorrect!";
        header('location:signin.php');
        //echo "Admin Failed successfully";
    }
} elseif (isset($_POST['customerLogin'])) {
    $username = $_POST['username'];
    $password = md5($_POST['psw']);
    //echo $username;
    //echo $password;
    $sql = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password' AND `role` = 'customer';";
    $sql_run = mysqli_query($conn, $sql);
    $row = $sql_run->fetch_assoc();
    if (mysqli_num_rows($sql_run) > 0) {
        $_SESSION["userid"] = $row['user_id'];
        $_SERVER["auth"] = "true";
        $_SESSION["userName"] = $row['name'] . "  " . $row['surname'];
        $_SESSION["userrole"] = $row['role'];
        //echo "user id is: ".$row['user_id']; 
        header('location:customer/homepage.php');
        //echo "customer Login successfully";
    } else {
        $_SESSION["errors"] = "Username or password is incorrect!";
        header('location:signin.php');
        //echo "Admin Failed successfully";
    }
}
