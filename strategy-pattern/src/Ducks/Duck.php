<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Ducks;


abstract class Duck
{
    abstract public function name(): string;

    abstract public function fly(): string;

    abstract public function swim(): string;

    abstract public function quack(): string;
}