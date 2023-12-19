<?php
var_dump($_POST);
require('dbconnect.php');
$id=$_POST['id'];
$type = $_POST['ptype'];
$date=date('y-m-d');

$qry="UPDATE parcel_type SET p_type_name='".$type."' ,Dou='".$date."' where p_type_id=$id";
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