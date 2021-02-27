<?php
session_start();
  // $light = $_GET['light'];
  // $light = $_POST['light'];
  $light = $_SESSION['light'];  
 echo "state: $light";
 echo '<br>';

 $_SESSION['light'] = 50;
 
 
?>

<a href="p3.php">link to P3</a> <br>
<a href="p1.php">link to P1</a>