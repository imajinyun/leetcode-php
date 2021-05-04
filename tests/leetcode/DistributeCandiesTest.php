<?php

namespace leetcode;

use PHPUnit\Framework\TestCase;

class DistributeCandiesTest extends TestCase
{
    public function testDistributeCandies(): void
    {
        self::assertSame(3, DistributeCandies::distributeCandies([1, 1, 2, 2, 3, 3]));
        self::assertSame(2, DistributeCandies::distributeCandies([1, 1, 2, 3]));
        self::assertSame(1, DistributeCandies::distributeCandies([6, 6, 6, 6]));
    }

    public function testDistributeCandies2(): void
    {
        self::assertSame(3, DistributeCandies::distributeCandies2([1, 1, 2, 2, 3, 3]));
        self::assertSame(2, DistributeCandies::distributeCandies2([1, 1, 2, 3]));
        self::assertSame(1, DistributeCandies::distributeCandies2([6, 6, 6, 6]));
    }
}
