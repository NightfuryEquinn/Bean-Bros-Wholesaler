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
        <link rel = "stylesheet" href = "../css/coffeepedia_adm.css">

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
        <title>Bean Bros - Coffeepedia</title>
    </head>
    
    <body>
        <!--Sticky Navigation Bar-->
        <div class="nav-bar">
            <div class="nav-bar-left">
                <h3><a href="../bean_a.php">Bean</a></h3>
                <h3><a href="../coffeepedia_a.php">Coffeepedia</a></h3>
                <h3><a href="../aboutus.php">About Us</a></h3>
                <h3><a href="../contactus.php">Contact Us</a></h3>
            </div>
            <div class="nav-bar-logo">
                <a href="../home.php"><img src="../img\BeanBrosLogo1.png"></a>
            </div>
            <div class="nav-bar-right">
                <h3><a href="../adminprofile.php">Profile</a></h3>
                <h3><a href="../monthlyreport.php">Report</a></h3>
                <h3><a href="../checkfeedback.php">Feedback</a></h3>
                <h3><a href="../checkcustomer.php">Customers</a></h3>
                <h3><a href="../checkorder.php">Orders</a></h3>
                <h3>Log Out</h3>
            </div>
        </div>

        <!--Add Beans Button-->
        <div class="addicon">
            <a href="addcoffeepedia.php"><i class="fas fa-plus-circle fa-5x"></i></a>
        </div>

        <!--Homepage Parallax-->
        <div class="homepage">
            <div class="homepage-parallax-group">
                <div class="homepage-parallax-back">
                    <!--Homepage Parallax Background-->
                    <div class="hpb-image-container">
                        <img src="../img\Nicholas-Keeler-Vineyard-Night.jpg">
                    </div>
                </div>
                <div class="homepage-parallax-base">
                    <!--Homepage Parallax Quote-->
                    <div class="quote-container">
                        <p>What's more to enjoy a coffee while reading?</p>
                    </div>
                </div>              
            </div>
            
            <!--Blog Container-->
            <div class="row2">
                <div class="blog-container">

                    <div class="search-text"></div>
                    <div class="search-box">
                        <form method="POST">
                            <input type="text" name="searchC" placeholder="Search..." required>  
                            <input type="submit" name="searchI" class="fas fa-search fa-1x" value="GO">                    
                        </form>                                                 
                        
                        <?php 
                            include("conn.php");

                            $searchText = "";

                            if(isset($_POST["searchI"])) 
                            {
                                $searchText = $_POST['searchC'];
                            }

                            $searchResult = mysqli_query($con, "SELECT * FROM coffeepedia WHERE Title LIKE '%$searchText%'");
                        ?>                       
                    </div>
                    <div class="box2"></div>
                    <div class="blog-content-container">                        
                        <?php
                            while($row = mysqli_fetch_assoc($searchResult))
                            {
                                $displayCpd = '
                                <div class="coffeepda">

                                    <img src="../img/Coffee1.jpg" width="400" height="350" id="randomimage" alt="Random image" />

                                    <div class="admin-function">                               
                                    
                                        <a href=\'editcoffeepedia.php?Bean_ID='.$row["Coffeepedia_ID"].'\' onclick="return confirm(\'Edit '.$row['Title'].' details?\');"><i class="fas fa-edit fa-2x"></i></a>
                                        <a href=\'delete.php?Bean_ID='.$row["Coffeepedia_ID"].'\' onclick="return confirm(\'Delete '.$row['Title'].' order? This CANNOT be undone!\');"><i class="fas fa-trash-alt fa-2x"></i></a>

                                    </div>

                                </div>

                                ';

                                echo $displayCpd;
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
    </body>
</html>
