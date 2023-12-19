<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM trip";
    $rs = mysqli_query($conn,$qry);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="viewarea.php">View_Trip</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Trip_id</th>
                    <th>Driver_id</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Vehicle_Model</th>
                    <th>Vehiicle_No</th>
                    <th>Vehicle_photo</th>
                    <th>Trip_Time</th>
                    <th>Isactive</th>
                    <th>Delete</th>
                </tr>
                <?php
                    if (mysqli_num_rows($rs)>0) 
                    {
                        while ($row = mysqli_fetch_assoc($rs))
                        {
                            $tid = $row['trip_id'];
                            $qry1 = "SELECT * FROM trip WHERE trip_id=$tid";
                            $rs1 = mysqli_query($conn,$qry1);
                            $row1=mysqli_fetch_assoc($rs1);
                            $did = $row['d_id'];
                            $qry2 = "SELECT * FROM driver_registration WHERE d_id=$did";
                            $rs2 = mysqli_query($conn,$qry2);
                            $row2=mysqli_fetch_assoc($rs2);
                            $sid = $row['source'];
                            $qry3 = "SELECT * FROM city WHERE city_id=$sid";
                            $rs3=mysqli_query($conn,$qry3);
                            $row3=mysqli_fetch_assoc($rs3);
                            $qry4 = "SELECT * FROM city WHERE city_id='".$row['destination']."'";
                            $rs4=mysqli_query($conn,$qry4);
                            $row4=mysqli_fetch_assoc($rs4);
                ?>
                <tr>
                    <td><?php echo $row['trip_id']; ?></td>
                    <td><?php echo $row2['d_name']; ?></td>
                    <td><?php echo $row3['cname']; ?></td>
                    <td><?php echo $row4['cname']; ?></td>
                    <td><?php echo $row['vehicle_model'];?></td>
                    <td><?php echo $row['vehicle_no'];?></td>
                    <td><img src="../img/vehicle/<?php echo $row['vehicle_photo'];?>" width="50px" height="50px"></td>
                    <td><?php echo $row['trip_time'];?></td>
                    <td>
                        <?php
                            if($row['isactive']!=1){
                                ?>
                                    <a href="trip1.php?id=<?php echo $row['trip_id'];?>">Activate</a>
                                <?php
                            }
                            else{
                                ?>
                                    <p>Activated</p>
                                <?php
                            }
                        ?>
                    </td>
                    <td><a href="deletetrip.php?id=<?php echo $row['trip_id'];?>">Delete</a></td>
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