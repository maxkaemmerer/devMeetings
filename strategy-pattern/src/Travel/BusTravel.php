<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\AutomaticRefuelingBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\CheapPaymentBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\SlowTravelBehaviour;

final class BusTravel extends Travel
{
    public function __construct()
    {
        $this->travelBehaviour = new SlowTravelBehaviour();
        $this->paymentBehaviour = new CheapPaymentBehaviour();
        $this->refuelingBehaviour = new AutomaticRefuelingBehaviour();
    }

    public function type(): string
    {
        return 'cheap';
    }

    public function name(): void
    {
        echo self::class . PHP_EOL;
    }
}