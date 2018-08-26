<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Tests\Ducks;


use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\Duck;
use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\PerchingDuck;
use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\RubberDuck;
use PHPUnit\Framework\TestCase;

final class RubberDuckTest extends TestCase
{
    /** @var Duck */
    private $duck;

    protected function setUp()
    {
        $this->duck = new RubberDuck();
    }

    /**
    * @test
    **/
    public function shouldFlyAsIntended(): void
    {
        self::assertEquals('Please don\'t throw me!', $this->duck->fly());
    }

    /**
    * @test
    **/
    public function shouldSwimAsIntended(): void
    {
        self::assertEquals('Swimming!', $this->duck->swim());
    }


    /**
    * @test
    **/
    public function shouldQuackAsIntended(){
        self::assertEquals('Squeek!', $this->duck->quack());
    }
}