<?php
    session_start();
    $date=date("Y-m-d");
    $pmin= date('Y-m-d', strtotime("+1 day", strtotime($date)));
    $pmax = date('Y-m-d', strtotime("+2 weeks", strtotime($date)));
?>
<!DOCTYPE html>
<html class="html">
<!-- Mirrored from www.asmobisoft.com/rahul-themes/fast-moves/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2019 05:47:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dispense_deal</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" type="image/png" href="img/package.png"/>
    <!-- theme css -->
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
    .container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 15px;
  width: 15px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
 	top: 5px;
	left: 5px;
	width: 5px;
	height: 5px;
	border-radius: 50%;
	background: white;
}

    </style>
    <!-- end Header Nav-brand-top -->
</head>


<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM city WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
    $qry1 = "SELECT * FROM city WHERE isactive=1";
    $rs1 = mysqli_query($conn,$qry1);
?>


<?php require('header.php'); ?>
<!--Main Slider-->
    <div class="single-img-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="heading-bx">
                            <h1 class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">Effortless Moving You Can Afford.</h1>
                            <h3 class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms" style="font-size: 40px; line-height: 50px;">
                                Using our website you can easily export parcel from one city to another city.  
                            </h3>
                            <a href="#call-us" class="btn-white btn-xlg wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Main Slider-->
    <div id="call-us" class="sections-wrapper">
        <section class="sec-pad form-section">
            <div class="container">
                <div class="row">
                    <form action="parcel_details.php" method="POST">
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-left">
                        <div class="form-post">
                            <div class="form-group">
                                <select name="sid" class="form-control">
                                     <option>Move From</option>
                                    <?php
                                        if (mysqli_num_rows($rs)>0) 
                                        {
                                            while ($row=mysqli_fetch_assoc($rs)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row['city_id']; ?>">
                                                <?php echo $row['cname']; ?> 
                                            </option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-left">
                        <div class="form-post">
                            <div class="form-group">
                                <select name="sid1" class="form-control" required>
                                     <option>Move To</option>
                                    <?php
                                        if (mysqli_num_rows($rs1)>0) 
                                        {
                                            while ($row=mysqli_fetch_assoc($rs1)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row['city_id']; ?>">
                                                <?php echo $row['cname']; ?> 
                                            </option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>  
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="form-post">
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" placeholder="Enter date" value="<?php echo $pmin;?>" min="<?php echo $pmin;?>" <?php echo $pmax;?>>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 pull-right">
                        <input type="submit" name="">
                        <input type="hidden" name="did">
                    </div>
                </form>
                </div>
            </div>
        </section>
    </div>
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="mover-man-img wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <img src="img/resource/mover-man.png" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-col">
                        <h1>Welcome to Dispense Deal</h1>
                        <h3>For whole home shifting or company's materials supplys.</h3>
                        <a href="transfer.php" class="theme-btn-orng btn-lg">Click Here.</a>
                    </div> 
                </div>
            </div>
        </div>
    </section>
        <!-- start clients section-->
        <!--<section id="services" class="sec-pad">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                <div class="section-title title-padd-btm">
                    <h1 class="text-center">our services</h1>
                    <p class="wd-50">
                        Its this founding principle that has helped our organisation as well as our clients become a defining force in the industry. 
                    </p>
                </div>
                </div>
                    <div class="col-md-12">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="grid">
                                    <figure class="effect-sarah">
                                        <img src="img/service/1.jpg" alt="img13"/>
                                        <figcaption>
                                        <h2>DOMESTIC <span>MOVING</span></h2>
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                                        <a href="contact.html">View more</a>
                                        </figcaption>           
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid">
                                    <figure class="effect-sarah">
                                        <img src="img/service/2.jpg" alt="img13"/>
                                        <figcaption>
                                        <h2>INTERNATIONAL <span>MOVING</span></h2>
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                                        <a href="#">View more</a>
                                        </figcaption>           
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid">
                                    <figure class="effect-sarah">
                                        <img src="img/service/3.jpg" alt="img13"/>
                                        <figcaption>
                                        <h2>Free <span>STORAGE</span></h2>
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                                        <a href="#">View more</a>
                                        </figcaption>           
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid">
                                    <figure class="effect-sarah">
                                        <img src="img/service/1.jpg" alt="img13"/>
                                        <figcaption>
                                        <h2>Free <span>Sarah</span></h2>
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                                        <a href="#">View more</a>
                                        </figcaption>           
                                    </figure>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid">
                                    <figure class="effect-sarah">
                                        <img src="img/service/2.jpg" alt="img13"/>
                                        <figcaption>
                                        <h2>Free <span>Sarah</span></h2>
                                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                                        <a href="#">View more</a>
                                        </figcaption>           
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--><!-- End clients section-->
        <!--<section id="testimonials">
        <div class="overlay sec-pad">
            <div class="container">
                <div class="section-title title-padd-btm">
                    <h1>What clients say about</h1>
                    <p class="wd-50">
                        Its this founding principle that has helped our organisation as well as our clients become a defining force in the industry. 
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="text-box">
                                    <p>
                                        The executive who delivered the Medicine was kind he even waited for more than 20 mins and  having people who like doing what they do...” 
                                    </p>
                                    <div class="name-col">
                                        <div class="quote-icon">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                        </div>
                                        <h3>David</h3>
                                        <div class="country">
                                            <p>Australia</p>
                                        </div>
                                    </div>
                                    <div class="client-img">
                                        <img src="img/resource/client-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text-box">
                                    <p>
                                        The executive who delivered the Medicine was kind he even waited for more than 20 mins and  having people who like doing what they do...” 
                                    </p>
                                    <div class="name-col">
                                        <div class="quote-icon">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                        </div>
                                        <h3>David</h3>
                                        <div class="country">
                                            <p>Australia</p>
                                        </div>
                                    </div>
                                    <div class="client-img">
                                        <img src="img/resource/client-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text-box">
                                    <p>
                                        The executive who delivered the Medicine was kind he even waited for more than 20 mins and  having people who like doing what they do...” 
                                    </p>
                                    <div class="name-col">
                                        <div class="quote-icon">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                        </div>
                                        <h3>David</h3>
                                        <div class="country">
                                            <p>Australia</p>
                                        </div>
                                    </div>
                                    <div class="client-img">
                                        <img src="img/resource/client-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="text-box">
                                    <p>
                                        The executive who delivered the Medicine was kind he even waited for more than 20 mins and  having people who like doing what they do...” 
                                    </p>
                                    <div class="name-col">
                                        <div class="quote-icon">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                        </div>
                                        <h3>David</h3>
                                        <div class="country">
                                            <p>Australia</p>
                                        </div>
                                    </div>
                                    <div class="client-img">
                                        <img src="img/resource/client-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>-->
        <!-- End testimonial section -->
        <section id="work-process" class="sec-pad">
            <div class="container">
                <div class="section-title title-padd-btm">
                    <h1>our work process</h1>
                    <p class="wd-50">
                        Its this founding principle that has helped our organisation as well as our clients become a defining force in the industry. 
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="process">
                            <div class="process-icon-col wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="icon-1"></div>
                                <p>Book Your Service</p>
                            </div>
                            <div class="process-icon-col wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <div class="icon-2"></div>
                                <p>Pack Your Good</p>
                            </div>
                            <div class="process-icon-col wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="icon-3"></div>
                                <p>Safe Loading</p>
                            </div>
                            <div class="process-icon-col wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="icon-4"></div>
                                <p>Transportation</p>
                            </div>
                            <div class="process-icon-col wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="icon-5"></div>
                                <p>Safe Dilivery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section work-process Section -->
        <!-- Start why-choose-us -->
        <section id="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pull-right">
                        <div class="why-choose-list">
                            <div class="section-title title-padd-btm">
                                <h1>Why choose us?</h1>
                            </div>
                            <ul>
                                <li>
                                    <span class="icon-check">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    </span>
                                    <div class="advantage-text">
                                        <p>Provide information about the driver to users including the vehicle type, license, vehicle number, photo, email.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon-check">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    </span>
                                    <div class="advantage-text">
                                      <p>Provide information about the parcel to the driver. The user will send the box type parcel or document parcel to the driver.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon-check">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    </span>
                                    <div class="advantage-text">
                                        <p> Provide information about parcel Route. The driver will share their route information to the user. </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon-check">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    </span>
                                    <div class="advantage-text">
                                         <p>Parcel delivery on the same day and less time consuming. In this system, parcel delivers on the same day that’s why it is less time-consuming.</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon-check">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    </span>
                                    <div class="advantage-text">
                                       <p>Less paperwork. This system used to send the parcel without paperwork.</p>
                                    </div>
                                </li>
                               
                                
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End why-choose-us -->
        <!-- Star fact Section -->
        <section id="counter" class="sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="circle brd-color">
                            <img src="img/icons/suitcase.png" alt="">   
                            <h1 class="timer" data-from="5" data-to="12" data-speed="2000" data-refresh-interval="50">12</h1>
                            <p>Happy Users</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="circle brd-color-2">
                            <img src="img/icons/smily.png" alt="">   
                            <h1 class="timer" data-from="85" data-to="95" data-speed="2000" data-refresh-interval="50">95</h1>
                            <p>Happy Drivers</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="circle brd-color-3">
                            <img src="img/icons/vehicle.png" alt="">   
                            <h1 class="timer" data-from="990" data-to="1000" data-speed="2000" data-refresh-interval="50">1000</h1>
                            <p>Total Bookings</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="circle brd-color-4">
                            <img src="img/icons/branches.png" alt="">   
                            <h1 class="timer" data-from="0" data-to="1" data-speed="2000" data-refresh-interval="50">1</h1>
                            <p>Branches</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End fact Section -->
        <!-- Start Overlay Section Section -->
        <section id="call-us">
            <div class="overlay sec-pad">
                <div class="container">
                    <div class="call-bx">
                        <h1 class="main-title">Are You Ready to Move</h1>
                        <div class="call-bx-inner">
                            <div class="phn-icon-circle"></div>
                            <div class="call-us-text">
                                <h2>Call Us 24 hour available:</h2>
                                <h1>0000110011</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Overlay Section Section -->
        <!-- Start Faq Section Section -->
        <!--<section id="faq-section" class="sec-pad">
            <div  class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="section-title title-padd-btm">
                            <h1>FAQ Questions </h1>
                        </div>                    
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <b>Q. Neque porro quisquam est qui dolorem consect etur.</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit, sed quia non numquam.</p><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <b>Q. Neque porro quisquam est qui dolorem consect etur.</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit, sed quia non numquam.</p><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                           <b>Q. Neque porro quisquam est qui dolorem consect etur.</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit, sed quia non numquam.</p><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                           <b>Q. Neque porro quisquam est qui dolorem consect etur.</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consect etur, adipisci velit, sed quia non numquam.</p><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="blog" class="col-md-6 col-sm-6 col-xs-12">
                        <div class="section-title title-padd-btm">
                            <h1>News & Events </h1>
                        </div>           
                        <div class="row mrgn-offset-2">
                            <div class="col-lg-12">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <div class="blog-main-holder">
                                            <div class="single-blog-post">
                                                <div class="img-holder">
                                                    <img src="img/blog/1.jpg" alt="img">
                                                    <div class="overlay">
                                                        <div class="inner-holder">
                                                            <div class="date">
                                                                <div class="out-line">
                                                                    <h3>
                                                                        08<br><span>may</span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>Author : <span>Aliza Baith</span> </li>
                                                    <li>comments: <span>5</span> </li>
                                                </ul>
                                                <h3>blog title here</h3>
                                                <p>
                                                    Sed ut perspiciatis unde omnis ierror sit voluptatem accusa nt ium dolorem que laudantium.
                                                </p>
                                                <a class="theme-btn-orng btn-xs" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="blog-main-holder">
                                            <div class="single-blog-post">
                                                <div class="img-holder">
                                                    <img src="img/blog/1.jpg" alt="img">
                                                    <div class="overlay">
                                                        <div class="inner-holder">
                                                            <div class="date">
                                                                <div class="out-line">
                                                                    <h3>
                                                                        08<br><span>may</span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>Author : <span>Aliza Baith</span> </li>
                                                    <li>comments: <span>5</span> </li>
                                                </ul>
                                                <h3>blog title here</h3>
                                                <p>
                                                    Sed ut perspiciatis unde omnis ierror sit voluptatem accusa nt ium dolorem que laudantium.
                                                </p>
                                                <a class="theme-btn-orng btn-xs" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>-->
        <!-- End Faq Section Section -->
        <!-- Start footer-up Section -->
        <!--<section id="footer-up">
            <div class="container">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="aside-bx news-letter-img">
                        <div class="overlay">
                            <h2>Signup Our Newletter</h2>
                            <p>
                                Subscripbe now and recive weekly newsletter with exicting 
                                offers or discounts.
                            </p>
                            <div class="subscribe-form">
                                <input type="text" name="email">
                                <button class="subscribe-button btn-md" type="submit">subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="aside-bx back-img">
                        <div class="overlay">
                            <br>
                            <h2>Call Us 24 hour available:</h2>
                            <h1>098 6001 5001</h1>
                            <img src="img/resource/moving-van.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End footer-up Section -->

        <!-- start clients section-->
        <!--<section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="client-img-holder">
                                    <img src="img/clients/1.jpg" alt="client">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-holder">
                                    <img src="img/clients/2.jpg" alt="client">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-holder">
                                    <img src="img/clients/3.jpg" alt="client">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-holder">
                                    <img src="img/clients/4.jpg" alt="client">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-holder">
                                    <img src="img/clients/2.jpg" alt="client">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-img-holder">
                                    <img src="img/clients/1.jpg" alt="client">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--><!-- End clients section-->
<?php require('footer.php'); ?>