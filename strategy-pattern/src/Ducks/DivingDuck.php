<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Ducks;


final class DivingDuck extends Duck
{

    public function fly(): string
    {
        return 'Flying quickly!';
    }

    public function quack(): string
    {
        return 'Quack, QUACK!';
    }

    public function name(): string
    {
        return 'Diving Duck';
    }

    public function swim(): string
    {
        return 'Swimming!';
    }
}