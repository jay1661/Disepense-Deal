<?php
    require('dbconnect.php');
    session_start();
    $id = $_SESSION['id'];
    $qry = "SELECT * FROM driver_registration WHERE d_id=$id";
    $rs=mysqli_query($conn,$qry);
    $qry1 = "SELECT * FROM trip WHERE d_id=$id";
    $rs1=mysqli_query($conn,$qry1);
    $qry4 = "SELECT * FROM parcel_booking_detail WHERE booking_id=$id";
    $rs4=mysqli_query($conn,$qry4);
    
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
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.css">
    <!-- end Header Nav-brand-top -->
</head>
<?php require('header.php'); ?>
    <!--Page Title-->
    <section class="page-title inner-baner">
        <div class="container">
            <h2>Driver Profile</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">Driver Profile</li>
            </ul>
        </div>
    </section>

    <div class="main-panel">
            <div class="container">
                <div class="row" style="padding: 20px;">
                    <?php
                        while($row = mysqli_fetch_assoc($rs)) 
                        {
                    ?>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="profile-card">
                                <div class="profile-header">
                                    <div class="cover-image">
                                        <img src="https://cdn.pixabay.com/photo/2019/10/19/14/16/away-4561518_960_720.jpg" class="img img-fluid">
                                    </div>
                                    <div class="user-image">
                                        <img src="img/profile/<?php echo $row['d_photo']; ?> ">
                                    </div>
                                </div>
                                <div class="profile-content">

                                    <div class="profile-name"><?php echo $row['d_name']; ?></div>
                                    <!-- <p class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p> -->
                                    <ul class="profile-info-list">
                                        <a href="editprofile.php?id=<?php echo $row['d_id'];?>" class="profile-info-list-item"><i class="mdi mdi-eye"></i>Edit Profile</a>
                                    </ul>
                                <hr>                                     
                                    <li class="about-items">
                                        <img src="img/licence/<?php echo $row['licence'];?>" height="150" width="250" class="img-fluid">
                                    </li>  
                                <p class="card-description" style="padding-top: 20px;">Contact Information</p>
                                <ul class="about">
                                    <li class="about-items">
                                        <i class="mdi mdi-phone icon-sm "></i>
                                        <span class="about-item-name">Phone:  </span>
                                        <span class="about-item-detail">
                                            <?php echo $row['d_phone_no']; ?>
                                        </span>
                                    </li>
                                    <li class="about-items">
                                        <i class="mdi mdi-email-outline icon-sm "></i>
                                        <span class="about-item-name">Email:</span>
                                        <span class="about-item-detail">
                                            <a href=""><?php echo $row['d_email']; ?></a>
                                        </span>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <center><h2>Trip Details</h2></center>
                                <table class="table table-striped">
                                    <tr style="font-size: 14px">
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Vehicle_no.</th>
                                        <th>Vehicle_model</th>
                                        <th>Vehicle_photo</th>
                                        <th>Trip_date</th>
                                        <th>Trip_time</th>
                                    </tr>
                                    <?php
                                        if (mysqli_num_rows($rs1)>0) 
                                        {
                                            while ($row = mysqli_fetch_assoc($rs1))
                                            {
                                                $sid = $row['source'];
                                                $qry2 = "SELECT * FROM city WHERE city_id=$sid";
                                                $rs2=mysqli_query($conn,$qry2);
                                                $row2=mysqli_fetch_assoc($rs2);

                                                $qry3 = "SELECT * FROM city WHERE city_id='".$row['destination']."'";
                                                $rs3=mysqli_query($conn,$qry3);
                                                $row3=mysqli_fetch_assoc($rs3);
                                    ?>
                                    <tr style="font-size: 14px;">
                                        <td><?php echo $row2['cname']; ?></td>
                                        <td><?php echo $row3['cname']; ?></td>
                                        <td><?php echo $row['vehicle_model'];?></td>
                                        <td><?php echo $row['vehicle_no'];?></td>
                                        <td><img src="img/vehicle/<?php echo $row['vehicle_photo'];?>" width="50px" height="50px"></td>
                                        <td><?php echo $row['trip_date'];?></td>
                                        <td><?php echo $row['trip_time'];?></td>
                                    </tr>
                                <?php
                                        }
                                    
                                }
                                else
                                {
                                    echo "0 Row Found";
                                    exit();
                                }
                                ?>
                                </table>
                                <a href="driverdestination.php" class="profile-info-list-item" 
                                    style="padding: 50px;"><br>
                                        <i class="mdi mdi-eye"></i>
                                        Add New Trip
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <center><h2>Booking Details</h2></center>
                                <table class="table table-striped">
                                    <tr style="font-size: 14px">
                                        <th>User Name</th>
                                        <th>Weight</th>
                                        <th>Parcel_type</th>
                                        <th>U2 Name</th>
                                        <th>U2 Phone No.</th>
                                        <th>U2 Email</th>
                                        <th>U2 photo</th>
                                        <th>Accept</th>
                                        <th>Reject</th>
                                    </tr>
                                    <?php
                                        if (mysqli_num_rows($rs4)>0) 
                                        {
                                            while ($row3 = mysqli_fetch_assoc($rs4))
                                            {
                                                $uid = $row3['u_id'];
                                                $qry7 = "SELECT * FROM user_registration WHERE u_id=$uid";
                                                $rs7=mysqli_query($conn,$qry7);
                                                $row7=mysqli_fetch_assoc($rs7);

                                                $pid = $row3['p_type_id'];
                                                $qry3 = "SELECT * FROM parcel_type WHERE p_type_id=$pid";
                                                $rs3=mysqli_query($conn,$qry3);
                                                $row5=mysqli_fetch_assoc($rs3);
                                    ?>
                                    <tr style="font-size: 14px;">
                                        <td><?php echo $row7['u_name']; ?></td>
                                        <td><?php echo $row3['weight']; ?></td>
                                        <td><?php echo $row5['p_type_name'];?></td>
                                        <td><?php echo $row3['u2_name'];?></td>
                                        <td><?php echo $row3['u2_phone_no'];?></td>
                                        <td><?php echo $row3['u2_email'];?></td>
                                        <td><img src="img/userprofile1/<?php echo $row3['u2_photo'];?>" width="50px" height="50px"></td>
                                        <td><a href="#">Accept</a></td>
                                        <td><a href="#">Reject</a></td>
                                    </tr>
                                <?php
                                        }
                                    
                                }
                                else
                                {
                                    echo "0 Row Found";
                                    exit();
                                }
                                ?>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>

        </div>
    <!--End Page Title-->
<?php require('footer.php'); ?>