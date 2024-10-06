<?php
require('config.php');
if (isset($_POST['signup'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $user = "SELECT * FROM `users` WHERE `username`='$username' or `email`='$email'";
  $result = mysqli_query($conn, $user);
  $resultcount = mysqli_num_rows($result);
  if ($resultcount > 0) {
    echo "<script>
  alert('username or E-mail already exists');
  window.location.href='register1.php';
 </script>";
  } else {
    if ($password === $confirm_password) {
      $query = " INSERT INTO `users`( `username`, `email`, `password`, `confirm_password`) VALUES ('$username','$email','$password','$confirm_password')";
      (mysqli_query($conn, $query));
      echo "<script>
                 alert('registration successfully');
                 window.location.href='login.php';
                </script>";
    } else {
      echo "<script>
                  alert('password not match');
                  window.location.href='register1.php';
                 </script>";
    }
  }
}
?>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style12.css">
</head>

<body>
  <form action="" method="post">
    <div class="login-box">
      <h1>Register</h1>
      <div class="textbox">
        <input type="text" placeholder="Username" name="username" required>
      </div>
      <div class="textbox">
        <input type="email" placeholder="E-mail" name="email" required>
      </div>
      <div class="textbox">
        <input type="password" placeholder="Password" name="password" required>
      </div>
      <div class="textbox">
        <input type="password" placeholder="Confirm Password" name="confirm_password" required>
      </div>
      <button type="submit" class="btn" name="signup">Sign up</button>
      <p>Already have an account <a href="login.php">login</a></p>
    </div>
  </form>
  <script src="https://kit.fontawesome.com/e415cdcf10.js" crossorigin="anonymous"></script>
</body>

</html>