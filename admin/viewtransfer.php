<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM `transfer`";
    $rs = mysqli_query($conn,$qry);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="viewdriver.php">View_driver</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>U2 Name</th>
                    <th>U2 Phone No.</th> 
                    <th>U2 Email</th>
                    <th>U2 Adreess</th>
                    <th>Accept</th>
                    <th>Collect</th>
                    <th>Delivery</th>
                    <th>Delete</th>
                </tr>
                <?php
                    if (mysqli_num_rows($rs)>0) 
                    {
                        while ($row = mysqli_fetch_assoc($rs))
                        {
                            $qry1 = "SELECT * FROM `transfer`";
                            $rs1 = mysqli_query($conn,$qry1);
                            $uid=$row['u_id'];
                            $qry6 = "SELECT * FROM `user_registration` WHERE `u_id`=$uid";
                            $rs6 = mysqli_query($conn,$qry6);
                            $row6=mysqli_fetch_assoc($rs6);
                ?>
                <tr>
                    <td><?php echo $row['t_id']; ?></td>
                    <td><?php echo $row6['u_name']; ?></td>
                    <td><?php echo $row['source']; ?></td>
                    <td><?php echo $row['destination']; ?></td>
                    <td><?php echo $row['u2_name']; ?></td>
                    <td><?php echo $row['u2_phone_no']; ?></td>
                    <td><?php echo $row['u2_email']; ?></td>
                    <td><?php echo $row['u2_address']; ?></td>
                    <td>
                        <?php
                            if($row['isactive']!=1){
                                ?>
                                    <a href="transfer1.php?id=<?php echo $row['t_id'];?>">Accept</a>
                                <?php
                            }
                            else{
                                ?>
                                    <p>Accepted</p>
                                <?php
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($row['iscollect']!=1){
                                ?>
                                    <a href="transfer2.php?id=<?php echo $row['t_id'];?>">Collect</a>
                                <?php
                            }
                            else{
                                ?>
                                    <p>Collected</p>
                                <?php
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($row['isdeliver']!=1){
                                ?>
                                    <a href="transfer3.php?id=<?php echo $row['t_id'];?>">Delivery Pending</a>
                                <?php
                            }
                            else{
                                ?>
                                    <p>Delivered</p>
                                <?php
                            }
                        ?>
                    </td>
                    <td><a href="deletetransfer.php?id=<?php echo $row['t_id'];?>">Delete</a></td>
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