<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\ConvenientTravelBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\FuelOnlyPaymentBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\ManualRefuelingBehaviour;

final class CarTravel extends Travel
{
    public function __construct()
    {
        $this->refuelingBehaviour = new ManualRefuelingBehaviour();
        $this->travelBehaviour = new ConvenientTravelBehaviour();
        $this->paymentBehaviour = new FuelOnlyPaymentBehaviour();
    }

    public function type(): string
    {
        return 'convenient';
    }

    public function name(): void
    {
        echo self::class . PHP_EOL;
    }
}