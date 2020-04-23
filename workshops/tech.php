<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Workshops | YouthVibe - LPU's Global Open Fest</title>
    <link rel="stylesheet" href="/assets/css/category.css">
    <!-- Custom Page Header Ends here -->
    <!-- ============================================================================================================================================ -->
    <!-- ============================================================================================================================================ -->
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/top-cache.php');
        
    ?>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.php');
    ?>
    <style>
        header.site-header
        {
            background: url('/assets/img/youthvibe-poster.png');
        }
    </style>
    
</head>
<body onload="LoadingFunction()">

    <?php

        $pagename = "";
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar.php');
    ?>

    <!-- Loader Ends here -->
    <!-- Common Header Ends here -->
    <!-- ================================================================================================================================================== -->
    <!-- ================================================================================================================================================== -->

    
    <!-- Category Section Starts here -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="features-small-item" style="height: 590px">
                                <div class="icon">
                                    <i><img src="/assets/icons/cyber-security.png" alt=""></i>
                                </div>
                                <h5 class="features-title">ICSS Cyber Security Workshop</h5>
                                <p class="lead" style="font-size: medium">Date : 13/02/2020</p>
                                <p class="lead" style="font-size: medium; color: #c34242;">Organizer : <a href="https://indiancybersecuritysolutions.com/" target="_blank">Indian Cyber Security Solutions</a></p>
                                <p class="lead" style="font-size: medium">Reg. Fee : <span style="color: green">&#8377 200/-</span></p>
                                <a class="register_button" onclick="reg_closed()" rel="nofollow noopener">Register</a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a class="dance">
                                <div class="features-small-item" style="height: 590px">
                                    <div class="icon">
                                        <i><img src="/assets/icons/iot.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">IOT</h5><br>
                                    <p class="lead" style="font-size: medium">Date : 13/02/2020</p>
                                    <p class="lead" style="font-size: medium; color: #c34242">Organizer : <a href="http://fizrobotics.com/" target="_blank">Fiz Robotics Solutions</a></p>
                                    <p class="lead" style="font-size: medium">Reg. Fee : <span style="color: green">&#8377 350/-</span></p>
                                    <br><br>
                                    <a class="register_button" onclick="reg_closed()" rel="nofollow noopener">Register</a>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a href="music.php">
                                <div class="features-small-item" style="height: 590px">
                                    <div class="icon">
                                        <i><img src="/assets/icons/robot.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Hybrid Robotics</h5><br>
                                    <p class="lead" style="font-size: medium">Date : 14/02/2020</p>
                                    <p class="lead" style="font-size: medium; color: #c34242">Organizer : <a href="http://fizrobotics.com/" target="_blank">Fiz Robotics Solutions</a></p>
                                    <p class="lead" style="font-size: medium">Reg. Fee : <span style="color: green">&#8377 350/-</span></p>
                                    <br><br>
                                    <a class="register_button" onclick="reg_closed()" rel="nofollow noopener">Register</a><br><br>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section Ends Here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->

    <?php

       include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.php');
    
    ?>
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>

</body>
</html>