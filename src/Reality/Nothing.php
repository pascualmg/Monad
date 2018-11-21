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


    public function chain(\Closure $functionThatReturnsChain): Chain
    {
        return $this;
    }

    function ap(Apply $possibleFunction): Apply
    {
        return $this;
    }
}