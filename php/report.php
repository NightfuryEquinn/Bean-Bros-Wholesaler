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
        <link rel = "stylesheet" href = "../css/report.css">

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
        <title>Bean Bros - Monthly Report</title>
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

        <!--Report Page Parallax-->
        <div class="report-page">

            <!--Report First Parallax-->
            <div class="report-parallax-group">
                <div class="report-parallax-back">
                    <!--Report Parallax Background-->
                    <div class="rp-image-container">
                        <img src="../img/coffee spoon.jpg">
                    </div>
                </div>
                <div class="report-parallax-base">
                    <!--Report Parallax Quote-->
                    <div class="quote-container">
                        <p>Our Legacy Starts Here</p>
                    </div>
                    <!--Report-->
                    <div class="whole-report-container">
                        <div class="title-container">
                            <div class="title">
                                <h2>Bean Bros Monthly Report Generator</h2>
                            </div>
                            <div class="month-input-container">
                                <form method="POST">
                                    <label>Select Month</label>
                                    <select name="month" required>
                                        <option value="-01-">January</option>
                                        <option value="-02-">Febraury</option>
                                        <option value="-03-">March</option>
                                        <option value="-04-">April</option>
                                        <option value="-05-">May</option>
                                        <option value="-06-">June</option>
                                        <option value="-07-">July</option>
                                        <option value="-08-">August</option>
                                        <option value="-09-">September</option>
                                        <option value="-10-">October</option>
                                        <option value="-11-">November</option>
                                        <option value="-12-">December</option>
                                    </select>
                                    <input type="submit" name="report" value="Generate" onclick="return confirm('Generate report for selected month?');">
                                </form>

                                <?php
                                    include("conn.php");

                                    $selectMonth = "-01-";

                                    if(isset($_POST["report"]))
                                    {
                                        $selectMonth = $_POST['month'];
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="report">
                            <div class="report-header">
                                <div class="report-logo">
                                    <img src="../img/BeanBrosLogo1.png">
                                </div>
                                <div class="report-title">
                                    <h2>Bean Bros Monthly Report</h2>
                                </div>
                            </div>

                            <hr>

                            <div class="profitable">
                                
                                <?php
                                    $mostProfit = mysqli_query($con, "SELECT co.Coffee_Bean, SUM(co.Total) AS Profit, b.Coffee_Bean_Image FROM coffee_bean b, customer_order co WHERE co.Order_Date LIKE '%$selectMonth%' GROUP BY co.Coffee_Bean, b.Coffee_Bean_Image ORDER BY Profit DESC LIMIT 1;");

                                    $rowProfit = mysqli_fetch_assoc($mostProfit);

                                    $displayProfitable = '

                                        <div class="image">
                                            
                                            <img src="data:image/jpg;base64, '.base64_encode($rowProfit["Coffee_Bean_Image"]).'">
                                            
                                        </div>

                                        <div class="details">

                                            <h2>Most Profitable Coffee Bean</h2>

                                            <p>Coffee Bean: '.$rowProfit["Coffee_Bean"].'</p>

                                            <p>Total Profit Earned: '.$rowProfit["Profit"].'</p>

                                        </div>

                                    ';
                                    
                                    echo $displayProfitable;
                                ?>
                                
                            </div>

                            <hr>

                            <div class="popular">
                                <?php
                                    $mostPopular = mysqli_query($con, "SELECT co.Coffee_Bean, COUNT(co.Coffee_Bean) AS Popular, b.Coffee_Bean_Image FROM coffee_bean b, customer_order co WHERE co.Order_Date LIKE '%$selectMonth%' GROUP BY co.Coffee_Bean, b.Coffee_Bean_Image ORDER BY Popular DESC LIMIT 1;");

                                    $rowPopular = mysqli_fetch_assoc($mostPopular);
                                
                                    $displayPopular = '

                                        <div class="image">

                                            <img src="data:image/jpg;base64, '.base64_encode($rowProfit["Coffee_Bean_Image"]).'">

                                        </div>

                                        <div class="details">

                                            <h2>Most Popular Coffee Bean</h2>

                                            <p>Coffee Bean: '.$rowPopular["Coffee_Bean"].'</p>

                                            <p>Number of Orders: '.$rowPopular["Popular"].'</p>

                                        </div>

                                    ';

                                    echo $displayPopular;
                                ?>
                            </div>

                            <hr>

                            <div class="most-spent">
                                <?php
                                    $mostSpent = mysqli_query($con, "SELECT c.Username, c.Email, SUM(co.Total) AS Spent FROM customer c, customer_order co WHERE co.Order_Date LIKE '%$selectMonth%' GROUP BY c.Customer_ID ORDER BY Spent DESC LIMIT 1;");

                                    $rowSpent = mysqli_fetch_assoc($mostSpent);
                                
                                    $displaySpent = '

                                        <div class="details">

                                            <h2>Most Spent Customer</h2>

                                            <p>Username: '.$rowSpent["Username"].'</p>

                                            <p>Email: '.$rowSpent["Email"].'</p>

                                            <p>Total Spent: '.$rowSpent["Spent"].'</p>

                                        </div>

                                    ';

                                    echo $displaySpent;
                                ?>
                            </div>

                            <hr>

                            <div class="most-order">
                                <?php
                                    $mostOrder = mysqli_query($con, "SELECT c.Username, c.Email, COUNT(co.Customer_ID) AS MostOrder FROM customer c, customer_order co WHERE co.Order_Date LIKE '%$selectMonth%' GROUP BY c.Customer_ID ORDER BY MostOrder DESC LIMIT 1;");

                                    $rowOrder = mysqli_fetch_assoc($mostOrder);
                                
                                    $displayOrder = '

                                        <div class="details">

                                            <h2>Most Order Customer</h2>

                                            <p>Username: '.$rowOrder["Username"].'</p>

                                            <p>Email: '.$rowOrder["Email"].'</p>
                                            
                                            <p>Total Order: '.$rowOrder["MostOrder"].'</p>

                                        </div>

                                    ';

                                    echo $displayOrder;
                                ?>
                            </div>

                            <hr>

                            <div class="finalize">
                                <?php
                                    $final = mysqli_query($con, "SELECT SUM(Total) AS Total_Profit, SUM(Amount) AS Total_Amount FROM customer_order WHERE Order_Date LIKE '%$selectMonth%';");

                                    $rowFinal = mysqli_fetch_assoc($final);
                                
                                    $displayFinal = '

                                        <div class="details">

                                            <h6>Total Profit this month (RM): '.$rowFinal["Total_Profit"].'</h6>

                                            <h6>Total Amount of coffee bean sold this month (kg): '.$rowFinal["Total_Amount"].'</h6>

                                        </div>

                                    ';

                                    echo $displayFinal;
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
