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
}
