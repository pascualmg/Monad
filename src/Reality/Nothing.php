<?php

namespace Reality;

use FantasyLand\Applicative;
use FantasyLand\Chain;

class Nothing extends Maybe
{

    //named constructor of
    private function __construct($anyValue)
    {
        return $this;
    }

    static function of($anyValue): Applicative
    {
        return new self($anyValue);
    }

    function chain(): Chain
    {
        return $this;
    }


    function ap(Apply $possibleFunction): Apply
    {
        return $this;
    }


    function map($proyectionFunction)
    {
        return $this;
    }

}