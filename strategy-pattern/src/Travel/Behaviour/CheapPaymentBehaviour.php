<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class CheapPaymentBehaviour implements PaymentBehaviour
{

    public function pay(): void
    {
        echo 'Paying 50€ :)' . PHP_EOL;
    }
}