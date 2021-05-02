<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MaximumSubarray;
use PHPUnit\Framework\TestCase;

class MaximumSubarrayTest extends TestCase
{
    public function testMaxSubArray(): void
    {
        self::assertSame(6, MaximumSubarray::maxSubArray([-2, 1, -3, 4, -1, 2, 1, -5, 4]));
        self::assertSame(-5, MaximumSubarray::maxSubArray([-5]));
    }

    public function testMaxSubArray2(): void
    {
        self::assertSame(6, MaximumSubarray::maxSubArray2([-2, 1, -3, 4, -1, 2, 1, -5, 4]));
        self::assertSame(-5, MaximumSubarray::maxSubArray2([-5]));
    }

    public function testMaxSubArray3(): void
    {
        self::assertSame(6, MaximumSubarray::maxSubArray3([-2, 1, -3, 4, -1, 2, 1, -5, 4]));
        self::assertSame(-5, MaximumSubarray::maxSubArray3([-5]));
    }
}
