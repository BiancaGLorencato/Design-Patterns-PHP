<?php

namespace Aula\DesingPattern\Impostos;

use Aula\DesingPattern\Orcamento;

class IPI extends Imposto2Regras
{
    protected function deveAplicarImpostoMaximo(Orcamento $orcamento) : bool
    {
        return $orcamento->valor > 500 && $orcamento->quantidadeItens > 3;
    }

    protected function aplicaMaximo(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.04;
    }

    protected function aplicaMinimo(Orcamento $orcamento) : float 
    {
        return $orcamento->valor * 0.025;
    }
}