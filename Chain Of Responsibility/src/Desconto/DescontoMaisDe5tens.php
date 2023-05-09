<?php

namespace Aula\DesingPattern\Desconto;

use Aula\DesingPattern\Orcamento;

class DescontoMaisDe5tens extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeItens > 5){
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}