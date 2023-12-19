<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>Dispense Deal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
     <link href="style1.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.png">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php"> 
                <!--<img alt="Dispense_deal logo" src="img/mainlogo.png" class="hidden-xs"/>-->
                <span>Dispense_deal</span>
            </a>

            <!-- user dropdown starts -->
            <div class="pull-right" style="margin: 10px;">
                <ul style="display: inline-block;">
                    <li>
                        <a href="logout.php" style="display: inline-block;text-decoration:none; color: white; font-size: 20px;">Logout</a>
                    </li>
                </ul>                 
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="dashboard.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                       
                       <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Manage Area</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="addarea.php">Add Area</a></li>
                                <li><a href="viewarea.php">View Area</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Manage Category</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="addcategory.php">Add Category</a></li>
                                <li><a href="viewcategory.php">View Category</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Manage City</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="addcity.php">Add City</a></li>
                                <li><a href="viewcity.php">View City</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Manage Sec. Que</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="addseq.php">Add Sec. Que</a></li>
                                <li><a href="viewseq.php">View Sec. Que</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>Manage State</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="addstate.php">Add State</a></li>
                                <li><a href="viewstate.php">View State</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="viewbooking.php"><i class="glyphicon glyphicon-eye-open"></i><span>View Booking</span></a>
                        </li> 
                        <li><a class="ajax-link" href="viewparcelinfo.php"><i class="glyphicon glyphicon-eye-open"></i><span>View parcel Info</span></a>
                        </li> 
                        <li><a class="ajax-link" href="viewtransfer.php"><i class="glyphicon glyphicon-eye-open"></i><span>View Transfer</span></a></li>
                        <li><a class="ajax-link" href="viewparcelteam.php"><i class="glyphicon glyphicon-eye-open"></i><span>View Parcel team</span></a>
                        </li> 
                        <li><a class="ajax-link" href="viewdriver.php"><i class="glyphicon glyphicon-eye-open"></i><span>View Driver</span></a></li> 
                        <li><a class="ajax-link" href="viewuser.php"><i class="glyphicon glyphicon-eye-open"></i><span>View User</span></a></li> 
                        <li><a class="ajax-link" href="viewtrip.php"><i class="glyphicon glyphicon-eye-open"></i><span>View Trip</span></a>
                        </li>    
                          
                         <li><a class="ajax-link" href="viewcontact.php"><i class="glyphicon glyphicon-eye-open"></i><span>View Contact</span></a>             
                        <li><a class="ajax-link" href="viewfeedback.php"><i class="glyphicon glyphicon-eye-open"></i><span>View Feedback</span></a>
                        </li>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->