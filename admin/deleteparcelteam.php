<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE parcel_registration SET isactive=2 where p_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewparcelteam.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>