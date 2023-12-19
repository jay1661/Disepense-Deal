<?php
//require 'PHPMailer/PHPMailerAutoload.php';
require('dbconnect.php');
session_start();
$id = $_SESSION['id'];
$did = $_GET['id1'];

$qry = "SELECT * FROM parcel_booking_detail WHERE booking_id=$did";
$rs=mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$uid = $row['u_id'];

$update="UPDATE parcel_booking_detail SET isactive=2 where booking_id='".$did."'";
$up=mysqli_query($conn,$update);

$qryu="SELECT * FROM user_registration where u_id='".$uid."'";
$rsu=mysqli_query($conn,$qryu);
$rowu=mysqli_fetch_assoc($rsu);

    if($up) {
        echo '<script>alert("Rejected.");</script>';
        echo '<script>window.location="parcel_profile.php";</script>';
        
    } else 
    {
        echo '<script>alert("Not rejected something wrong here...");</script>';
        echo '<script>window.location="parcel_profile.php";</script>';
    }

?>
