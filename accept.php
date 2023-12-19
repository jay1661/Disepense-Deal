<?php
//require 'PHPMailer/PHPMailerAutoload.php';
require('dbconnect.php');
session_start();
$id = $_SESSION['id'];
$did = $_GET['id1'];
$date=date('y-m-d');
$isactive=1;

$qry = "SELECT * FROM parcel_booking_detail WHERE booking_id=$did";
$rs=mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$uid = $row['u_id'];
$sc = $row['source'];
$dc = $row['destination_city_id'];

$qry2 = "SELECT * FROM trip WHERE `source`=$sc AND `destination`=$dc";
$rs2=mysqli_query($conn,$qry2);
$row2 = mysqli_fetch_assoc($rs2);
$tr = $row2['trip_id'];

$update="UPDATE parcel_booking_detail SET isactive=1, trip_id=$tr, p_id=$id where booking_id='".$did."'";
$up=mysqli_query($conn,$update);

$qryu="SELECT * FROM user_registration where u_id='".$uid."'";
$rsu=mysqli_query($conn,$qryu);
$rowu=mysqli_fetch_assoc($rsu);


$qry4 = "INSERT INTO `history`(`u_id`, `d_id`, `trip_id`, `booking_id`, `Doi`, `isactive`) VALUES ('".$uid."', '".$row2['d_id']."', '".$tr."', '".$did."', '".$date."', '".$isactive."')";
$rs4 = mysqli_query($conn,$qry4);

	if($up){
		echo '<script>alert("Accapted");</script>';
	    echo '<script>window.location="parcel_profile.php";</script>';
	}
	else{
		echo '<script>alert("Error");</script>';
	    echo '<script>window.location="parcel_profile.php";</script>';
	}

?>
