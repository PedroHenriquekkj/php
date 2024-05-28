<?php
function contarVogais($string) {
    $vogais = preg_match_all('/[aeiouAEIOU]/', $string, $matches);
    return $vogais;
}

$string = "Hello, world!";
echo "A string '$string' possui " . contarVogais($string) . " vogais.";
?>
