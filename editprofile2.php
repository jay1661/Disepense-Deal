<?php
    require('dbconnect.php');
    session_start();

    $id=$_GET['id'];
    $qrya="SELECT * FROM parcel_registration where p_id=$id";
    $rsa=mysqli_query($conn,$qrya);
    $rowa=mysqli_fetch_assoc($rsa);
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
               <form action="updateprofile2.php" class="contact-form" enctype="multipart/form-data" method="post"> 
                <center><h1>Parcel Team Registration</h1></center>
                <p>Name:</p>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo $rowa['p_name'] ?>"><br>
                <p>Password:</p>
                <input type="password" name="pass" placeholder="Enter Your password" class="form-control" value="<?php echo $rowa['p_password'] ?>"><br><br>
                <p>Photo:</p>
                <input type="file" name="profile" class="form-control">

                <br>
                <p>Email:</p>
                <input type="email" name="mail" placeholder="Enter Your Email" class="form-control" value="<?php echo $rowa['p_email'] ?>"><br>
                <p>Mobile No.</p>
                <input type="text" name="num" placeholder="Enter Your Phone Number" value="<?php echo $rowa['p_phone_no'] ?>">
                <p>Address:</p>
                <textarea name="message" placeholder="Enter Your Address"><?php echo $rowa['p_address'] ?></textarea><br><br>
                <p>Area:</p>
                <select name="aid" class="form-control">
                                     <option>Select Area</option>
                                    <?php
                                        $qry2 = "SELECT * FROM area WHERE isactive=1";
                                        $rs2 = mysqli_query($conn,$qry2);
                                        if (mysqli_num_rows($rs2)>0) 
                                        {
                                            while ($row2=mysqli_fetch_assoc($rs2)) 
                                            {
                                    ?>
                                            <option value="<?php echo $row2['area_id']; ?>"
                                                <?php
                                                    if ($rowa['area_id'] == $row2['area_id']) 
                                                    {
                                                        echo 'selected';
                                                    }
                                                ?>
                                                >
                                                
                                                <?php echo $row2['aname']; ?>
                                                    
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
                                        $qry1 = "SELECT * FROM city WHERE isactive=1";
                                        $rs1 = mysqli_query($conn,$qry1);
                                        if (mysqli_num_rows($rs1)>0) 
                                        {
                                            while ($row1=mysqli_fetch_assoc($rs1)) 
                                            {
                                    ?>
                                            <option value="<?php echo $row1['city_id']; ?>"
                                                <?php
                                                    if ($rowa['city_id'] == $row1['city_id']) 
                                                    {
                                                        echo 'selected';
                                                    }
                                                ?>
                                                >
                                                
                                                <?php echo $row1['cname']; ?>
                                                    
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
                                        $qry = "SELECT * FROM state WHERE isactive=1";
                                        $rs = mysqli_query($conn,$qry);
                                        if (mysqli_num_rows($rs)>0) 
                                        {
                                            while ($row=mysqli_fetch_assoc($rs)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row['state_id']; ?>"
                                             <?php
                                              if($rowa['state_id'] == $row['state_id'])
                                            {
                                                echo 'selected';
                                            }
                                            ?>
                                            >
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
                                        $qry3 = "SELECT * FROM security_question WHERE isactive=1";  
                                        $rs3 = mysqli_query($conn,$qry3);
                                        if (mysqli_num_rows($rs3)>0) 
                                        {
                                            while ($row3=mysqli_fetch_assoc($rs3)) 
                                            {
                                    ?>
                                            <option value="<?php  echo $row3['seq_id']; ?>"
                                                <?php 
                                                if ($rowa['p_seq_id'] == $row3['seq_id']) 
                                                {
                                                    echo 'selected';
                                                }
                                                ?>
                                                >
                                                <?php echo $row3['questionn']; ?> 
                                            </option>
                                    <?php
                                            }
                                        }
                                    ?>
                </select><br>
                <p>Answer</p>
                <input type="text" name="ans" placeholder="Enter Your Answer" class="form-control" value="<?php echo $rowa['answer'] ?>"><br>
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