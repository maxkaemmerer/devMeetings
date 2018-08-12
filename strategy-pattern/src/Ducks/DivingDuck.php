<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Ducks;


final class DivingDuck extends Duck
{

    public function fly(): void
    {
        echo 'Flying quickly!';
    }

    public function quack(): void
    {
        echo 'Quack, QUACK!';
    }

    public function name(): string
    {
        return 'Diving Duck';
    }

    public function swim(): void
    {
        echo 'Swimming!';
    }
}