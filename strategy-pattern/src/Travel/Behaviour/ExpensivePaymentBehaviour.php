<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class ExpensivePaymentBehaviour implements PaymentBehaviour
{

    public function pay(): void
    {
        echo 'Paying 500€ :(' . PHP_EOL;
    }
}