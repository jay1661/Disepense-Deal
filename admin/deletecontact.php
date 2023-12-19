<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE contact SET isactive=2 where contact_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewcontact.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>