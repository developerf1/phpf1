<?php

use phpf1\utils\Dates;
use PHPUnit\Framework\TestCase;
use webcom\core\helper\DateHelper;

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

    public function testAddDaysToDate()
    {
        $newDate = Dates::addDaysToDate('2020-12-18', 21);

        self::assertInstanceOf(DateTime::class, $newDate);
        self::assertEquals('2021-01-08', $newDate->format('Y-m-d'));
    }

    public function testAddMinutesToTime()
    {
        $newDate = Dates::addMinutesToTime('2020-12-18 11:23', 150);

        self::assertInstanceOf(DateTime::class, $newDate);
        self::assertEquals('2020-12-18 13:53', $newDate->format('Y-m-d H:i'));

    }


    public function testGetLastDayOfMonth()
    {
        $lastDay = Dates::getLastDayOfMonth('2020-11-23');

        self::assertEquals('2020-11-30', $lastDay->format('Y-m-d'));
    }

    public function test_timestampToDateTime()
    {
        $unixTimestamp = 1565740800;
        $date = Dates::timestampToDateTime($unixTimestamp);

        self::assertEquals('2019-08-14', $date->format('Y-m-d'));
    }

    public function test_dateToTimestamp()
    {
        $unixTimestamp = Dates::dateToTimestamp('2019-08-14');

        self::assertEquals(1565740800, $unixTimestamp);
    }

    public function test_getTimeDifferenceInMinutes()
    {
        $diff = Dates::getTimeDifferenceInMinutes('2020-10-13 12:24', '2020-10-13 18:36');

        self::assertEquals(372, $diff);

    }

    public function test_getNexWeekDay()
    {
        $today = new DateTime();
        $nextWeek = $today->add(new DateInterval('P1W'));

        $nextWeekDay = Dates::getNexWeekDay();

        self::assertEquals( $nextWeek->format('Y-m-d'), $nextWeekDay->format('Y-m-d'));

    }

}
