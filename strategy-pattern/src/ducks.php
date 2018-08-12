<?php

declare(strict_types=1);

use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\DivingDuck;
use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\Duck;
use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\PerchingDuck;
use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\RubberDuck;

require_once __DIR__ . '/../vendor/autoload.php';

$ducks = [
    new DivingDuck(),
    new PerchingDuck(),
    new RubberDuck()
];

/** @var Duck $duck
 */
foreach ($ducks as $duck){
    echo $duck->name() . ' flies: ';
    $duck->fly();
    echo PHP_EOL;

    echo $duck->name() . ' swims: ';
    $duck->swim();
    echo PHP_EOL;

    echo $duck->name() . ' quacks: ';
    $duck->quack();
    echo PHP_EOL;
}