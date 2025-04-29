<?php
function maiorNumero($a, $b, $c) {

    if (($a > $b) && ($b < $c)){
        return "$a é maior";
    } else if (($b > $a) && ($a < $c)){
        return "$b é maior";
    } else {
        return "$c é maior";
    }
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$media = maiorNumero($valor1, $valor2, $valor3);

echo "$media";
?>