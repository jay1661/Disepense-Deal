<?php
//require 'PHPMailer/PHPMailerAutoload.php';
require('dbconnect.php');
session_start();
$id = $_SESSION['id'];
$did = $_GET['id3'];

    $qry1 = "UPDATE `history` SET `d_col`=1 WHERE `booking_id`=$did";
    $rs1=mysqli_query($conn,$qry1);

	$qry2 = "UPDATE `parcel_booking_detail` SET `shiped`=1 WHERE `booking_id`=$did";
    $rs2=mysqli_query($conn,$qry2);

	if($rs1 && $rs2){
		echo '<script>alert("Accapted");</script>';
	    echo '<script>window.location="parcel_profile.php";</script>';
	}
	else{
		echo '<script>alert("Error");</script>';
	    echo '<script>window.location="parcel_profile.php";</script>';
	}

?>
