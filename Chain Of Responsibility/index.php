<?php

use Aula\DesingPattern\Orcamento;
use Aula\DesingPattern\CalculadoraDeDesconto;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 600;

$orcamento->quantidadeItens = 6;

echo $calculadora->calcularDesconto($orcamento);
