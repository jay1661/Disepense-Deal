<?php
    require('dbconnect.php');
    session_start();
    $id = $_SESSION['id'];
    $qry = "SELECT * FROM user_registration WHERE u_id=$id";
    $rs=mysqli_query($conn,$qry);
    $qry1 = "SELECT * FROM trip WHERE u_id=$id";
    // $rs1=mysqli_query($conn,$qry1);
    $qry4 = "SELECT * FROM parcel_booking_detail WHERE u_id= '".$id."'";
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
            <h2>User Profile</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">User Profile</li>
            </ul>
        </div>
    </section>

    <div class="main-panel">
            <div class="container-fluid">
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
                                        <img src="img/userprofile/<?php echo $row['u_photo']; ?> ">
                                    </div>
                                </div>
                                <div class="profile-content">

                                    <div class="profile-name"><?php echo $row['u_name']; ?></div>
                                    <!-- <p class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p> -->
                                    <ul class="profile-info-list">
                                        <a href="editprofile1.php?id=<?php echo $row['u_id'];?>" class="profile-info-list-item"><i class="mdi mdi-eye"></i>Edit Profile</a>
                                    </ul>
                                <hr>                                     
                                    
                                <p class="card-description" style="padding-top: 20px;">Contact Information</p>
                                <ul class="about">
                                    <li class="about-items">
                                        <i class="mdi mdi-phone icon-sm "></i>
                                        <span class="about-item-name">Phone:  </span>
                                        <span class="about-item-detail">
                                            <?php echo $row['u_phone_no']; ?>
                                        </span>
                                    </li>
                                    <li class="about-items">
                                        <i class="mdi mdi-email-outline icon-sm "></i>
                                        <span class="about-item-name">Email:</span>
                                        <span class="about-item-detail">
                                            <a href=""><?php echo $row['u_email']; ?></a>
                                        </span>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
             
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card" style="width:850px;">
                            <div class="card-body table-responsive">
                                <center><h2>Booking Details</h2></center>
                                <table class="table table-striped">
                                    <tr style="font-size: 12px">
                                        <th>User Name</th>
                                        <th>Weight</th>
                                        <th>Parcel_type</th>
                                        <th>Payment</th>
                                        <th>Receiver Name</th>
                                        <th>Receiver Phone No.</th>
                                        <th>Receiver Email</th>
                                        <th>Receiver photo</th>
                                        <th>Status</th>
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

                                                $qryd="SELECT * FROM trip where trip_id='".$row3['trip_id']."'";
                                                $rsd=mysqli_query($conn,$qryd);
                                                $rowd=mysqli_fetch_assoc($rsd);


                                    ?>
                                    <tr style="font-size: 12px;">
                                        <td><?php echo $row7['u_name']; ?></td>
                                        <td><?php echo $row3['weight']; ?></td>
                                        <td><?php echo $row5['p_type_name'];?></td>
                                        <td><?php echo $row3['payment'];?></td>
                                        <td><?php echo $row3['u2_name'];?></td>
                                        <td><?php echo $row3['u2_phone_no'];?></td>
                                        <td><?php echo $row3['u2_email'];?></td>
                                        <td><img src="img/userprofile1/<?php echo $row3['u2_photo'];?>" width="50px" height="50px"></td>
                                        <td>
                                        <?php
                                            if($row3['isactive']==1){
                                                ?>
                                                <a href="status.php?id=<?php echo $row3['booking_id'];?>">Status</a>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <p>Not Accepted</p>
                                                <?php
                                            }
                                        ?>
                                        </td>

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