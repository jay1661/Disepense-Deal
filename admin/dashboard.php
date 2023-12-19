<?php
    require('dbconnect.php');
    session_start();
    if (!isset($_SESSION['admin'])) 
    {
        header("location:login.php");
        exit();
    }
    $fn = $_SESSION['fn'];
    $qry = "SELECT * FROM user_registration WHERE `isactive`=1";
    $rs=mysqli_query($conn,$qry);
    $qry1 = "SELECT * FROM driver_registration WHERE `isactive`=1";
    $rs1=mysqli_query($conn,$qry1);
    $qry2 = "SELECT * FROM parcel_registration WHERE `isactive`=1";
    $rs2=mysqli_query($conn,$qry2);
    $qry3 = "SELECT * FROM parcel_booking_detail WHERE `isactive`=1";
    $rs3=mysqli_query($conn,$qry3);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li><a href="dashboard.php">Home</a></li>
    </ul>
</div>
<!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <div class="content">
                    <div class="row home1_analys">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="statistic-box">
                                <div class="small">Happy Customers </div>
                                <h2><span class=count-number><?php echo (mysqli_num_rows($rs)); ?></span></h2>
                                <div class="progress-radial blue">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="statistic-box">
                                <div class="small">Total page views</div>
                                <h2><span class=count-number><?php echo (mysqli_num_rows($rs1)); ?></span></h2>
                                <div class="progress-radial blue">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="statistic-box">
                                <div class="small">Total Users</div>
                                <h2><span class=count-number><?php echo (mysqli_num_rows($rs2)); ?></span></h2>
                                <div class="progress-radial blue">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="statistic-box">
                                <div class="small">Total Drivers</div>
                                <h2><span class=count-number><?php echo (mysqli_num_rows($rs3)); ?></span></h2>
                                <div class="progress-radial blue">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> <!-- ./wrapper -->
    <?php require('footer.php'); ?>