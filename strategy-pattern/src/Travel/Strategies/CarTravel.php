<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Strategies;


use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Independent;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\RequiresFuel;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\TravelStrategy;

final class CarTravel implements TravelStrategy, RequiresFuel, Independent
{

    public function travel(): void
    {
        echo 'Traveling conveniently by car :)' . PHP_EOL;
    }

    public function type(): string
    {
        return 'convenient';
    }

    public function refuel()
    {
        echo 'Refueling the car ... :(' . PHP_EOL;
    }

    public function changePlans(): void
    {
        echo 'Changing plans! Going to take a detour to Rome! :)' . PHP_EOL;
    }
}