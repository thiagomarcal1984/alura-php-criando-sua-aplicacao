<?php
echo "Bem-vindo(a) ao screen match!\n"; // note o caractere de escape \n.

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";
$nomeFilme = "Watchmen";
// $argv[1] pega o primeiro parâmetro na entrada.
// Se $argv[1] for nulo, retorna o valor padrão 2000,
// graças ao operador de coalescência nula (??). 
$anoLancamento = 2000;
$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}
$notaFilme = $somaDeNotas / $quantidadeDeNotas;

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

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento";
} else if ($anoLancamento > 2020) {
    echo "Esse filme ainda é novo";
} else {
    echo "Esse filme não é um lançamento";
}

echo "\n";

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia", 
    default => "gênero desconhecido"
};

echo "O gênero do filme é $genero\n";

echo $argc;
