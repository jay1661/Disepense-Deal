<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="add_driver.php">Add_driver</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <form name="qryform" id="qryform" method="post" action="mail.php" onsubmit="return(validate());" novalidate="novalidate">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Password" name="name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
            </div>      
            <div class="form-group">
                <label>Phone No.:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
            </div>       
            <div class="form-group">
                <label>Address</label>
                <textarea name="Address" class="form-control" id="iq" placeholder="Enter your Address"></textarea>
            </div> 
            <div class="form-group">
                <label>Photo:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
            </div> 
            <div class="form-group">
                <label>Vehicle No.:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Vehicle No." name="phone">
            </div>     
             <div class="form-group">
                <label>Vehicle Type.:</label>
                <select name="sid" class="form-control">
                    <option>Select Vehicle type</option>
                    <option value="1">2-Wheeler</option>
                    <option value="2">4-Wheeler</option>
                </select>
            </div>  
            <div class="form-group">
                <label>Vehicle Photo:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter photo." name="phone">
            </div>
            <div class="form-group">
                <label>Licence:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter licence no." name="phone">
            </div> 
            <div class="form-group">
                <label>Area:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter licence no." name="phone">
            </div> 
            <div class="form-group">
                <label>City:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter licence no." name="phone">
            </div> 
            <div class="form-group">
                <label>State:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter licence no." name="phone">
            </div>
            <div class="form-group">
                <label>Sequrity Question:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter licence no." name="phone">
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