<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE `parcel_registration` SET `isapprove`= 1 WHERE `p_id`=$sid;";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewparcelteam.php");
		exit();
	}
	else
	{
        echo "<script>alert('Error.')</script>";
		header("location:viewparcelteam.php");
		exit();
	}
?>