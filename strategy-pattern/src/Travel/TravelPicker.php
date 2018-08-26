<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

final class TravelPicker
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
        foreach ($kindsOfTravel as $travelKind) {
            if ($travelKind instanceof Travel) {
                $this->kindsOfTravel[$travelKind->type()] = $travelKind;
            }
        }
    }

    public function pick(string $preference): Travel
    {
        if (!array_key_exists($preference, $this->kindsOfTravel)) {
            throw new \InvalidArgumentException(sprintf('"%s" is not a supported form of travel', $preference));
        }

        return $this->kindsOfTravel[$preference];
    }
}