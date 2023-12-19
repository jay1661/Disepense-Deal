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
            <h2>Feedback</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">Feedback</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <div class="sections-wrapper sec-pad">
        <div class="container">              
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					<form action="feedbackpro.php" class="contact-form" method="post"> 
                        <center><h1>Feedback</h1></center>
                        <p>Topic:</p>
                        <input type="text" name="topic" placeholder="Enter Your Topic" class="form-control" required><br>
                        <p>Description:</p>
                        <input type="hidden" name="bid" value="<?php echo $_GET['id1'];?>">
                        <textarea name="message" placeholder="Description" required></textarea><br><br>
                        <button type="submit" class="theme-btn-orng btn-lg">
                            <span>Submit Now</span>
                        </button>
                    </form>
                </div>
                
                </div><!-- tt-contact -->
                </div><!-- col -->
            </div><!-- row -->
<?php require('footer.php'); ?>