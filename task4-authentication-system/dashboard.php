<?php
 session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style4.css">
</head>
<body>
  <div class="d-container">
    Welcome<strong> <?php       
      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo $username;
      }
    ?> </strong>
    <h1>Welcome to your Dashboard</h1>
    <a href="logout.php">Logout</a>
  </div>
  
</body>
</html>