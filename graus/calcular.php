<?php
function converterParaCelsius($a) {
    return (32 - $a);
}

$valor1 = $_POST['valor1'];
$media = converterParaCelsius($valor1);

echo "A temperatura em Celsius é: $media";
?>