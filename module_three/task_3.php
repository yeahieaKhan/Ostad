<?php

// $grades = array(85, 92, 78, 88, 95);
$grades = range(85,95);
function sortingGrate(&$grades) {
    rsort($grades);
}
sortingGrate($grades);
print_r($grades);
?>
