<?php
/**
 * Created by PhpStorm.
 * User: Pascual
 * Date: 19/11/2018
 * Time: 22:49
 */
namespace FantasyLand;

interface Applicative extends Apply
{
    static function of($value) : Applicative;
}