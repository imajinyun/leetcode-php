<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\NumberOfDaysInAMonth;

class NumberOfDaysInAMonthTest extends TestCase
{
    public function testNumberOfDays(): void
    {
        self::assertSame(31, NumberOfDaysInAMonth::numberOfDays(1992, 7));
        self::assertSame(28, NumberOfDaysInAMonth::numberOfDays(1995, 2));
        self::assertSame(29, NumberOfDaysInAMonth::numberOfDays(2000, 2));
        self::assertSame(28, NumberOfDaysInAMonth::numberOfDays(1900, 2));
        self::assertSame(28, NumberOfDaysInAMonth::numberOfDays(2019, 2));
        self::assertSame(29, NumberOfDaysInAMonth::numberOfDays(2020, 2));

    }
}
