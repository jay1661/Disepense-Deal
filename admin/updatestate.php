<?php
require('dbconnect.php');
$state=$_POST['sname'];
$id=$_POST['id'];
$date=date('y-m-d');

$qry="UPDATE state SET state_id='".$id."',sname='".$state."' ,Dou='".$date."' where state_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewstate.php");
	exit();
}
else
{
	echo "error";
	exit();
}
?>