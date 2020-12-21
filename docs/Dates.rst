-------------------
Dates
-------------------


    Class Dates
    Date and time related utility functions

    ## today()

        ```
        $today = Dates::today();
        ```

        Returns today's date as a DateTime object

        `See <https://phpf1.com/snippet/get-actual-date-in-php>`_

        :returns: DateTime

    ## todayAsString($pattern = 'Y-m-d')

        ```
        $today = Dates::todayAsString();
        ```

        Returns today's date as string.
        By default it returns the date in ISO format
        The output format can be changed by the $pattern parameter

        `See <https://phpf1.com/snippet/get-actual-date-in-php>`_

        :type $pattern: string
        :param $pattern: Date formatting pattern
        :returns: string


