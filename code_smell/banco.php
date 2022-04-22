<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$enderecoDoViniciusEPatricia = new Endereco('Belo Horizonte', 'Centro', 'Bahia', '123C');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $enderecoDoViniciusEPatricia);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $enderecoDoViniciusEPatricia);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', new Endereco('Brasilia', 'Matriz', 'Av Brasil', '33A')));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
