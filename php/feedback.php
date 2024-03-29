<?php
    include("conn.php");
    include("session.php");
?>

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
        <link rel = "stylesheet" href = "../css/feedback.css">

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
        <title>Bean Bros - Feedback</title>
    </head>
    <body>
        <!--Sticky Navigation Bar-->
        <div class="nav-bar">
            <div class="nav-bar-left">
                <h3><a href="bean_c.php">Bean</a></h3>
                <h3><a href="coffeepedia_c.php">Coffeepedia</a></h3>
                <h3><a href="aboutus.php">About Us</a></h3>
                <h3><a href="contactus.php">Contact Us</a></h3>
            </div>
            <div class="nav-bar-logo">
                <a href="home.php"><img src="../img/BeanBrosLogo1.png"></a>
            </div>
            <div class="nav-bar-right">
                <h3><a href="customerprofile.php">Profile</a></h3>
                <h3><a href="feedback.php">Feedback</a></h3>
                <h3><a href="logout.php">Log Out</a></h3>
            </div>
          </div>

        <!--Customer Feedback Page Parallax-->
        <div class="feedback-page">

            <!--Customer Feedback Page First Parallax-->
            <div class="feedback-page-parallax-group">
                <div class="feedback-page-parallax-back">
                    <!--Customer Feedback Page Parallax Background-->
                    <div class="cfb-image-container">
                        <img src="../img/coffee_beans_coffee_jar_197791_1920-1080.jpg">
                    </div>
                </div>
                <div class="feedback-page-parallax-base">
                    <!--Customer Feedback Page Parallax Quote-->
                    <div class="quote-container">
                        <p>Help Us to Improve Our Services</p>
                    </div>
                    <!--Customer Feedback Form Container-->
                    <div class="feedback-form-container">
                        <div class="feedback-form-title">
                            <h1>Feedback Form</h1>
                        </div>
                        <div class="feedback-form">
                            <form method="POST" action="submitfeedback.php" >
                                <textarea name="feedback" placeholder="Tell us your opinion about us and give us some feedback about our services... Max: 432 words" required rows="10" cols="100"></textarea>
                                <input type="submit">
                            </form>
                        </div>
                        <div class="feedback-form-ps">
                            <p>** Feedback form will be submitted as anonymous source **</p>
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
                                <p><a href="home.php">Home</a></p>
                                <p><a href="bean_c.php">Bean</a></p>
                                <p><a href="coffeepedia_c.php">Coffeepedia</a></p>
                                <p><a href="aboutus.php">About Us</a></p>
                                <p><a href="contactus.php">Contact Us</a></p>
                            </div>
                            <div class="footer-social-media">
                                <div class="fsm-title">
                                    <p>Social Media</p>
                                </div>
                                <div class="fsm-content">
                                    <p>Facebook</p>
                                    <p>Instagram</p>
                                    <p>Twitter</p>
                                    <p><a href="faq.php">FAQ</a></p>
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