<?php
    include("session.php");
    $customerID = $_SESSION['Customer_ID'];
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
        <link rel = "stylesheet" href = "../css/home.css">

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
        <title>Bean Bros - Home</title>
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
        
        <!--Homepage Parallax-->
        <div class="homepage">

            <!--Homepage First Parallax-->
            <div class="homepage-parallax-group">
                <div class="homepage-parallax-back">
                    <!--Homepage Parallax Background-->
                    <div class="hpb-image-container">
                        <img src="../img/coffee_mug_chair_124443_1920x1080.jpg">
                    </div>
                </div>
                <div class="homepage-parallax-base">
                    <!--Homepage Parallax Quote-->
                    <div class="quote-container">
                        <p>As long as there was coffee in the world, how bad could things be?<br><br>-- Cassandra Clare, City of Ashes --</p>
                    </div>
                    <!--Recommendation Container-->
                    <div class="recommendation-container">
                        <div class="premium-selection-container">
                            <div class="ps-text-container">
                                <h2>Premium Selection</h2>
                            </div>
                            <div class="ps-beans-container">
                                <div class="ps-beans">
                                    <a href="bean_c.php">
                                        <img src="../img/ethiopia.jpg">
                                    </a>
                                </div>
                                <div class="ps-beans">
                                    <a href="bean_c.php">
                                        <img src="../img/hawaiian-kona.jpg">
                                    </a>
                                </div>
                                <div class="ps-beans">
                                    <a href="bean_c.php">
                                        <img src="../img/guatemala.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="fresh-arrival-container">
                            <div class="fa-beans-container">
                                <div class="fa-beans">
                                    <a href="bean_c.php">
                                        <img src="../img/tanzanian-peaberry.jpg">
                                    </a>
                                </div>
                                <div class="fa-beans">
                                    <a href="bean_c.php">
                                        <img src="../img/mocha-java-coffee.jpg">
                                    </a>
                                </div>
                                <div class="fa-beans">
                                    <a href="bean_c.php">
                                        <img src="../img/KenyaAA.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="fa-text-container">
                                <h2>Fresh Arrival</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Homepage Second Parallax-->
            <div class="homepage-parallax-group">
                <div class="homepage-parallax-back">
                    <!--Homepage Parallax Background-->
                    <div class="hpb-image-container">
                        <img src="../img/book_tulips_coffee_117577_1920x1080.jpg">
                    </div>
                </div>
                <div class="homepage-parallax-base">
                    <!--Homepage Parallax Quote-->
                    <div class="quote-container">
                        <p>Want to know more about coffee and coffee beans?<br><br><a href="coffeepedia_c.php">-- Discover our blogs --</a></p>
                    </div>
                    <!--Membership Container-->
                    <div class="membership-container">
                        <div class="membership-text-container">
                            <h2>Membership</h2>
                        </div>
                        <div class="membership-selection-container">
                            <div class="silver-member">
                                <div class="symbol-icon">
                                    <i class="fas fa-chess-pawn fa-3x"></i>
                                </div>
                                <div class="silver-description">
                                    <h1>Silver</h1>
                                    <p>RM39.90/month</p>
                                    <p>Special and unique monthly gifts</p>
                                    <p>Notify for exclusive promotions via newsletter</p>
                                    <p>15% off for total coffee bean purchases</p>
                                </div>
                            </div>
                            <div class="gold-member">
                                <div class="symbol-icon">
                                    <i class="fas fa-chess-rook fa-3x"></i>
                                </div>
                                <div class="gold-description">
                                    <h1>Gold</h1>
                                    <p>RM79.90/month</p>
                                    <p>Prioritized delivery</p>
                                    <p>Special and unique monthly gifts</p>
                                    <p>Notify for exclusive promotions via newsletter</p>
                                    <p>25% off for total coffee bean purchases</p>
                                </div>
                            </div>
                            <div class="platinum-member">
                                <div class="symbol-icon">
                                    <i class="fas fa-chess-king fa-3x"></i>
                                </div>
                                <div class="platinum-description">
                                    <h1>Platinum</h1>
                                    <p>RM159.90/month</p>
                                    <p>Special access to VIP room</p>
                                    <p>Prioritized delivery</p>
                                    <p>Special and unique monthly gifts</p>
                                    <p>Notify for exclusive promotions via newsletter</p>
                                    <p>40% off for total coffee purchases</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Homepage Third Parallax-->
            <div class="homepage-parallax-group">
                <div class="homepage-parallax-back">
                    <!--Homepage Parallax Background-->
                    <div class="hpb-image-container">
                        <img src="../img/1.jpg">
                    </div>
                </div>
                <div class="homepage-parallax-base">
                    <!--Homepage Parallax Quote-->
                    <div class="quote-container">
                        <p>Wondering how we farm our own coffee beans?<br><br><a href="aboutus.php">-- View our estate --</a></p>
                    </div>
                    <!--Follow Us Container-->
                    <div class="follow-us-container">
                        <div class="follow-us-text-container">
                            <h2>Follow Us</h2>
                        </div>
                        <div class="follow-us-content-container">
                            <div class="social-media-container">
                                <div class="social-media">
                                    <i class="fab fa-facebook fa-3x"></i>
                                    <h4>Facebook</h4>
                                </div>
                                <div class="social-media">
                                    <i class="fab fa-instagram fa-3x"></i>
                                    <h4>Instagram</h4>
                                </div>
                                <div class="social-media"> 
                                    <i class="fab fa-twitter fa-3x"></i>
                                    <h4>Twitter</h4>
                                </div>
                            </div>
                            <div class="location-map-container">
                                <h3>Our Farm and Factory</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.807402197785!2d101.70784611454214!3d3.1454733977096403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc36297719451b%3A0x72a6b247b895b5da!2s85a%2085b%2C%2085%2C%20Jln%20Bukit%20Bintang%2C%20Bukit%20Bintang%2C%2055100%20Kuala%20Lumpur%2C%20Wilayah%20Persekutuan%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1644912963220!5m2!1sen!2smy" allowfullscreen="" loading="lazy"></iframe>
                            </div>
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