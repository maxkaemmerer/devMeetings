<?php

declare(strict_types=1);

use MaxKaemmerer\Console\Argument\Argument;
use MaxKaemmerer\Console\Argument\InputArguments;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\AutomaticRefuelingBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\ConvenientTravelBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\UpfrontPaymentBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\FastTravelBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\FuelOnlyPaymentBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\ManualRefuelingBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\SlowTravelBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\BusTravel;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\CarTravel;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\PlaneTravel;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\TravelPicker;

require_once __DIR__ . '/../vendor/autoload.php';

[$preference] = InputArguments::fromArguments([
    Argument::create('preference', 'fast', 'How would you like to travel? (cheap|fast|convenient)'),
])->parse($argv);

$travelPicker = new TravelPicker([
    new PlaneTravel(
        new UpfrontPaymentBehaviour(),
        new FastTravelBehaviour(),
        new AutomaticRefuelingBehaviour()
    ),
    new BusTravel(
        new UpfrontPaymentBehaviour(),
        new SlowTravelBehaviour(),
        new AutomaticRefuelingBehaviour()
    ),
    new CarTravel(
        new FuelOnlyPaymentBehaviour(),
        new ConvenientTravelBehaviour(),
        new ManualRefuelingBehaviour()
    )
]);

$travelKind = $travelPicker->pick($preference);

$travelKind->name();
$travelKind->pay();
$travelKind->refuel();
$travelKind->travel();