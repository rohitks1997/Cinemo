<?php
session_start();
require "../db_connect.php";
$payer_id = $_SESSION['userid'];
// echo "User id" . $_SESSION['userid'];
// $newDate = date("Y-m-d", strtotime($_POST['exptime']));
// echo "ss" . $_POST['exptime'];
if (isset($_POST['sendpayment'])) {
	$rooom_schedule_id = $_GET['id'];
	$price = $_POST['totalprice'];
	$seats_chosen = $_POST['seatschosen'];
	$email = $_POST['email'];
	$payer_name = $_POST['cardname'];
	$payer_card_number = $_POST['cardnumber'];
	$card_exp = date("Y-m-d", strtotime($_POST['exptime']));
	$cvv = $_POST['cvv'];

	$addsql = "INSERT INTO `payment`( `payer_id`, `room_schedule_ID`, `seat_chosen`, `total_price`, `payer_name`, `payer_email`, `payer_card_number`, `card_exp`, `CVV`, `payment_status`) 
	VALUES ('$payer_id','$rooom_schedule_id','$seats_chosen','$price','$payer_name','$email','$payer_card_number','$card_exp','$cvv','completed')";
	$query_run = mysqli_query($conn, $addsql);

	if ($query_run) {
		$_SESSION['messages'] = "Payment Successfully";
		$last_id = $conn->insert_id;
		$book_history = "INSERT INTO `book_history`(paymentID,payment_Status) VALUES ($last_id,'completed')";
		header("location:home.php");
	} else {
		$_SESSION['errors'] = "error!!!!";
		header("location:payment.php?id=$room_schedule_id");
	}
}
