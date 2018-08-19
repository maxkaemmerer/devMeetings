<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\AutomaticRefuelingBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\ExpensivePaymentBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\FastTravelBehaviour;

final class PlaneTravel extends Travel
{
    public function __construct()
    {
        $this->paymentBehaviour = new ExpensivePaymentBehaviour();
        $this->travelBehaviour = new FastTravelBehaviour();
        $this->refuelingBehaviour = new AutomaticRefuelingBehaviour();
    }

    public function type(): string
    {
        return 'fast';
    }

    public function name(): void
    {
        echo self::class . PHP_EOL;
    }
}