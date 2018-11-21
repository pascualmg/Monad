<?php
/**
 * Created by PhpStorm.
 * User: Pascual
 * Date: 19/11/2018
 * Time: 23:11
 */

namespace FantasyLand;
/**
 * Chain , composición!!! lesgo
 *
 * A value that implements the Chain specification must also implement the Apply specification.
 *
 * m.chain(f).chain(g) is equivalent to m.chain(x => f(x).chain(g)) (associativity)
 *
 * chain method:
 *
 * chain :: Chain m => m a ~> (a -> m b) -> m b
 * A value which has a Chain must provide a chain method. The chain method takes one argument:
 *
 * m.chain(f)
 * 1. f must be a function which returns a value
 *   1.1 If f is not a function, the behaviour of chain is unspecified.
 *   1.2 f must return a value of the same Chain
 * 2. chain must return a value of the same Chain
 * Interface Chain
 * @package FantasyLand
 */
interface Chain extends Apply
{
    function chain(\Closure $functionThatReturnsChain): Chain;
}