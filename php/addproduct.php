<!DOCTYPE html>
<html>
  <head>
    <!--How code being decoded-->
    <meta charset="utf-8" />

    <!--How page being display based on viewport-->
    <meta
      name="viewport"
      content="width = device-width, initial-scale = 1 shrink-to-fit = no"
    />

    <!--Add author, web description, keywords for search engine, and copyright-->
    <meta
      name="author"
      content="Yip Zi Xian | Kishanraj a/l K.Alagayah | Ong Lit Tsen | Marcus Ong Jin Rong"
    />
    <meta
      name="description"
      content="Bean Bros Wholesaler website is not a real website, it is just a final year project website."
    />
    <meta
      name="keywords"
      content="Bean Bros, Coffee Beans Wholesaler, Wholesaler, Coffee Beans"
    />
    <meta name="copyright" content="Copyright 2022 @ Bean Bros Wholesaler" />

    <!--Link to CSS-->
    <link rel="stylesheet" href="../css/addproduct.css" />

    <!--Link to Font Awesome v4 and v5-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css"
    />

    <!--Link to Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&family=Oxygen:wght@700&display=swap"
      rel="stylesheet"
    />

    <!--Link to Pictures file-->
    <link rel = "icon" type = image/png href = "../img\BeanBrosLogo.png">

    <!--Title-->
    <title>Bean Bros - Add Product</title>
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
        <a href="home.html"><img src="../img\BeanBrosLogo1.png" /></a>
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
    <!--Add Product page Parallax-->
    <div class="product-page">
      <div class="product-parallax-group">
        <div class="product-parallax-back">
          <!--Homepage Parallax Background-->
          <div class="image-container">
            <img src="../img/coffee_beans_grains_coffee_172935_3648x3016.jpg" />
          </div>
        </div>
        <div class="product-parallax-base">
          <div class="row">
            <div class="column">
              <div class="title-container">
                <div class="title-design"></div>
                <div class="content-title">
                  Introducing New Coffee Bean to Our Racks
                </div>
                <div class="title-design"></div>
              </div>
            </div>
            <div class="add-product">
              <div class="add-product-content">
                <div class="add-product-area">
                  <!-- form area -->
                  <form action="insert_product.php" method="post">
                    <label>Coffee Bean:</label><br />
                    <input
                      type="text"
                      name="bean_name"
                      placeholder="Name of Coffee"
                      required
                    /><br />

                    <label>Coffee Bean Image:</label><br />
                    <input
                      type="text"
                      name="bean_image"
                      placeholder="Bean's Image"
                      required
                    /><br />

                    <label>Country:</label><br />
                    <input type="text" name="country" placeholder="Country" required /><br />

                    <label>Roast:</label><br />
                    <input type="text" name="roast" placeholder="Roast" required /><br />

                    <label>Price Per (KG):</label><br />
                    <input
                      type="text"
                      name="price"
                      placeholder="Price Per (KG)"
                      required
                    /><br />

                    <label>Description:</label><br />
                    <input
                      type="text"
                      name="desc"
                      placeholder="Description"
                      required
                    /><br />
                    <input type="submit" name="submit" value="Submit">
			              <input type="reset" value="Reset">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Footer-->
          <div class="footer-container">
            <div class="footer-quote-container">
              <div class="footer-quote">
                <p>When you need beans, <br />you know where to find us.</p>
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
                  <p>Customer Service: <br />03-222-3333</p>
                  <p>
                    Address: <br />85a, 85b, 85c, Jalan Bukit Bintang,
                    <br />Kuala Lumpur, <br />55100 Malaysia
                  </p>
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
