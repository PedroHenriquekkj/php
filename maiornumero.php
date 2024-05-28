<?php
function encontrarMaiorNumero($array) {
    return max($array);
}

$numeros = array(10, 5, 8, 20, 15);
echo "O maior número no array é: " . encontrarMaiorNumero($numeros);
?>
