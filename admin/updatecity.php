<?php
require('dbconnect.php');
$sid=$_POST['sid'];
$city=$_POST['cityname'];
$id=$_POST['id'];
$date=date('y-m-d');

$qry="UPDATE city SET state_id='".$sid."',cname='".$city."' ,Dou='".$date."' where city_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewcity.php");
	exit();
}
else
{
	echo "error";
	exit();
}
?>