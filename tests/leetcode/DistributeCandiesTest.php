<?php

namespace leetcode;

use PHPUnit\Framework\TestCase;

class DistributeCandiesTest extends TestCase
{
    public function testDistributeCandies(): void
    {
        self::assertSame(3, DistributeCandies::distributeCandies([1, 1, 2, 2, 3, 3]));
        self::assertSame(2, DistributeCandies::distributeCandies([1, 1, 2, 3]));
    }

    public function testDistributeCandies2(): void
    {
        self::assertSame(3, DistributeCandies::distributeCandies2([1, 1, 2, 2, 3, 3]));
        self::assertSame(2, DistributeCandies::distributeCandies2([1, 1, 2, 3]));
    }

    public function testDistributeCandies3(): void
    {
        self::assertSame(3, DistributeCandies::distributeCandies3([1, 1, 2, 2, 3, 3]));
        self::assertSame(2, DistributeCandies::distributeCandies3([1, 1, 2, 3]));
    }
}
