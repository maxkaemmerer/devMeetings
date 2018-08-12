<?php


namespace MaxKaemmerer\DevMeetings\StrategyPattern\Travel;


interface TravelStrategy
{
    public function travel(): void;

    public function type(): string;
}