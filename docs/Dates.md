# Dates

Date and time related utility functions.

## today

Returns today's date as a DateTime object. [Source](https://phpf1.com/snippet/get-actual-date-in-php)

#### Syntax:
```php
public static function Dates::today() : DateTime
```

#### Parameters:
None
 
#### Returns: 
`DateTime`

#### Example:
```php
$today = Dates::today();
```

---

## todayAsString

Returns today's date as string. By default, it returns the date in ISO format. 
The output format can be changed by the `$pattern` parameter. [Source](https://phpf1.com/snippet/get-actual-date-in-php)

#### Syntax:
```php
public static function todayAsString($pattern = 'Y-m-d') : string
```

#### Parameters:
`$pattern`: How to format the output string. The default value is `Y-m-d` 

#### Returns:
`string`

#### Example:
```php
$today = Dates::todayAsString();
```

---

## yesterday

Returns yesterday's date as a DateTime object. [Source](https://phpf1.com/snippet/get-yesterdays-date-in-php)

#### Syntax:
```php
public static function yesterday() : DateTime
```

#### Parameters:
None

#### Returns:
`DateTime`

#### Example:
```php
$yesterday = Dates::yesterday();
```

---

## yesterdayAsString

Returns yesterday's date as string. By default, it returns the date in ISO format.
The output format can be changed by the `$pattern` parameter. [Source](https://phpf1.com/snippet/get-yesterdays-date-in-php)

#### Syntax:
```php
public static function yesterdayAsString($pattern = 'Y-m-d')
```

#### Parameters:
`$pattern` : How to format the output string. The default value is `Y-m-d`

#### Returns:
`string`

#### Example:
```php
$yesterday = Dates::yesterdayAsString();
```

---

## tomorrow

Returns tomorrow's date as a DateTime object. [Source](https://phpf1.com/snippet/get-tomorrows-date-in-php)

#### Syntax:
```php
public static function tomorrow() : DateTime
```

#### Parameters:
None

#### Returns:
`DateTime`

#### Example:
```php
$tomorrow = Dates::tomorrow();
```

---

## tomorrowAsString

Returns tomorrow's date as string. By default, it returns the date in ISO format.
The output format can be changed by the `$pattern` parameter. [Source](https://phpf1.com/snippet/get-tomorrows-date-in-php)

#### Syntax:
```php
public static function tomorrowAsString($pattern = 'Y-m-d')
```

#### Parameters:
`$pattern` : How to format the output string. The default value is `Y-m-d`

#### Returns:
`string`

#### Example:
```php
$tomorrow = Dates::tomorrowAsString();
```

---

## differenceInDays

Returns the difference in days between two dates. [Source](https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php)

#### Syntax:
```php
public static function differenceInDays(DateTime $startDate, DateTime $endDate) : int
```

#### Parameters:
`$startDate` : The first date

`$endDate` : The second date

#### Returns:
`int`

#### Example:
```php
$day1 = new DateTime('2020-10-17');
$day2 = new DateTime('2020-11-03');

$diff = Dates::differenceInDays($day1, $day2);
```

---

## differenceInDaysFromString

Returns the difference in days between two dates that are defined as strings. [Source](https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php)

#### Syntax:
```php
public static function differenceInDaysFromString(string $startDate, string $endDate) : int
```

#### Parameters:
`$startDate` : The first date as string

`$endDate` : The second date as string

#### Returns:
`int`

#### Example:
```php
$diff = Dates::differenceInDays('2020-10-17', '2020-11-03');
```

---

## addDaysToDate

Adds days to the original date and returns the new date as a DateTime object. [Source](https://phpf1.com/snippet/add-days-to-date-in-php)

#### Syntax:
```php
public static function addDaysToDate(string $originalDate, int $days) : DateTime
```

#### Parameters:
`$originalDate` : The base date as string

`$days` : Number of days to add

#### Returns:
`DateTime`

#### Example:
```php
$newDate = Dates::addDaysToDate('2020-10-17', 17);
```

---

## addMinutesToTime

Adds minutes to the original time and returns the new time as a DateTime object. [Source](https://phpf1.com/snippet/add-minutes-to-date-time-in-php)

#### Syntax:
```php
public static function addMinutesToTime(string $originalTime, int $minutes) : DateTime
```

#### Parameters:
`$originalDate` : The base time as string

`$minutes` : Number of minutes to add

#### Returns:
`DateTime`

#### Example:
```php
$newTime = Dates::addMinutesToTime('2020-10-17 13:28', 48);
```

---

## getLastDayOfMonth

Returns the last day of the month based on the specified date. [Source](https://phpf1.com/snippet/get-the-last-day-of-a-month-from-date-in-php)

#### Syntax:
```php
public static function getLastDayOfMonth(string $actualDate) : DateTime
```

#### Parameters:
`$actualDate` : The actual date as string

#### Returns:
`DateTime`

#### Example:
```php
$lastDay = Dates::getLastDayOfMonth('2020-10-17');
```

---

## timestampToDateTime

Converts the given Unix timestamp to a DateTime object. [Source](https://phpf1.com/snippet/convert-timestamp-to-datetime-in-php)

#### Syntax:
```php
public static function timestampToDateTime(int $timestamp) : DateTime
```

#### Parameters:
`$timestamp` : The Unix timestamp to convert

#### Returns:
`DateTime`

#### Example:
```php
$date = Dates::timestampToDateTime(1565740800);
```

---

## dateToTimestamp

Returns the Unix timestamp representation of a given date. [Source](https://phpf1.com/snippet/convert-date-to-timestamp-in-php)

#### Syntax:
```php
public static function dateToTimestamp(string $dateStr) : int
```

#### Parameters:
`$dateStr` : The date in string format to convert

#### Returns:
`int`

#### Example:
```php
$unixTimestamp = Dates::dateToTimestamp('2019-08-14');
```

---

## getTimeDifferenceInMinutes

Gets the difference between two date times in minutes. [Source](https://phpf1.com/snippet/get-time-difference-in-minutes-in-php)

#### Syntax:
```php
public static function getTimeDifferenceInMinutes(string $startTime, string $endTime) : int
```

#### Parameters:
`$startTime` : The start time in string format

`$endTime` : The end time in string format

#### Returns:
`int`

#### Example:
```php
$diff = Dates::getTimeDifferenceInMinutes('2020-10-13 12:24', '2020-10-13 18:36');
```

---

## getDayOneWeekFromNow

Returns the date one week from now. [Source](https://phpf1.com/snippet/get-same-day-in-the-next-week-in-php)

#### Syntax:
```php
public static function getDayOneWeekFromNow() : DateTime
```

#### Parameters:
None

#### Returns:
`DateTime`

#### Example:
```php
$nextWeekDay = Dates::getDayOneWeekFromNow();
```

---
