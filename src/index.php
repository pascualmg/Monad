<?php

require_once  '../vendor/autoload.php';

use FantasyLand\Monad;
use React\EventLoop\Factory;
use Reality\Just;
use Reality\Maybe;
use Reality\Nothing;

use Rx\Observable;
use Rx\Scheduler;

try {
    $loop = Factory::create();
    Scheduler::setDefaultFactory(function () use ($loop){
    return new Scheduler\EventLoopScheduler($loop);
});
} catch (\Exception $exception) {
    print_r("No se ha podido inicial el loOps " ,$exception);
}

printf("LoOp On");

$ObservableDeUnaMaybeJust = Observable::of(Maybe::of([2,3,4]))
->subscribe('print_r');

$ObservableDeUnaMaybeNothing = Observable::of(Maybe::of());

Observable::interval(1000)
    ->take(5)
    ->flatMap(function ($i) {
        return Observable::of($i + 1);
    })
    ->subscribe('print_r');

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

$loop->run();
