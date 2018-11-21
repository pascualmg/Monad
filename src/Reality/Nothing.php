<?php

namespace Reality;

use FantasyLand\Applicative;
use FantasyLand\Apply;
use FantasyLand\Chain;

class Nothing extends Maybe
{

    //named constructor of
    public function __construct()
    {
        return $this;
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