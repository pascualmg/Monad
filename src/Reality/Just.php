<?php
namespace Reality;

use FantasyLand\Applicative;
use FantasyLand\Apply;
use FantasyLand\Chain;

class Just extends Maybe
{

    private $value;

    public function value()
    {
        return $this->value;
    }

    //named constructor : of
    private function __construct($value)
    {
        $this->value = $value;
    }
    static function of($value): Applicative
    {
        return new self($value);
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
       return Just::of($proyectionFunction($this->value));
    }

}