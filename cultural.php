<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Competitions > Cultural | YouthVibe - LPU's Global Open Fest</title>
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
                            <a class="art_and_craft" href="/competitions/art-and-craft.php">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="/assets/icons/paint.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Art and Craft</h5>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a class="dance" href="/competitions/dance.php">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="/assets/icons/dance.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Dance</h5>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a href="/competitions/music.php">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="/assets/icons/music.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Music</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a href="/competitions/lifestyle.php">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="/assets/icons/lifestyle.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Lifestyle</h5>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <a href="/competitions/theatre.php">
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i><img src="/assets/icons/theatre.png" alt=""></i>
                                    </div>
                                    <h5 class="features-title">Theatre</h5>
                                    <!-- <p>Contact us immediately if you have a question in mind</p> -->
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