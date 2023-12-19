<?php
require('dbconnect.php');
$name=$_POST['name'];
$pass=$_POST['pass'];
$cpass=$_POST['upass'];
$mail=$_POST['mail'];
$num=$_POST['num'];
$address=$_POST['message'];
$state=$_POST['sid'];
$city=$_POST['cid'];
$area=$_POST['aid'];
$seid=$_POST['seid'];
$ans=$_POST['ans'];

function email_validation($str) {
    return (!preg_match(
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))
        ? FALSE : TRUE;
}

if($pass != $cpass)
{
	// echo "password and confirm password is not match";
	echo "<script>alert('password and confirm password is not match');</script>";
	echo "<script>window.location='adduser.php';</script>";
	exit();
}
else if($pass =="" || $cpass=="")
{
	// echo "password and confirm password is not match";
	echo "<script>alert('password or confirm password is not write');</script>";
	echo "<script>window.location='adduser.php';</script>";
	exit();
}
else if(!email_validation($mail)) {
    echo "<script>alert('Invalid email address.')</script>";
	echo "<script>window.location='index.php'</script>";
}
else if(strlen($num)!=10){
	echo "<script>alert('Invalid Phone Number.')</script>";
	echo "<script>window.location='index.php'</script>";
}
else{

	$target_dir = "img/userprofile/";
  $target_file = $target_dir.basename($_FILES["profile"]["name"]);
	move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file);

	$dpass = md5($pass);
$date=date('y-m-d');
$isactive=1;
$qry="INSERT INTO `user_registration`(`u_name`, `u_password`, `u_photo`, `u_address`, `area_id`, `city_id`, `state_id`, `u_email`, `u_phone_no`, `u_seq_id`, `u_answer`, `Doi`, `isactive`) VALUES ('".$name."','".$dpass."','".$_FILES["profile"]["name"]."','".$address."','".$area."','".$city."','".$state."','".$mail."','".$num."','".$seid."','".$ans."','".$date."','".$isactive."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:login.php");
	exit();
}
else
{
	echo "<script>alert('Error.')</script>";
	echo "<script>window.location='adduser.php'</script>";
	exit();
}
}
?>
