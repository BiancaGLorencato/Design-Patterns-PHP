<?php

use Aula\DesingPattern\Orcamento;
use Aula\DesingPattern\Impostos\Icms;
use Aula\DesingPattern\CalculadoraDeImposto;


require 'vendor/autoload.php';


$calculadora = new CalculadoraDeImposto();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());

