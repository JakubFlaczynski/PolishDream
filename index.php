<?php include_once('./includes/connection.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cookie&family=Roboto:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>The Polish Dream - Home</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo-container">
          <p class="part-one logo">The Polish Dream</p>
          <p class="part-two logo">Just like babcia made 'em</p>
        </div>
        <div class="nav-links">
          <ul>
            <a href="#menu"><li>Menu</li></a>
            <a href="#menu"><li>Order</li></a>
            <a href="#gallery"><li>Gallery</li></a>
            <a href="#reserve"><li>Reservations</li></a>
            <a href="cart.php"
              ><li><img src="./img/cart.PNG" alt="shopping cart" /></li
            ></a>
          </ul>
        </div>
      </nav>
    </header>
    <section id="home">
      <div class="hero">
        <div class="hero-extended">
          <div class="hero-logo">
            <p class="part-one logo">
              The Polish<br />
              Dream
            </p>

          </div>
          <a href="#menu"
            ><button class="order-now-btn btn">Order now</button></a
          >
        </div>
      </div>
      <div class="quick-access-container">
        <div class="quick-access-box">
          <img class="quick-access-image" src="./img/find.jpg" alt="find us" />
          <a href="#reserve"
            ><button class="find-us-btn btn">Find us</button></a
          >
        </div>
        <div class="quick-access-box">
          <img class="quick-access-image" src="./img/menu.PNG" alt="menu" />
          <a href="#menu">
            <button class="our-menu-btn btn">Our menu</button></a
          >
        </div>
        <div class="quick-access-box">
          <img
            class="quick-access-image"
            src="./img/gallery.PNG"
            alt="gallery"
          />
          <a href="#gallery"
            ><button class="gallery-btn btn">Gallery</button></a
          >
        </div>
      </div>
    </section>
    <section id="partners">
      <h1>Our Partners</h1>
      <div class="partner-list">
        <ul>
          <li><img id="swiggy" src="./img/swiggy.png" alt="Swiggy" /></li>
          <li>
            <img
              id="deliveryHero"
              src="./img/deliveryHero.png"
              alt="Delivery hero"
            />
          </li>
          <li>
            <img id="doorDash" src="./img/doorDash.png" alt="Door dash" />
          </li>
          <li>
            <img
              id="thuisbezorgd"
              src="./img/thuisbezorgd.png"
              alt="Thuisbezorgd"
            />
          </li>
        </ul>
      </div>
    </section>
    <section id="menu">
      <div class="menu-heading">
        <h1 class="menu-heading">What we have to offer</h1>
      </div>
      <div class="menu-container">
      <?php
$sql = 'SELECT * FROM menu';

foreach ($conn->query($sql) as $row) {
  echo('<div class="menu-item">');
  echo("<h2>" . $row['Name']. "&nbsp;&nbsp;&nbsp;" .$row['Price']. "$". "</h2>");
  echo('<p class="menu-item-desc">' . $row['Description']. "</p>");
  echo('<add-cart></add-cart>');
  echo("</div>");
}

    ?>
      </div>
    </section>
    <section id="gallery">
      <div class="gallery-heading">
        <h1 class="gallery-heading">Straight from our kitchen</h1>
      </div>
      <div class="gallery-slideshow" id="gallery-slideshow">
        <div class="triangle-left" onclick="prevImg()"></div>
        <div class="triangle-right" onclick="nextImg()"></div>
      </div>
    </section>
    <section id="reserve">
      <div class="reserve-heading">
        <h1 class="reserve-heading">Make a reservation</h1>
      </div>
      <div class="reservation-container">
        <div class="reservation-form">
          <form class="reservation">
            <div class="reservation-form-top">
              <label>Date & Time</label><br />
              <input type="text" />
            </div>
            <div class="reservation-form-middle">
              <div class="reservation-form-middle-fname">
                <label>First name</label><br />
                <input type="text" />
              </div>
              <div class="reservation-form-middle-lname">
                <label>Last name</label><br />
                <input type="text" />
              </div>
            </div>
            <div class="reservation-form-bottom">
              <label>Phone number</label><br />
              <input type="text" />
            </div>
            <div class="reservation-form-end">
              <button class="reservation-form-btn btn">Reserve</button>
            </div>
          </form>
        </div>
        <div class="map-container">
          <div class="map"></div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.0555009059467!2d5.865147915924725!3d51.82341659536864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c708fb3a371503%3A0x71b9931f22801e9f!2sHeyendaalseweg%2C%20Nijmegen!5e0!3m2!1sen!2snl!4v1678719057908!5m2!1sen!2snl"
            width="800"
            height="500"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>
    <footer id="footer">
      <div class="footer-link">
        <a
          href="https://www.google.com/maps/dir//Heyendaalseweg+Nijmegen/@51.8234133,5.8673366,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x47c708fb3a371503:0x71b9931f22801e9f"
          >Heyendaalseweg 18a</a
        >
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="#menu">Menu</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="#menu">Order</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="https://www.facebook.com">Facebook</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="https://www.instagram.com">Instagram</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="https://www.twitter.com">Twitter</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a tel="+316238473937">+31 6 345 225 345</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="#gallery">Gallery</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="#reserve">Reservations</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="cart.php">Cart</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="login.php">Managment</a>
        <div class="footer-line"></div>
      </div>
      <div class="footer-link">
        <a href="login.php">Sign in</a>
        <div class="footer-line"></div>
      </div>
    </footer>
    <script src="./js/addCart.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
