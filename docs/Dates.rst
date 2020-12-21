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


