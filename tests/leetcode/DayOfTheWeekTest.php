<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DayOfTheWeek;

class DayOfTheWeekTest extends TestCase
{
    public function testDayOfTheWeek(): void
    {
        self::assertSame('Saturday', DayOfTheWeek::dayOfTheWeek(31, 8, 2019));
        self::assertSame('Sunday', DayOfTheWeek::dayOfTheWeek(18, 7, 1999));
        self::assertSame('Sunday', DayOfTheWeek::dayOfTheWeek(15, 8, 1993));
    }

    public function testDayOfTheWeek2(): void
    {
        self::assertSame('Saturday', DayOfTheWeek::dayOfTheWeek2(31, 8, 2019));
        self::assertSame('Sunday', DayOfTheWeek::dayOfTheWeek2(18, 7, 1999));
        self::assertSame('Sunday', DayOfTheWeek::dayOfTheWeek2(15, 8, 1993));
    }
}
