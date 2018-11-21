<?php

require_once  '../vendor/autoload.php';

use Reality\Just;
use Reality\Nothing;

$just4 = Just::of(4);
$nothing = Nothing::of("false xD");

var_dump($just4->value());

$mapped =  $just4
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;})
  ->map(function ($item){return $item * 2;});

var_dump($mapped);
var_dump($mapped instanceof Just );


