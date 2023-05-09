<?php

namespace Aula\DesingPattern\Impostos;

use Aula\DesingPattern\Orcamento;

class Icms implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}