<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MinimumSizeSubarraySum;

class MinimumSizeSubarraySumTest extends TestCase
{
    public function testMinSubArrayLen(): void
    {
        self::assertSame(2, MinimumSizeSubarraySum::minSubArrayLen(7, [2, 3, 1, 2, 4, 3]));
        self::assertSame(1, MinimumSizeSubarraySum::minSubArrayLen(4, [1, 4, 4]));
        self::assertSame(0, MinimumSizeSubarraySum::minSubArrayLen(11, [1, 1, 1, 1, 1, 1, 1, 1]));
    }

    public function testMinSubArrayLen2(): void
    {
        self::assertSame(2, MinimumSizeSubarraySum::minSubArrayLen2(7, [2, 3, 1, 2, 4, 3]));
        self::assertSame(1, MinimumSizeSubarraySum::minSubArrayLen2(4, [1, 4, 4]));
        self::assertSame(0, MinimumSizeSubarraySum::minSubArrayLen2(11, [1, 1, 1, 1, 1, 1, 1, 1]));
    }
}
