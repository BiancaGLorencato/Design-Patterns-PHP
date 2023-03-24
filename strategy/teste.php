<?php

use Aula\DesingPattern\Orcamento;
use Aula\DesingPattern\Impostos\Icms;
use Aula\DesingPattern\CalculadoraDeImposto;
use Aula\DesingPattern\CalculadoraDeDesconto;

require 'vendor/autoload.php';


/*$calculadora = new CalculadoraDeImposto();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());*/

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 600;

$orcamento->quantidadeItens = 6;

echo $calculadora->calcularDesconto($orcamento);
