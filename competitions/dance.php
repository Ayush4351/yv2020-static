<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Competitions > Dance | YouthVibe - LPU's Global Open Fest</title>
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
                                <div class="event__name">Nritya Natraj (Solo): <br><br> Classical Dance</div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 14-02-2020 | 9:00</li>
                                <li class="event__detail">Venue - Baldev Raj Mittal Auditorium</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="https://vormiir.com/yv/rule_book/technical/CodeZilla.pdf" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="pricing-section bg-12">
                    <div class="event event--user">
                        <div class="event__item">
                            <div class="event__deco">
                                <div class="event__name">Virasat Live & Recorded: <br><br> Folk Group Dance</div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 14-02-2020 | 13:00</li>
                                <li class="event__detail">Venue - Baldev Raj Mittal Auditorium</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="https://vormiir.com/yv/rule_book/technical/CodeZilla.pdf" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="pricing-section bg-12">
                    <div class="event event--user">
                        <div class="event__item">
                            <div class="event__deco">
                                <div class="event__name">Dancing Soul: <br><br> Western & Street Dance</div>
                            </div>
                            <ul class="event__details-list">
                                <li class="event__detail">Date & Time - 16-02-2020 | 9:00</li>
                                <li class="event__detail">Venue - Baldev Raj Mittal Auditorium</li>
                            </ul>
                            <a onclick="reg_closed()" class="event__action">Register <i class="lni-add-file size-xs"></i></a>
                            <a href="https://vormiir.com/yv/rule_book/technical/CodeZilla.pdf" target="_blank" class="event__action">Rule Book <i class="lni-download size-xs"></i></a>
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