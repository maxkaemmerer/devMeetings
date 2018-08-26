<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

final class CarTravel extends Travel
{

    public function type(): string
    {
        return 'convenient';
    }

    public function name(): void
    {
        echo self::class . PHP_EOL;
    }
}