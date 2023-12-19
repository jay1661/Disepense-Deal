<?php
	require('dbconnect.php');
	var_dump($_POST);
	$type = $_POST['ptype'];
	$date=date('y-m-d');
	$isactive = 1;
	$qry = "INSERT INTO parcel_type(p_type_name,doi,isactive) VALUES('".$type."','".$date."',$isactive)";
	$rs = mysqli_query($conn,$qry);
	if ($rs) 
	{
		// echo "<script>alert('Insert City Success');</script>";
		echo "<script>window.location='viewcategory.php';</script>";
	}
	else
	{
		// echo "<script>alert('Insert City');</script>";
		echo "<script>window.location='addcategory.php';</script>";
	}
?>