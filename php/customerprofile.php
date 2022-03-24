<?php
    include("conn.php");
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
        <link rel = "stylesheet" href = "../css/customerprofile.css">

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
        <title>Bean Bros - Profile</title>
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
                <h3>Log Out</h3>
            </div>
          </div>

        <!--All Popup Container-->
        <!--Edit Personal Details Popup-->
        <div class="edit-modal" id="modal-1">
            <div class="edit-modal-container">
                <div class="edit-personal-information-container">
                    <div class="edit-personal-information-title">
                        <h2>Edit Contact Details</h2>
                        <i class="fas fa-times fa-2x" id="close-1"></i>
                    </div>
                    <div class="editable-personal-information">

                        <?php
                            $getCustomerInfo = mysqli_query($con, "SELECT * FROM customer WHERE Customer_ID = $customerID;");

                            $row = mysqli_fetch_assoc($getCustomerInfo);
                        ?>

                        <form method="POST" action="editcontactdetails.php">
                            <label>Contact Number (Work)</label><br>
                            <input type="tel" placeholder="Company Contact" name="company_contact" pattern="[0-9]{9}" value=<?php echo $row["Company_Contact"]?> required><br>
                            
                            <label>Contact Number (Personal)</label><br>
                            <input type="tel" placeholder="Personal Contact" name="personal_contact" pattern="[0-9]{10}" value=<?php echo $row["Personal_Contact"]?> required><br>
                            
                            <input type="submit" value="Confirm Changes">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Manage Subscription Popup--> 
        <div class="subscription-modal" id="modal-2">
            <div class="subscription-modal-container">
                <div class="subscription-container">
                    <div class="subscription-title">
                        <?php
                            echo '<h2>Current Tier: '.$row["Subscription"].'</h2>';
                        ?>
                        <i class="fas fa-times fa-2x" id="close-2"></i>
                    </div>
                    <div class="subscription-notes-container">
                        <p>**Noted that your current tier benefits will be changed immediately after subscription. Refunds are not available.**<br><br>**Charges will be calculated per month starting on the purchase date.**</p>                    
                    </div>
                    <div class="subscription-selection-container">
                        <div class="silver-container">
                            <div class="silver-icon">
                                <i class="fas fa-chess-pawn fa-3x"></i>
                            </div>
                            <div class="silver-description">
                                <h1 id="change-1" onclick="silver()">Silver</h1>
                                <p>RM39.90/month</p>
                                <p>Special and unique monthly gifts</p>
                                <p>Notify for exclusive promotions via newsletter</p>
                                <p>15% off for total coffee bean purchases</p>
                            </div>
                        </div>
                        <div class="gold-container">
                            <div class="gold-icon">
                                <i class="fas fa-chess-rook fa-3x"></i>
                            </div>
                            <div class="gold-description">
                                <h1 id="change-2" onclick="gold()">Gold</h1>
                                <p>RM79.90/month</p>
                                <p>Prioritized delivery</p>
                                <p>Special and unique monthly gifts</p>
                                <p>Notify for exclusive promotions via newsletter</p>
                                <p>25% off for total coffee bean purchases</p>
                            </div>
                        </div>
                        <div class="platinum-container">
                            <div class="platinum-icon">
                                <i class="fas fa-chess-king fa-3x"></i>
                            </div>
                            <div class="platinum-description">
                                <h1 id="change-3" onclick="platinum()">Platinum</h1>
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
        
        <!--Subscription Confirm Popup-->
        <div class="confirm-subscription-modal" id="modal-2b">
            <div class="confirm-subscription-modal-container">
                <div class="confirm-subscription">
                    <div class="confirm-subscription-title">
                        <?php
                            echo '<h2>Current Tier: '.$row["Subscription"].'</h2>';
                        ?>
                        <i class="fas fa-times fa-2x" id="close-2b"></i>
                    </div>
                    <div class="confirm-subscription-notes">
                        <p></p>
                    </div>
                    <div class="confirm-payment-container">
                        <form method="POST" action="updatesub.php">
                            <input type="hidden" id="sub" name="sub" value="">

                            <label>Credit Card Number: </label><br>
                            <input type="tel" placeholder="xxxx-xxxx-xxxx-xxxx" maxlength="19" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}"  required><br>
                            
                            <label>Expiring Date: </label><br>
                            <input type="tel" placeholder="xx-xx" maxlength="5" pattern="[0-9]{2}-[0-9]{2}" required><br>
                            
                            <label>CVV:</label><br>
                            <input type="tel" placeholder="xxx" maxlength="3" pattern="[0-9]{3}" required><br>
                        
                            <input type="submit" value="Confirm Subscription">
                        </form>
                        <p>**We send the invoice to your email address and notify you each month when we charged for the subscription.**</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Order Form Popup-->
        <div class="order-modal" id="modal-3">
            <div class="order-modal-container">
                <div class="order">
                    <div class="order-title">
                        <h2>Order Form</h2>
                        <i class="fas fa-times fa-2x" id="close-3"></i>
                    </div>
                    <div class="order-notes">
                        <p>**Only one brand of coffee beans is allowed per order.**<br><br>**Minimum 60kg of purchase = One full coffee sack**</p><br><br>
                        <p>**We will not charge customers yet as this is just a pending order**<br><br>**The status of the order will be changed to "Completed" once customers have paid face-to-face**</p>
                    </div>
                    <div class="order-container">
                        <form method="POST" action="order.php">
                            <?php
                                $getSelection = mysqli_query($con, "SELECT * FROM coffee_bean;");

                                while($order = mysqli_fetch_assoc($getSelection))
                                {
                                    $displaySelection = '
                                    <label>

                                        <div class="coffee-bean-container">

                                            <div class="coffee-bean">

                                                <img src="data:image/jpg;base64, '.base64_encode($order["Coffee_Bean_Image"]).'">

                                            </div>

                                            <h6>'.$order["Coffee_Bean"].'</h6>
                                            
                                            <h6>RM'.$order["Price_Per_kg"].'/kg</h6>

                                        </div>

                                        <input type="radio" name="coffee-bean" value="'.$order["Bean_ID"].'" required>

                                        <span>

                                            <i class="fas fa-check"></i>

                                            <p>Selected</p>

                                        </span>
                                        
                                    </label>

                                    ';

                                    echo $displaySelection;
                                }
                            ?>

                            <input type="number" placeholder="Total Amount In Kilogram" name="amount" min="60" required>
                            
                            <input type="submit" value="Completed Roasting" onclick="return confirm('Confirm and place order?\nCustomer may contact us for accidental orders.');">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Order History Popup-->
        <div class="history-modal" id="modal-4">
            <div class="history-modal-container">
                <div class="history">
                    <div class="history-title">
                        <h2>Order History</h2>
                        <i class="fas fa-times fa-2x" id="close-4"></i>
                    </div>
                    <div class="history-notes">
                        <p>**Only 60 orders will be displayed but data will not be deleted.**</p>
                    </div>
                    <div class="history-container">
                        <table>
                            <tr>
                                <th>Order ID</th>
                                <th>Coffee Bean</th>
                                <th>Invoice</th>
                            </tr>

                            <?php
                                $history = mysqli_query($con, "SELECT * FROM customer_order WHERE Customer_ID = '$customerID' LIMIT 60;");

                                while($table = mysqli_fetch_assoc($history))
                                {
                                    $displayHistory = '
                                    <tr>
                                        <td>'.$table["Order_ID"].'</td>
                                        <td>'.$table["Coffee_Bean"].'</td>
                                        <td><a href=\'invoice.php?Order_ID='.$table['Order_ID'].'\' onclick="return confirm(\'View invoice of Order '.$table['Order_ID'].'?\');">View</a></td>
                                    </tr>
                                    ';

                                    echo $displayHistory;
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Customer Profile Page Parallax-->
        <div class="customer-profile-page">

            <!--Customer Profile First Parallax-->
            <div class="customer-profile-parallax-group">
                <div class="customer-profile-parallax-back">
                    <!--Customer Profile Parallax Background-->
                    <div class="cpb-image-container">
                        <img src="../img/couple_hands_love_tenderness_coffee_118921_1920x1080.jpg">
                    </div>
                </div>
                <div class="customer-profile-parallax-base">
                    <!--Customer Profile Parallax Quote-->
                    <div class="quote-container">
                        <p>Feel Free to Manage Your Profile</p>
                    </div>
                    <!--Customer Profile Personal Information Container-->
                    <div class="customer-profile-container">
                        <div class="personal-information-container">
                            <div class="personal-information-title">
                                <h3>Personal Details</h3>
                            </div>
                            <?php
                                $displayCustomerInfo = '
                                
                                <div class="personal-information">
                                    <p>Username: '.$row["Username"].'</p>
                                    <p>Email: '.$row["Email"].'</p>
                                    <p>Contact Number (Personal): '.$row["Personal_Contact"].'</p>
                                    <p>Contact Number (Work): '.$row["Company_Contact"].'</p>
                                    <p>Password: *#*#*#*#</p>
                                    <p>Subscription Tier: '.$row["Subscription"].'</p>
                                </div>
                                
                                ';

                                echo $displayCustomerInfo;

                                mysqli_close($con);
                            ?>
                        </div>
                        <div class="customer-function-container">
                            <div class="cfc-top">
                                <h5 id="function-1" onclick="edit()">Edit Contact Details</h5>
                                <h5 id="function-2" onclick="manage()">Manage Subscription</h5>
                                <a href="feedback.php"><h5>Submit a Feedback</h5></a>
                            </div>
                            <div class="cfc-bottom">
                                <h5 id="function-3" onclick="order()">Coffee Beans Needed</h5>
                                <h5 id="function-4" onclick="view()">View Order History</h5>
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