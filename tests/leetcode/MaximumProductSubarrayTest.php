<?php

declare(strict_types=1);

namespace leetcode;

use PHPUnit\Framework\TestCase;

class MaximumProductSubarrayTest extends TestCase
{
    public function testMaxProduct(): void
    {
        self::assertSame(6, MaximumProductSubarray::maxProduct([2, 3, -2, 4]));
        self::assertSame(0, MaximumProductSubarray::maxProduct([-2, 0, -1]));
        self::assertSame(56, MaximumProductSubarray::maxProduct([7, -2, -4]));
        self::assertSame(60, MaximumProductSubarray::maxProduct([3, 2, -1, 5, -2]));
    }

    public function testMaxProduct2(): void
    {
        self::assertSame(6, MaximumProductSubarray::maxProduct2([2, 3, -2, 4]));
        self::assertSame(0, MaximumProductSubarray::maxProduct2([-2, 0, -1]));
        self::assertSame(56, MaximumProductSubarray::maxProduct2([7, -2, -4]));
        self::assertSame(60, MaximumProductSubarray::maxProduct2([3, 2, -1, 5, -2]));
    }
}
