<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class ConvenientTravelBehaviour implements TravelBehaviour
{

    public function travel(): void
    {
        echo 'Travelling conveniently, I might take a detour to Rome! :)' . PHP_EOL;
    }
}