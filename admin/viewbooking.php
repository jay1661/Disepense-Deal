<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM parcel_booking_detail WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="viewbooking.php">View_booking</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Driver Name</th>
                    <th>Parcel Type</th>
                    <th>Weight</th>
                    <th>Source</th>
                    <th>Destination City</th>
                    <th>User2 Name</th>
                    <th>User2 Phone No.</th>
                    <th>User2 Email</th>
                    <th>User2 Photo</th>
                    <th>Delete</th>
                </tr>
                <?php
                    if (mysqli_num_rows($rs)>0) 
                    {
                        while ($row = mysqli_fetch_assoc($rs))
                        {
                            $qry1 = "SELECT * FROM parcel_booking_detail WHERE isactive=1";
                            $rs1 = mysqli_query($conn,$qry1);
                            $tid = $row['trip_id'];
                            $qry11 = "SELECT * FROM trip WHERE trip_id=$tid";
                            $rs11 = mysqli_query($conn,$qry11);
                            $row11 = mysqli_fetch_assoc($rs11);
                            $did = $row11['d_id'];
                            $qry2 = "SELECT * FROM driver_registration WHERE d_id=$did";
                            $rs2 = mysqli_query($conn,$qry2);
                            $row2=mysqli_fetch_assoc($rs2);
                            $pid = $row['p_type_id'];
                            $qry3 = "SELECT * FROM parcel_type WHERE p_type_id=$pid";
                            $rs3 = mysqli_query($conn,$qry3);
                            $row3=mysqli_fetch_assoc($rs3);
                            $uid = $row['u_id'];
                            $qry4 = "SELECT * FROM user_registration WHERE u_id=$uid";
                            $rs4 = mysqli_query($conn,$qry4);
                            $row4=mysqli_fetch_assoc($rs4);
                            $qry5 = "SELECT * FROM trip WHERE d_id=$did";
                            $rs5=mysqli_query($conn,$qry5);
                            $row5=mysqli_fetch_assoc($rs5);
                            $soid = $row5['source'];
                            $qry6 = "SELECT * FROM city WHERE city_id=$soid";
                            $rs6=mysqli_query($conn,$qry6);
                            $row6=mysqli_fetch_assoc($rs6);
                            $deid = $row5['destination'];
                            $qry7 = "SELECT * FROM city WHERE city_id=$deid";
                            $rs7=mysqli_query($conn,$qry7);
                            $row7=mysqli_fetch_assoc($rs7);
                ?>
                <tr>
                    <td><?php echo $row['booking_id']; ?></td>
                    <td><?php echo $row4['u_name']; ?></td>
                    <td><?php echo $row2['d_name']; ?></td>
                    <td><?php echo $row3['p_type_name']; ?></td>
                    <td><?php echo $row['weight']; ?></td>
                    <td><?php echo $row6['cname']; ?></td>
                    <td><?php echo $row7['cname']; ?></td>
                    <td><?php echo $row['u2_name']; ?></td>
                    <td><?php echo $row['u2_phone_no']; ?></td>
                    <td><?php echo $row['u2_email']; ?></td>
                    <td><img src="../img/userprofile1/<?php echo $row['u2_photo'];?>" width="50px" height="50px"></td>
                    <td><a href="deletebooking.php?id=<?php echo $row['booking_id'];?>">Delete</a></td>
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
    <!-- Ads, you can remove these -->
    <div class="col-lg-5 col-md-12 hidden-xs center-text">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Charisma Demo 4 -->
        <ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-5108790028230107" data-ad-slot="9467443105"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <div class="col-lg-5 col-md-12 visible-xs center-text">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Charisma Demo 5 -->
        <ins class="adsbygoogle" style="display:inline-block;width:250px;height:250px" data-ad-client="ca-pub-5108790028230107" data-ad-slot="8957582309"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <!-- Ads end -->
</div><!-- content ends -->
</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<!-- Ad ends -->
<hr>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>