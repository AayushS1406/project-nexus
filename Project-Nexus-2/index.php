<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus| Login & Register</title>
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php if (isset($_SESSION['success'])): ?>
        <div class="popup show" id="signupSuccessPopup">
            <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']); // Unset the session variable after displaying
            ?>
            <button class="close" onclick="document.getElementById('signupSuccessPopup').style.display='none';">Close</button>
        </div>
    <?php endif; ?>
    

    <div class="form-container">
        <div class="col col-1">
            <div class="image-layer">
                <img src="img/white-outline.png" class="form-image-main">
                <img src="img/dots.png" class="form-image dots">
                <img src="img/coin.png" class="form-image coin">
                <img src="img/spring.png" class="form-image spring">
                <img src="img/Burger.png" class="form-image rocket">
                <img src="img/cloud.png" class="form-image cloud">
                <img src="img/stars.png" class="form-image stars">
            </div>
            <p class="featured-words">Got a craving? We'll be there in a Bite!<span> QuickBite</span></p>
        </div>
        <div class="col col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Sign In</button>
                <button class="btn btn-2" id="register">Sign Up</button>
            </div>
            <!--Login Form Container-->
            <form action="login.php" method="post">
            <div class="login-form" id="signin">
                <div class="form-title">
                    <span>Sign In</span>
                </div>
                <div class="form-inputs" >
                    <div class="input-box" >
                        <input type="text" class="input-field" name="username" placeholder="Username" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box" >
                        <input type="password" id="password" class="input-field" name="password" placeholder="Password" required>
                        <i class="bx bx-lock-alt icon"></i>
                        <span class="error-message" id="password-error">Please enter a valid password</span>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign In</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-gmail"></i>
                    <i class='bx bx-phone'></i>

                </div>
            </div>
            </form>
            <!--Register Form Container-->
            <form action="register.php" method="post" >
            <div class="register-form" id="signup" >
                <div class="form-title">
                    <span>Create Account</span>
                </div>
                <div class="form-inputs">
                    <div class="input-box" >
                        <input type="email" id="email" class="input-field" name="email" placeholder="Email" required>
                        <i class="bx bx-envelope icon"></i>
                        <span class="error-message-2" id="email-error">Enter a valid email address</span>
                    </div>
                    
                    <div class="input-box" >
                        <input type="text" class="input-field" name="username" placeholder="Username" required>
                        <i class="bx bx-user icon"></i>
                    </div>
            
                    <div class="input-box" >
                        <input type="password" id="password-1" class="input-field" name="password-1" placeholder="Password" required>
                        <i class="bx bx-lock-alt icon"></i>
                        <span class="error-message-1" id="password-error-1">Password should be atleast 6 digits</span>
                        
                    </div>
                    <!-- <form>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                        <span class="error-message" id="password-error">Please enter a valid password</span>
                    </form> -->
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit">
                            <span>Sign Up</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="social-login">
                    <i class="bx bxl-google"></i>
                    <i class="bx bxl-facebook"></i>
                    <i class="bx bxl-gmail"></i>
                    <i class='bx bx-phone'></i>

                </div>
            </div>
            </form>
        </div>
                    
    </div>
    <script src="main.js"></script>
</body>
</html>