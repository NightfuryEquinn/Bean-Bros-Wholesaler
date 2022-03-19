<?php
    $customerID = '2'
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
        <link rel = "stylesheet" href = "../css/invoice.css">

        <!--Link to JavaScript-->
        <script src="js/script.js" defer></script>

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
        <title>Bean Bros - Invoice</title>
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
                <h3><a href="customerprofile.html">Profile</a></h3>
                <h3><a href="feedback.html">Feedback</a></h3>
                <h3>Log Out</h3>
            </div>
        </div>

        <!--Invoice Parallax-->
        <div class="invoice">

            <!--Invoice First Parallax-->
            <div class="invoice-parallax-group">
                <div class="invoice-parallax-back">
                    <!--Invoice Parallax Background-->
                    <div class="i-image-container">
                        <img src="../img/coffee_beans_coffee_cup_198851_3648x4072.jpg">
                    </div>
                </div>
                <div class="invoice-parallax-base">
                    <!--Invoice Container-->
                    <div class="invoice-container">
                        <div class="invoice-title">
                            <h1>Order Invoice</h1>
                        </div>
                        <div class="invoice-content">
                            <?php
                                include("conn.php");

                                $invoice = mysqli_query($con, "SELECT * FROM customer c, coffee_bean b, customer_order co 
                                WHERE c.Customer_ID = $customerID AND c.Customer_ID = co.Customer_ID AND b.Bean_ID = co.Bean_ID;");

                                $row = mysqli_fetch_assoc($invoice);

                                $displayInvoice = '
                                <p>Order ID: '.$row["Order_ID"].'</p>

                                <p>Order Date: '.$row["Order_Date"].'</p>

                                <p>Coffee Brand: '.$row["Coffee_Bean"].'</p>

                                <p>Price per kg (RM): '.$row["Price_Per_kg"].'</p>

                                <p>Total Amount (kg): '.$row["Amount"].'</p>

                                <p>Total Price (RM): '.$row["Total"].'</p>

                                <p>Status: '.$row["Status"].'</p>

                                <p>Customer Username: '.$row["Username"].'</p>

                                <p>Customer Contact (Company): '.$row["Company_Contact"].'</p>

                                <p>Customer Contact (Personal): '.$row["Personal_Contact"].'</p>

                                ';

                                echo $displayInvoice;

                                mysqli_close($con);
                            ?>
                            
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