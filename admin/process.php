<?php

	$target_dir = "upload/";
	//$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	require('dbconnect.php');
	var_dump($_GET);
	$id = $_POST['id'];
	$fn = $_POST['fn'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	// $file = $_POST['fileToUpload'];
	$addr = $_POST['addr'];
	$aid = $_POST['aid'];
	$cid = $_POST['cid'];
	$sid = $_POST['sid'];	
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$seq = $_POST['seq'];
	$isactive =1;
	$doi=date("d-m-y H:i:s");
	if(!$pass==$cpass)
	{
		echo "Error";
		exit();
	}

	if($_FILES["fileToUpload"]["name"]=="")
	{
		$profilepic="avtar.jpg";
	}
	else 
	{
		require('fileupload.php');
		$profilepic = $_FILES["fileToUpload"]["name"];
	}
	/*$qry1 = "SELECT * FROM user_registration WHERE email='".$email."'";
	$rs1 = mysql_query($conn,$qry1);

	if (mysqli_num_rows($rs1)>0) 
	{
		echo "email already exist.";
		exit();
	} */
	$qry = "INSERT into user_registration(u_id,u_name,u_password,u_conf_password,u_photo,u_address,area_id,city_id,state_id,u_email,u_phone_no,u_seq__q_id,Doi) VALUES('".$id."','".$fn."','".$pass."','".$cpass."','".$profilepic."','".$addr."','".$aid."','".$cid."','".$sid."','".$email."','".$contact."','".$seq."','".$doi."')";
	echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if ($rs) 
	{
		echo "Insert Success";
	}
	else
	{
		echo "Insert error";
	}
?>