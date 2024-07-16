<?php

echo "Digite 5 valores separados por espaço:\n";


$input = readline();


$valores = explode(" ", $input);


if (count($valores) !== 5) {
    die("Erro: Insira exatamente 5 valores separados por espaço.\n");
}


$v1 = (float)$valores[0];
$v2 = (float)$valores[1];
$v3 = (float)$valores[2];
$v4 = (float)$valores[3];
$v5 = (float)$valores[4];


$soma = $v1 + $v2 + $v3 + $v4;


if ($v5 != 0) {
    $resultado = $soma / $v5;
    echo "Resultado da operação: " . $resultado . "\n";
} else {
    echo "Erro: Divisão por zero não é permitida.\n";
}



//um programa que leia 5 valores, que some os 4 primeiros e divida o resultado pelo 5 valores

?>

