<!-- state management practise -->
<!-- global and local state -->
<!-- the state in the function is called a local state and can not be accessed globally unless the following is done. -->


<!-- 1. returning the vairiable inside and assigning it outside to the function -->
<!-- 2. by overiding the global state from witihn our function.  -->
<?php
  session_start();
  $light = 0; // off state

  echo "state: $light";
  echo '<br>';

  function fx()
  {

    // global $light; 
    $light = 13;

    // $GLOBALS['light']=$light;
    echo "state: $light";
    echo '<br>';
    // return $light;
    $_SESSION['light'] = $light;

  }
  fx();


  // $light = fx();
  $light = $_SESSION['light'];
  echo "state: $light";
  echo '<br>';
?>

<!-- linking to another page and using the global state -->
<!-- using session allow us to access in more than one pages -->
<a href="p2.php?light=<?=$light?>">link to P2</a>

<form method="POST" action="p2.php">
  <input type="hidden" name="light" value="<?= $light ?>">
  <button>Page 2</button>
</form>

