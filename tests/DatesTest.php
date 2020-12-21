<?php

use phpf1\utils\Dates;
use PHPUnit\Framework\TestCase;

class DatesTest extends TestCase
{
    public function testToday()
    {
        $today = Dates::today();
        self::assertNotEmpty($today);
        self::assertInstanceOf(DateTime::class, $today);
    }

    public function testTodayAsString()
    {
        $today = Dates::todayAsString();
        self::assertNotEmpty($today);
        self::assertIsString($today);
        self::assertEquals(strlen('2020-11-21'), strlen($today));
    }


}
