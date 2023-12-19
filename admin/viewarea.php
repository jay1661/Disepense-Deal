<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM area WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="viewarea.php">View_area</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Area_id</th>
                    <th>Area_name</th>
                    <th>City</th>
                    <th>State</th>
                    <th>isactive</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    if (mysqli_num_rows($rs)>0) 
                    {
                        while ($row = mysqli_fetch_assoc($rs))
                        {
                            $sid = $row['state_id'];
                            $qry1 = "SELECT * FROM state WHERE state_id=$sid";
                            $rs1 = mysqli_query($conn,$qry1);
                            $row1=mysqli_fetch_assoc($rs1);
                            $cid = $row['city_id'];
                            $qry2 = "SELECT * FROM city WHERE city_id=$cid";
                            $rs2 = mysqli_query($conn,$qry2);
                            $row2=mysqli_fetch_assoc($rs2);
                ?>
                <tr>
                    <td><?php echo $row['area_id']; ?></td>
                    <td><?php echo $row['aname']; ?></td>
                    <td><?php echo $row2['cname']; ?></td>
                    <td><?php echo $row1['sname']; ?></td>
                    <td><?php echo $row['isactive'];?></td>
                    
                    <td><a href="editarea.php?id=<?php echo $row['area_id'];?>">Edit</a></td>
                    <td><a href="deletearea.php?id=<?php echo $row['area_id'];?>">Delete</a></td>
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