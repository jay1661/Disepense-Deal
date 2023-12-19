<body>
    <div class="wrap-sticky">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/resource/logo6060.png" class="logo logo-scrolled" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="" data-out="">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        
                        <li><a href="team.php">Team</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <?php 
                            if (isset($_SESSION['id'])) 
                            {
                                if($_SESSION['user']==1)
                                {
                                 ?>
                                    <li><a href="user_profile.php">Profile</a></li>     
                                <?php    
                                }
                                else if($_SESSION['driver']==1)
                                {
                                ?>
                                <li><a href="driver_profile.php">Profile</a></li>
                                <?php                                  
                                }  
                                else if($_SESSION['parcel']==1)
                                {
                                ?>
                                <li><a href="parcel_profile.php">Profile</a></li>
                                <?php                                  
                                }            
                        ?>
                            <li><a href="logout.php">Logout</a></li>
                        <?php
                            }
                            else
                            {
                                ?>
                                <!-- <li><a href="adddriver.php">Become Driver</a></li>  -->
                                <li><a href="login.php">Login</a></li>
                            <?php
                            }
                         ?>
                                
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    <!--header end-->