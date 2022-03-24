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
        <link rel = "stylesheet" href = "../css/coffeepedia_a.css">

        <!--Link to JavaScript-->
        <script src="../js/script.js"></script>

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

        <!--Add Beans Button-->
        <div class="add-button">
            <a href="addcoffeepediapage.php" onclick="return confirm('Publish a new blog article?')"><i class="fas fa-plus-circle fa-5x"></i></a>
        </div>

        <!--Coffeepedia Page Parallax-->
        <div class="coffeepedia-page">

            <!--Coffeepedia First Parallax-->
            <div class="coffeepedia-parallax-group">
                <div class="coffeepedia-parallax-back">
                    <!--Abous Us Parallax Background-->
                    <div class="cp-image-container">
                        <img src="../img/Nicholas-Keeler-Vineyard-Night.jpg">
                    </div>
                </div>
                <div class="coffeepedia-parallax-base">
                    <!--Coffeepedia Parallax Quote-->
                    <div class="quote-container">
                        <p>What's more to enjoy coffee while reading</p>
                    </div>
                    
                    <div class="coffeepedia-container">
                        <div class="coffeepedia-search-container">
                            <form method="POST">
                                <input type="text" placeholder="Search..." name="searchText">
                                <input type="submit" value="Go" name="search">
                            </form>

                            <?php
                                    include("conn.php");
                                    
                                    $searchText = "";

                                    if(isset($_POST["search"]))
                                    {
                                        $searchText = $_POST['searchText'];
                                    }
                                    
                                    $searchResult = mysqli_query($con, "SELECT * FROM coffeepedia WHERE Title LIKE '%$searchText%';");
                            ?>
                        </div>
                        <div class="coffeepedia-selection">
                            <?php
                                while($row = mysqli_fetch_assoc($searchResult))
                                {
                                    $displayText = '
                                    <div class="coffeepedia-article-container">

                                        <div class="coffeepedia-article">
                                            
                                        </div>

                                        <div class="coffeepedia-article-title">

                                            <a href=\'article.php?Coffeepedia_ID='.$row['Coffeepedia_ID'].'\' onclick="return confirm(\'Read '.$row["Title"].'?\');"><h2>'.$row["Title"].'</h2></a>

                                        </div>

                                        <div class="admin-function">

                                            <a href=\'editcoffeepediapage.php?Coffeepedia_ID='.$row['Coffeepedia_ID'].'\' onclick="return confirm(\'Edit '.$row["Title"].'?\');"><i class="fas fa-edit fa-1x"></i></a>

                                            <a href=\'deletecoffeepedia.php?Coffeepedia_ID='.$row['Coffeepedia_ID'].'\' onclick="return confirm(\'Delete '.$row["Title"].'? This CANNOT be undone.\');"><i class="fas fa-trash-alt fa-1x"></i></a>
                                        
                                        </div>

                                    </div>
                                    
                                    ';

                                    echo $displayText;
                                }

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