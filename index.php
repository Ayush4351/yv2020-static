<!DOCTYPE html>
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>YouthVibe - LPU's Global Open Fest</title>
    <!-- Custom Page Ends here -->
    <!-- ============================================================================================================================================ -->
    <!-- ============================================================================================================================================ -->
    
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/top-cache.php');
        
    ?>

    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/header.php');
        
    ?>

</head>
<body onload="LoadingFunction()">
    <?php
        $pagename = "home";
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar.php');
    ?>
    <!-- Common Header Ends here -->
    <!-- ================================================================================================================================================== -->
    <!-- ================================================================================================================================================== -->
    
    
    <!-- Highlighted Section for Front Page Starts Here -->
    <div class="top-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-holder">
                        <img src="assets/img/logo-icon.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 style="color: #fff">Theme Of YV2020:</h1>
                    <h3 style="color: #fff;" class="tagline">Equity</h3>
                    <h3 style="color: #fff;" class="tagline">Diversity</h3>
                    <h3 style="color: #fff;" class="tagline">Inclusivity</h3>
                    <p>It is high time to enter the funfair of the most awaited event of the year, Youth Vibe, exclusively by Vertos, that shall be even more bigger, better and magnificent.</p>
                    <a href="about-yv.php" class="button">Know More</a>
                </div>
            </div>
        </div>
    </div>

    <div id="highlights">
        <div class="container">
            <div class="row" id="highlight-inner">
                <div class="col-md-4 highlight-item text-center">
                    <div class="image-holder">
                        <img src="assets/img/social_summit.png" style="height: 250px"; width="250px" alt="">
                    </div>
                    <!-- <h4>MULTIMEDIA FILM</h4> -->
                </div>
                <div class="col-md-4 text-center center-logo">
                    <div class="circle">
                        <div class="img logo">
                            <div class="col-md-12">
                                <img src="assets/img/logo_black.png" alt="">
                            </div>
                        </div>
                        <!-- <h3>WHATS NEW<br> IN YV 2020?</h3> -->
                    </div>
                </div>
                <div class="col-md-4 highlight-item text-center">
                    <div class="image-holder">
                        <img src="assets/img/fete.png" style="height: 250px"; width="250px" alt="">
                    </div>
                    <!-- <h4>CREATIVE DESIGN</h4> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Highlighted Section for Front Page Ends Here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->
    
    <!-- YV 2020 Competitive Section for Front Page Starts Here -->
    <div id="competitive">
        <div class="container" id="Grid">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h1 style="font-size: 40px">YV2020 COMPETITVE</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="work-item text-center">
                        <div class="image-holder">
                            <a href="technical-and-management.php"><img src="assets/icons/01-min.png" alt=""></a>
                        </div>
                        <h4><a href="technical-and-management.php">Technical & Management</a></h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="work-item text-center">
                        <div class="image-holder">
                            <a href="competitions/literary.php"><img src="assets/icons/02-min.png" alt=""></a>
                        </div>
                        <h4><a href="competitions/literary.php">Literary</a></h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="work-item text-center">
                        <div class="image-holder">
                            <a href="competitions/media.php"><img src="assets/icons/03-min.png" alt=""></a>
                        </div>
                        <h4><a href="competitions/media.php">Media</a></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="work-item text-center">
                        <div class="image-holder">
                            <a href="competitions/social.php"><img src="assets/icons/04-min.png" alt=""></a>
                        </div>
                        <h4><a href="competitions/social.php">Social</a></h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="work-item text-center">
                        <div class="image-holder">
                            <a href="cultural.php"><img src="assets/icons/05-min.png" style="width:16%;" alt=""></a>
                        </div>
                        <h4><a href="cultural.php">Cultural</a></h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="work-item text-center">
                        <div class="image-holder">
                            <a href="competitions/sports.php"><img src="assets/icons/06-min.png" alt=""></a>
                        </div>
                        <h4><a href="competitions/sports.php">Sports</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- YV2020 Competitive Section Ends Here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->

    <!-- YV2020 Non Competitive Section Starts Here -->
    <div class="uk-section uk-section-default" style="background-color: #c34242;">
	    <div class="uk-container">
		    <div class="uk-margin uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
		    	<div class="content">
		    		<h1 style="color: white; font-size: 40px; font-weight: 300; padding-top: 50%;">YV2020 NON COMPETITVE</h1>
		    	</div>
			    <div class="cat-card">
				    <div class="uk-animation-toggle" tabindex="0">
				        <div class="uk-margin uk-card uk-card-default uk-card-hover uk-animation-shake">
					        <div class="uk-card-media-top">
						        <img src="assets/img/events.jpg" alt="">
							</div>
						    <div class="uk-card-body">
							    <a class="semi-transparent-button is-red" href="/workshops.php" style="margin-top: 17%; margin-bottom: 13%;">Workshops</a>
							</div>
						</div>
					</div>
				</div>
				<div class="cat-card">
				    <div class="uk-animation-toggle" tabindex="0">
				        <div class="uk-margin uk-card uk-card-default uk-card-hover uk-animation-shake">
					        <div class="uk-card-media-top">
						        <img src="assets/img/informals.jpg" alt="">
							</div>
						    <div class="uk-card-body">
							    <a class="semi-transparent-button is-red" href="/pronites.php" style="margin-top: 17%; margin-bottom: 13%;">Pronites</a>
							</div>
						</div>
					</div>
				</div>
				<div class="cat-card">
				    <div class="uk-animation-toggle" tabindex="0">
				        <div class="uk-margin uk-card uk-card-default uk-card-hover uk-animation-shake">
					        <div class="uk-card-media-top">
						        <img src="assets/img/yvss.jpg" alt="">
							</div>
						    <div class="uk-card-body">
							    <a class="semi-transparent-button is-red" href="/social-summit.php" style="margin-top: 17%; margin-bottom: 13%;">YV Social-Summit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- YV2020 Non Competitive Section Ends Here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->
    
    <!-- Featured Video Section Starts Here-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center title">
                <h1 style="font-size: 40px">Premiering YouthVibe 2020 Anthem</h1>
                <span style="font-size: 24px">We Got the YouthVibe</span>
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7rxNCrXTi74" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Featured Video Section Ends here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->
    
    
    <!-- Gallery Section Starts Here -->
    <div id="gallery">
        <div class="container" id="Grid">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h1 style="font-size: 40px">Glimpses From Past</h1>
                    <span style="font-size: 24px">Some memorable moments</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_1.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_1.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <!-- <h4>BUTTERFLY TWO</h4>
                        <span>Nature</span> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_2.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_2.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_3.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_3.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_4.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_4.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_5.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_6.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_6.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_7.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_7.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_8.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="assets/img/thumb/thumb_8.jpg" alt="">
                            <div class="overlay">
                                <a href="assets/img/gallery/gallery_item_9.jpg" data-fancybox="gallery">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section Ends Here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center title">
                <h1 style="font-size: 40px">YouthVibe 2020 RAP Anthem</h1>
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/U0Rj0uQWNK8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <br>
    
    
    <!-- Qualifiers Section Starts Here -->
    <div style="background: #c34242">
	    <div class="container">
	    	<div class="row">
	    		<section class="qualifiers col-md-12" id="qualifiers-area">
	    			<div class="qualifiers-div">
	    				<div class="blog-slider__wrp swiper-wrapper">
	    					<div class="qualifiers-div__item swiper-slide">
	    						<div class="qualifiers-div__img">
	    							<img src="assets/img/caravan.jpg" alt="">
	    						</div>
	    						<div class="qualifiers-div__content">
	    							<div class="qualifiers-div__title">YV Caravan (Internal Qualifiers)</div>
	    							<h1 class="qualifiers-div__date">Gateway to YouthVibe (Only for LPU students)</h1>
	    							<div class="qualifiers-div__text">Starting From 3 Feb 2020</div>
	    							<a onclick="reg_closed()" class="qualifiers-div__button">Register Now</a>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</section>
	    	</div>
        </div>
    </div>
	<!-- Qualifiers Section Ends Here -->
    <!-- ============================================================================================================================================================================= -->
    <!-- ============================================================================================================================================================================= -->
    
    <!-- Campus Ambassador Section Starts Here -->
    <div>
        <div class="container">
	    	<div class="row">
	    		<section class="qualifiers col-md-12" id="qualifiers-area">
	    			<div class="qualifiers-div">
	    				<div class="blog-slider__wrp swiper-wrapper">
	    					<div class="qualifiers-div__item swiper-slide">
	    						<div class="qualifiers-div__img">
	    							<img src="assets/img/ca.jpg" alt="">
	    						</div>
	    						<div class="qualifiers-div__content">
	    							<div class="qualifiers-div__title">Campus Ambassador</div>
	    							<h1 class="qualifiers-div__date">Be Our CA</h1>
	    							<div class="qualifiers-div__text">Exciting Perks for CAs</div>
	    							<a href="campus-ambassador.php" class="qualifiers-div__button">Know more</a>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    		</section>
	    	</div>
        </div>
    </div>
    <!-- Campus Ambassador Section Ends Here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->
    

    <!-- Common Footer Section Starts Here -->
    <?php
        include_once('includes/footer.php');
    ?>
    <!-- Common Footer Ends here -->
    <!-- ================================================================================================================================================================ -->
    <!-- ================================================================================================================================================================ -->
    <script type="text/javascript">
        function reg_closed()
        {
            Swal.fire({
                icon: 'info',
                title: 'Sorry...',
                text: 'Registration for internal qualifiers (YV-Caravan) has been closed!',
            })
        }
    </script>

    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>
</body>
</html>