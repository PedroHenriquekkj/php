<?php
if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacao'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    switch($operacao) {
        case 'adicao':
            $resultado = $numero1 + $numero2;
            break;
        case 'subtracao':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacao':
            $resultado = $numero1 * $numero2;
            break;
        case 'divisao':
            if($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Divisão por zero não é possível.";
            }
            break;
        default:
            $resultado = "Operação inválida.";
    }

    echo "Resultado da operação: $resultado";
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
