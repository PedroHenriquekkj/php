<?php
function inverterString($string) {
    return strrev($string);
}

$string = "Hello, world!";
echo "String original: $string<br>";
echo "String invertida: " . inverterString($string);
?>
