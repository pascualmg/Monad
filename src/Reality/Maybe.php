<?php

namespace Reality;

use FantasyLand\Applicative;
use FantasyLand\Monad;

abstract class Maybe implements Monad
{
    static function of($value = null): Applicative
    {
        if (null === $value) {
           return new Nothing();
        }
        return new Just($value);
    }
    public function map($proyectionFunction)
    {
        return $this->ap(self::of($proyectionFunction));
    }
}