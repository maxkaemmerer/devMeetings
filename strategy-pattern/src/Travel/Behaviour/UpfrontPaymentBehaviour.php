<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class UpfrontPaymentBehaviour implements PaymentBehaviour
{

    public function pay(): void
    {
        echo 'Paying upfront' . PHP_EOL;
    }
}