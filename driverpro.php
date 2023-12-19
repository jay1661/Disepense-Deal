<?php
require('dbconnect.php');
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
$prm=$_POST['permanent'];
function email_validation($str) {
    return (!preg_match(
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))
        ? FALSE : TRUE;
}
if($pass != $cpass)
{
	// echo "password and confirm password is not match";
	echo "<script>alert('password and confirm password is not match');</script>";
	echo "<script>window.location='adddriver.php';</script>";
	exit();
}
else if(!email_validation($mail)) {
    echo "<script>alert('Invalid email address.')</script>";
	echo "<script>window.location='adddriver.php'</script>";
}
else if(strlen($num)!=10){
	echo "<script>alert('Invalid Phone Number.')</script>";
	echo "<script>window.location='adddriver.php'</script>";
}
else{
	
	$target_dir = "img/profile/";
	$target_file = $target_dir.basename($_FILES["profile"]["name"]);
	move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file);

	$target_dir2 = "img/licence/";
	$target_file2 = $target_dir2.basename($_FILES["licence"]["name"]);
	move_uploaded_file($_FILES["licence"]["tmp_name"],$target_file2);
	$dpass=md5($pass);
$date=date('y-m-d');
$isactive=1;
$qry="INSERT INTO `driver_registration`(`d_name`,`d_password`,`d_phone_no`,`d_email`,`d_photo`,`d_address`,`licence`,`area_id`,`city_id`,`state_id`,`d_seq_id`,`answer`,`Doi`,`permanent`,`isactive`) VALUES ('".$name."','".$dpass."','".$num."','".$mail."','".$_FILES["profile"]["name"]."','".$address."','".$_FILES["licence"]["name"]."','".$area."','".$city."','".$state."','".$seid."','".$ans."','".$date."',$prm,$isactive)";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:driverlogin.php");
	exit();
}
else
{
	echo "<script>alert('Error.')</script>";
	echo "<script>window.location='adddriver.php'</script>";
	exit();
}
}
?>