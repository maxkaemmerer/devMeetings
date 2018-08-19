<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class ManualRefuelingBehaviour implements RefuelingBehaviour
{

    public function refuel(): void
    {
        echo 'Refueling the car .. :(' . PHP_EOL;
    }
}