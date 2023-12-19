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
<?php
    require('dbconnect.php');
    session_start();
    
    $qry = "SELECT * FROM city WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
    $qry1 = "SELECT * FROM city WHERE isactive=1";
    $rs1 = mysqli_query($conn,$qry1);
    $qry2 = "SELECT * FROM parcel_type WHERE isactive=1";
    $rs2 = mysqli_query($conn,$qry2);
?>

    <?php require('header.php');?>
    <!--Page Title-->
    <section class="page-title inner-baner">
        <div class="container">
            <h2>Parcel_details</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">Destination</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container driver-border">
            <div class="row">
                <div class="col-md-6 col-sm-4 parcel_detail col-md-offset-3">
                    <form action="trip.php" enctype="multipart/form-data" method="post" class="contact-form">
                        <center><h1>Destination</h1></center>
                        <p>Source:</p>
                        <select name="cid" class="form-control">
                                     <option>Select City</option>
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
                        </select><br>
                        <p>Destination:</p>
                        <select name="cid1" class="form-control">
                                     <option>Select City</option>
                                    <?php
                                        if (mysqli_num_rows($rs1)>0) 
                                        {
                                            while ($row2=mysqli_fetch_assoc($rs1)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row2['city_id']; ?>">
                                                <?php echo $row2['cname']; ?> 
                                            </option>
                                    <?php
                                            }
                                    }
                                    
                                    ?>
                         </select><br>
                         <p>Vehicle Model.:</p> 
                        <input type="text" name="vehicle_model" placeholder="Enter Your Vehicle_Model" required>
                        <p>Vehicle No.:</p> 
                        <input type="text" name="vehicle_no" placeholder="Enter Your Vehicle_No" required>
                        <p>Vehicle Photo</p>
                        <input type="file" name="vehicle" class="form-control" required><br>
                        <p>Time:</p>
                        <input type="time" name="time" placeholder="Enter Your Email" class="form-control" required><br>
                        <button type="submit" class="theme-btn-orng btn-lg">
                            <span>Submit Now</span>
                        </button>
                    </form>
                </div>   
            </div>
        </div>
    </section>  
<?php require('footer.php'); ?>