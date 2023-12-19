<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE `trip` SET isactive=1 where trip_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewtrip.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>