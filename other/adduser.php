<?php
    require('dbconnect.php');

    $qry = "SELECT * FROM state_id WHERE isactive=1";
    $qry1 = "SELECT * FROM city_id WHERE isactive=1";
    $qry2 = "SELECT * FROM area_id WHERE isactive=1";
    $rs = mysqli_query($conn,$qry);
    $rs1 = mysqli_query($conn,$qry1);
    $rs2 = mysqli_query($conn,$qry2);
?>

<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="adduser.php">Add_user</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <form name="qryform" id="qryform" method="post" action="process.php" onsubmit="return(validate());" novalidate="novalidate" enctype="multipart/form-data">
            <div class="form-group">
                <label>Id:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="id">
            </div>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="fn">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Password" name="pass">
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Password" name="cpass">
            </div>
            <div class="form-group">
                <label>Photo:</label>
                <input type="file" class="form-control" name="fileToUpload">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Address" name="addr">
            </div> 
            <div class="form-group">
                <label>Area:</label>
                <select name="aid" class="form-control">
                     <option>Select area</option>
                    <?php
                        if (mysqli_num_rows($rs2)>0) 
                        {
                            while ($row=mysqli_fetch_assoc($rs2)) 
                            {
                    ?>
                            <option value="<?php  $row['area_id']; ?>">
                                <?php echo $row['area_id']." - ".$row['name']; ?>
                                    
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
                            while ($row=mysqli_fetch_assoc($rs1)) 
                            {
                    ?>
                            <option value="<?php  $row['city_id']; ?>">
                                <?php echo $row['city_id']." - ".$row['name']; ?>
                                    
                            </option>
                    <?php
                            }
                        }
                    ?>
                </select>
            </div> 
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
                            <option value="<?php  $row['state_id']; ?>">
                                <?php echo $row['state_id']." - ".$row['Name']; ?>
                                    
                            </option>
                    <?php
                            }
                        }
                    ?>
                </select>
            </div>  
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
            </div>      
            <div class="form-group">
                <label>Phone No.:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="contact">
            </div>
            <div class="form-group">
                <label>Sequrity Question:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter security Question" name="seq">
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