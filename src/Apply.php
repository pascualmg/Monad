<?php
/**
 * Created by PhpStorm.
 * User: Pascual
 * Date: 19/11/2018
 * Time: 23:04
 */

interface Apply extends Functor
{
    function ap(Apply $possibleFunction) : Apply;
}