<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Competitions > Technical and Management | YouthVibe - LPU's Global Open Fest</title>
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

        $pagename = "competitions";
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
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <a class="art_and_craft" href="/competitions/technical.php">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="/assets/icons/support.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Technical</h5>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <a class="dance" href="/competitions/management.php">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="/assets/icons/user.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Management</h5>
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