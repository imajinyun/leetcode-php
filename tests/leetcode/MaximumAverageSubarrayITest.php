<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MaximumAverageSubarrayI;

class MaximumAverageSubarrayITest extends TestCase
{
    public function testFindMaxAverage(): void
    {
        self::assertSame(12.75, MaximumAverageSubarrayI::findMaxAverage([1, 12, -5, -6, 50, 3], 4));
    }

    public function testFindMaxAverage2(): void
    {
        self::assertSame(12.75, MaximumAverageSubarrayI::findMaxAverage2([1, 12, -5, -6, 50, 3], 4));
    }
}
