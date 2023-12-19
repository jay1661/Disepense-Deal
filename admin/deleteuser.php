<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE user_registration SET isactive=2 where u_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewuser.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>