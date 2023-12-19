<?php
	require('dbconnect.php');
	var_dump($_POST);
	$que = $_POST['name'];
	$date=date('y-m-d');
	$isactive = 1;
	$qry = "INSERT into security_question(questionn,doi,isactive) VALUES('".$que."','".$date."',$isactive)";
	$rs = mysqli_query($conn,$qry);
	if ($rs) 
	{
		echo "<script>alert('Insert Security Question Success');</script>";
		echo "<script>window.location='addseq.php';</script>";
	}
	else
	{
		echo "<script>alert('Insert Error');</script>";
		echo "<script>window.location='addseq.php';</script>";
	}
?>