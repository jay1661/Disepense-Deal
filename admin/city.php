<?php
	require('dbconnect.php');
	var_dump($_POST);
	$sid = $_POST['sid'];
	$cname = $_POST['cityname'];
	$date=date('y-m-d');
	$isactive = 1;
	$qry = "INSERT INTO city(state_id,cname,doi,isactive) VALUES ('".$sid."','".$cname."','".$date."',$isactive)";
	$rs = mysqli_query($conn,$qry);
	if ($rs) 
	{
		// echo "<script>alert('Insert City Success');</script>";
		echo "<script>window.location='viewcity.php';</script>";
	}
	else
	{
		// echo "<script>alert('Insert City');</script>";
		echo "<script>window.location='addcity.php';</script>";
	}
?>