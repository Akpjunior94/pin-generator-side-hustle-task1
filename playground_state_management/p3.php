<?php
session_start();
  // $light = $_GET['light'];
  // $light = $_POST['light'];
  $light = $_SESSION['light'];  
 echo "state: $light";
 echo '<br>';
 
 
?>

<a href="p1.php">link to P1</a><br>
<a href="p2.php">link to P2</a>