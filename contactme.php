<?php
require('dbconnect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$des = $_POST['message'];
$date=date('y-m-d');
$isactive=1;
$qry="INSERT INTO contact(u_name,u_email,`description`,doi,isactive) values('".$name."','".$email."','".$des."','".$date."',$isactive)";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:index.php");
	exit();
}
else
{
	echo "error";
	exit();
}
?>