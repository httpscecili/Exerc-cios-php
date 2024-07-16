<?php

echo "Digite dois números inteiros separados por espaço:\n";

$input = readline();
$valores = explode(" ", $input);

if (count($valores) !== 2) {
    die("Erro: Insira exatamente dois números inteiros separados por espaço.\n");
}


$num1 = (int)$valores[0];
$num2 = (int)$valores[1];
$resultado = $num1 + $num2;


echo "A soma de $num1 e $num2 é: " . $resultado . "\n";



//4- faça um programa que leia 2 números inteiros, realize a soma destes e exiba o resultado final
?>
