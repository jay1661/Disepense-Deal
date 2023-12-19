<?php
var_dump($_POST);
require('dbconnect.php');
session_start();

$pid=$_POST['id'];
$name=$_POST['name'];
$pass=md5($_POST['pass']);
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
	$qry="UPDATE parcel_registration SET p_name = '".$name."' , p_password = '".$pass."' , p_phone_no = '".$num."' , p_email = '".$mail."' , p_address = '".$address."' , area_id = '".$area."' , city_id = '".$city."', state_id = '".$state."' , p_seq_id = '".$seid."' , p_answer = '".$ans."' , Dou = '".$date."' WHERE p_id=$pid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:parcel_profile.php");
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
	$target_dir = "img/userprofile/";
	$target_file = $target_dir.basename($_FILES["profile"]["name"]);
	move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file);

	$qry="UPDATE user_registration SET u_name = '".$name."' , u_password = '".$pass."' , u_phone_no = '".$num."' , u_email = '".$mail."' , u_photo = '".$_FILES["profile"]["name"]."', u_address = '".$address."' , area_id = '".$area."' , city_id = '".$city."', state_id = '".$state."' , u_seq_id = '".$seid."' , u_answer = '".$ans."' , Dou = '".$date."' WHERE u_id=$uid";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:user_profile.php");
		exit();
	}
	else
	{
		echo "<script>alert('Error.')</script>";
		echo "<script>window.location='parcel_profile.php'</script>";
		exit();
	}
}
?>