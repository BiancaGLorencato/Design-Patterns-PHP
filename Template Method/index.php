<?php

use Aula\DesingPattern\Orcamento;
use Aula\DesingPattern\CalculadoraDeImposto;
use Aula\DesingPattern\Impostos\IOF;
use Aula\DesingPattern\Impostos\IPI;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImposto();

$orcamento = new Orcamento();
$orcamento->valor = 600;

$orcamento->quantidadeItens = 6;

echo $calculadora->calcula($orcamento, new IOF());

echo $calculadora->calcula($orcamento, new IPI());
