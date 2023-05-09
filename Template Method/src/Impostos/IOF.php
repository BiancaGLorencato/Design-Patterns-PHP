<?php

namespace Aula\DesingPattern\Impostos;

use Aula\DesingPattern\Orcamento;


class IOF extends Imposto2Regras
{
    protected function deveAplicarImpostoMaximo(Orcamento $orcamento): bool
    {
        return $orcamento-> valor > 500;
    }

    protected function aplicaMaximo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function aplicaMinimo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}