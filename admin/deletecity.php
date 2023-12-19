<?php
 	require('dbconnect.php');
	$cid = $_GET['id'];
	$qry="UPDATE city SET isactive=2 where city_id=$cid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewcity.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>