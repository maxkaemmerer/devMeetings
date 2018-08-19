<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class SlowTravelBehaviour implements TravelBehaviour
{

    public function travel(): void
    {
        echo 'Travelling slowly... :(' . PHP_EOL;
    }
}