<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE history SET isactive=2 where history_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewparcelinfo.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>