<?php
/**
 * Created by PhpStorm.
 * User: Pascual
 * Date: 19/11/2018
 * Time: 23:11
 */

namespace FantasyLand;

interface Chain extends Apply
{
    function chain() :Chain;
}