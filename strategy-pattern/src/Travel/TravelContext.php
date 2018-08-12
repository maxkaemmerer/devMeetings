<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;


final class TravelContext
{
    /**
     * @var TravelStrategy[]
     */
    private $travelStrategies;

    /**
     * TravelContext constructor.
     * @param array $travelStrategies
     */
    public function __construct(array $travelStrategies)
    {
        foreach ($travelStrategies as $strategy) {
            if ($strategy instanceof TravelStrategy) {
                $this->travelStrategies[$strategy->type()] = $strategy;
            }
        }
    }

    public function travel(string $preference): void
    {
        if (!array_key_exists($preference, $this->travelStrategies)) {
            throw new \InvalidArgumentException(sprintf('"%s" is not a supported form of travel', $preference));
        }

        $travelStrategy = $this->travelStrategies[$preference];
        if ($travelStrategy instanceof RequiresPayment) {
            $travelStrategy->pay();
        }
        if ($travelStrategy instanceof RequiresFuel) {
            $travelStrategy->refuel();
        }
        if ($travelStrategy instanceof Independent){
            $travelStrategy->changePlans();
        }
        $travelStrategy->travel();
    }
}