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
    <title>The Polish Dream - Login</title>
  </head>
  <body>
    <header>
      <div class="logo-container">
        <a href="index.php">
        <p class="part-one logo">The Polish Dream</p>
        <p class="part-two logo">Management login</p>
        </a>
      </div>
    </header>
    <main class="login">
        <div class="login-form-container">
            <div class="login-form-head">
              <h1>Login</h1>
            </div>
            <div class="login-form-body">
              <form action="./php/validate.php" name="Form" method="post" onsubmit="return validateForm()">
                <input type="text" placeholder="Username" name="Username" class="login-form-input"/><br><br>
                <input type="password" placeholder="Password" name="Password" class="login-form-input"/><br><br>
                <div class="login-form-bottom">
                <input type="submit" class="login-form-btn btn"  value="login">
              </div>
              </form>
            </div>
        </div>
    <main>
    <script src="./js/script.js"></script>
  </body>
</html>
