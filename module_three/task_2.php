
<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];
function removeEvenNumbers(&$numbers) {
    $numberFilter = array_filter($numbers, function($value) {
        return $value % 2 != 0;
    });
    $numbers = array_values($numberFilter);
}

removeEvenNumbers($numbers);
print_r($numbers);
?>
