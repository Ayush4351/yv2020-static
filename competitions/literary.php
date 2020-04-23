<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Competitions > Literary | YouthVibe - LPU's Global Open Fest</title>
    <link rel="stylesheet" href="/assets/css/qualifiers.css">
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

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <section class="pricing-section bg-12">
                    <div class="event event--user">
                        <div class="event__item">
                            <div class="event__deco">
                                <div class="event__name">YV Ultimate Spokes Person <br><br> (Hindi/English)</div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 14-02-2020 | 9:00</li>
                                <li class="event__detail">Venue - Block 20 - 404</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="#" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="pricing-section bg-12">
                    <div class="event event--user">
                        <div class="event__item">
                            <div class="event__deco">
                                <div class="event__name">Word's Roll - Game of words <br><br> (English)</div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 14-02-2020 | 9:00</li>
                                <li class="event__detail">Venue - Block 29 - 402</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="#" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="pricing-section bg-12">
                    <div class="event event--user">
                        <div class="event__item">
                            <div class="event__deco">
                                <div class="event__name">Kingdom of Poets <br><br> (Hindi/English)</div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 15-02-2020 | 9:00</li>
                                <li class="event__detail">Venue - Block 19 - 310</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="#" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <section class="pricing-section bg-12">
                    <div class="event event--user">
                        <div class="event__item">
                            <div class="event__deco">
                                <div class="event__name">Maha Quiz <br><br><br><br><br></div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 15-02-2020 | 14:00</li>
                                <li class="event__detail">Venue - Block 14 - 301 L</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="#" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="pricing-section bg-12">
                    <div class="event event--user">
                        <div class="event__item">
                            <div class="event__deco">
                                <div class="event__name">Pen-trament- YV Creative <br><br> Writing <br><br> (Hindi/English)</div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 16-02-2020 | 9:00</li>
                                <li class="event__detail">Venue - Block 14 - 101 L</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="#" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <?php
    
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/footer.php');

    ?>
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>
</body>
</html>