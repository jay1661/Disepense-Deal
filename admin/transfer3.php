<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE `transfer` SET isdeliver=1 where t_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewtransfer.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>