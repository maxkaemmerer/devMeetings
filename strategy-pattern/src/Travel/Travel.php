<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;

use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\PaymentBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\RefuelingBehaviour;
use MaxKaemmerer\DevMeetings\StrategyPattern\Travel\Behaviour\TravelBehaviour;

abstract class Travel
{
    /** @var PaymentBehaviour */
    protected $paymentBehaviour;

    /** @var TravelBehaviour */
    protected $travelBehaviour;

    /** @var RefuelingBehaviour */
    protected $refuelingBehaviour;

    /**
     * Travel constructor.
     * @param PaymentBehaviour $paymentBehaviour
     * @param TravelBehaviour $travelBehaviour
     * @param RefuelingBehaviour $refuelingBehaviour
     */
    public function __construct(
        PaymentBehaviour $paymentBehaviour,
        TravelBehaviour $travelBehaviour,
        RefuelingBehaviour $refuelingBehaviour
    ) {
        $this->paymentBehaviour = $paymentBehaviour;
        $this->travelBehaviour = $travelBehaviour;
        $this->refuelingBehaviour = $refuelingBehaviour;
    }


    abstract public function type(): string;

    public function pay(): void
    {
        $this->paymentBehaviour->pay();
    }

    public function travel(): void
    {
        $this->travelBehaviour->travel();
    }

    public function refuel(): void
    {
        $this->refuelingBehaviour->refuel();
    }

    public function setPaymentBehaviour(PaymentBehaviour $paymentBehaviour): self
    {
        $this->paymentBehaviour = $paymentBehaviour;
        return $this;
    }

    public function setTravelBehaviour(TravelBehaviour $travelBehaviour): self
    {
        $this->travelBehaviour = $travelBehaviour;
        return $this;
    }

    public function setRefuelingBehaviour(RefuelingBehaviour $refuelingBehaviour): self
    {
        $this->refuelingBehaviour = $refuelingBehaviour;
        return $this;
    }

    abstract public function name(): void;
}