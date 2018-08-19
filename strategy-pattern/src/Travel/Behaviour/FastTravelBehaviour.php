<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class FastTravelBehaviour implements TravelBehaviour
{

    public function travel(): void
    {
        echo 'Travelling quickly :)' . PHP_EOL;
    }
}