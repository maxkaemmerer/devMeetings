<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

final class PlaneTravel extends Travel
{

    public function type(): string
    {
        return 'fast';
    }

    public function name(): void
    {
        echo self::class . PHP_EOL;
    }
}