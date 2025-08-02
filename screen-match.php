<?php
echo "Bem-vindo(a) ao screen match!\n"; // note o caractere de escape \n.

$nomeFilme = "Top Gun - Maverick";
// $argv[1] pega o primeiro parâmetro na entrada.
// Se $argv[1] for nulo, retorna o valor padrão 2000,
// graças ao operador de coalescência nula (??). 
$anoLancamento = $argv[1] ?? 2000;
$somaDeNotas = 9;
$somaDeNotas +=  6;
$somaDeNotas +=  8;
$somaDeNotas +=  7.5;
$somaDeNotas +=  5;
$notaFilme = $somaDeNotas / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

// O ponto é o operador de concatenação do PHP.
echo "Nome do filme: " . $nomeFilme . "\n";

// Para interpolar uma variável em uma string, envolva a string
// com aspas DUPLAS e inclua a variável que você quer interpolar.
echo "Nota do filme: $notaFilme\n"; 
// Envolver a string com aspas simples não permite a interpolação:
// o texto é considerado literalmente (variáveis e caracteres de escape).
echo 'Nota do filme: $notaFilme\n'; 
echo "\nAno do filme: $anoLancamento\n"; 
