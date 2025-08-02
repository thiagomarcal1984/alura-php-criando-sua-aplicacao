<?php
$saldo = (float)1000;
do {
echo "
********************
Titular: Vinicius Dias
Saldo atual: R$ $saldo
*********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair

Digite sua opção: ";
$opcao = fgets(STDIN);

switch ($opcao) {
    case 1:
        echo "Saldo atual: $saldo";
        break;
    case 2:
        do {
            echo "Informe o valor para saque: ";
            $saque = fgets(STDIN);
            if (is_numeric($saque) && $saque > 0) {
                $saldo -= $saque;
                break;
            }
            echo "\nValor inválido! ";
        } while (true);
        break;
    case 3:
        do {
            echo "Informe o valor para deposito: ";
            $deposito = fgets(STDIN);
            if (is_numeric($deposito) && $deposito > 0) {
                $saldo += $deposito;
                break;
            }
            echo "\nValor inválido! ";
        } while (true);
        break;
    case 4:
        echo "Tchau!";
        break;
    default:
        echo "Opção inválida.";
}
echo "\n\n";
} while ($opcao != 4);
