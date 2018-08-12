<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Ducks;


abstract class Duck
{
    abstract public function name(): string;

    abstract public function fly(): void;

    abstract public function swim(): void;

    abstract public function quack(): void;
}