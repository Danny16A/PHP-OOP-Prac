<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="includes/signup.inc.php" method="POST">
    <h1>Register</h1>
    <div class="content">
    <div class="input-field">
        <input type="text" name="uid" placeholder="Username" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="email" name="email" placeholder="Email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name="pwd" placeholder="Password" autocomplete="new-password">
      </div>
      <div class="input-field">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password" autocomplete="new-password">
      </div>
    </div>
    <div class="action">
      <button type="submit" name="submit">Register</button>
      <a href="/index.php">Sign in</a>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./assets/js/script.js"></script>

</body>
</html>
