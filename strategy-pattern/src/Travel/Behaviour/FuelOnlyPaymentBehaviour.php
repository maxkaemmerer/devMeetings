<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class FuelOnlyPaymentBehaviour implements PaymentBehaviour
{

    public function pay(): void
    {
        echo 'I\'m just paying for fuel and repairs, no fixed cost :)' . PHP_EOL;
    }
}