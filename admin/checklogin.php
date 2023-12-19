<?php
	require('dbconnect.php');
	session_start();
	var_dump($_POST);
	if (!isset($_POST["btn_sb"])) 
	{
		header("location:login.php");
		exit();
	}

	$us = $_POST['txt_un'];
	$ps = md5($_POST['txt_ps']);
	$qry = "SELECT * FROM login WHERE email='".$us."' AND password= '".$ps."' AND u_type=2 AND isactive=1";

	echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0) 
	{
		$row = mysqli_fetch_assoc($rs);
		$id = $row['id'];
		$fn = $row['firstname'];
		$_SESSION['id'] = $id;
		$_SESSION['fn'] = $fn;
		$_SESSION['user'] = 0;
		$_SESSION['admin'] = 1;
		$_SESSION['driver'] = 0;
		$_SESSION['parcel'] = 0;
		if (isset($_POST['remember'])) 
		{
			setcookie("user",$us,time() + (86400), "/");
			setcookie("pass",$ps,time() + (86400), "/");
		}
	header("location:dashboard.php");
	exit();
	}
	else
	{
		echo "Login Error";
		exit();
	}
?>