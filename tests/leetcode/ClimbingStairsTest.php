<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ClimbingStairs;
use PHPUnit\Framework\TestCase;

class ClimbingStairsTest extends TestCase
{
    public function testClimbStairs(): void
    {
        self::assertSame(0, ClimbingStairs::climbStairs(0));
        self::assertSame(2, ClimbingStairs::climbStairs(2));
        self::assertSame(3, ClimbingStairs::climbStairs(3));
        self::assertSame(8, ClimbingStairs::climbStairs(5));
        self::assertSame(89, ClimbingStairs::climbStairs(10));
    }

    public function testClimbStairs2(): void
    {
        self::assertSame(0, ClimbingStairs::climbStairs2(0));
        self::assertSame(2, ClimbingStairs::climbStairs2(2));
        self::assertSame(3, ClimbingStairs::climbStairs2(3));
        self::assertSame(8, ClimbingStairs::climbStairs2(5));
        self::assertSame(89, ClimbingStairs::climbStairs2(10));
    }
}
