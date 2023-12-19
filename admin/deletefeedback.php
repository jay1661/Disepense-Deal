<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE feedback SET isactive=2 where feedback_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewfeedback.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>