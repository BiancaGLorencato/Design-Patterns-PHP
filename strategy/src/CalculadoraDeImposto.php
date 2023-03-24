<?php

namespace Aula\DesingPattern;

use Aula\DesingPattern\Impostos\Imposto;

class CalculadoraDeImposto
{
    public function calcula(Orcamento $orcamento, Imposto $imposto) : float
    {
        return $imposto->calcularImposto($orcamento);
    }
}