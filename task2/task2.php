<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recharge Card Generator</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>

<?php   
   

if (isset($_POST["calculate"])) {
  $firstNum = $_POST["firstNum"];
  $secondNum = $_POST["secondNum"];
  $operator = $_POST["operator"]; 
  $result = ""; 
  
    # code...
    if ($operator == '+') {
       $result = $firstNum + $secondNum;
    } elseif($operator == '-') {
       $result = $firstNum - $secondNum;
    } elseif($operator == '*') {
       $result = $firstNum * $secondNum;
    } elseif($operator == '/') {
      $result = $firstNum / $secondNum;
    };
  }
  
  ?>


  <h1>Simple Calculator</h1>
  <form action="task2.php" method="post" class="calc-container">
    First Number<input type="number" name="firstNum">
    <select name="operator">
      <option>+</option>
      <option>-</option>
      <option>*</option>
      <option>/</option>
    </select>
    Second Number<input type="number" name="secondNum">
    <input type="submit" value="calculate" name="calculate">
    <div>
      Result
      <input type="number" value="<?= $result?>" class="result-width">
    </div>
  </form>


  

  
</body>
</html>


