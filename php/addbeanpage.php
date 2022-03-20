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
        <link rel = "stylesheet" href = "../css/addbeanpage.css">

        <!--Link to JavaScript-->
        <script src="../js/script.js" defer></script>

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
        <title>Bean Bros - Add Bean</title>
    </head>
    <body>
        <!--Sticky Navigation Bar-->
        <div class="nav-bar">
            <div class="nav-bar-left">
                <h3><a href="bean.html">Bean</a></h3>
                <h3><a href="coffeepedia_c.html">Coffeepedia</a></h3>
                <h3><a href="aboutus.html">About Us</a></h3>
                <h3><a href="contactus.html">Contact Us</a></h3>
            </div>
            <div class="nav-bar-logo">
                <a href="home.html"><img src="../img/BeanBrosLogo1.png"></a>
            </div>
            <div class="nav-bar-right">
                <h3><a href="signuploginforgot.html">Sign Up</a></h3>
                <h3><a href="signuploginforgot.html">Log In</a></h3>
            </div>
        </div>

        <!--Add Bean Page Parallax-->
        <div class="add-bean">

            <!--Add Bean Page Parallax-->
            <div class="add-bean-parallax-group">
                <div class="add-bean-parallax-back">
                    <!--Add Bean Page Parallax Background-->
                    <div class="ab-image-container">
                        <img src="../img/coffee_beans_coffee_cup_198851_3648x4072.jpg">
                    </div>
                </div>
                <div class="add-bean-parallax-base">
                    <!--Add Bean Container-->
                    <div class="add-bean-container">
                        <div class="add-bean-title">
                            <h2>Introducing New Coffee Bean to Our Racks</h2>
                        </div>
                        <div class="add-bean-form">
                            <form method="POST" action="addbean.php">
                                <input type="text" required>
                                <input type="file" required>
                                <input type="text" required>
                                <input type="text" required>
                                <input type="number" required>
                                <input type="text" required>
                                <div class="submit-reset-container">
                                    <input type="submit" value="Beans Out!">
                                    <input type="reset">
                                </div>
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
                                <p><a href="home.html">Home</a></p>
                                <p><a href="bean.html">Bean</a></p>
                                <p><a href="coffeepedia_c.html">Coffeepedia</a></p>
                                <p><a href="aboutus.html">About Us</a></p>
                                <p><a href="contactus.html">Contact Us</a></p>
                            </div>
                            <div class="footer-social-media">
                                <div class="fsm-title">
                                    <p>Social Media</p>
                                </div>
                                <div class="fsm-content">
                                    <p>Facebook</p>
                                    <p>Instagram</p>
                                    <p>Twitter</p>
                                    <p><a href="faq.html">FAQ</a></p>
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