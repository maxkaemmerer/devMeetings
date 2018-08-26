<?php

declare(strict_types=1);

namespace MaxKaemmerer\DevMeetings\StrategyPattern\Tests\Ducks;


use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\Duck;
use MaxKaemmerer\DevMeetings\StrategyPattern\Ducks\PerchingDuck;
use PHPUnit\Framework\TestCase;

final class PerchingDuckTest extends TestCase
{
    /** @var Duck */
    private $duck;

    protected function setUp()
    {
        $this->duck = new PerchingDuck();
    }

    /**
    * @test
    **/
    public function shouldFlyAsIntended(): void
    {
        self::assertEquals('Flying quickly!', $this->duck->fly());
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
        self::assertEquals('Quack, QUACK!', $this->duck->quack());
    }
}