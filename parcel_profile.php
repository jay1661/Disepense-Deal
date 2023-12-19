<?php
    require('dbconnect.php');
    session_start();
    $id = $_SESSION['id'];
    $qry = "SELECT * FROM parcel_registration WHERE p_id=$id";
    $rs=mysqli_query($conn,$qry);
    
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
            <h2>Parcel Team Profile</h2>
            <ul class="bread-crumb clearfix">
                <li><i class="fa fa-home"></i> <a href="index.php">Home</a></li>
                <li class="active">Parcel Team Profile</li>
            </ul>
        </div>
    </section>

    <div class="main-panel">
        <div class="container">
            <div class="row" style="padding: 20px;">
                    <?php
                        while($row = mysqli_fetch_assoc($rs)) 
                        {
                            $p=$row['city_id'];         
                            $qry4 = "SELECT * FROM `parcel_booking_detail` WHERE `isactive`=0 AND `source`=$p ;";
                            $rs4=mysqli_query($conn,$qry4);
                    ?>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="profile-card">
                            <div class="profile-header">
                                <div class="cover-image">
                                        <img src="https://cdn.pixabay.com/photo/2019/10/19/14/16/away-4561518_960_720.jpg" class="img img-fluid">
                                </div>
                                <div class="user-image">
                                        <img src="img/profile1/<?php echo $row['p_photo']; ?> ">
                                </div>
                            </div>
                            <div class="profile-content">

                                    <div class="profile-name"><?php echo $row['p_name']; ?></div>
                                    <!-- <p class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p> -->
                                    <ul class="profile-info-list">
                                        <a href="editprofile2.php?id=<?php echo $row['p_id'];?>" class="profile-info-list-item"><i class="mdi mdi-eye"></i>Edit Profile</a>
                                    </ul>
                                <hr>                                     
                                    <li class="about-items">
                                        <img src="img/licence1/<?php echo $row['licence'];?>" height="150" width="250" class="img-fluid">
                                    </li>  
                                <p class="card-description" style="padding-top: 20px;">Contact Information</p>
                                <ul class="about">
                                    <li class="about-items">
                                        <i class="mdi mdi-phone icon-sm "></i>
                                        <span class="about-item-name">Phone:  </span>
                                        <span class="about-item-detail">
                                            <?php echo $row['p_phone_no']; ?>
                                        </span>
                                    </li>
                                    <li class="about-items">
                                        <i class="mdi mdi-email-outline icon-sm "></i>
                                        <span class="about-item-name">Email:</span>
                                        <span class="about-item-detail">
                                            <a href="mailto:<?php echo $row['p_email']; ?>"><?php echo $row['p_email']; ?></a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card" style="width:850px;">
                        <div class="card-body">
                                <center><h2>Booking Request Details</h2></center>
                                <table class="table table-striped" style="border: 2px solid #ddd;">
                                    <tr style="font-size: 12px;">
                                        <th>User Name</th>
                                        <th>User Address</th>
                                        <th>Parcel Type</th>
                                        <th>Weight</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Date</th>
                                        <th>Driver Name</th>
                                        <th>Parcel Collect</th>
                                        <th>Send to driver</th>
                                        <th>Remove</th>
                                    </tr>
                                    <?php
                                        $qr4 = "SELECT * FROM `parcel_booking_detail` WHERE `p_id`=$id AND `isshow`=1 AND `isactive`=1";
                                        $r4=mysqli_query($conn,$qr4);
                                        if (mysqli_num_rows($r4)>0) 
                                        {
                                            while ($ro3 = mysqli_fetch_assoc($r4))
                                            {
                                                $uid1 = $ro3['u_id'];
                                                $qr7 = "SELECT * FROM user_registration WHERE u_id=$uid1";
                                                $r7=mysqli_query($conn,$qr7);
                                                $ro7=mysqli_fetch_assoc($r7);

                                                $pid1 = $ro3['p_type_id'];
                                                $qr3 = "SELECT * FROM parcel_type WHERE p_type_id=$pid1";
                                                $r3=mysqli_query($conn,$qr3);
                                                $ro5=mysqli_fetch_assoc($r3);

                                                $sc1=$ro3['source'];
                                                $qr9 = "SELECT * FROM city WHERE `city_id`=$sc1";
                                                $r9=mysqli_query($conn,$qr9);
                                                $ro9=mysqli_fetch_assoc($r9);

                                                $dc1=$ro3['destination_city_id'];
                                                $qr11 = "SELECT * FROM city WHERE `city_id`=$dc1";
                                                $r11=mysqli_query($conn,$qr11);
                                                $ro11=mysqli_fetch_assoc($r11);

                                                $bid1=$ro3['booking_id'];
                                                $qr13 = "SELECT * FROM history WHERE `booking_id`=$bid1";
                                                $r13=mysqli_query($conn,$qr13);
                                                $ro13=mysqli_fetch_assoc($r13);
                                                $dn=$ro13['d_id'];

                                                $qr15 = "SELECT * FROM driver_registration WHERE `d_id`=$dn";
                                                $r15=mysqli_query($conn,$qr15);
                                                $ro15=mysqli_fetch_assoc($r15);
                                            ?>
                                        <tr style="font-size: 14px;">
                                            <td><?php echo $ro7['u_name']; ?></td>
                                            <td><?php echo $ro7['u_address']; ?></td>
                                            <td><?php echo $ro5['p_type_name'];?></td>
                                            <td><?php echo $ro3['weight']; ?></td>
                                            <td><?php echo $ro9['cname']; ?></td>
                                            <td><?php echo $ro11['cname']; ?></td>
                                            <td><?php echo $ro3['trip_date']; ?></td>
                                            <td><?php echo $ro15['d_name']; ?></td>
                                            <td>
                                            <?php
                                                if($ro13['p_col']!=1)
                                                {?>
                                                    <a href="accept1.php?id2=<?php echo $ro3['booking_id'];?>">Pending</a>
                                                <?php
                                                }
                                                else{?>
                                                    <p>Collected</p>
                                                <?php
                                                }
                                                ?>
                                                    </td>
                                            <td>
                                            <?php
                                                if($ro13['d_col']!=1)
                                                {?>
                                                    <a href="accept2.php?id3=<?php echo $ro3['booking_id'];?>">Pending</a>
                                                <?php
                                                }
                                                else{?>
                                                    <p>Given</p>
                                                <?php
                                                }
                                                ?> 
                                            </td>
                                            <td>
                                            <?php
                                                if($ro13['d_col']==1 && $ro13['p_col']==1)
                                                {?>
                                                    <a href="remove2.php?id=<?php echo $ro3['booking_id'];?>">Remove</a>
                                                <?php
                                                }
                                                else{?>
                                                    <p style="font-size:12px;">Not Able</p>
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
                                            }
                                            ?>
                                </table> 
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card" style="margin-top: 20px;">
                    <div class="card">
                            <div class="card-body">
                                <center><h2>Booking Request Details</h2></center>
                                <table class="table table-striped" style="border: 2px solid #ddd;">
                                    <tr style="font-size: 14px">
                                        <th>User Name</th>
                                        <th>Weight</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Parcel_type</th>
                                        <th>U2 Name</th>
                                        <th>U2 Phone No.</th>
                                        <th>U2 photo</th>
                                        <th>U2 Address</th>
                                        <th>Date</th>
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

                                                $sc=$row3['source'];
                                                $qry9 = "SELECT * FROM city WHERE `city_id`=$sc";
                                                $rs9=mysqli_query($conn,$qry9);
                                                $row9=mysqli_fetch_assoc($rs9);

                                                $dc=$row3['destination_city_id'];
                                                $qry11 = "SELECT * FROM city WHERE `city_id`=$dc";
                                                $rs11=mysqli_query($conn,$qry11);
                                                $row11=mysqli_fetch_assoc($rs11);

                                    ?>
                                    <tr style="font-size: 14px;">
                                        <td><?php echo $row7['u_name']; ?></td>
                                        <td><?php echo $row3['weight']; ?></td>
                                        <td><?php echo $row9['cname']; ?></td>
                                        <td><?php echo $row11['cname']; ?></td>
                                        <td><?php echo $row5['p_type_name'];?></td>
                                        <td><?php echo $row3['u2_name'];?></td>
                                        <td><?php echo $row3['u2_phone_no'];?></td>
                                        <td><img src="img/userprofile1/<?php echo $row3['u2_photo'];?>" width="50px" height="50px"></td>
                                        <td><?php echo $row3['u2_address'];?></td>
                                        <td><?php echo $row3['trip_date'];?></td>
                                        <td>
                                        <?php
                                        $qry13 = "SELECT * FROM `trip` WHERE source=$sc AND destination=$dc";
                                        $rs13=mysqli_query($conn,$qry13);
                                        $row13=mysqli_fetch_assoc($rs13);
                                        if(mysqli_num_rows($rs13)>0)
                                        {?>
                                            <a href="accept.php?id1=<?php echo $row3['booking_id'];?>">Accept</a>
                                        <?php
                                        }
                                        else{?>
                                            <p>Trip not start yet.</p>
                                        <?php
                                        }
                                        ?>
                                        </td>
                                        <td><a href="reject.php?id1=<?php echo $row3['booking_id']; ?>">Reject</a></td>

                                    </tr>
                                <?php
                                        }
                                    
                                }
                                else
                                {
                                    echo "0 Row Found";
                                }
                                ?>
                                </table> 
                            </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card" style="margin-top: 20px;">
                    <div class="card">
                            <div class="card-body">
                                <center><h2>Delivery Details</h2></center>
                                <table class="table table-striped" style="border: 2px solid #ddd;">
                                    <tr style="font-size: 14px">
                                        <th>User Name</th>
                                        <th>Weight</th>
                                        <th>Source</th>
                                        <th>Destination</th>
                                        <th>Parcel_type</th>
                                        <th>U2 Name</th>
                                        <th>U2 Email</th>
                                        <th>U2 Phone No.</th>
                                        <th>U2 Address</th>
                                        <th>U2 photo</th>
                                        <th>Parcel Collection <br>from Driver </th>
                                        <th>Delivery</th>
                                        <th>Remove</th>
                                    </tr>
                                    <?php
                                        $p=$row['city_id'];         
                                        $qrye4 = "SELECT * FROM `parcel_booking_detail` WHERE `isactive`=1 AND `destination_city_id`=$p AND `shiped`=1 AND `ispshow`=1";
                                        $rse4=mysqli_query($conn,$qrye4);
                                        if (mysqli_num_rows($rse4)>0) 
                                        {
                                            while ($row3 = mysqli_fetch_assoc($rse4))
                                            {
                                                $bid2=$row3['booking_id'];
                                                $uid = $row3['u_id'];
                                                $qry7 = "SELECT * FROM user_registration WHERE u_id=$uid";
                                                $rs7=mysqli_query($conn,$qry7);
                                                $row7=mysqli_fetch_assoc($rs7);

                                                $pid = $row3['p_type_id'];
                                                $qry3 = "SELECT * FROM parcel_type WHERE p_type_id=$pid";
                                                $rs3=mysqli_query($conn,$qry3);
                                                $row5=mysqli_fetch_assoc($rs3);

                                                $sc=$row3['source'];
                                                $qry9 = "SELECT * FROM city WHERE `city_id`=$sc";
                                                $rs9=mysqli_query($conn,$qry9);
                                                $row9=mysqli_fetch_assoc($rs9);

                                                $dc=$row3['destination_city_id'];
                                                $qry11 = "SELECT * FROM city WHERE `city_id`=$dc";
                                                $rs11=mysqli_query($conn,$qry11);
                                                $row11=mysqli_fetch_assoc($rs11);

                                    ?>
                                    <tr style="font-size: 14px;">
                                        <td><?php echo $row7['u_name']; ?></td>
                                        <td><?php echo $row3['weight']; ?></td>
                                        <td><?php echo $row9['cname']; ?></td>
                                        <td><?php echo $row11['cname']; ?></td>
                                        <td><?php echo $row5['p_type_name'];?></td>
                                        <td><?php echo $row3['u2_name'];?></td>
                                        <td><?php echo $row3['u2_email'];?></td>
                                        <td><?php echo $row3['u2_phone_no'];?></td>
                                        <td><?php echo $row3['u2_address'];?></td>
                                        <td><img src="img/userprofile1/<?php echo $row3['u2_photo'];?>" width="50px" height="50px"></td>
                                        <td>
                                        <?php
                                        $qry13 = "SELECT * FROM `history` WHERE `booking_id`=$bid2";
                                        $rs13=mysqli_query($conn,$qry13);
                                        $row13=mysqli_fetch_assoc($rs13);
                                        if($row13['p1_col']!=1)
                                        {?>
                                            <a href="accept3.php?id4=<?php echo $row3['booking_id'];?>">Pending</a>
                                        <?php
                                        }
                                        else{?>
                                            <p>Collected</p>
                                        <?php
                                        }
                                        ?>
                                        </td>
                                        <td>
                                            <?php
                                            $qry15 = "SELECT * FROM `history` WHERE `booking_id`=$bid2";
                                            $rs15=mysqli_query($conn,$qry15);
                                            $row15=mysqli_fetch_assoc($rs15);
                                            if($row15['dl_col']!=1)
                                            {?>
                                                <a href="accept4.php?id5=<?php echo $row3['booking_id'];?>">Pending</a>
                                            <?php
                                            }
                                            else{?>
                                                <p>Delivered</p>
                                            <?php
                                            }
                                            ?> 
                                        </td>
                                        <td>
                                            <?php
                                                if($row15['p1_col']==1 && $row15['dl_col']==1)
                                                {?>
                                                    <a href="remove3.php?id=<?php echo $row3['booking_id'];?>">Remove</a>
                                                <?php
                                                }
                                                else{?>
                                                    <p>Not Able</p>
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