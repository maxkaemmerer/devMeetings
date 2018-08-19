<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

final class TravelContext
{
    /**
     * @var Travel[]
     */
    private $kindsOfTravel;

    /**
     * TravelContext constructor.
     * @param array $kindsOfTravel
     */
    public function __construct(array $kindsOfTravel)
    {
        foreach ($kindsOfTravel as $strategy) {
            if ($strategy instanceof Travel) {
                $this->kindsOfTravel[$strategy->type()] = $strategy;
            }
        }
    }

    public function travel(string $preference): void
    {
        if (!array_key_exists($preference, $this->kindsOfTravel)) {
            throw new \InvalidArgumentException(sprintf('"%s" is not a supported form of travel', $preference));
        }

        $travelKind = $this->kindsOfTravel[$preference];
        $travelKind->name();
        $travelKind->pay();
        $travelKind->refuel();
        $travelKind->travel();
    }
}