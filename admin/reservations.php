<?php include_once('../includes/connection.php');
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
            <p class="part-two logo">Manage reservations</p>
          </div>
        </a>
        <?php include_once('../includes/adminNav.php');  ?>
      </nav>
    </header>
    <div class="mng-menu-container">
      <div class="mng-menu-half">
      <table>
        <tr>
          <th>First name</th>
          <th>Last name</th>
          <th>Number</th>
          <th>Date</th>
          <th>Confirmed</th>
          <th>ID</th>
          </tr>
    <?php
    $sql = 'SELECT * FROM reservations';
    
    foreach ($conn->query($sql) as $row) {
      echo("<tr>");
      echo("<td>" . $row['FirstName']. "</td>");
      echo("<td>" . $row['LastName']. "</td>");
      echo("<td>" . $row['Number']. "</td>");
      echo("<td>" . $row['Date']. "</td>");
      echo("<td>" . $row['Confirmed']. "</td>");
      echo("<td>" . $row['ID']. "</td>");
      echo("</tr>");
      
    }
    ?>
      </table>
      </div>
      <div class="mng-menu-half" id="mng-right-half">
        <div class="edit-form-container">
        <div class="reservation-container">
          <div class="reservation-form">
            <form class="reservation" action="../php/confirmReservation.php" method="post" onsubmit="return validateForm()" name="Form">
              <div class="reservation-form-top">
              <label>Confirm</label><br />
              <div class="reservation-form-bottom">
                <label>ID</label><br />
                <input type="number" name="ID"/>
              </div>
              <div class="reservation-form-end">
                <button type="submit" class="reservation-form-btn btn">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </div>
    </div>
    <script src="./js/script.js"></script>
  </body>
</html>
