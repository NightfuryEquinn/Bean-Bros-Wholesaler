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
        <link rel = "stylesheet" href = "../css/adminprofile.css">

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
        <title>Bean Bros - Admin Profile</title>
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

        <!--Admin Profile Page Parallax-->
        <div class="admin-profile-page">

            <!--Admin Profile First Parallax-->
            <div class="admin-profile-parallax-group">
                <div class="admin-profile-parallax-back">
                    <!--Admin Profile Parallax Background-->
                    <div class="apb-image-container">
                        <img src="../img/couple_hands_love_tenderness_coffee_118921_1920x1080.jpg">
                    </div>
                </div>
                <div class="admin-profile-parallax-base">
                    <!--Admin Profile Parallax Quote-->
                    <div class="quote-container">
                        <p>Have A Nice Day Ahead, Admin</p>
                    </div>
                    <!--Admin Profile Personal Information Container-->
                    <div class="admin-profile-container">
                        <div class="admin-information-container">
                            <div class="admin-information-title">
                                <h3>Admin Details</h3>
                            </div>
                            <div class="admin-information">
                                <?php
                                    include("conn.php");
                                    
                                    $adminID = $_SESSION["Admin_ID"];

                                    $getQuery = "SELECT * FROM admin WHERE Admin_ID = '$adminID';";

                                    $getAdmin = mysqli_query($con, $getQuery);

                                    $row = mysqli_fetch_assoc($getAdmin);
                                    
                                    $displayAdmin = '

                                        <p>Username: '.$row["Username"].'</p>

                                        <p>Email: '.$row["Email"].'</p>

                                        <p>Password: *#*#*#*#</p>

                                    ';

                                    echo $displayAdmin;

                                    mysqli_close($con);
                                ?>
                            </div>
                        </div>
                        <div class="admin-function-container">
                            <div class="afc-top">
                                <h5><a href="checkfeedback.php">View Feedback</a></h5>
                                <h5><a href="checkcustomer.php">Manage Customer</a></h5>
                                <h5><a href="checkorder.php">Manage Order</a></h5>
                            </div>
                            <div class="afc-bottom">
                                <h5><a href="report.php">Generate Monthly Report</a></h5>
                                <h5><a href="addbeanpage.php">Add New Coffee Bean</a></h5>
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