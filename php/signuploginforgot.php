<!DOCTYPE html>
<html>
    <head>
        <!--How code being decoded-->
        <meta charset = "utf-8">

        <!--How page being display based on viewport-->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1 shrink-to-fit = no">

        <!--Add author, web description, keywords for search engine, and copyright-->
        <meta name = "author" content = "Yip Zi Xian | Kishanraj a/l K.Alagayah | Ong Lit Tsen | Marcus Ong Jin Rong">
        <meta name = "description" content = "Bean Bros Wholesaler website is not a real website, it is just a final year project website.">
        <meta name = "keywords" content = "Bean Bros, Coffee Beans Wholesaler, Wholesaler, Coffee Beans">
        <meta name = "copyright" content = "Copyright 2022 @ Bean Bros Wholesaler">

        <!--Link to CSS-->
        <link rel = "stylesheet" href = "../css/signuploginforgot.css">

        <!--Link to JavaScript-->
        <script src="../js/script.js"></script>

        <!--Link to Font Awesome v4 and v5-->
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">

        <!--Link to Google Font-->
        <link rel = "preconnect" href = "https://fonts.googleapis.com">
        <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
        <link href = "https://fonts.googleapis.com/css2?family=Old+Standard+TT&family=Oxygen:wght@700&display=swap" rel = "stylesheet">
        
        <!--Link to Pictures file-->
        <link rel = "icon" type = image/png href = "../img/BeanBrosLogo.png">

        <!--Title-->
        <title>Bean Bros - Register / Log In</title>
    </head>
    <body>
        <!--Sticky Navigation Bar-->
        <div class="nav-bar">
            <div class="nav-bar-left">
                <h3><a href="bean_c.php">Bean</a></h3>
                <h3><a href="coffeepedia_c.php">Coffeepedia</a></h3>
                <h3><a href="../aboutus.html">About Us</a></h3>
                <h3><a href="../contactus.html">Contact Us</a></h3>
            </div>
            <div class="nav-bar-logo">
                <a href="../home.html"><img src="../img/BeanBrosLogo1.png"></a>
            </div>
            <div class="nav-bar-right">
                <h3><a href="signuploginforgot.php">Sign Up</a></h3>
                <h3><a href="signuploginforgot.php">Log In</a></h3>
            </div>
        </div>

        <!--Register / Login Parallax-->
        <div class="register-login">

            <!--Register / Login First Parallax-->
            <div class="register-login-parallax-group">
                <div class="register-login-parallax-back">
                    <!--Register / Login Parallax Background-->
                    <div class="rlb-image-container">
                        <img src="../img/coffee_beans_coffee_cup_198851_3648x4072.jpg">
                    </div>
                </div>
                <div class="register-login-parallax-base">
                    <!--Sign Up / Login / Forgot All-in-One Container-->
                    <div class="all-in-one-container">
                        <div class="all-in-one-selection">
                            <div class="signup-select" onclick="select1()">
                                <h4>Sign Up</h4>
                            </div>
                            <div class="login-select" onclick="select2()">
                                <h4>Log In</h4>
                            </div>
                            <div class="forgot-password-select" onclick="select3()">
                                <h4>Forgot Password</h4>
                            </div>
                            <div class="forgot-username-select" onclick="select4()">
                                <h4>Forgot Username</h4>
                            </div>
                        </div>

                        <div class="title-container">
                            <h1>Welcome to Bean Bros<br>Wholesaler Website</h1>
                        </div>

                        <div class="signup-input-area">
                            <form method="POST" action="signup.php">
                                <label>Username:</label><br>
                                <input type="text" name="username" placeholder="Your Username" required><br>
                                
                                <label>Email Address:</label><br>
                                <input type="email" name="email" placeholder="Your Company Email" required><br>
                                
                                <label>Password:</label><br>
                                <input type="password" name="password" placeholder="Password" required><br>
                                
                                <label>Confirm Password:</label><br>
                                <input type="password" name="check_password" placeholder="Confirm Password" required><br>
                                
                                <label>Contact Number (Work)</label><br>
                                <input type="tel" name="contact_work" placeholder="Company Contact" pattern="[0-9]{9}" required><br>
                                
                                <label>Contact Number (Personal)</label><br>
                                <input type="tel" name="contact_personal" placeholder="Personal Contact" pattern="[0-9]{10}" required><br>
                                
                                <input type="submit">
                            </form>
                        </div>

                        <div class="login-input-area">
                            <form method="POST" action="login.php">
                                <label>Username:</label><br>
                                <input type="text" name="username" placeholder="Your Username" required><br>
                                
                                <label>Password:</label><br>
                                <input type="password" name="password" placeholder="Password" required><br>
                            
                                <input type="submit">
                                
                            </form>
                        </div>

                        <div class="forgot-password-input-area">
                            <form method="POST" action="forgotpassword.php">
                                <label>Email Address:</label><br>
                                <input type="email" name="email" placeholder="Your Company Email" required><br>
                                
                                <label>Username:</label><br>
                                <input type="text" name="username" placeholder="Your Username" required><br>
                                
                                <label>New Password:</label><br>
                                <input type="password" name="new_password" placeholder="New Password" required><br>
                                
                                <label>Confirm Password:</label><br>
                                <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
                            
                                <input type="submit">
                            </form>
                        </div>

                        <div class="forgot-username-input-area">
                            <form method="POST" action="forgotusername.php">
                                <label>Email Address:</label><br>
                                <input type="email" name="email" placeholder="Your Company Email" required><br>
                                
                                <label>New Username:</label><br>
                                <input type="text" name="new_username" placeholder="New Username" required><br>
                                
                                <label>Password:</label><br>
                                <input type="password" name="password" placeholder="Password" required><br>
                            
                                <input type="submit">
                            </form>
                        </div>
                    </div>

                    <!--Footer-->
                    <div class="footer-container">
                        <div class="footer-quote-container">
                            <div class="footer-quote">
                                <p>When you need beans, <br>you know where to find us.</p>
                            </div>
                        </div>
                        <div class="footer-sub-container">
                            <div class="footer-nav">
                                <p><a href="../home.html">Home</a></p>
                                <p><a href="bean_c.php">Bean</a></p>
                                <p><a href="coffeepedia_c.php">Coffeepedia</a></p>
                                <p><a href="../aboutus.html">About Us</a></p>
                                <p><a href="../contactus.html">Contact Us</a></p>
                            </div>
                            <div class="footer-social-media">
                                <div class="fsm-title">
                                    <p>Social Media</p>
                                </div>
                                <div class="fsm-content">
                                    <p>Facebook</p>
                                    <p>Instagram</p>
                                    <p>Twitter</p>
                                    <p><a href="../faq.html">FAQ</a></p>
                                </div>
                            </div>
                            <div class="footer-contact-us">
                                <div class="fcu-title">
                                    <p>Have a coffee with us</p>
                                </div>
                                <div class="fcu-content">
                                    <p>Customer Service: <br>03-222-3333</p>
                                    <p>Address: <br>85a, 85b, 85c, Jalan Bukit Bintang, <br>Kuala Lumpur, <br>55100 Malaysia</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-copyright">
                            <p>Est. 2022 @ Bean Bros Wholesaler</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>