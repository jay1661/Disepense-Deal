<?php
//require 'PHPMailer/PHPMailerAutoload.php';
require('dbconnect.php');
session_start();
$id = $_SESSION['id'];
$did = $_GET['id'];

    $qry1 = "UPDATE `history` SET `d1_col`=1 WHERE `booking_id`=$did";
    $rs1=mysqli_query($conn,$qry1);

	if($rs1){
		echo '<script>alert("Collected");</script>';
	    echo '<script>window.location="driver_profile.php";</script>';
	}
	else{
		echo '<script>alert("Error");</script>';
	    echo '<script>window.location="driver_profile.php";</script>';
	}

?>
