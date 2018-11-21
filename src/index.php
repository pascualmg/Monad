<?php
require_once  '../vendor/autoload.php';

$just4 = Reality\Just::of(4);
$nothing = Reality\Nothing::of("false xD");




var_dump($just4->value());

$mapped = $just4->map(function ($item){return $item;});

var_dump($mapped);


