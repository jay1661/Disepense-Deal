<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE state SET isactive=2 where state_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewstate.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>