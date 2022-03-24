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
        <link rel = "stylesheet" href = "../css/editbeanpage.css">

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
        <title>Bean Bros - Edit Bean</title>
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

        <!--Edit Bean Page Parallax-->
        <div class="edit-bean">

            <!--Edit Bean Page Parallax-->
            <div class="edit-bean-parallax-group">
                <div class="edit-bean-parallax-back">
                    <!--Edit Bean Page Parallax Background-->
                    <div class="eb-image-container">
                        <img src="../img/coffee_beans_coffee_cup_198851_3648x4072.jpg">
                    </div>
                </div>
                <div class="edit-bean-parallax-base">
                    <!--Edit Bean Container-->
                    <div class="edit-bean-container">
                        <div class="edit-bean-title">
                            <h2>Reroasting Old Coffee Bean from Our Racks</h2>
                        </div>
                        <div class="edit-bean-form">

                            <?php
                                include("conn.php");
                                $editID = $_GET["Bean_ID"];
                                $editData = mysqli_query($con, "SELECT * FROM coffee_bean WHERE Bean_ID=$editID");
                                $row = mysqli_fetch_assoc($editData);
                            ?>

                            <form method="POST" action="editbean.php" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $row["Bean_ID"]?>">

                                <label>Coffee Bean Name</label>
                                <input type="text" name="name" value="<?php echo $row["Coffee_Bean"]?>" required>

                                <label>Coffee Bean Image</label>
                                <input type="file" name="image" accept="image/*" required>
                                
                                <label>Country Produced</label>
                                <input type="text" name="country" value="<?php echo $row["Country"]?>" required>
                                
                                <label>Roast Type</label>
                                <input type="text" name="roast" value="<?php echo $row["Roast"]?>" required>
                                
                                <label>Price per kg</label>
                                <input type="number" name="price" value="<?php echo $row["Price_Per_kg"]?>" required>
                                
                                <label>Description</label>
                                <textarea name="description" placeholder="Max: 432 words" required rows="10" cols="100"><?php echo $row["Description"]?></textarea>
                                
                                <div class="submit-reset-container">
                                    <input type="submit" value="Update">
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