<?php
    session_start();
 	require('dbconnect.php');
    $id = $_SESSION['id'];
    $bid=$_POST['bid'];
    $date=date('y-m-d');
    $isactive=1;
    $qry="INSERT INTO feedback(`u_id`,`booking_id`,`topic`,`description`,`Doi`,`isactive`) values('".$id."','".$bid."','".$_POST['topic']."','".$_POST['message']."','".$date."',$isactive)";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
    	echo "<script>alert('Feedback Successfully Insert');</script>";
    	echo "<script>window.location='user_profile.php';</script>";
    	exit();
    }

?>