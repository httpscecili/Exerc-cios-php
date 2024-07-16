<?php
echo "Bem-vindo ao programa de cálculo de média!\n\n";

echo "Por favor, insira as 4 notas separadas por espaço:\n";

$input = readline();

$notas = explode(" ", $input);


if (count($notas) !== 4) {
    die("Erro: Insira exatamente 4 notas separadas por espaço.\n");
}


$nota1 = (float)$notas[0];
$nota2 = (float)$notas[1];
$nota3 = (float)$notas[2];
$nota4 = (float)$notas[3];


$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


echo "\nA média das notas é: " . number_format($media, 2) . "\n";


//um programa que calcule a média aritimética, entre 4 notas

?>
