<?php
	require('dbconnect.php'); 
	session_start();
	var_dump($_POST);
	if (!isset($_POST["btn_d"])) 
	{
		header("location:driverlogin.php");
		exit();
	}

	$us = $_POST['email'];
	$ps = md5($_POST['pass']);
	$qry = "SELECT * FROM driver_registration WHERE d_email='".$us."' AND d_password= '".$ps."' AND `isactive`=1 AND `isapprove`=1";

	// echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0) 
	{
		$row = mysqli_fetch_assoc($rs);
		$id = $row['d_id'];
		$fn = $row['d_name'];
		$_SESSION['id'] = $id;
		$_SESSION['fn'] = $fn;
		$_SESSION['user'] = 0;
		$_SESSION['admin'] = 0;
		$_SESSION['driver'] = 1;
		$_SESSION['parcel'] = 0;
		if (isset($_POST['remember'])) 
		{
			setcookie("user",$us,time() + (86400), "/");
			setcookie("pass",$ps,time() + (86400), "/");
		}
	header("location:driver_profile.php");
	exit();
	}
	else
	{
		echo "<script>alert('Error.')</script>";
		echo "<script>window.location='driverlogin.php'</script>";
		exit();
	}
?>