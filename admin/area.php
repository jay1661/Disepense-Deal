<?php
	require('dbconnect.php');
	var_dump($_POST);
	$cid = $_POST['cid'];
	$sid = $_POST['sid'];
	$aname = $_POST['area'];
	$date=date('y-m-d');
	$isactive = 1;
	$qry = "INSERT into area(city_id,state_id,aname,doi,isactive) VALUES($cid,$sid,'".$aname."','".$date."',$isactive)";
	$rs = mysqli_query($conn,$qry);
	if ($rs) 
	{
		
		//echo "<script>alert('Insert Area Success');</script>";
		echo "<script>window.location='viewarea.php';</script>";
	}
	else
	{
		//echo "<script>alert('Insert Error');</script>";
		echo "<script>window.location='addarea.php';</script>";
		

	}
?>