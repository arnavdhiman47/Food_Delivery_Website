<?php

require('config.php');
session_start();
?>
<?php
if(isset($_POST['signin']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $user="SELECT * FROM `users` WHERE `password`='$password'  AND `username`='$username'";
 $result=mysqli_query($conn,$user);
  if(mysqli_num_rows($result)==1)
{
  $result_fetch=mysqli_fetch_assoc($result);

   $_SESSION['username']=$username;
   $_SESSION['loggin'];
   echo"<script>
   alert('login successfully');
   </script>";
header("location:index2.php");
  }
else{
  echo"<script>
  alert('incorrect password');
  window.location.href='login.php';
  </script>";

}
}

?>


<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style123.css">
  </head>
  <body>
  <form action="" method="post">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name=username required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required>
  </div>
  <button type="submit" class="btn" name="signin">Sign in</button>

  <p>create an account <a href="register1.php">Register now</a></p>
</div>
  </form>
  </body>
</html>
