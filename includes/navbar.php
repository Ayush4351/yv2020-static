    <header class="site-header" id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle button</span>
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="/">
                                <img src="/assets/img/logo_black.png" alt="">
                                <span class="logo-s"></span>
                            </a>
                        </div>  
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">

                        <ul class="nav navbar-nav navbar-right">
                            <span class="nav-s"></span>
                            <li>
                                <a href="/" class="<?php if($pagename == 'home'){ echo 'active'; } ?>">Home</a>
                            </li>    
                            <li>
                                <a href="/#competitive" class="<?php if($pagename == 'competitions'){ echo 'active'; } ?>">Competitions</a>
                            </li>
                            <li>
                                <a href="/accomodation.php" class="<?php if($pagename == 'accomodation'){ echo 'active'; } ?>">Accomodation</a>
                            </li>
                            <li>
                                <a href="/sponsors.php" class="<?php if($pagename == 'sponsors'){ echo 'active'; } ?>">Sponsors</a>
                            </li>
                            <li>
                                <a href="/schedule.php" class="<?php if($pagename == 'schedule'){ echo 'active'; } ?>">Schedule</a>
                            </li>
                            <li>
                                <a href="https://www.lpu.in/EventCertificate/index.aspx" target="_blank">Certificates</a>
                            </li>
                            <li>
                                <a href="/login.php" class="<?php if($pagename == 'login'){ echo 'active'; } ?>">Login / Signup</a>
                            </li>
                        </ul>

                    </div>
                </div> 
            </div>
        </nav>
    </header>
    
    <!-- Loader Starts Here -->
    <div class="container-fluid loader" id="loading">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="loading-image"></div>
            </div>
        </div>
    </div>
    <!-- Loader Ends here -->