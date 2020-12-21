-------------------
Dates
-------------------


    Class Dates
    Date and time related utility functions

    ## today

        .. code-block:: php
            $today = Dates::today();


        Returns today's date as a DateTime object. `Source <https://phpf1.com/snippet/get-actual-date-in-php>`_

        :returns: DateTime

    ## todayAsString

        ```
        $today = Dates::todayAsString();
        ```

        Returns today's date as string.
        By default it returns the date in ISO format
        The output format can be changed by the $pattern parameter

        .. seealso::
        `Get actual date <https://phpf1.com/snippet/get-actual-date-in-php>`_

        :$pattern: Date formatting pattern
        :returns: string


