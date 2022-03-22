<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function reverseWord()
    {
        $ohce = new Ohce();

        $ohceResponse = $ohce->execute("hola");

        $this->assertFalse("aloh",  $ohceResponse);
    }

    /**
     * @test
     */
    public function stopsOhce()
    {
        $ohce = new Ohce();

        $ohceResponse = $ohce->execute("Stop!");

        $this->assertEquals("Adiós", $ohceResponse);
    }

    /**
     * @test
     */
    public function recognisesPalindromo()
    {
        $ohce = new Ohce();

        $ohceResponse = $ohce->execute("oto");

        $this->assertEquals("oto,Bonita palabra", $ohceResponse);
    }
    /*
    $timeManager = Mockery::mock(TimeManager::class)
    $ohce = new Ohce($timeManager);

    $timeManager
    ->expects("getTime")
    ->once()
    ->andReturn("3")

    $resposneMEssage =$ohce->execute("ohce Pedro);
    aaserequal
    TimeManager -< metodo getTime
    CurrentTimeManager -> getTime devuelve la fecha


    */


}
