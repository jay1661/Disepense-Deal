<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="addbooking.php">Add_booking</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <form name="qryform" id="qryform" method="post" action="bookking.php" onsubmit="return(validate());" novalidate="novalidate">
            <div class="form-group">
                <label>User Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter User Name" name="name">
            </div>
            <div class="form-group">
                <label>Driver Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Driver Name" name="name">
            </div>
            <div class="form-group">
                <label>Parcel type:</label>
                <input type="email" class="form-control" id="name" placeholder="Enter Parcel Type" name="email">
            </div>      
            <div class="form-group">
                <label>Weight:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Weight." name="phone">
            </div>       
            <div class="form-group">
                <label>Destination Area</label>
                <input type="text" name="Address" class="form-control" id="iq" placeholder="Enter Destination Area">
            </div>
            <div class="form-group">
                <label>Destination City</label>
                <input type="text" name="Address" class="form-control" id="iq" placeholder="Enter Destination City">
            </div>
            <div class="form-group">
                <label>User2 Name:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter User2 Name" name="phone">
            </div>
            <div class="form-group">
                <label>User2 Phone No.:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter User2 Phone No." name="phone">
            </div>
            <div class="form-group">
                <label>User2 Email:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter User2 Email" name="phone">
            </div>
            <div class="form-group">
                <label>User2 Photo:</label>
                <input type="file" class="form-control" name="fileToUpload">
            </div>      
            <button type="submit" class="btn btn-primary">Submit</button>
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