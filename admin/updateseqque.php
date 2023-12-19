<?php
var_dump($_POST);
require('dbconnect.php');

$que = $_POST['name'];
$id=$_POST['id'];
$date=date('y-m-d');

$qry="UPDATE security_question SET questionn='".$que."' ,Dou='".$date."' where seq_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewseq.php");
	exit();
}
else
{
	echo "error";
	exit();
}
?>