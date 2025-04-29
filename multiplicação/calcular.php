<?php
function multiplicar($a, $b) {
    return ($a * $b);
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$mult = multiplicar($valor1, $valor2);

echo "A multiplicação de $valor1 x $valor2 é: $mult";
?>