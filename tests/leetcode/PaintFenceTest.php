<?php

declare(strict_types=1);

namespace leetcode;

use PHPUnit\Framework\TestCase;

class PaintFenceTest extends TestCase
{
    public function testNumWays(): void
    {
        self::assertEquals(6, PaintFence::numWays(3, 2));
    }

    public function testNumWays2(): void
    {
        self::assertEquals(6, PaintFence::numWays2(3, 2));
    }

    public function testNumWays3(): void
    {
        self::assertEquals(6, PaintFence::numWays3(3, 2));
    }
}
