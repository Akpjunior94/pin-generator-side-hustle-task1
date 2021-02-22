<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recharge Card Generator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

// $random_number = mt_rand(1,15);
// for ($i = 0; $i < 15; $i++) {
//     $random_number .= mt_rand(0,15);
// }

// echo $random_number;


function rechargePin() {
  for ($i=0; $i <= 200; $i++) { 
    $random_number = mt_rand(1000000000000000, 9999999999999999);
    echo $random_number;
    echo '<br>';
  }
}

?>

  <h1>Recharge Card Generator</h1>
  <p>A click of the button generates 200 recharge pin</p>

  <div class="container">
    <input type="submit" name="rechargePin" class="button" value="Generate Pin" onclick="document.write('<?php rechargePin() ?>')" />  
  </div>
  
</body>
</html>










<!-- // $generator = "0123456789";

// echo substr(str_shuffle($generator),0,5); -->



