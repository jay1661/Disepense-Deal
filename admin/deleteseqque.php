<?php
 	require('dbconnect.php');
	$sid = $_GET['id'];
	$qry="UPDATE security_question SET isactive=2 where seq_id=$sid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewseq.php");
		exit();
	}
	else
	{
		echo "error";
		exit();
	}
?>