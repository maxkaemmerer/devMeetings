<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exports;


use MaxKaemmerer\DevMeetings\StrategyPattern\CliInput\Exception\ValidationException;

abstract class Export
{
    abstract public function __invoke(string $to): void;

    /**
     * @throws ValidationException
     */
    abstract public function validate(): void;
}