<?php
session_start();
if(!isset($_SESSION['id']))
{
	header("location:driverlogin.php");
	exit();
}
require('dbconnect.php');
$source=$_POST['cid'];
$destination=$_POST['cid1'];
$vehicle_model=$_POST['vehicle_model'];
$vehicle_no=$_POST['vehicle_no'];
$date=$_POST['date'];
$time=$_POST['time'];
	$target_dir1 = "img/vehicle/";
	$target_file1 = $target_dir1.basename($_FILES["vehicle"]["name"]);
	move_uploaded_file($_FILES["vehicle"]["tmp_name"],$target_file1);

$doi=date('y-m-d');
$isactive=0;
$qry="INSERT INTO trip(d_id,source,destination,vehicle_model,vehicle_no,vehicle_photo,Doi,isactive,trip_time) values('".$_SESSION['id']."','".$source."','".$destination."','".$vehicle_model."','".$vehicle_no."','".$_FILES["vehicle"]["name"]."','".$doi."',$isactive,'".$time."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:driver_profile.php");
	exit();
}
else
{
	echo "<script>alert('Error.')</script>";
	echo "<script>window.location='driverdestination.php'</script>";
	exit();
}
?>