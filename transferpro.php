<?php
session_start(); 
require('dbconnect.php');
//$uemail=$_POST['uemail'];
$source=$_POST['cid'];
$destination=$_POST['cid1'];
$u2name=$_POST['u2name'];
$u2email=$_POST['u2mail'];
$u2no=$_POST['u2no'];
$u2adress = $_POST['message'];
$trip_date=$_POST['trip_date'];
$date=date('y-m-d');
$isactive=0;

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

	$target_dir = "img/userprofile2/";
	$target_file = $target_dir.basename($_FILES["photo"]["name"]);
	move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);


	$qry="INSERT INTO `transfer`(`u_id`, `source`, `destination`, `trip_date`, `u2_name`, `u2_phone_no`, `u2_email`, `u2_photo`, `u2_address`, `Doi`, `isactive`) VALUES ('".$_SESSION['id']."','".$source."','".$destination."','".$trip_date."','".$u2name."','".$u2no."','".$u2email."','".$_FILES["photo"]["name"]."','".$u2adress."','".$date."','".$isactive."')";
	echo $qry;
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