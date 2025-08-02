# O que é PHP
## Prazer, PHP

Primeiro código:
```PHP
<?php
echo "Hello, World!";
```
> Note que o fechamento da marcação `<?php` não é obrigatório.

# Catálogo de filmes
## Atribuindo valores ao filme
Declaração de variáveis no PHP:
```PHP
// screen-match.php
<?php
echo "Bem-vindo(a) ao screen match!
"; // A quebra de linha é possível sem o código PHP_EOL!

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$notaFilme = 8.8;
$incluidoNoPlano = true;

echo $nomeFilme;
```

## Operando sobre dados
```php
<?php
echo "Bem-vindo(a) ao screen match!
"; // A quebra de linha é possível sem o código PHP_EOL!

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$somaDeNotas = 9;
$somaDeNotas +=  6; // Acumuladores
$somaDeNotas +=  8;
$somaDeNotas +=  7.5;
$somaDeNotas +=  5;
$notaFilme = $somaDeNotas / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020; // Comparação complexa

echo $notaFilme;
```

## Trabalhando com textos
O código a seguir retorna 15 mesmo, apesar de os operandos serem do tipo string!!!
```php
<?php
echo "5" + "10";
```

Você pode usar interpolação e concatenação para juntar conteúdos de variáveis a uma string.
```php
// Resto do código
// O ponto é o operador de concatenação do PHP.
echo "Nome do filme: " . $nomeFilme . "\n";

// Para interpolar uma variável em uma string, envolva a string
// com aspas DUPLAS e inclua a variável que você quer interpolar.
echo "Nota do filme: $notaFilme\n"; 
// Envolver a string com aspas simples não permite a interpolação:
// o texto é considerado literalmente (variáveis e caracteres de escape).
echo 'Nota do filme: $notaFilme\n'; 
```

## Entrada de dados
Usamos o array `$argv` para obter as entradas do usuário a partir do console. A posição zero do array retorna o nome do script php que está sendo executado.
```php
// $argv[1] pega o primeiro parâmetro na entrada.
// Se $argv[1] for nulo, retorna o valor padrão 2000,
// graças ao operador de coalescência nula (??). 
$anoLancamento = $argv[1] ?? 2000;
```

# Controlando o fluxo
## Tomando decisões
```php
if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento";
} else if ($anoLancamento > 2020) {
    echo "Esse filme ainda é novo";
} else {
    echo "Esse filme não é um lançamento";
}
```
Um conceito à parte: expressão é todo conjunto de código que é avaliado e retorna um valor. Note que os blocos condicionais (`if`) NÃO são expressões. Já o código a seguir é um exemplo de expressão (que retorna booleano, embora não esteja sendo atribuído a uma variável):
```php
$planoPrime || $anoLancamento < 2020
```

## Expressão condicional
A função `match` retorna uma expressão que funciona como o comando `switch/case`.
```php
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia", 
    default => "gênero desconhecido"
};
```

## Avaliando o filme
Usando um loop para obter as notas do filme no console: 
```php
$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}
$notaFilme = $somaDeNotas / $quantidadeDeNotas;
```
## Outros loops
Loop com `while`:
```php
$contador = $argc;
while ($contador > 0) {
    $somaDeNotas += $argv[$contador];
    $contador--;
}
```

Loop com `do... while`:
```php
$contador = $argc;
do {
    $somaDeNotas += $argv[$contador];
    $contador--;
} while ($contador > 0);
```

# Arrays em PHP
## Listas de valores
A variável `$argv` no PHP é um exemplo de array/lista.

Segue um exemplo de array:
```PHP
$filme = [
    "Thor: Ragnarok",
    2021,
    7.8,
    "super-heroi"
];
```
No entanto, o acesso aos dados desse array é confuso, porque usaríamos um inteiro para referenciar um elemento do array. Para resolver esse problema, usamos os arrays como uma mapeamento.

## Nomeando informações
Exemplo de mapa/dicionário/array associativo:
```php
$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-heroi"
];

echo $filme['nome'];
```

## Manipulando arrays
Casting:
```PHP
for ($contador = 1; $contador < $argc; $contador++) {
    // Casting de valor para float.
    $notas[] = (float) $argv[$contador];
}
```
Uso do `foreach`:
```PHP
$somaDeNotas = 0;
foreach ($notas as $nota) {
    $somaDeNotas += $nota;
}
```
E uso de funções pré-definidas do PHP para os arrays (usamos `array_sum` neste exemplo):
```PHP
$notaFilme = array_sum($notas) / $quantidadeDeNotas;
```
> As funções sobre arrays tem o prefixo `array_`.

# Consolidando conhecimentos
## Crie um sistema de controle de saldo bancário
Tela proposta para o desafio: 
```PHP
// desafio.php
<?php
/*
********************
Titular: Vinicius Dias
Saldo atual: R$ 1000
*********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair
*/
```

Exemplo de arquivo que obtém a entrada de dados:
```php
// entrada.php
<?php
echo "Digite um número: \n";
$numero = (float) fgets(STDIN);
echo "O número é $numero\n";
```
> `fgets` é uma função de entrada. O parâmetro `STDIN` é uma constante que corresponde ao terminal em uso.
