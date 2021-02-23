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
  $error = "";
  $firstNum = "";
  $secondNum ="";

if (isset($_POST["operator"])) {
  $firstNum = $_POST["firstNum"];
  $secondNum = $_POST["secondNum"];
  $operator = $_POST["operator"]; 
  $result = ""; 
  
    # code...
    if ($operator == 'addition') {
      $result = $firstNum + $secondNum;
    } elseif($operator == 'subtraction') {
      $result = $firstNum - $secondNum;
    } elseif($operator == 'multiplication') {
      $result = $firstNum * $secondNum;
    } elseif($operator == 'division') {
      $result = $firstNum / $secondNum;
    } else{
      $error = 'please fill in the blank fields';
    };
  }
  
  ?>


  <h1>Simple Calculator</h1>
  <form action="task2.php" method="post" class="calc-container">
    First Number<input type="number" name="firstNum" placeholder="Enter First Number" required>
    Second Number<input type="number" name="secondNum" placeholder="Enter Second Number" required>
      Result
      <input type="number" value="<?= $result?>" class="result-width">
    </div>
    <div>
      <input type="submit" name="operator" value="addition">
      <input type="submit" name="operator" value="subtraction">
      <input type="submit" name="operator" value="multiplication">
      <input type="submit" name="operator" value="division">
    </div>
  </form>


  <!-- Another Method -->
  <!-- <form action="task2.php" method="post" class="calc-container">
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
  </form> -->


  

  
</body>
</html>


