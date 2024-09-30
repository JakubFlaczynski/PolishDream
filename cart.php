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
      <a href="index.php" style="text-decoration: none; color: inherit;">
    <div class="logo-container">
        <p class="part-one logo">The Polish Dream</p>
        <p class="part-two logo">Just like babcia made 'em</p>
    </div>
</a>
        <div class="nav-links">
          <ul>
            <a href="index.php#menu"><li>Menu</li></a>
            <a href="index.php#menu"><li>Order</li></a>
            <a href="index.php#gallery"><li>Gallery</li></a>
            <a href="index.php#reserve"><li>Reservations</li></a>
            <a href="cart.php"
              ><li><img src="./img/cart.PNG" alt="shopping cart" /></li
            ></a>
          </ul>
        </div>
      </nav>
    </header>
    <div class="cart-main-container">
    <?php
session_start();
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo "<h2 class='empty-cart'>Your cart is empty</h2>";
} else {
    echo('<div class="menu-item-cart">');
    echo "<br><h2 style='margin-bottom: 30px;'>Your Cart</h2>";
    echo "<ul>";

    foreach ($_SESSION['cart'] as $key => $item) {
        echo "<li class='cart-item'>";
        echo "<span class='item-name'>" . $item['name'] . "</span>";
        echo "<span class='item-quantity-price'>" . $item['quantity'] . " x $" . $item['price'] . "</span>";
        echo "<form method='POST' action='./php/removeFromCart.php' style='display:inline;'>";
        echo "<input type='hidden' name='item_id' value='" . $key . "' />";
        echo "<button type='submit' class='remove-button' style='border:none; font-size: 25px; margin-left: 10px; background:none; color:red; cursor:pointer;'>X</button>";
        echo "</form>";
        echo "</li>";
        echo "<div class='cart-line'></div>";
    }
    $total = array_reduce($_SESSION['cart'], function ($sum, $item) {
        return $sum + $item['price'] * $item['quantity'];
    }, 0);

    echo "<li class='cart-item total-item' style='margin-top: 20px;'>";
    echo "<span class='item-name'>Total</span>";
    echo "<span class='item-quantity-price'>$" . $total . "</span>";
    echo "</li>";

    echo "</ul>";
    echo "<button onclick='alert(`Project ends here, check the sign in hyperlink in the footer`)' class='order'>Order</button>";
    echo "</div>";
}
?>
<div class="cart-map">
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
  </body>
</html>
