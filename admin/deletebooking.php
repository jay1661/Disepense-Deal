<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE parcel_booking_detail SET isactive=2 where booking_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewbooking.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>