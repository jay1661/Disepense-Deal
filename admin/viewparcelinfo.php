<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM history WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="viewparcelinfo.php">View_parcel_information</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>History_id</th>
                    <th>User Name</th>
                    <th>Driver Name</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Collection</th>
                    <th>Delivery</th>
                    <th>Delete</th>
                </tr>
                <?php
                    if (mysqli_num_rows($rs)>0) 
                    {
                        while ($row = mysqli_fetch_assoc($rs))
                        {
                            $qry1 = "SELECT * FROM history WHERE isactive=1";
                            $rs1 = mysqli_query($conn,$qry1);
                            $uid1=$row['u_id'];
                            $did1=$row['d_id'];
                            $bid1=$row['booking_id'];
                            $qry2 = "SELECT * FROM `user_registration` WHERE `u_id`=$uid1";
                            $rs2 = mysqli_query($conn,$qry2);
                            $row2 = mysqli_fetch_assoc($rs2);
                            $qry3 = "SELECT * FROM `driver_registration` WHERE `d_id`=$did1";
                            $rs3 = mysqli_query($conn,$qry3);
                            $row3 = mysqli_fetch_assoc($rs3);
                            $qry4 = "SELECT * FROM `parcel_booking_detail` WHERE `booking_id`=$bid1";
                            $rs4 = mysqli_query($conn,$qry4);
                            $row4 = mysqli_fetch_assoc($rs4);
                            $sc=$row4['source'];
                            $dc=$row4['destination_city_id'];
                            $qry5 = "SELECT * FROM `city` WHERE `city_id`=$sc";
                            $rs5 = mysqli_query($conn,$qry5);
                            $row5 = mysqli_fetch_assoc($rs5);
                            $qry6 = "SELECT * FROM `city` WHERE `city_id`=$dc";
                            $rs6 = mysqli_query($conn,$qry6);
                            $row6 = mysqli_fetch_assoc($rs6);
                ?>
                <tr>
                    <td><?php echo $row['history_id']; ?></td>
                    <td><?php echo $row2['u_name']; ?></td>
                    <td><?php echo $row3['d_name']; ?></td>
                    <td><?php echo $row5['cname']; ?></td> 
                    <td><?php echo $row6['cname']; ?></td> 
                    <td><?php
                            if($row['p_col']==1){
                                echo ("Collected");
                            }
                            else{
                                echo ("Not Collected");
                            }
                            ?>
                    </td> 
                    <td><?php
                            if($row['dl_col']==1){
                                echo ("Delivered");
                            }
                            else{
                                echo ("Not Delivered");
                            }
                            ?>
                    </td> 
                    <td><a href="deleteparcel.php?id=<?php echo $row['history_id'];?>">Delete</a></td>
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