<?php

require_once  '../vendor/autoload.php';

use Reality\Just;
use Reality\Maybe;
use Reality\Nothing;
use Rx\Observable;

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
  ->map(function ($item){return $item * 2;})
    ->chain(function($item){return Maybe::of($item * 2);})
    ->chain(function($item){return Maybe::of($item);})
    ->chain(function($item){return Maybe::of($item);})
    ->chain(function($item){return Maybe::of($item);})
    ->chain(function($item){return Maybe::of($item);})
    ->chain(function($item){return Maybe::of($item);})
    ->chain(function($item){return Maybe::of($item);})
    ->chain(function($item){return Maybe::of($item);})
    ->chain(function($item){return Maybe::of($item);});

var_dump($mapped);
var_dump($mapped instanceof Just );
var_dump($mapped instanceof Maybe );


