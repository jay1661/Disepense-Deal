<?php
 	require('dbconnect.php');
	$aid = $_GET['id'];
	$qry="UPDATE area SET isactive=2 where area_id=$aid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewarea.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>