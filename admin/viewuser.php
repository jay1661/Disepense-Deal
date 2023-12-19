<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM user_registration WHERE `isactive`=1";
    $rs = mysqli_query($conn,$qry);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="viewuser.php">View_user</a>
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
                    <th>Photo</th>
                    <th>Adreess</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Block</th>
                    <th>Delete</th>
                </tr>
                <?php
                    if (mysqli_num_rows($rs)>0) 
                    {
                        while ($row = mysqli_fetch_assoc($rs))
                        {
                            $qry1 = "SELECT * FROM user_registration WHERE `isactive`=1";
                            $rs1 = mysqli_query($conn,$qry1);
                            $sid = $row['state_id'];
                            $qry2 = "SELECT * FROM state WHERE state_id=$sid";
                            $rs2 = mysqli_query($conn,$qry2);
                            $row2=mysqli_fetch_assoc($rs2);
                            $cid = $row['city_id'];
                            $qry3 = "SELECT * FROM city WHERE city_id=$cid";
                            $rs3 = mysqli_query($conn,$qry3);
                            $row3=mysqli_fetch_assoc($rs3);
                            $aid = $row['area_id'];
                            $qry4 = "SELECT * FROM area WHERE area_id=$aid";
                            $rs4 = mysqli_query($conn,$qry4);
                            $row4=mysqli_fetch_assoc($rs4);
                            $sid = $row['u_seq_id'];
                            $qry5 = "SELECT * FROM security_question WHERE seq_id=$sid";
                            $rs5 = mysqli_query($conn,$qry5);
                            $row5=mysqli_fetch_assoc($rs5);
                ?>
                <tr>
                    <td><?php echo $row['u_id']; ?></td>
                    <td><?php echo $row['u_name']; ?></td>
                    <td><img src="../img/userprofile/<?php echo $row['u_photo'];?>" width="50px" height="50px"></td>
                    <td><?php echo $row['u_address']; ?></td>
                    <td><?php echo $row4['aname']; ?></td>
                    <td><?php echo $row3['cname']; ?></td>
                    <td><?php echo $row2['sname']; ?></td>
                    <td><?php echo $row['u_email']; ?></td>
                    <td><?php echo $row['u_phone_no']; ?></td>
                    <td><?php 
                    if($row['isactive'] == 1){
                        ?>
                        <a href="userstatus.php?id=<?php echo $row['u_id'];?>">Block</a>
                    <?php
                    }
                    elseif($row['isactive'] == 0){
                        ?>
                        <a href="userstatus.php?id=<?php echo $row['u_id'];?>">Unblock</a>
                        <?php
                        }
                        ?>
                        </td>
                    <td><a href="deleteuser.php?id=<?php echo $row['u_id'];?>">Delete</a></td>
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