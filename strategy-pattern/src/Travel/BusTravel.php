<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

final class BusTravel extends Travel
{

    public function type(): string
    {
        return 'cheap';
    }

    public function name(): void
    {
        echo self::class . PHP_EOL;
    }
}