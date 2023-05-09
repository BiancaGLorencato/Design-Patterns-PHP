<?php


namespace Aula\DesingPattern\Desconto;

use Aula\DesingPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto; 

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
    abstract public function calcularDesconto(Orcamento $orcamento): float;
   
}