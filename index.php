<?php
echo '<h1>Hello World!</h1>'
?>

<?php
// Unlike JavaScript, $items is NOT added to the global scope.
$items = ['One', 'Two', 'Three'];

// http: //php.net/manual/en/language.functions.php
function printData($items) {
    for($i = 0; $i < count($items); $i++) {
        ?>
        <div class='block'><? echo $items[i] ?> </div>
        <?php
    }
}

printData($items);
?>