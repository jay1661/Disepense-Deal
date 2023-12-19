<?php
var_dump($_POST);
require('dbconnect.php');
session_start();

$did=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$mail=$_POST['mail'];
$num=$_POST['num'];
$address=$_POST['message'];
$state=$_POST['sid'];
$city=$_POST['cid'];
$area=$_POST['aid'];
$seid=$_POST['seid'];
$ans=$_POST['ans'];
if($pass != $cpass)
{
	// echo "password and confirm password is not match";
	echo "<script>alert('password and confirm password is not match');</script>";
	echo "<script>window.location='editprofile.php';</script>";
	exit();
}
	
	$target_dir = "img/profile/";
	$target_file = $target_dir.basename($_FILES["profile"]["name"]);
	move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file);

	$target_dir2 = "img/licence/";
	$target_file2 = $target_dir2.basename($_FILES["licence"]["name"]);
	move_uploaded_file($_FILES["licence"]["tmp_name"],$target_file2);
$date=date('y-m-d');
$isactive=1;

$qry="UPDATE driver_registration SET d_name='".$name."',d_password='".$pass."',d_phone_no='".$num."',d_email='".$mail."',d_photo='".$_FILES["profile"]["name"]."',licence='".$_FILES["licence"]["name"]."',area_id='".$area."',city_id='".$city."',state_id='".$state."',seq_id='".$seid."',answer='".$ans."',Dou='".$date."' WHERE d_id=$did";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:driver_profile.php");
	exit();
}
else
{
	echo "error";
	exit();
}
?>