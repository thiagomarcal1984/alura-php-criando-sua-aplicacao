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
