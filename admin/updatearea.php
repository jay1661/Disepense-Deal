<?php
var_dump($_POST);
require('dbconnect.php');

$sid=$_POST['sid'];
$cid=$_POST['cid'];
$area=$_POST['area'];
$id=$_POST['id'];
$date=date('y-m-d');

$qry="UPDATE area SET city_id='".$cid."',state_id='".$sid."',aname='".$area."' ,Dou='".$date."' where area_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewarea.php");
	exit();
}
else
{
	echo "error";
	exit();
}
?>