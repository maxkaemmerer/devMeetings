<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Strategies;


use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\RequiresPayment;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\TravelStrategy;

final class BusTravel implements RequiresPayment, TravelStrategy
{

    public function pay()
    {
        echo 'Paying 50€ for the bus ride. :)' . PHP_EOL;
    }

    public function travel(): void
    {
        echo 'Traveling incredibly slowly by bus ... :('. PHP_EOL;
    }

    public function type(): string
    {
        return 'cheap';
    }
}