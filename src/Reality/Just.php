<?php

namespace Reality;

use FantasyLand\Apply;
use FantasyLand\Chain;

class Just extends Maybe
{

    private $value;

    public function value()
    {
        return $this->value;
    }

    public function __construct($value)
    {
        $this->value = $value;
    }


    public function chain(\Closure $functionThatReturnsChain = null): Chain
    {
        $result = $functionThatReturnsChain($this->value);

        if (!$result instanceof Maybe) {
            throw new \Exception("la funcion de proyeccion de Chain ha de retornar una Maybe");
        }

        return $result;
    }

    /*
     * Apply f
     *ap :: Apply f => f a ~> f (a -> b) -> f b
     */
    public function ap(Apply $possibleFunction): Apply
    {
        return ($possibleFunction instanceof Just)?
            Maybe::of(($possibleFunction->value())($this->value))//new Just
            :
            Maybe::of();//new Nothing
    }


//    public function map($proyectionFunction)
//    {
//        return Maybe::of($proyectionFunction($this->value));
//    }

}