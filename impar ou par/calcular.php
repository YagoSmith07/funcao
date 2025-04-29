<?php
function teste($a) {
    if ($a % 2 == 0){
        return "par";
    }
    else {
        return "impar";
    }
}

$valor1 = $_POST['valor1'];
$media = teste($valor1);

echo "O numero ".$valor1." é: ".$media;
?>