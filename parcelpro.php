<?php
session_start(); 
require('dbconnect.php');
//$uemail=$_POST['uemail'];
$pid=$_POST['pid'];
$weight=$_POST['weight'];
$source=$_POST['cid'];
$destination=$_POST['cid1'];
$u2name=$_POST['u2name'];
$u2email=$_POST['u2mail'];
$u2no=$_POST['u2no'];
$u2address=$_POST['message'];
$trip_date=$_POST['trip_date'];
$date=date('y-m-d');
$isactive=0;
$isshow=1;
$isdshow=1;
$ispshow=1;
$payment=0;

function email_validation($str) {
    return (!preg_match(
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))
        ? FALSE : TRUE;
}
  
// Function call
if(!email_validation($u2email)) {
    echo "<script>alert('Invalid email address.')</script>";
	echo "<script>window.location='index.php'</script>";
}
else if(strlen($u2no)!=10){
	echo "<script>alert('Invalid Phone Number.')</script>";
	echo "<script>window.location='index.php'</script>";
}
else{
	$qry1="SELECT * FROM `city` WHERE `city_id`=$source";
	$rs1=mysqli_query($conn,$qry1);
	$row1=mysqli_fetch_assoc($rs1);

	$qry2="SELECT * FROM `city` WHERE `city_id`=$destination";
	$rs2=mysqli_query($conn,$qry2);
	$row2=mysqli_fetch_assoc($rs2);

	if($row1['state_id']==$row2['state_id']){
		$payment=($weight*150)+100;
	}
	else{
		$payment=($weight*250)+150;
	}

	$target_dir = "img/userprofile1/";
	$target_file = $target_dir.basename($_FILES["photo"]["name"]);
	move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);


	$qry="INSERT INTO `parcel_booking_detail`( `u_id`, `trip_date`, `p_type_id`, `weight`, `source`, `destination_city_id`, `u2_name`, `u2_phone_no`, `u2_email`, `payment`, `u2_photo`, `u2_address`,  `Doi`, `isshow`, `isdshow`, `ispshow`, `isactive`) VALUES ('".$_SESSION['id']."','".$trip_date."','".$pid."','".$weight."','".$source."','".$destination."','".$u2name."','".$u2no."','".$u2email."','".$payment."','".$_FILES["photo"]["name"]."','".$u2address."','".$date."','".$isshow."','".$isdshow."','".$ispshow."','".$isactive."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		//echo "<script>alert('Your booking request hs been send successfully, please wait for driver answer....')</script>";
		echo "<script>window.location='user_profile.php'</script>";
		exit();
	}
	else
	{
		echo "<script>alert('Error.')</script>";
		echo "<script>window.location='index.php'</script>";
		exit();
	}
}
?>