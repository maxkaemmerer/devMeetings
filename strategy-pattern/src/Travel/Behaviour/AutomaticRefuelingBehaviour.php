<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour;


final class AutomaticRefuelingBehaviour implements RefuelingBehaviour
{

    public function refuel(): void
    {
        echo 'Other people take care of the refueling for me :)' . PHP_EOL;
    }
}