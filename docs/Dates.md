Dates
=====

Date and time related utility functions.

today
-----

Returns today's date as a DateTime object. [Source](https://phpf1.com/snippet/get-actual-date-in-php)

Syntax:
```php
$today = Dates::today();
```
    
Return: 

    DateTime


todayAsString
-------------

> Syntax:
>
>     $today = Dates::todayAsString($pattern);
>
> Returns today's date as string. By default it returns the date in ISO
> format The output format can be changed by the `$pattern` parameter
> [Source](https://phpf1.com/snippet/get-actual-date-in-php)
>
> \$pattern
> :   Date formatting pattern. Optional. The default value is Y-m-d
>
> returns
> :   string
>
yesterday
---------

> Syntax:
>
>     $yesterday = Dates::yesterday();
>
> Returns yesterday's date as a DateTime object.
> [Source](https://phpf1.com/snippet/get-yesterdays-date-in-php)
>
> returns
> :   DateTime
>
yesterdayAsString
-----------------

> Syntax:
>
>     $yesterday = Dates::yesterdayAsString($pattern = 'Y-m-d');
>
> Returns yesterday's date as string. By default it returns the date in
> ISO format The output format can be changed by the `$pattern`
> parameter
> [Source](https://phpf1.com/snippet/get-yesterdays-date-in-php)
>
> param \$pattern
> :   Date formatting pattern
>
> returns
> :   string
>
tomorrow
--------

> Syntax:
>
>     $tomorrow = Dates::tomorrow();
>
> Returns tomorrow's date as a DateTime object.
> [Source](https://phpf1.com/snippet/get-tomorrows-date-in-php)
>
> returns
> :   DateTime
>
tomorrowAsString
----------------

> Syntax:
>
>     $tomorrow = Dates::tomorrowAsString($pattern = 'Y-m-d')
>
> Returns tomorrow's date as string. By default it returns the date in
> ISO format The output format can be changed by the `$pattern`
> parameter.
> [Source](https://phpf1.com/snippet/get-tomorrows-date-in-php)
>
> param \$pattern
> :   Date formatting pattern
>
> returns
> :   string
>
differenceInDays
----------------

> Syntax:
>
>     $differenceInDay = Dates::differenceInDays(DateTime $startDate, DateTime $endDate);
>
> Returns the difference in days between two dates.
> [Source](https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php)
>
> type \$startDate
> :   DateTime
>
> param \$startDate
> :   
> type \$endDate
> :   DateTime
>
> param \$endDate
> :   
> returns
> :   string
>
differenceInDaysFromString
--------------------------

> Syntax:
>
>     $differenceInDays = Dates::differenceInDaysFromString(string $startDate, string $endDate);
>
> Returns the difference in days between two dates that are defined as
> strings.
> [Source](https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php)
>
> type \$startDate
> :   string
>
> param \$startDate
> :   
> type \$endDate
> :   string
>
> param \$endDate
> :   
> returns
> :   string
>
addDaysToDate
-------------

> Syntax:
>
>     $newDate = Dates::addDaysToDate(string $originalDate, int $days);
>
> Adds days to the original date and returns the new date as a DateTime
> object. [Source](https://phpf1.com/snippet/add-days-to-date-in-php)
>
> type \$originalDate
> :   string
>
> param \$originalDate
> :   
> type \$days
> :   int
>
> param \$days
> :   
> returns
> :   DateTime
>
addMinutesToTime
----------------

> Syntax:
>
>     $newTime = Dates::addMinutesToTime(string $originalTime, int $minutes);
>
> Adds minutes to the original time and returns the new time as a
> DateTime object.
> [Source](https://phpf1.com/snippet/add-minutes-to-date-time-in-php)
>
> type \$originalTime
> :   string
>
> param \$originalTime
> :   
> type \$minutes
> :   int
>
> param \$minutes
> :   
> returns
> :   DateTime
>
getLastDayOfMonth
-----------------

> Syntax:
>
>     $newTime = Dates::getLastDayOfMonth(string $actualDate);
>
> Returns the last day of the month based on the specified date.
> [Source](https://phpf1.com/snippet/get-the-last-day-of-a-month-from-date-in-php)
>
> type \$actualDate
> :   string
>
> param \$actualDate
> :   
> returns
> :   DateTime
>
timestampToDateTime
-------------------

> Syntax:
>
>     $date = Dates::timestampToDateTime(int $timestamp);
>
> Converts the given Unix timestamp to a DateTime object.
> [Source](https://phpf1.com/snippet/convert-timestamp-to-datetime-in-php)
>
> type \$timestamp
> :   int
>
> param \$timestamp
> :   
> returns
> :   DateTime
>
dateToTimestamp
---------------

> Syntax:
>
>     $timestamp = Dates::dateToTimestamp(string $dateStr);
>
> Returns the Unix timestamp representation of a given date.
> [Source](https://phpf1.com/snippet/convert-date-to-timestamp-in-php)
>
> type \$dateStr
> :   string
>
> param \$dateStr
> :   
> returns
> :   int
>
getTimeDifferenceInMinutes
--------------------------

> Syntax:
>
>     $diffInMinutes = Dates::getTimeDifferenceInMinutes($startTime, $endTime);
>
> Gets the difference between two date times in minutes.
> [Source](https://phpf1.com/snippet/get-time-difference-in-minutes-in-php)
>
> type \$startTime
> :   string
>
> param \$startTime
> :   
> type \$endTime
> :   string
>
> param \$endTime
> :   
> returns
> :   int
>
getNexWeekDay
-------------

> Syntax:
>
>     $day = Dates::getNexWeekDay();
>
> Returns the date one week from now.
> [Source](https://phpf1.com/snippet/get-same-day-in-the-next-week-in-php)
>
> returns
> :   DateTime
>

