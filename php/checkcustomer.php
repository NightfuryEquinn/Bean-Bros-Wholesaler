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
        <link rel = "stylesheet" href = "../css/checkcustomer.css">

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
        <title>Bean Bros - Customer List</title>
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
                <h3><a href="adminprofile.html">Profile</a></h3>
                <h3><a href="monthlyreport.html">Report</a></h3>
                <h3><a href="checkfeedback.html">Feedback</a></h3>
                <h3><a href="checkcustomer.html">Customers</a></h3>
                <h3><a href="checkorder.html">Orders</a></h3>
                <h3>Log Out</h3>
            </div>
        </div>

        <!--Customer List Page Parallax-->
        <div class="customer-list-page">

            <!--Customer List First Parallax-->
            <div class="customer-list-parallax-group">
                <div class="customer-list-parallax-back">
                    <!--Customer List Parallax Background-->
                    <div class="clb-image-container">
                        <img src="../img/coffee_beans_coffee_beans_181134_1920x1080.jpg">
                    </div>
                </div>
                <div class="customer-list-parallax-base">
                    <!--Customer List Parallax Quote-->
                    <div class="quote-container">
                        <p>Customer is the Kings and Queens</p>
                    </div>
                    <!--Customer Container-->
                    <div class="customer-container">
                        <div class="customer-right">
                            <form method="POST">
                                <label>Search</label>
                                <input type="text" placeholder="Name ..." name="searchCustomer" required>
                                <input type="submit" name="search">
                            </form>

                            <?php
                                include("conn.php");
                                
                                $searchCustomer = "";

                                if(isset($_POST["search"]))
                                {
                                    $searchCustomer = $_POST['searchCustomer'];
                                }

                                $search = mysqli_query($con, "SELECT * FROM customer WHERE Username LIKE '%$searchCustomer%' ORDER BY Customer_ID;");
                            ?>
                        </div>
                        
                        <div class="customer-left">
                            <div class="customer-title">
                                <h2>Customer List</h2>
                            </div>
                            <div class="all-customer-container">
                                <?php
                                    while($row = mysqli_fetch_assoc($search))
                                    {
                                        $displayCustomer = '

                                        <div class="customer">

                                            <div class="customer-information">

                                                <p>Username: '.$row["Username"].'</p>

                                                <p>Email: '.$row["Email"].'</p>

                                                <p>Contact Number (Personal): '.$row["Personal_Contact"].'</p>

                                                <p>Contact Number (Work): '.$row["Company_Contact"].'</p>

                                                <p>Password: *#*#*#*#</p>

                                                <p>Subscription Tier: '.$row["Subscription"].'</p>

                                            </div>

                                            <div class="delete-container">

                                                <i class="fas fa-trash-alt fa-2x"></i>

                                                <a href=\'deletecustomer.php?Customer_ID='.$row['Customer_ID'].'\' onclick="return confirm(\'Delete '.$row['Username'].' details? This CANNOT be undone!\');"><h4>Erase Data</h4></a>
                                            
                                            </div>

                                        </div>

                                        ';

                                        echo $displayCustomer;
                                    }
                                ?>
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
