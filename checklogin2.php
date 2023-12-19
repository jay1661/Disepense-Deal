<?php
	require('dbconnect.php'); 
	session_start();
	var_dump($_POST);
	if (!isset($_POST["btn_d"])) 
	{
		header("location:parcellogin.php");
		exit();
	}

	$us = $_POST['email'];
	$ps = md5($_POST['pass']);
	$qry = "SELECT * FROM parcel_registration WHERE p_email='".$us."' AND p_password= '".$ps."' AND isactive=1 AND isapprove =1";

	// echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0) 
	{
		$row = mysqli_fetch_assoc($rs);
		$id = $row['p_id'];
		$fn = $row['p_name'];
		$_SESSION['id'] = $id;
		$_SESSION['fn'] = $fn;
		$_SESSION['user'] = 0;
		$_SESSION['admin'] = 0;
		$_SESSION['driver'] = 0;
		$_SESSION['parcel'] = 1;
		if (isset($_POST['remember'])) 
		{
			setcookie("user",$us,time() + (86400), "/");
			setcookie("pass",$ps,time() + (86400), "/");
		}
	header("location:parcel_profile.php");
	exit();
	}
	else
	{
		echo "Login Error";
		exit();
	}
?>