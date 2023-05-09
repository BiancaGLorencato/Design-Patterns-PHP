<?php

namespace Aula\DesingPattern\Impostos;

use Aula\DesingPattern\Orcamento;

interface Imposto
{
    public function calcularImposto(Orcamento $orcamento) : float;
}