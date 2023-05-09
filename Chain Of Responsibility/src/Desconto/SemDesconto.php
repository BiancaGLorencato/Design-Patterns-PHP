<?php

namespace Aula\DesingPattern\Desconto;


use Aula\DesingPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }
    public function calcularDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}