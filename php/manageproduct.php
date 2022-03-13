<!DOCTYPE html>
<html>
  <head>
    <!--How code being decoded-->
    <meta charset="utf-8" />

    <!--How page being display based on viewport-->
    <meta name="viewport" content="width = device-width, initial-scale = 1 shrink-to-fit = no"/>

    <!--Add author, web description, keywords for search engine, and copyright-->
    <meta name="author" content="Yip Zi Xian | Kishanraj a/l K.Alagayah | Ong Lit Tsen | Marcus Ong Jin Rong"/>
    <meta name="description" content="Bean Bros Wholesaler website is not a real website, it is just a final year project website."/>
    <meta name="keywords" content="Bean Bros, Coffee Beans Wholesaler, Wholesaler, Coffee Beans"/>
    <meta name="copyright" content="Copyright 2022 @ Bean Bros Wholesaler" />

    <!--Link to CSS-->
    <link rel="stylesheet" href="../css/manageproduct.css" />

    <!--Link to JavaScript-->
    <script src="../js/script.js" defer></script>

    <!--Link to Font Awesome v4 and v5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css"/>

    <!--Link to Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&family=Oxygen:wght@700&display=swap" rel="stylesheet"/>

    <!--Link to Pictures file-->
    <link rel = "icon" type = image/png href = "../img\BeanBrosLogo.png">

    <!--Title-->
    <title>Bean Bros - Manage Product</title>
  </head>

  <body>
    <!--popup for bean product-->
    <div id="myModal" class="modal">
      <span
        class="closebtn"
        onclick="document.getElementById('myModal').style.display='none'"
        >&times;</span
      >
      <img class="modal-content" id="img1" />
      <div id="caption"></div>
      <div id="desc-text">
        <div class="content"></div>
      </div>
      <div id="desc-container">
        <div class="desc-name"></div>
        <div class="desc-country"></div>
        <div class="desc-roast"></div>
        <div class="desc-price"></div>
      </div>
    </div>
    <!--Sticky Navigation Bar-->
    <div class="nav-bar">
      <div class="nav-bar-left">
          <h3><a href="bean.html">Bean</a></h3>
          <h3><a href="coffeepedia_c.html">Coffeepedia</a></h3>
          <h3><a href="aboutus.html">About Us</a></h3>
          <h3><a href="contactus.html">Contact Us</a></h3>
      </div>
      <div class="nav-bar-logo">
          <a href="home.html"><img src="../img\BeanBrosLogo1.png"></a>
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
    <!--Bean Homepage Parallax-->
    <div class="bean-homepage">
      <div class="bean-homepage-parallax-group">
        <div class="bean-homepage-parallax-back">
          <!--Homepage Parallax Background-->
          <div class="image-container">
            <img src="../img/cup_coffee_coffee_beans_86886_1920x1080.jpg" />
          </div>
        </div>
        <div class="bean-homepage-parallax-base">
          <!--Homepage Parallax Quote-->
          <div class="quote-container">
            <p>~ Find your one true coffee bean ~</p>
          </div>
        </div>
      </div>
      <!-- split container -->
      <div class="row">
        <div class="column1">
            <div class="search-text">Search...</div>
            <div class="search-box">
              <input
                type="text"
                name="search"
                placeholder="Type something here..."
                class="search-input"
              />
              <a href="#" class="search-btn">
                <i class="fas fa-search"></i>
              </a>
            </div>
            <div class="filter-text">Filter by</div>
            <div class="design"></div>
            <select name="filter-list" id="filter-list" required>
              <option value="" selected="true" disabled="disabled">
                ~ Please Select ~
              </option>
              <option value="new-arrivals">New Arrivals</option>
              <option value="premium-selection">Premium Choices</option>
              <option value="classic">Classic</option>
            </select>
        </div>
        <div class="column2">
          <div class="container">
            <div
              class="product-container"
              onclick="popup('0','../img/tanzanian-peaberry.jpg')"
            >
              <img
                id="imgPopUp"
                src="../img/tanzanian-peaberry.jpg"
                width="350"
                height="350"
                alt="Description"
              />
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex.
                Nunc eu nisl sit amet justo eleifend rutrum.
              </div>
              <div class="desc-name">Name: Tanzanian Peaberry Coffee</div>
              <div class="desc-country">Country: Tanzania</div>
              <div class="desc-roast">Roasts: Dark Roast</div>
              <div class="desc-price">Price per kilogram: RM50</div>
              <div class="product-display">
                <div class="desc">Tanzanian Peaberry Coffee</div>
              </div>
            </div>
            <div class="action-btn">
              <button class="edit0"><i class="fas fa-edit"></i></button>
              <button class="delete"><i class="fas fa-trash-alt"></i></button>
            </div>
          </div>

          <div class="container-right">
            <div
              class="product-container"
              onclick="popup('1','../img/hawaiian-kona.jpg')"
            >
              <img
                id="imgPopUp"
                src="../img/hawaiian-kona.jpg"
                width="350"
                height="350"
                alt="Description"
              />
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex.
                Nunc eu nisl sit amet justo eleifend rutrum.
              </div>
              <div class="desc-name">Name: Hawaii Kona Coffee</div>
              <div class="desc-country">Country: USA</div>
              <div class="desc-roast">Roasts: Medium Roast</div>
              <div class="desc-price">Price per kilogram: RM40</div>
              <div class="product-display">
                <div class="desc">Hawaii Kona Coffee</div>
              </div>
            </div>
            <div class="action-btn">
              <button class="edit"><i class="fas fa-edit"></i></button>
              <button class="delete"><i class="fas fa-trash-alt"></i></button>
            </div>
          </div>

          <div class="container">
            <div
              class="product-container"
              onclick="popup('2','../img/mocha-java-coffee.jpg')"
            >
              <img
                id="imgPopUp"
                src="../img/mocha-java-coffee.jpg"
                width="350"
                height="350"
                alt="Description"
              />
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex.
                Nunc eu nisl sit amet justo eleifend rutrum.
              </div>
              <div class="desc-name">Name: Mocha Java Coffee</div>
              <div class="desc-country">Country: Yemen & Indonesia</div>
              <div class="desc-roast">Roasts: Medium Roast</div>
              <div class="desc-price">Price per kilogram: RM70</div>
              <div class="product-display">
                <div class="desc">Mocha Java Coffee</div>
              </div>
            </div>
            <div class="action-btn">
              <button class="edit0"><i class="fas fa-edit"></i></button>
              <button class="delete"><i class="fas fa-trash-alt"></i></button>
            </div>
          </div>

          <div class="container-right">
            <div
              class="product-container"
              onclick="popup('3','../img/guatemala.jpg')"
            >
              <img
                id="imgPopUp"
                src="../img/guatemala.jpg"
                width="350"
                height="350"
                alt="Description"
              />
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex.
                Nunc eu nisl sit amet justo eleifend rutrum.
              </div>
              <div class="desc-name">Name: Guatemala Antigua Coffee</div>
              <div class="desc-country">Country: Antigua, Guatemala</div>
              <div class="desc-roast">Roasts: Medium Roast</div>
              <div class="desc-price">Price per kilogram: RM55</div>
              <div class="product-display">
                <div class="desc">Guatemala Antigua Coffee</div>
              </div>
            </div>
            <div class="action-btn">
              <button class="edit"><i class="fas fa-edit"></i></button>
              <button class="delete"><i class="fas fa-trash-alt"></i></button>
            </div>
          </div>

          <div class="container">
            <div
              class="product-container"
              onclick="popup('4','../img/KenyaAA.jpg')"
            >
              <img
                id="imgPopup"
                src="../img/KenyaAA.jpg"
                width="350"
                height="350"
                alt="Description"
              />
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex.
                Nunc eu nisl sit amet justo eleifend rutrum.
              </div>
              <div class="desc-name">Name: KenyaAA</div>
              <div class="desc-country">Country: Kenya</div>
              <div class="desc-roast">Roasts: Medium Roast</div>
              <div class="desc-price">Price per kilogram: RM80</div>
              <div class="product-display">
                <div class="desc">Kenya AA Coffee</div>
              </div>
            </div>
            <div class="action-btn">
              <button class="edit0"><i class="fas fa-edit"></i></button>
              <button class="delete"><i class="fas fa-trash-alt"></i></button>
            </div>
          </div>

          <div class="container-right">
            <div
              class="product-container"
              onclick="popup('5','../img/ethiopia.jpg')"
            >
              <img
                id="imgPopUp"
                src="../img/ethiopia.jpg"
                width="350"
                height="350"
                alt="Description"
              />
              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus orci quam, gravida a lacus eu, ultricies iaculis ex.
                Nunc eu nisl sit amet justo eleifend rutrum.
              </div>
              <div class="desc-name">Name: Ethiopian Yirgacheffe Coffee</div>
              <div class="desc-country">Country: Southern Ethiopia</div>
              <div class="desc-roast">Roasts: Light-Medium Roast</div>
              <div class="desc-price">Price per kilogram: RM75</div>
              <div class="product-display">
                <div class="desc">Ethiopian Yirgacheffe Coffee</div>
              </div>
            </div>
            <div class="action-btn">
              <button class="edit"><i class="fas fa-edit"></i></button>
              <button class="delete"><i class="fas fa-trash-alt"></i></button>
            </div>
          </div>
          <div class="end-product-container">
            <div class="end-product">End of Selection</div>
          </div>
          <div class="end-product-container">
            <div class="end-product">End of Selection</div>
          </div>
          <div class="add">
            <a href="addproduct.php" class="add-icon">
              <i class="fas fa-plus-circle fa-5x"></i>
            </a>
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
                  Address: <br />85a, 85b, 85c, Jalan Bukit Bintang, <br />Kuala
                  Lumpur, <br />55100 Malaysia
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
  </body>
</html>
