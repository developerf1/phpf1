-------------------
Dates
-------------------


Class Dates
Date and time related utility functions

today
=====

    .. code-block:: php

        $today = Dates::today();


    Returns today's date as a DateTime object. `Source <https://phpf1.com/snippet/get-actual-date-in-php>`_

    :returns: DateTime

todayAsString
=============

    Syntax::

        $today = Dates::todayAsString($pattern);


    Returns today's date as string.
    By default it returns the date in ISO format
    The output format can be changed by the ``$pattern`` parameter `Source <https://phpf1.com/snippet/get-actual-date-in-php>`_

    :$pattern: Date formatting pattern. Optional. The default value is `Y-m-d`
    :returns: string

yesterday
=========

    Syntax::

        $yesterday = Dates::yesterday();

    Returns yesterday's date as a DateTime object. `Source <https://phpf1.com/snippet/get-yesterdays-date-in-php>`_

    :returns: DateTime


yesterdayAsString
=================

    Syntax::

        $yesterday = Dates::yesterdayAsString($pattern = 'Y-m-d');

    Returns yesterday's date as string.
    By default it returns the date in ISO format
    The output format can be changed by the ``$pattern`` parameter `Source <https://phpf1.com/snippet/get-yesterdays-date-in-php>`_

    :param $pattern: Date formatting pattern
    :returns: string

tomorrow
========

    Syntax::

        $tomorrow = Dates::tomorrow();

    Returns tomorrow's date as a DateTime object. `Source <https://phpf1.com/snippet/get-tomorrows-date-in-php>`_

    :returns: DateTime

tomorrowAsString
================

    Syntax::

        $tomorrow = Dates::tomorrowAsString($pattern = 'Y-m-d')

    Returns tomorrow's date as string.
    By default it returns the date in ISO format
    The output format can be changed by the ``$pattern`` parameter. `Source <https://phpf1.com/snippet/get-tomorrows-date-in-php>`_

    :param $pattern: Date formatting pattern
    :returns: string

differenceInDays
================

    Syntax::

        $differenceInDay = Dates::differenceInDays(DateTime $startDate, DateTime $endDate);

    Returns the difference in days between two dates. `Source <https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php>`_

    :type $startDate: DateTime
    :param $startDate:
    :type $endDate: DateTime
    :param $endDate:
    :returns: string

differenceInDaysFromString
==========================

    Syntax::

        $differenceInDays = Dates::differenceInDaysFromString(string $startDate, string $endDate);

    Returns the difference in days between two dates that are defined as strings. `Source <https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php>`_

    :type $startDate: string
    :param $startDate:
    :type $endDate: string
    :param $endDate:
    :returns: string
