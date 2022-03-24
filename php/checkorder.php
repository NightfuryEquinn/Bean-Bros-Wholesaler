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
        <link rel = "stylesheet" href = "../css/checkorder.css">

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
        <title>Bean Bros - Order List</title>
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

        <!--Admin Order List Page Parallax-->
        <div class="admin-order-list-page">

            <!--Admin Order List First Parallax-->
            <div class="admin-order-list-parallax-group">
                <div class="admin-order-list-parallax-back">
                    <!--Admin Order List Parallax Background-->
                    <div class="aolb-image-container">
                        <img src="../img/coffee_beans_beans_coffee_179190_1920x1080.jpg">
                    </div>
                </div>
                <div class="admin-order-list-parallax-base">
                    <!--Admin Order List Parallax Quote-->
                    <div class="quote-container">
                        <p>Coffee Beans Special Delivery<br><br>Needed, ASAP!</p>
                    </div>
                    <!--Admin Order List Container-->
                    <div class="admin-order-list-container">
                        <div class="admin-order-list-right">
                            <form method="POST">
                                <label>Search Name</label>
                                <input type="text" placeholder="Customer Name ..." name="searchName">
                                
                                <input type="submit" name="search">
                            </form>

                            <?php
                                include("conn.php");

                                $searchName = "";

                                if(isset($_POST["search"]))
                                {
                                    $searchName = $_POST['searchName'];
                                }

                                $searchResult = mysqli_query($con, "SELECT * FROM customer c, coffee_bean b, customer_order co 
                                WHERE c.Username LIKE '%$searchName%' AND c.Customer_ID = co.Customer_ID AND b.Bean_ID = co.Bean_ID  
                                ORDER BY co.Status = 'Pending';");
                            ?>
                        </div>
                        <div class="admin-order-list-left">
                            <div class="admin-order-list-title">
                                <h2>Order List</h2>
                            </div>
                            <div class="all-admin-order-list-container">
                                <?php
                                    while($row = mysqli_fetch_assoc($searchResult))
                                    {
                                        $displayOrder = '
                                        
                                        <div class="order-list">

                                            <div class="order-information">

                                                <p>Order ID: '.$row["Order_ID"].'</p>

                                                <p>Order Date: '.$row["Order_Date"].'</p>

                                                <p>Coffee Bean: '.$row["Coffee_Bean"].'</p>

                                                <p>Amount (kg): '.$row["Amount"].'</p>

                                                <p>Total (RM): '.$row["Total"].'</p>

                                                <p>Customer Username: '.$row["Username"].'</p>

                                                <p>Email: '.$row["Email"].'</p>

                                                <p>Contact Number (Personal): '.$row["Personal_Contact"].'</p>

                                                <p>Contact Number (Work): '.$row["Company_Contact"].'</p>

                                                <p>Status: '.$row["Status"].'</p>

                                            </div>

                                            <div class="order-function">
                                        
                                                <div class="change-container">
                                            
                                                    <i class="fas fa-pen"></i>

                                                    <a href=\'changestatus.php?Order_ID='.$row['Order_ID'].'\' onclick="return confirm(\'Change '.$row['Username'].' order status to Completed? Make sure '.$row['Username'].' has made his/her payment. This CANNOT be undone!\');"><h4>Change Status</h4></a>
                                        
                                                </div>
                                        
                                                <div class="delete-container">
                                            
                                                    <i class="fas fa-trash-alt"></i>

                                                    <a href=\'deleteorder.php?Order_ID='.$row['Order_ID'].'\' onclick="return confirm(\'Delete '.$row['Username'].' order? This CANNOT be undone!\');"><h4>Delete Order</h4></a>
                                        
                                                </div>
                                        
                                            </div>

                                        </div>
                                        
                                        ';

                                        echo $displayOrder;
                                    }
                                    
                                    mysqli_close($con);
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