<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Ducks;


final class RubberDuck extends Duck
{

    public function fly(): string
    {
        return 'Please don\'t throw me!';
    }

    public function quack(): string
    {
        return 'Squeek!';
    }

    public function name(): string
    {
        return 'Rubber Duck';
    }

    public function swim(): string
    {
        return 'Swimming!';
    }
}