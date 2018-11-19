<?php

class Just extends Maybe
{

    private $value;

    function value()
    {
        return $this->value;
    }

    //named constructor : of
    private function __construct($value)
    {
        return new self($this->value);
    }
    static function of($value): Applicative
    {
        return new Just($value);
    }


    function Chain(): Chain
    {
    }

    function ap(Apply $possibleFunction): Apply
    {
        // TODO: Implement ap() method.
    }


    function map($proyectionFunction)
    {
        // TODO: Implement map() method.
    }

}