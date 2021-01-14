<?php
/**
 *
 * @license Apache 2
 * @copyright Copyright (C) phpf1.com, All rights reserved.
 * @link https://phpf1.com
 * @author Charles Smith
 *
 * @package phpf1\utils
 */

namespace phpf1\utils;

use DateInterval;
use DateTime;
use Exception;

/**
 * Class Dates
 * Date and time related utility functions
 *
 * @package phpf1\utils
 */
class Dates
{
    /**
     * Returns today's date as a DateTime object
     *
     * @see https://phpf1.com/snippet/get-actual-date-in-php
     *
     * @return DateTime
     */
    public static function today()
    {
        return new DateTime();
    }

    /**
     * Returns today's date as string.
     * By default it returns the date in ISO format
     * The output format can be changed by the $pattern parameter
     *
     * @see https://phpf1.com/snippet/get-actual-date-in-php
     *
     * @param string $pattern Date formatting pattern
     * @return string
     */
    public static function todayAsString($pattern = 'Y-m-d')
    {
        return (new DateTime())->format($pattern);
    }


    /**
     * Returns yesterday's date as a DateTime object
     *
     * @see https://phpf1.com/snippet/get-yesterdays-date-in-php
     *
     * @return DateTime
     */
    public static function yesterday()
    {
        return new DateTime('yesterday');
    }

    /**
     * Returns yesterday's date as string.
     * By default it returns the date in ISO format
     * The output format can be changed by the $pattern parameter
     *
     * @see https://phpf1.com/snippet/get-yesterdays-date-in-php
     *
     * @param string $pattern Date formatting pattern
     * @return string
     */
    public static function yesterdayAsString($pattern = 'Y-m-d')
    {
        return (new DateTime('yesterday'))->format($pattern);
    }


    /**
     * Returns tomorrow's date as a DateTime object
     *
     * @see https://phpf1.com/snippet/get-tomorrows-date-in-php
     *
     * @return DateTime
     */
    public static function tomorrow()
    {
        return new DateTime('tomorrow');
    }

    /**
     * Returns tomorrow's date as string.
     * By default it returns the date in ISO format
     * The output format can be changed by the $pattern parameter
     *
     * @see https://phpf1.com/snippet/get-tomorrows-date-in-php
     *
     * @param string $pattern Date formatting pattern
     * @return string
     */
    public static function tomorrowAsString($pattern = 'Y-m-d')
    {
        return (new DateTime('tomorrow'))->format($pattern);
    }


    /**
     * Returns the difference in days between two dates
     *
     * @see https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php
     *
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @return string
     */
    public static function differenceInDays(DateTime $startDate, DateTime $endDate)
    {
        $difference = $endDate->diff($startDate);
        return $difference->format("%a");
    }


    /**
     * Returns the difference in days between two dates
     *
     * @see https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php
     *
     * @param string $startDate
     * @param string $endDate
     * @return string
     * @throws Exception
     */
    public static function differenceInDaysFromString(string $startDate, string $endDate)
    {
        return self::differenceInDays(new DateTime($startDate), new DateTime($endDate));
    }

    /**
     * Adds days to the original date and returns the new date as a DateTime object
     *
     * @see https://phpf1.com/snippet/add-days-to-date-in-php
     *
     * @param string $originalDate
     * @param int $days
     * @return DateTime
     * @throws Exception
     */
    public static function addDaysToDate(string $originalDate, int $days) : DateTime
    {
        $date = new DateTime($originalDate);
        $date->add(new DateInterval("P${days}D"));
        return $date;
    }

    /**
     * Adds minutes to the original time and returns the new time as a DateTime object
     *
     * @see https://phpf1.com/snippet/add-minutes-to-date-time-in-php
     *
     * @param string $originalTime
     * @param int $minutes
     * @return DateTime
     * @throws Exception
     */
    public static function addMinutesToTime(string $originalTime, int $minutes) : DateTime
    {
        $time = new DateTime($originalTime);
        $time->add(new DateInterval("PT${minutes}M"));
        return $time;
    }

    /**
     * Returns the last day of the month based on the specified date
     *
     * @see https://phpf1.com/snippet/get-the-last-day-of-a-month-from-date-in-php
     * @param string $actualDate
     * @return DateTime
     * @throws Exception
     */
    public static function getLastDayOfMonth(string $actualDate) : DateTime
    {
        $date = new DateTime($actualDate);
        return new DateTime($date->format('Y-m-t'));
    }


    /**
     * Converts the given Unix timestamp to a DateTime object
     *
     * @see https://phpf1.com/snippet/convert-timestamp-to-datetime-in-php
     *
     * @param int $timestamp
     * @return DateTime
     */
    public static function timestampToDateTime(int $timestamp) : DateTime
    {
        $date = new DateTime();
        $date->setTimestamp($timestamp);

        return $date;
    }

    /**
     * Returns the Unix timestamp representation of a given date
     *
     * @see https://phpf1.com/snippet/convert-date-to-timestamp-in-php
     *
     * @param string $dateStr
     * @return int
     * @throws Exception
     */
    public static function dateToTimestamp(string $dateStr) : int
    {
        $date = new DateTime($dateStr);

        return $date->getTimestamp();
    }
}
