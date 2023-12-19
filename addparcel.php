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
    <style>
/* The container */
.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 10px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
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
    $qry = "SELECT * FROM state WHERE isactive=1";
    $qry1 = "SELECT * FROM city WHERE isactive=1";
    $qry2 = "SELECT * FROM area WHERE isactive=1";
    $qry3 = "SELECT * FROM security_question WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
    $rs1 = mysqli_query($conn,$qry1);
    $rs2 = mysqli_query($conn,$qry2);
    $rs3 = mysqli_query($conn,$qry3);
?>
<?php require('header.php'); ?>
<!--Page Title-->
<section class="page-title inner-baner">
    <div class="container">
        <h2>Become Parcel Team</h2>
        <ul class="bread-crumb clearfix">
            <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
            <li class="active">Become Parcel Team</li>
        </ul>
    </div>
</section>
<!--End Page Title-->
<div class="sections-wrapper sec-pad">
    <div class="container">       
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
               <form action="parcelpro1.php" class="contact-form" enctype="multipart/form-data" method="post"> 
                <center><h1>Parcel Team Registration</h1></center>
                <p>Name:</p>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required><br>
                <p>Password:</p>
                <input type="password" name="pass" placeholder="Enter Your password" class="form-control" required><br><br>
                <p>Confirm Password:</p>
                <input type="password" name="cpass" placeholder="Confirm your password" class="form-control" required><br><br>
                <p>Photo:</p>
                <input type="file" name="profile" class="form-control" required><br>
                <p>Email:</p>
                <input type="email" name="mail" placeholder="Enter Your Email" class="form-control" required><br>
                <p>Mobile No.</p>
                <input type="text" name="num" placeholder="Enter Your Phone Number">
                <p>Licence:</p>
                <input type="file" name="licence" placeholder="Enter Your Email" class="form-control" required><br> 
                <p>Address:</p>
                <textarea name="message" placeholder="Enter Your Address" required></textarea><br><br>
                <p>Area:</p>
                <select name="aid" class="form-control">
                                     <option>Select Area</option>
                                    <?php
                                        if (mysqli_num_rows($rs2)>0) 
                                        {
                                            while ($row=mysqli_fetch_assoc($rs2)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row['area_id']; ?>">
                                                <?php echo $row['aname']; ?> 
                                            </option>
                                    <?php
                                            }
                                        }
                                    ?>
                </select><br>
                <p>City:</p>
                <select name="cid" class="form-control">
                                     <option>Select City</option>
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
                </select><br>
                <p>State:</p>
                <select name="sid" class="form-control">
                                     <option>Select State</option>
                                    <?php
                                        if (mysqli_num_rows($rs)>0) 
                                        {
                                            while ($row=mysqli_fetch_assoc($rs)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row['state_id']; ?>">
                                                <?php echo $row['sname']; ?> 
                                            </option>
                                    <?php
                                            }
                                        }
                                    ?>
                </select><br>
                <p>Security Question:</p>
                <select name="seid" class="form-control">
                                     <option>Select Security Question</option>
                                    <?php
                                        if (mysqli_num_rows($rs3)>0) 
                                        {
                                            while ($row=mysqli_fetch_assoc($rs3)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row['seq_id']; ?>">
                                                <?php echo $row['questionn']; ?> 
                                            </option>
                                    <?php
                                            }
                                        }
                                    ?>
                </select><br>
                <p>Answer</p>
                <input type="text" name="ans" placeholder="Enter Your Answer" class="form-control" required><br>
                <input type="hidden" name="id" value="<?php echo $id;?>">      
                <button type="submit" class="theme-btn-orng btn-lg">
                    <span>Register</span>
                </button>
            </form>
        </div>
        <!-- col -->
    </div><!-- row -->
</div>
</div>
<!-- End Map Section -->
<?php require('footer.php'); ?>