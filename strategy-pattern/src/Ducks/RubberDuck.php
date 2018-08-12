<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Ducks;


final class RubberDuck extends Duck
{

    /**
     * @throws \Exception
     */
    public function fly(): void
    {
        throw new \Exception(sprintf('%s\'s can\'t fly..!', $this->name()));
    }

    public function quack(): void
    {
        echo 'Squeek!';
    }

    public function name(): string
    {
        return 'Rubber Duck';
    }

    public function swim(): void
    {
        echo 'Swimming!';
    }
}