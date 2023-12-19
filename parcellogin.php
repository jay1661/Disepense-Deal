<!DOCTYPE html>
<html class="html">
<!-- Mirrored from www.asmobisoft.com/rahul-themes/fast-moves/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2019 05:47:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/package.png"/>
    <title>Dispense_deal</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
    <!-- theme css -->
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- end Header Nav-brand-top -->
</head>
<?php require('header.php'); ?>
<!--Page Title-->
<style type="text/css">
    
</style>
<section class="page-title inner-baner">
    <div class="container">
        <h2>Login</h2>
        <ul class="bread-crumb clearfix">
            <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
            <li class="active">Parcel Team Login</li>
        </ul>
    </div>
</section>
<!--End Page Title-->
<div class="sections-wrapper sec-pad">
    <div class="container">       
        <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
             <form action="checklogin2.php" class="contact-form" method="post">
                <fieldset>
                    <div class="alert">
                        <center><h3>Parcel Team Login</h3></center>
                    </div>
                <input type="text" name="email" placeholder="Enter Your Email" class="form-control"><br>
                <input type="password" name="pass" placeholder="Enter Your password" class="form-control"><br><br>
                <div class="input-group input-group-lg" style="float: left;">
                        <a href="addparcel.php">Not Parcel Team? Apply from here</a>
                    </div><br><br>
                    <button type="submit" class="theme-btn-orng btn-lg" name="btn_d"><span>Login</span></button>
                    
                </fieldset>
            </form>
        </div>
        <!-- col -->
        <!-- <div class="col-md-6 col-sm-6 col-xs-12">
               <form action="https://www.asmobisoft.com/rahul-themes/fast-moves/inc/sendemail.php" class="contact-form">
                <center><h1>Driver Login</h1></center>
                <p><input type="text" name="dname" placeholder="Enter DriverName"></p>
                <p><input type="password" name="dpassword" placeholder="Enter Your Password"></p>
                <center><button type="submit" class="theme-btn-orng btn-lg">
                    <span>Login</span>
                </button></center>
            </form>
        </div>-->
    </div><!-- row -->
</div>
</div>
<!-- End Map Section -->
<?php require('footer.php'); ?>