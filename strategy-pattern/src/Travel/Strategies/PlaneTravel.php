<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Strategies;


use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\RequiresPayment;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\TravelStrategy;

final class PlaneTravel implements RequiresPayment, TravelStrategy
{

    public function pay()
    {
        echo 'Paying 600€ for flight.' . PHP_EOL;
    }

    public function travel(): void
    {
        echo 'Traveling quickly by plane! :)'. PHP_EOL;
    }

    public function type(): string
    {
        return 'fast';
    }
}