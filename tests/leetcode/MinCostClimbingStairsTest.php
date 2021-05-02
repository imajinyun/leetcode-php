<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MinCostClimbingStairs;
use PHPUnit\Framework\TestCase;

class MinCostClimbingStairsTest extends TestCase
{
    public function testMinCostClimbingStairs(): void
    {
        self::assertSame(
            15,
            MinCostClimbingStairs::minCostClimbingStairs([10, 15, 20])
        );
        self::assertSame(
            6,
            MinCostClimbingStairs::minCostClimbingStairs2([1, 100, 1, 1, 1, 100, 1, 1, 100, 1])
        );
    }
}
