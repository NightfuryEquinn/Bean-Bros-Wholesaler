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
        <link rel = "stylesheet" href = "../css/bean_a.css">

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
        <title>Bean Bros - Bean Admin</title>
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
                <h3>Log Out</h3>
            </div>
        </div>

        <!--Add Beans Button-->
        <div class="add-button">
            <a href="addbeanpage.php"><i class="fas fa-plus-circle fa-5x"></i></a>
        </div>
        
        <!--Beanpage Parallax-->
        <div class="beanpage">

            <!--Beanpage First Parallax-->
            <div class="beanpage-parallax-group">
                <div class="beanpage-parallax-back">
                    <!--Beanpage Parallax Background-->
                    <div class="bp-image-container">
                        <img src="../img/cup_coffee_coffee_beans_86886_1920x1080.jpg">
                    </div>
                </div>
                <div class="beanpage-parallax-base">
                    <!--Beanpage Parallax Quote-->
                    <div class="quote-container">
                        <p>Find your one true coffee bean</p>
                    </div>

                    <div class="beanpage-container">
                        <div class="beanpage-right">
                            <div class="search-bar">
                                <form method="POST">
                                    <input type="text" placeholder="Search..." name="searchBean" required>
                                    <input type="submit" name="search" value="Find It">
                                </form>

                                <?php
                                    include("conn.php");
                                    
                                    $searchBean = "";

                                    if(isset($_POST["search"]))
                                    {
                                        $searchBean = $_POST['searchBean'];
                                    }
                                    
                                    $searchResult = mysqli_query($con, "SELECT * FROM coffee_bean WHERE Coffee_Bean LIKE '%$searchBean%' ORDER BY Coffee_Bean;");
                                ?>
                            </div>
                        </div>
                        <div class="beanpage-left">
                            <div class="bean-container">
                                <?php
                                    while($row = mysqli_fetch_assoc($searchResult))
                                    {
                                        $displayBean = '
                                        <div class="bean">
                                        
                                            <img src="data:image/jpg;base64, '.base64_encode($row["Coffee_Bean_Image"]).'">

                                            <div class="bean-information">

                                                <h2>'.$row["Coffee_Bean"].'</h2>
                                                
                                                <p>'.$row["Description"].'</p>
                                                
                                                <p>Country: '.$row["Country"].'</p>
                                                
                                                <p>Roast: '.$row["Roast"].'</p>
                                                
                                                <p>Price per KG: '.$row["Price_Per_kg"].'</p>

                                            </div>

                                            <div class="admin-function">
                                            
                                                <a href=\'editbeanpage.php?Bean_ID='.$row['Bean_ID'].'\' onclick="return confirm(\'Edit '.$row['Coffee_Bean'].' details?\');"><i class="fas fa-edit fa-1x"></i></a>

                                                <a href=\'deletebean.php?Bean_ID='.$row['Bean_ID'].'\' onclick="return confirm(\'Delete '.$row['Coffee_Bean'].' order? This CANNOT be undone!\');"><i class="fas fa-trash-alt fa-1x"></i></a>

                                            </div>

                                        </div>

                                        ';

                                        echo $displayBean;
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