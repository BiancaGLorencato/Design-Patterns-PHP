<?php

namespace Aula\DesingPattern;

use Aula\DesingPattern\Desconto\DescontoMaisDe500Reais;
use Aula\DesingPattern\Desconto\DescontoMaisDe5tens;
use Aula\DesingPattern\Desconto\SemDesconto;

class CalculadoraDeDesconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
       $cadeiaDeDescondo = new DescontoMaisDe5tens(new DescontoMaisDe500Reais(new SemDesconto()));

       return $cadeiaDeDescondo->calcularDesconto($orcamento);
    }
}