<?php 
include_once('../includes/session.php');
?>
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
    <link rel="stylesheet" href="../css/style.css" />
    <title>The Polish Dream - Home</title>
  </head>
  <body>
    <header>
      <nav>
      <a href="index.php" style="text-decoration: none; color: inherit">
          <div class="logo-container">
            <p class="part-one logo">The Polish Dream</p>
            <p class="part-two logo">Management panel</p>
          </div>
        </a>
        <?php include_once('../includes/adminNav.php');  ?>
      </nav>
    </header>
    <section class="mng-welcome-container">
      <div class="mng-welcome-content">
        <div class="mng-welcome-content-top">
          <h1>Welcome, what would you like to do?</h1>
        </div>
        <div class="mng-welcome-content-middle">
          <div class="mng-option" id="mgn-menu">
            <a href="edit-menu.php">
                <button class="mng-welcome-btn btn">Edit item</button></a
                >
            </a>
          </div>
          <div class="mng-option" id="mgn-employees">
            <a href="delete-menu.php">
                <button class="mng-welcome-btn btn">Delete item</button></a
                >
            </a>
          </div>
        </div>
        <div class="mng-welcome-content-bottom">
          <div class="mng-option" id="mgn-reservations">
            <a href="add-menu.php">
                <button class="mng-welcome-btn btn">Add item</button></a
                >
            </a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
