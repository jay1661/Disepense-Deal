<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE parcel_type SET isactive=2 where p_type_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewcategory.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>