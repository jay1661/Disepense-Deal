<?php
	require('dbconnect.php'); 
	session_start();
	var_dump($_POST);
	if (!isset($_POST["btn_sb"])) 
	{
		header("location:index.php");
		exit();
	}

	$us = $_POST['email'];
	$ps = md5($_POST['pass']);
	$qry = "SELECT * FROM user_registration WHERE u_email='".$us."' AND u_password= '".$ps."' AND isactive=1";

	// echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0) 
	{
		$row = mysqli_fetch_assoc($rs);
		$id = $row['u_id'];
		$fn = $row['u_name'];
		$_SESSION['id'] = $id;
		$_SESSION['fn'] = $fn;
		$_SESSION['user'] = 1;
		$_SESSION['admin'] = 0;
		$_SESSION['driver'] = 0;
		$_SESSION['parcel'] = 0;
		if (isset($_POST['remember'])) 
		{
			setcookie("user",$us,time() + (86400), "/");
			setcookie("pass",$ps,time() + (86400), "/");
		}
	header("location:user_profile.php");
	exit();
	}
	else
	{
		echo "<script>alert('Login Error');</script>";
		echo "<script>window.location='login.php';</script>";
		exit();
	}
?>