<?php
 	require('dbconnect.php');
	$aid = $_GET['id'];
	$qry="UPDATE trip SET isactive=2 where trip_id=$aid";
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