<?php
session_start();
    require('dbconnect.php');
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
            <h2>Driver_details</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">Driver_details</li>
            </ul>
        </div>
    </section>

    <section class="driver-border">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col- sm-4">
                    <h2>Driver_Details</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <?php
                $src = $_POST['sid'];
                $des = $_POST['sid1'];
                require 'dbconnect.php';
                $sql = "SELECT d_id FROM trip WHERE isactive = 1 ";
                $rs1 = mysqli_query($conn,$sql);
                while($row1=mysqli_fetch_assoc($rs1))
                {
                    $did = $row1['d_id'];
                }
                $sql2 = "SELECT * FROM city WHERE city_id = $src ";
                $sql3 = "SELECT * FROM city WHERE city_id = $des ";
                $rs3 = mysqli_query($conn,$sql2);
                $rs4 = mysqli_query($conn,$sql3);
                $sql1 = "SELECT * from driver_registration where d_id = $did";
                $rs2 = mysqli_query($conn,$sql1);
                $qry="SELECT * FROM trip where source='".$_POST['sid']."' and destination='".$_POST['sid1']."' ";
                $rs=mysqli_query($conn,$qry);
                while($row=mysqli_fetch_assoc($rs))
                {
                    while($row3=mysqli_fetch_assoc($rs2))
                    {
                        while($row4=mysqli_fetch_assoc($rs3))
                        {
                            while($row5=mysqli_fetch_assoc($rs4))
                            {
                ?>
                <div class="col-md-3 col-sm-4 driver_details">
                <form action="parcel_details.php" method="post">
                    <img src="img/profile/<?php echo $row3['d_photo']; ?>" class="img-round" style="float: left;">
                    <h5 style="padding-top: 30px;"><?php echo $row3['d_name']; ?></h5>
                    <h5><a href="driverdetail.php?id=<?php echo $row3['d_id'];?>">Profile</a></h5>
                    <h5>Vehicle Model : <?php echo $row['vehicle_model'];?></h5>
                    <h5>Vehicle No : <?php echo $row['vehicle_no'];?></h5>
                    <h5>Source : <?php echo $row4['cname'];?></h5>
                    <h5>Destination : <?php echo $row5['cname'];?></h5>
                    <h5>Time : <?php echo $row['trip_time'];?></h5>
                    <input type="hidden" name="did" value="<?php echo $id;?>">
                    <a href="parcel_details.php?id1=<?php echo $row['trip_id']; ?>" class="btn btn-primary">Book</a>
                </form>
                </div>
                <?php
                    }
                }
            }
        }

                ?>
            </div>
        </div>
    </section>  
<?php require('footer.php'); ?>