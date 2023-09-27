<?php
$text = "The quick brown fox jumps over the lazy dog.";
function stringManipulation($text) {
    $lowercaseText = strtolower($text);
    $arr = ['brown'];
    $modifiedText = str_replace($arr, "red", $lowercaseText);
    echo $modifiedText;
}
stringManipulation($text);
echo 'hello';
?>
