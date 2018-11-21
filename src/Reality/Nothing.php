<?php

namespace Reality;

class Nothing extends Maybe
{

    //named constructor of
    private function __construct()
    {
    }

    static function of(): Applicative
    {
        return new Nothing();
    }

    function Chain(): Chain
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