-------------------
phpf1\\utils\\Dates
-------------------

.. php:namespace: phpf1\\utils

.. php:class:: Dates

    Class Dates
    Date and time related utility functions

    .. php:method:: today()

        Returns today's date as a DateTime object

        `See <https://phpf1.com/snippet/get-actual-date-in-php>`_

        :returns: DateTime

    .. php:method:: todayAsString($pattern = 'Y-m-d')

        Returns today's date as string.
        By default it returns the date in ISO format
        The output format can be changed by the $pattern parameter

        `See <https://phpf1.com/snippet/get-actual-date-in-php>`_

        :type $pattern: string
        :param $pattern: Date formatting pattern
        :returns: string

    .. php:method:: yesterday()

        Returns yesterday's date as a DateTime object

        `See <https://phpf1.com/snippet/get-yesterdays-date-in-php>`_

        :returns: DateTime

    .. php:method:: yesterdayAsString($pattern = 'Y-m-d')

        Returns yesterday's date as string.
        By default it returns the date in ISO format
        The output format can be changed by the $pattern parameter

        `See <https://phpf1.com/snippet/get-yesterdays-date-in-php>`_

        :type $pattern: string
        :param $pattern: Date formatting pattern
        :returns: string

    .. php:method:: tomorrow()

        Returns tomorrow's date as a DateTime object

        `See <https://phpf1.com/snippet/get-tomorrows-date-in-php>`_

        :returns: DateTime

    .. php:method:: tomorrowAsString($pattern = 'Y-m-d')

        Returns tomorrow's date as string.
        By default it returns the date in ISO format
        The output format can be changed by the $pattern parameter

        `See <https://phpf1.com/snippet/get-tomorrows-date-in-php>`_

        :type $pattern: string
        :param $pattern: Date formatting pattern
        :returns: string

    .. php:method:: differenceInDays(DateTime $startDate, DateTime $endDate)

        Returns the difference in days between two dates

        `See <https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php>`_

        :type $startDate: DateTime
        :param $startDate:
        :type $endDate: DateTime
        :param $endDate:
        :returns: string

    .. php:method:: differenceInDaysFromString(string $startDate, string $endDate)

        Returns the difference in days between two dates

        `See <https://phpf1.com/snippet/get-the-number-of-days-between-two-dates-in-php>`_

        :type $startDate: string
        :param $startDate:
        :type $endDate: string
        :param $endDate:
        :returns: string
