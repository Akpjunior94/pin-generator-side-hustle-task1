<?php
session_start();

if (isset($_POST['register-submit'])) {
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $_SESSION['username'] = $username;
  $email = $_POST['email'];
  $password = $_POST['password'];
  $_SESSION['password'] = $password;
  $confirm_password = $_POST['confirm_password'];
  if($_POST['password'] != $_POST['confirm_password'])
  {
    $_SESSION['message'] = "<div>PassWord Mismatch: please enter same password</div>";
    header("location: register.php");
    exit();
  }

  header("location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="style4.css">
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
    <form action="register.php" method="POST" class="calc-container" required>
      Full Name<input type="text" name="fullname" placeholder="Enter your name" required>
      Username<input type="text" name="username" placeholder="Enter your username" required>
      email<input type="email" name="email" placeholder="Enter your email" required>
      Pasword<input type="password" name="password" placeholder="Enter your password" required>
      Confirm Password<input type="password" name="confirm_password" placeholder="Confirm your password" required>
      <input type="submit" name="register-submit" value="Register">
    </form>
  </div>
  
</body>
</html>