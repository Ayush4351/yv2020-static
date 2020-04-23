<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
	<title>Pronites | YouthVibe - LPU's Global Open Fest</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/base.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/slider.css" />
    <!-- Custom Page Ends here -->
    <!-- ============================================================================================================================================ -->
    <!-- ============================================================================================================================================ -->
	
	<!-- Common Header Starts Here -->
	<?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/top-cache.php');
        
    ?>
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.php');
        
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
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar.php');
    ?>
    <!-- Common Header Ends here -->
    <!-- ================================================================================================================================================== -->
    <!-- ================================================================================================================================================== -->
	
    <!-- Main Slider Starts Here -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="font-size: 30px">Pro - Nights YV 2020</h1>
            </div>
        </div>
    </div>

	<main>
		<div class="content">
			<!-- Pieces Slider -->
			<div class="pieces-slider">
				<!-- Each slide with corresponding image and text -->
				<div class="pieces-slider__slide">
					<img class="pieces-slider__image" src="/assets/img/pronite/julia-bliss.jpeg" alt="">
					<h2 class="pieces-slider__text" id="date_pronite">14th Feb 2020</h2>
				</div>
				<div class="pieces-slider__slide">
					<img class="pieces-slider__image" src="/assets/img/pronite/lagori.jpg" alt="">
					<h2 class="pieces-slider__text">15th Feb 2020</h2>
				</div>
				<div class="pieces-slider__slide">
					<img class="pieces-slider__image" src="/assets/img/pronite/sunburn.jpeg" alt="">
					<h2 class="pieces-slider__text">16th Feb 2020</h2>
				</div>
				<!-- Canvas to draw the pieces -->
				<canvas class="pieces-slider__canvas"></canvas>
				<!-- Slider buttons: prev and next -->
				<button class="pieces-slider__button pieces-slider__button--prev"><i class="fas fa-arrow-left"></i></button>
				<button class="pieces-slider__button pieces-slider__button--next"><i class="fas fa-arrow-right"></i></button>
			</div>
		</div>
    </main>
	
	<?php
        include_once('includes/footer.php');
    ?>
	<!-- Custom Js Starts Here -->
	<script src='/assets/js/anime.min.js'></script>
	<script src='/assets/js/pieces.min.js'></script>
	<script src='/assets/js/demo.js'></script>
	<script>
		document.documentElement.className="js";
		var supportsCssVars=function(){var e,t=document.createElement("style");
		return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");
	</script>
	<?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>
</body>
</html>