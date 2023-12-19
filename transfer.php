<?php
    session_start();
    if (!isset($_SESSION['id'])) 
    {
        header('location:login.php');
        exit();
    }
    require('dbconnect.php');
    // $did = $_GET['id1'];
    // $qry3 = "SELECT * FROM trip WHERE trip_id = $did";
    // $rs3 = mysqli_query($conn,$qry3);
    // $row = mysqli_fetch_assoc($rs3);
    // $s=$row['source'];
    // $s1=$row['destination'];
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
            <h2>Parcel_details</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">Parcel_details</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container driver-border">
            <div class="row">
                <div class="col-md-6 col-sm-4 parcel_detail col-md-offset-3">
                    <form action="transferpro.php" class="contact-form" method="POST" enctype="multipart/form-data">
                        <center><h1>Give Parcel Details</h1></center>
                         <!-- <p>User Name:</p>
                        <input type="text" name="uname" placeholder="Enter User Name" class="form-control"><br>
                        <p>User Email:</p>
                        <input type="email" name="uemail" placeholder="Enter user email" class="form-control"><br> -->
                        <!-- <p>Weight:</p>
                        <input type="number" name="weight" placeholder="Enter weight of the parcel" class="form-control"><br><br> -->
                        <p>Source:</p>
                        <select name="cid" class="form-control">
                        <option>Move From</option>
                                    <?php
                                        $qry4 = "SELECT * FROM city";
                                        $rs4 = mysqli_query($conn,$qry4);
                                        while ($row3 = mysqli_fetch_assoc($rs4)) 
                                        {
                                    ?>
                                    <option value="<?php echo $row3['city_id'];?>"><?php echo $row3['cname']; ?></option>
                                    <?php
                                        }
                                    ?>
                        </select><br>
                        <p>Destination:</p>
                        <select name="cid1" class="form-control">
                        <option>Move To</option>
                                    <?php
                                        $qry5 = "SELECT * FROM city";
                                        $rs5 = mysqli_query($conn,$qry5);
                                        while ($row5 = mysqli_fetch_assoc($rs5)) 
                                        {
                                    ?>
                                    <option value="<?php echo $row5['city_id'];?>"><?php echo $row5['cname']; ?></option>
                                    <?php
                                        }
                                    ?>
                         </select><br>
                        <p>Receiver Name:</p>
                        <input type="text" name="u2name" placeholder="Enter Your Name" class="form-control" required><br>
                        <p>Receiver Phone No.:</p>
                        <input type="text" name="u2no" placeholder="Enter Your Phone number" class="form-control" required><br>
                        <p>Receiver Email:</p>
                        <input type="email" name="u2mail" placeholder="Enter Your Email" class="form-control" required><br>
                        <p>Receiver Photo:</p>
                        <input type="file" name="photo" placeholder="Enter Your photo" class="form-control" required><br>
                        <p>Receiver Address</p>
                        <textarea name="message" placeholder="Enter Your Address" required></textarea><br>
                        <p>Date:</p>
                        <input type="date" name="trip_date" required><br>
                        <button type="submit" class="theme-btn-orng btn-lg">
                            <span>Submit Now</span>
                        </button>
                    </form>
                </div>   
            </div>
        </div>
    </section>  
<?php require('footer.php'); ?>