<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE `driver_registration` SET `isapprove`= 1 WHERE `d_id`=$sid;";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewdriver.php");
		exit();
	}
	else
	{
        echo "<script>alert('Error.')</script>";
		header("location:viewdriver.php");
		exit();
	}
?>