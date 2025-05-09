<?php

function validarIdade($a) {
    if ($a < 18){
        echo" Você é Menor de Idade!";
    } else if ($a >= 18) {
        echo" Você é um Adulto!";
    } else if ($a >= 60) {
        echo" Você é um Idoso!";
    }
}

$idade = $_POST['idade'];
$media = validarIdade($valor1);


echo "$media";

?>