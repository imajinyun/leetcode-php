<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DailyTemperatures;

class DailyTemperaturesTest extends TestCase
{
    public function testDailyTemperatures(): void
    {
        self::assertSame(
            [1, 1, 4, 2, 1, 1, 0, 0],
            DailyTemperatures::dailyTemperatures([73, 74, 75, 71, 69, 72, 76, 73])
        );
        self::assertSame(
            [1, 1, 1, 0],
            DailyTemperatures::dailyTemperatures([30, 40, 50, 60])
        );
        self::assertSame(
            [1, 1, 0],
            DailyTemperatures::dailyTemperatures([30, 60, 90])
        );
    }

    public function testDailyTemperatures2(): void
    {
        self::assertSame(
            [1, 1, 4, 2, 1, 1, 0, 0],
            DailyTemperatures::dailyTemperatures2([73, 74, 75, 71, 69, 72, 76, 73])
        );
        self::assertSame(
            [1, 1, 1, 0],
            DailyTemperatures::dailyTemperatures2([30, 40, 50, 60])
        );
        self::assertSame(
            [1, 1, 0],
            DailyTemperatures::dailyTemperatures2([30, 60, 90])
        );
    }
}
