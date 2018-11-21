<?php

namespace FantasyLand;

interface Apply extends Functor
{
    function ap(Apply $possibleFunction) : Apply;
}