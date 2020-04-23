<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>About LPU | YouthVibe - LPU's Global Open Fest</title>
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
    <!-- Common Header Ends here -->
    <!-- ================================================================================================================================================== -->
    <!-- ================================================================================================================================================== -->

    <!-- Text Container Section Starts here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="about-lpu" style="text-align: justify;">
                    <h1 style="font-size: 3em;">About LPU</h1>
                    <p class="lead">For more information please visit <a href="https://lpu.in" target="_blank">lpu.in</a></p>
                    <p class="lead">Lovely Professional University is devoted to the pursuit of excellence. With a high-tech campus, 3500 faculty and staff, and innovative curriculum and pedagogy, the university seeks to develop leaders who make the difference globally.</p>
                    <p class="lead">Committed to delivering world class education, LPU is a part of several international organisations and has connections with universities worldwide. LPU made headlines last year as they hosted the 106th INDIAN SCIENCE CONGRESS, inaugurated by the Hon. Prime Minister of India, Shri Narendra Modi. LPU has also hosted several distinguished dignitaries and Ambassadors from various countries, for a wide array of events, from the One India Celebration to the decade celebrations of One World. It enjoys an enviable track record of launching its students into national and global super brands.</p>
                    <p class="lead">Situated on the National Highway - 44, at the entrance of Jalandhar City, LPU is spread over 600 acres of land. With beautifully architecture buildings, it is the largest private university in the country with an annual average strength of 25000 students including undergraduates, graduates and professional students.</p>
                    <blockquote class="blockquote">
                        <p class="mb-0">The university offers a multitude of cultural, sports and community service activities, facilitated through its many student clubs and organisations. The university hosts a state-of-the-art indoor sports stadium equipped with an Olympic level swimming pool. There is a mall within the campus that houses an in-campus Uni-Hotel, along with a bowling alley, and a multi gym. The campus also has a Uni-Hospital for immediate medical care, fire station, a post office, and various banks – facilities that make LPU a fulfilled, safe, and comfortable environment for the students.</p>
                        <footer class="blockquote-footer">
                            <cite title="Source Title">YouthVibe :: LPU's Global Open Fest</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- Text Container Section Ends here -->


    <?php
        include_once('includes/footer.php')
    ?>
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>
</body>
</html>