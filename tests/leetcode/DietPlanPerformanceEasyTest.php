<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DietPlanPerformanceEasy;

class DietPlanPerformanceEasyTest extends TestCase
{
    public function testDietPlanPerformance(): void
    {
        self::assertSame(
            0,
            DietPlanPerformanceEasy::dietPlanPerformance([1, 2, 3, 4, 5], 1, 3, 3)
        );
        self::assertSame(
            1,
            DietPlanPerformanceEasy::dietPlanPerformance([3, 2], 2, 0, 1)
        );
        self::assertSame(
            0,
            DietPlanPerformanceEasy::dietPlanPerformance([6, 5, 0, 0], 2, 1, 5)
        );
    }
}
