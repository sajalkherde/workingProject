<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="login.css" type="text/css"> <!--attach CSS file to PHP-->
  <script type="text/javascript" src="login.js"></script> <!--attach Javascript file to PHP-->
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    session_start();
    $_SESSION['username'] = $_POST['usernameField']
    $_SESSION['password'] = $_POST['passwordField']
    header();
    exit();
  }
  ?>
  <div id="login">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input type="text" value="Username" id="usernameField" onfocus="changeUsername()" required>
      <input type="text" value="Password" id="passwordField" onfocus="changePassword()" required>
      <input type="submit" id="cred_submit" value="Submit">
    </form>
  </div>
</body>
</html>
