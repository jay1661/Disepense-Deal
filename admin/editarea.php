<?php
    require('dbconnect.php');
    $qry = "SELECT * FROM state WHERE isactive=1";
    $qry1 = "SELECT * FROM city WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
    $rs1 = mysqli_query($conn,$qry1);

    $id=$_GET['id'];
    $qrya="SELECT * FROM area where area_id=$id";
    $rsa=mysqli_query($conn,$qrya);
    $rowa=mysqli_fetch_assoc($rsa);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>    
        </li>
        <li>
            <a href="addarea.php">Add_area</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <form name="qryform" id="qryform" method="POST" action="updatearea.php" onsubmit="return(validate());" novalidate="novalidate">
            <div class="form-group">
                <label>State:</label>
                <select name="sid" class="form-control">
                     <option>Select State</option>
                    <?php
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
                </select>
            </div>
            <div class="form-group">
                <label>City:</label>
                <select name="cid" class="form-control">
                     <option>Select City</option>
                    <?php
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
                </select>
            </div>
            <div class="form-group">
                <label>Area:</label>
                <input type="text" class="form-control" placeholder="Enter Area" name="area" 
                value="<?php echo $rowa['aname'];?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
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