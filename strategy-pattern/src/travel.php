<?php

declare(strict_types=1);

use MaxKaemmerer\Console\Argument\Argument;
use MaxKaemmerer\Console\Argument\InputArguments;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\BusTravel;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\CarTravel;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\PlaneTravel;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\TravelContext;

require_once __DIR__ . '/../vendor/autoload.php';

[$preference] = InputArguments::fromArguments([
    Argument::create('preference', 'fast', 'How would you like to travel? (cheap|fast|convenient)'),
])->parse($argv);

$travelContext = new TravelContext([
    new PlaneTravel(),
    new BusTravel(),
    new CarTravel()
]);

$travelContext->travel($preference);