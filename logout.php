<?php
	session_start();
	$_SESSION['user'] = 0;
	$_SESSION['driver'] = 0;
	$_SESSION['parcel'] = 0;
	session_destroy();
	header("location:index.php");
?>