<?php 
function userProfile() {
  if (isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    echo '<strong>Fullname:</strong>' .' '. $fullname . "<br>";
    echo '<strong>Username:</strong>' .' '. $username . "<br>";
    echo '<strong>Email:</strong>' .' '. $email . "<br>";
    echo '<strong>Password:</strong>' .' '. $password . "<br>";
    echo '<strong>Confirm Password:</strong>' .' '.  $confirm_password . "<br>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="sytle3.css">
</head>
<body>
<div class="container">
  <h1>Registration Form</h1>
  <form action="task3.php" method="POST" class="calc-container" required>
    Full Name<input type="text" name="fullname" placeholder="Enter your name" required>
    Username<input type="text" name="username" placeholder="Enter your username" required>
    email<input type="email" name="email" placeholder="Enter your email" required>
    Pasword<input type="password" name="password" placeholder="Enter your password" required>
    Confirm Password<input type="password" name="confirm_password" placeholder="Confirm your password" required>
    <input type="submit" value="Register">
  </form>
</div>

<div class="form-output">
  <p class="text">Registerd User Info</p> 
 <?= userProfile() ?>
</div>
  
</body>
</html>