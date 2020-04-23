<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Feedback | YouthVibe - LPU's Global Open Fest</title>
    <!-- Custom Page Ends here -->
    <!-- ============================================================================================================================================ -->
    <!-- ============================================================================================================================================ -->
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/top-cache.php');
        
    ?>
    <?php
        include_once('includes/header.php');
    ?>
    <style>
        header.site-header
        {
            background: url('assets/img/youthvibe-poster.png');
        }
    </style>
</head>
<body onload="LoadingFunction()">
    <?php
        $pagename = "";
        include_once('includes/navbar.php');
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScN_wCF7d8EdNKz3-0b-kL0T60tMpNLC6yRkqPMuEaIw2bdBA/viewform?embedded=true" width="100%" height="2700px" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>
    </div>
    <?php
        include_once('includes/footer.php')
    ?>
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>
</body>
</html>