<?php

namespace Aula\DesingPattern\Desconto;


use Aula\DesingPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if($orcamento->valor > 500){
            return $orcamento->valor * 0.05;
        }
        
        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}