<?php
    include("adminsession.php");
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
        <link rel = "stylesheet" href = "../css/faq.css">

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
        <title>Bean Bros - FAQs</title>
    </head>
    <body>
        <!--Sticky Navigation Bar-->
        <div class="nav-bar">
            <div class="nav-bar-left">
                <h3><a href="bean_a.php">Bean</a></h3>
                <h3><a href="coffeepedia_a.php">Coffeepedia</a></h3>
                <h3><a href="adminaboutus.php">About Us</a></h3>
                <h3><a href="admincontactus.php">Contact Us</a></h3>
            </div>
            <div class="nav-bar-logo">
                <a href="adminhome.php"><img src="../img/BeanBrosLogo1.png"></a>
            </div>
            <div class="nav-bar-right">
                <h3><a href="adminprofile.php">Profile</a></h3>
                <h3><a href="report.php">Report</a></h3>
                <h3><a href="checkfeedback.php">Feedback</a></h3>
                <h3><a href="checkcustomer.php">Customers</a></h3>
                <h3><a href="checkorder.php">Orders</a></h3>
                <h3><a href="logout.php">Log Out</a></h3>
            </div>
        </div>

        <!--FAQ Parallax-->
        <div class="faq">

            <!--FAQ First Parallax-->
            <div class="faq-parallax-group">
                <div class="faq-parallax-back">
                    <!--FAQ Parallax Background-->
                    <div class="faqb-image-container">
                        <img src="../img/cookies_coffee_breakfast_100869_1920x1080.jpg">
                    </div>
                </div>
                <div class="faq-parallax-base">
                    <!--FAQ Parallax Quote-->
                    <div class="quote-container">
                        <p>FAQs</p>
                    </div>
                    <!--FAQ Section-->
                    <div class="faq-container">
                        <div class="faq-title">
                            <h3>Frequently Asked Questions</h3>
                        </div>
                        <div class="faq-question-container">
                            <div class="question-container">
                                <div class="question">
                                    <p>Question 1 - How to purchase our coffee beans?</p>
                                    <i class="fas fa-angle-right fa-2x" onclick="dropdown1()"></i>
                                </div>
                                <div class="answer">
                                    <p>Customers will need to register an account and make a call to our office to drop in an order for coffee beans. Or they can place orders via our websites and payment will be done face-to-face with the delivery of coffee beans. However, only one brand of coffee beans per order is allowed.</p>
                                </div>
                            </div>
                            <div class="question-container">
                                <div class="question">
                                    <p>Question 2 - What is the minimum purchase of coffee beans?</p>
                                    <i class="fas fa-angle-left fa-2x" onclick="dropdown2()"></i>
                                </div>
                                <div class="answer">
                                    <p>Since we are a wholesaler, the minimum requirement to purchase coffee beans is 60kg, which is one full sack, standardized according to the measurement of Food and Agriculture Organization (FAO).</p>
                                </div>
                            </div>
                            <div class="question-container">
                                <div class="question">
                                    <p>Question 3 - Will I get charged after dropping an order?</p>
                                    <i class="fas fa-angle-right fa-2x" onclick="dropdown3()"></i>
                                </div>
                                <div class="answer">
                                    <p>No, of course! The order will remain in pending status until customers come by our factory to make the payment face-to-face. After making the payment, the order status will be updated by Admin to "Completed". The only thing that will charge our customers via our website is the membership purchase. An invoice will be sent to their email respectively.</p>
                                </div>
                            </div>
                            <div class="question-container">
                                <div class="question">
                                    <p>Question 4 - How can I pick up my order?</p>
                                    <i class="fas fa-angle-left fa-2x" onclick="dropdown4()"></i>
                                </div>
                                <div class="answer">
                                    <p>We will deliver all customers' orders to their desired location via food cargo delivery or customers can pick up their orders themselves. Admin will call for customers' desired location when we are ready to ship your orders. Make sure that the address is real and the customer or someone responsible are there to claim the coffee bean sack(s).</p>
                                </div>
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
                                <p><a href="adminhome.php">Home</a></p>
                                <p><a href="bean_a.php">Bean</a></p>
                                <p><a href="coffeepedia_a.php">Coffeepedia</a></p>
                                <p><a href="adminaboutus.php">About Us</a></p>
                                <p><a href="admincontactus.php">Contact Us</a></p>
                            </div>
                            <div class="footer-social-media">
                                <div class="fsm-title">
                                    <p>Social Media</p>
                                </div>
                                <div class="fsm-content">
                                    <p>Facebook</p>
                                    <p>Instagram</p>
                                    <p>Twitter</p>
                                    <p><a href="adminfaq.php">FAQ</a></p>
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