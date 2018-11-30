<?php
echo '<h1>Hello World!</h1>'
?>




<?php
$color = "red";
$COLOR = "white";
$coLOR = "blue";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>



<?php
// Unlike JavaScript, $items is NOT added to the global scope.
$items = ['One', 'Two', 'Three'];

// http://php.net/manual/en/language.functions.php
function printData($items) {
  for($i = 0; $i < count($items); $i++) {
    ?>
      <div class='block'><? echo $items[$i] ?></div>
    <?php
  }
}

printData($items);
?>


