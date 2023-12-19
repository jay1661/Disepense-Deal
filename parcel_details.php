<?php
    session_start();
    if (!isset($_SESSION['id'])) 
    {
        header('location:login.php');
        exit();
    }
    require('dbconnect.php');
    $s=$_POST['sid'];
    $s1=$_POST['sid1'];
    $p=$_POST['date'];
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
    .notes{
        border:0.3px solid red;
        margin-top:1rem;
        margin-bottom:1rem;
        padding-left:1rem;
        height:70px;
        width:250px;
        background-color: #bb494914;
        border-radius:10px;
    }
    .notes p{
        font-size:1.5rem;
        margin-bottom:-0.3rem;
    }
    </style>
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
                    <form action="parcelpro.php" class="contact-form" method="POST" enctype="multipart/form-data">
                    
                        <center><h1>Give Parcel Details</h1></center>
                        <!-- <p>User Email:</p>
                        <input type="email" name="uemail" placeholder="Enter user email" class="form-control"><br> -->
                        <p>Parcel Type:</p>
                        <select name="pid" class="form-control">
                                     <option>Select Parcel Type</option>
                                    <?php
                                        $qry = "SELECT * FROM parcel_type WHERE isactive=1";
                                        $rs = mysqli_query($conn,$qry);
                                        if (mysqli_num_rows($rs)>0) 
                                        {
                                            while ($row2=mysqli_fetch_assoc($rs)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row2['p_type_id']; ?>">
                                                <?php echo $row2['p_type_name']; ?> 
                                            </option>
                                    <?php
                                            }
                                        }
                                    ?>
                        </select><br>
                        <p>Weight: <small>In KG/liter</small></p>
                        <input type="number" name="weight" placeholder="Enter weight of the parcel" class="form-control" required><br>
                        <br>
                        <p>Source:</p>
                        <select name="cid" class="form-control">
                                    <?php
                                        $qry4 = "SELECT * FROM city WHERE city_id=$s";
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
                                    <?php
                                        $qry5 = "SELECT * FROM city WHERE city_id=$s1";
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
                        <input type="text" name="u2name" placeholder="Enter Your Name" class="form-control" required>
                        <span class="error" style="color:red;">*</span><br>
                        <p>Receiver Phone No.:</p>
                        <input type="text" name="u2no" placeholder="Enter Your Phone number" class="form-control" required><br>
                        <p>Receiver Email:</p>
                        <input type="email" name="u2mail" placeholder="Enter Your Email" class="form-control" required>
                        <span class="error" style="color:red;">*</span><br>
                        <p>Receiver Photo:</p>
                        <input type="file" name="photo" placeholder="Enter Your photo" class="form-control" required><br>
                        <p>Receiver Address</p>
                        <textarea name="message" placeholder="Enter Your Address" required></textarea>
                        <span class="error" style="color:red;">*</span><br>
                        <p>Date:</p>
                        <input type="date" name="trip_date" value="<?php  echo $p ?>" min="<?php echo $pmin ?>" max="<?php echo $pmax ?>"><br>
                        <div class="notes">
                        <p>Notes:</p>
                        <small>In state 100 per 1 KG/liter + 100 <i class="fa fa-inr" style="font-size:12px"></i><br>In other state 250 per 1 KG/liter + 150 <i class="fa fa-inr" style="font-size:12px"></i></small>
                        </div>
                        <button type="submit" class="theme-btn-orng btn-lg">
                            <span>Submit Now</span>
                        </button>
                        
                    </form>
                    
                </div>   
            </div>
        </div>
    </section>  
<?php require('footer.php'); ?>