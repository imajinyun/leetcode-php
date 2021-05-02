<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\SlidingWindowMaximum;
use PHPUnit\Framework\TestCase;

class SlidingWindowMaximumTest extends TestCase
{
    public function testSlidingWindowMaximum(): void
    {
        self::assertSame(
            [3, 3, 5, 5, 6, 7],
            SlidingWindowMaximum::maxSlidingWindow([1, 3, -1, -3, 5, 3, 6, 7], 3)
        );
        self::assertSame([1], SlidingWindowMaximum::maxSlidingWindow([1], 1));
        self::assertSame([1, -1], SlidingWindowMaximum::maxSlidingWindow([1, -1], 1));
        self::assertSame([11], SlidingWindowMaximum::maxSlidingWindow([9, 11], 2));
        self::assertSame([4], SlidingWindowMaximum::maxSlidingWindow([4, -2], 2));
    }

    public function testSlidingWindowMaximum2(): void
    {
        self::assertSame(
            [3, 3, 5, 5, 6, 7],
            SlidingWindowMaximum::maxSlidingWindow2([1, 3, -1, -3, 5, 3, 6, 7], 3)
        );
        self::assertSame([1], SlidingWindowMaximum::maxSlidingWindow2([1], 1));
        self::assertSame([1, -1], SlidingWindowMaximum::maxSlidingWindow2([1, -1], 1));
        self::assertSame([11], SlidingWindowMaximum::maxSlidingWindow2([9, 11], 2));
        self::assertSame([4], SlidingWindowMaximum::maxSlidingWindow2([4, -2], 2));
    }
}
