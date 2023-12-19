<?php
require('dbconnect.php');
$sid = $_GET['id'];
$qry="SELECT * FROM user_registration WHERE u_id=$sid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if($ia==1)
{
	$qry="UPDATE user_registration SET `isactive`=0 WHERE `u_id`=$sid";
}
else
{
	$qry="UPDATE user_registration SET `isactive`=1 WHERE `u_id`=$sid";

}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewuser.php");
}
else
{
	echo "Fail";
}
?>
