<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Custom Page Header Starts Here -->
    <!-- Webpage Title -->
    <title>Login | YouthVibe - LPU's Global Open Fest</title>
    <link rel="stylesheet" href="/assets/css/login.css">
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
        $pagename = "login";
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/navbar.php');
    ?>
    <!-- Common Header Ends here -->
    <!-- ================================================================================================================================================== -->
    <!-- ================================================================================================================================================== -->

    <div class="container">
        <div class="form-modal">
            <div class="form-toggle">
                <button id="login-toggle" onclick="toggleLogin()">log in</button>
                <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
            </div>
        
            <div id="login-form">
                <form>
                    <input type="text" required placeholder="Enter your email"/>
                    <input type="password" required placeholder="Enter password"/>
                    <button type="button" onclick="login_closed()" class="btn login">login</button>
                    <p><a onclick="forgot()">Forgot Password ?</a></p>
                    <hr/>
                </form>
            </div>
        
            <div id="signup-form">
                <form>
                    <input type="text" required autocomplete="some-random" placeholder="Enter Your Full Name *"/>
                    <input type="text" required autocomplete="some-random" placeholder="Enter your Father's Name *"/>
                    <input type="text" required autocomplete="some-random" placeholder="Enter your Date of Birth (DD/MM/YYYY) *"/>
                    <input type="tel" required autocomplete="phone_number" placeholder="Phone number *"/>
                    <input type="tel" required autocomplete="phone_number" placeholder="Alternate Phone number"/>
                    <input type="email" required placeholder="Enter your email *"/>
                    <select name="college" required id="college" class="selectpicker" required>
                        <option value="Lovely Professional University, Phagwara Punjab">Lovely Professional University, Phagwara Punjab</option>
                        <option value="Chandigarh University, Chandigarh">Chandigarh University, Chandigarh</option>
                        <option value="SRM University">SRM University</option>
                        <option value="Indian Institute of Technology (IIT), Bombay">Indian Institute of Technology (IIT), Bombay</option>
                        <option value="Delhi University, Delhi">Delhi University, Delhi</option>
                    </select>
                    <select name="gender" required id="gender" class="selectpicker" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                    <input type="password" required placeholder="Create password *"/>
                    <input type="password" required placeholder="Confirm Password *">
                    <button type="button" onclick="signup_closed()" class="btn signup">create account</button>
                    <p>Clicking <strong>create account</strong> means that you are agree to our <a href="/guidelines.php">terms and conditions</a>.</p>
                    <hr/>
                </form>
            </div>
        </div>
    </div>


    <?php
        include_once('includes/footer.php');
    ?>

    <!-- Custom Page Js Starts here -->
    <script>
        $('#college').selectize();
        $('#gender').selectize();
    </script>
    <script>
        function signup_closed() {
            Swal.fire({
                icon: 'info',
                title: 'Sorry...',
                text: 'We are not accepting new signups now',
            })
        }
        function login_closed() {
            Swal.fire({
                icon: 'info',
                title: 'Sorry...',
                text: 'You can not login into your account now, if you want to download your fest certificate you can directly download it by clicking on the CERTIFICATES button in menu bar',
            })
        }
        function forgot() {
            Swal.fire({
                icon: 'info',
                title: 'Sorry...',
                text: 'This action is not allowed anymore',
            })
        }
    </script>
    <?php
        
        include_once($_SERVER['DOCUMENT_ROOT'] .'/includes/bottom-cache.php');
        
    ?>
</body>
</html>