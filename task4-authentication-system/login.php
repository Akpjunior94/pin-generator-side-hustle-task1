<?php
session_start(); // start the session

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
}

if (isset($_POST['login-submit'])) { //here we check if session is set or not
  $userid = $_POST['userid'];
  $passid = $_POST['passid'];
  if ($username === $userid && $password === $passid) {
    header("location: dashboard.php");
    exit();
  }else 
  {
    echo "Username and Password Incorrect";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login_page</title>
  <link rel="stylesheet" href="style4.css">
</head>
<body>

  <div class="container">
    <h1>Login</h1>
    <form action="" method="POST" class="calc-container" required>
      Username<input type="text" name="userid" placeholder="Enter your username" required>
      Pasword<input type="password" name="passid" placeholder="Enter your password" required>
      <input type="submit" name="login-submit" value="Login">
    </form>
    <a href="register.php">Not Registered</a>
  </div>
  
</body>
</html>