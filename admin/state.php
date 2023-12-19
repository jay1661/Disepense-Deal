<?php
	require('dbconnect.php');
	var_dump($_POST);
	$sname = $_POST['sname'];
	$date=date('y-m-d');
	$isactive = 1;
	$qry = "INSERT into state(sname,doi,isactive) VALUES('".$sname."','".$date."',$isactive)";
	$rs = mysqli_query($conn,$qry);
	if ($rs) 
	{
		//echo "<script>alert('Insert State Success');</script>";
		echo "<script>window.location='viewstate.php';</script>";
	}
	else
	{
		//echo "<script>alert('Insert Error');</script>";
		echo "<script>window.location='addstate.php';</script>";
	}
?>