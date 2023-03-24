<?php

namespace Aula\DesingPattern\Impostos;

use Aula\DesingPattern\Orcamento;

class Iss implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}