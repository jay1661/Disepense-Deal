<?php
    session_start();
?>

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
    <section class="page-title inner-baner">
        <div class="container">
            <h2>contact</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <div class="sections-wrapper sec-pad">
        <div class="container">
                <div class="section-title title-padd-btm">
                    <h1>GET IN TOUCH</h1>
                    <p class="wd-50">
                        Its this founding principle that has helped our organisation as well as our clients become a defining force in the industry. 
                    </p>
                </div>                
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-12 pull-right">
					<form action="contactme.php" class="contact-form" method="POST"> 
                        <p>Name:</p>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required><br>
                        <p>Email:</p>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required><br>
                        <p>Description:</p>
                        <textarea name="message" placeholder="Description" required></textarea><br><br>
                        <button type="submit" class="theme-btn-orng btn-lg">
                            <span>Submit Now</span>
                        </button>
                    </form>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="tt-contact">
                    <div class="tt-contact-icon-outer">
                        <div class="tt-contact-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div> 
                    </div>
                    <div class="tt-contact-info">
                        <div class="simple-text">
                            <p>Dispense Deal<br>Navarang pura<br>Ahmedabad</p>
                        </div>
                    </div>
                </div>
                <div class="spacer-15"></div>
                <div class="tt-contact">
                    <div class="tt-contact-icon-outer">
                        <div class="tt-contact-icon">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        </div> 
                    </div>
                    <div class="tt-contact-info">
                        <div class="simple-text">
                            <p>+91 120 4255611, <br>+91 120 4585611</p>
                        </div>
                    </div>
                </div><!-- tt-contact -->
                <div class="spacer-15"></div>
                <div class="tt-contact">
                    <div class="tt-contact-icon-outer">
                        <div class="tt-contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div> 
                    </div>
                    <div class="tt-contact-info">
                        <div class="simple-text">
                            <p>dispense_deal@gmail.com</p>
                        </div>
                    </div>
                </div><!-- tt-contact -->
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </div> 
<?php require('footer.php'); ?>