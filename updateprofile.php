<?php
var_dump($_POST);
require('dbconnect.php');
session_start();

$did=$_POST['id'];
$name=$_POST['name'];
$pass=md5($_POST['pass']);
$cpass=$_POST['cpass'];
$mail=$_POST['mail'];
$num=$_POST['num'];
$address=$_POST['message'];
$state=$_POST['sid'];
$city=$_POST['cid'];
$area=$_POST['aid'];
$seid=$_POST['seid'];
$ans=$_POST['ans'];
$date=date('y-m-d');
$isactive=1;

if($_FILES["profile"]["name"] == " ")
{
	$qry="UPDATE driver_registration SET d_name = '".$name."' , d_password = '".$pass."' , d_phone_no = '".$num."' , d_email = '".$mail."' , d_address = '".$address."' , area_id = '".$area."' , city_id = '".$city."', state_id = '".$state."' , d_seq_id = '".$seid."' , answer = '".$ans."' , Dou = '".$date."' WHERE d_id=$did";
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
}
else
{
	$target_dir = "img/profile/";
	$target_file = $target_dir.basename($_FILES["profile"]["name"]);
	move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file);

	$qry="UPDATE driver_registration SET d_name = '".$name."' , d_password = '".$pass."' , d_phone_no = '".$num."' , d_email = '".$mail."' , d_photo = '".$_FILES["profile"]["name"]."', d_address = '".$address."' , area_id = '".$area."' , city_id = '".$city."', state_id = '".$state."' , d_seq_id = '".$seid."' , answer = '".$ans."' , Dou = '".$date."' WHERE d_id=$did";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:driver_profile.php");
		exit();
	}
	else
	{
		echo "<script>alert('Error.')</script>";
		echo "<script>window.location='driver_profile.php'</script>";
		exit();
	}
}
?>