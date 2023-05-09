<?php

namespace Aula\DesingPattern\Impostos;

use Aula\DesingPattern\Impostos\Imposto;
use Aula\DesingPattern\Orcamento;

abstract class Imposto2Regras implements Imposto
{
    public function calcularImposto(Orcamento $orcamento) : float
    {
        if($this->deveAplicarImpostoMaximo($orcamento)){
            return $this->aplicaMaximo($orcamento);
        }
        return $this->aplicaMinimo($orcamento);
    }

    abstract protected function deveAplicarImpostoMaximo(Orcamento $orcamento) : bool;
    abstract protected function aplicaMaximo(Orcamento $orcamento) : float;
    abstract protected function aplicaMinimo(Orcamento $orcamento) : float;
}