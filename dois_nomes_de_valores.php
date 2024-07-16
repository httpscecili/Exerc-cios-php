<?php
echo "Digite seu nome:\n";


$nome = readline();


echo "Digite dois valores separados por espaço:\n";


$input = readline();
$valores = explode(" ", $input);


if (count($valores) !== 2) {
    die("Erro: Insira exatamente dois valores separados por espaço.\n");
}


$v1 = (float)$valores[0];
$v2 = (float)$valores[1];


if ($v2 == 0) {
    die("Erro: Divisão por zero não é permitida.\n");
}


$resultado = $v1 / $v2;


echo "\nOlá, $nome! O resultado da divisão entre $v1 e $v2 é: " . $resultado . "\n";


//3-um programa que leia um nome de dois valores. após a leitura dos valores, exiba o nome da pessoa e da divisão enttre os dois valores;

?>
