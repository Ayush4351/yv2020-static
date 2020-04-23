<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Accomodation | YouthVibe - LPU's Global Open Fest</title>
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
        $pagename = "accomodation";
        include_once('includes/navbar.php');
    ?>

    <!-- Common Header Ends here -->
    <!-- ================================================================================================================================================== -->
    <!-- ================================================================================================================================================== -->

    <div class="container">
        <div class="terms_and_conditions">
            <p class="lead"><h2>Policy for Accommodation</h2></p>
            <ul style="font-size: 25px;">
                <li>Reg. fee for Accomodation is <span style="color: green">&#8377 100 / person / day</span> (Food is not included)</li>
                <li>Food is not included in the accomodation, however many Kiosks and canteens are available inside campus, participants can arrange their food from there.</li>    
                <li style="color: #c34242; font-weight:bolder">Money deposited is non-refundable in any case.</li>
                <li>Participants will not be allowed to avail accommodation facilities if residing within 100km radius of venue.</li>
                <li>Separate accommodation facilities will be provided for both girls and boys.</li>
                <li>Accommodation will be provided on first come first serve basis.</li>
                <li>No accommodation will be provided to the participants of workshops.</li>
                <button class="btn btn-success btn-lg" onclick="booking()">Book Now</button>
            </ul>
        </div>
    </div>


    <?php
        include_once('includes/footer.php')
    ?>
    <script type="text/javascript">
        function booking() {
            Swal.fire({
                icon: 'info',
                title: 'Sorry...',
                text: 'We are not accepting accomodation bookings anymore',
            })
        }
    </script>

    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>
</body>
</html>