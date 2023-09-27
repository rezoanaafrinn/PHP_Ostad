<?php
$numbers = range(1, 10);
function removeEvenNumbers(&$array) {
    $array = array_filter($array, function($value) {
        return $value % 2 != 0;
    });
}

removeEvenNumbers($numbers);

print_r($numbers);
?>
