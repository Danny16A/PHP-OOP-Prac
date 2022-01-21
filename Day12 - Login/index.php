<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="login-form">
    <form action="includes/login.inc.php" method="POST">
      <?php
      if (isset($_SESSION["userid"])) {
      ?>
        <h1>Welcome</h1>
      <?php
      } else {
      ?>
        <h1>Login</h1>
      <?php
      }
      ?>
      <div class="content">
        <div class="input-field">
          <input type="text" name="username" placeholder="Username" autocomplete="nope">
        </div>
        <div class="input-field">
          <input type="password" name="password" placeholder="Password" autocomplete="new-password">
        </div>
        <a href="#" class="link">Forgot Your Password?</a>
      </div>
      <div class="action">
        <a href="/register.php">Register</a>
        <button type="submit" name="submit">Sign in</button>
      </div>
    </form>
  </div>
  <!-- partial -->
  <script src="./assets/js/script.js"></script>

</body>

</html>