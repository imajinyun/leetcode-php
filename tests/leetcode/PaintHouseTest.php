<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\PaintHouse;
use PHPUnit\Framework\TestCase;

class PaintHouseTest extends TestCase
{
    public function testMinCost(): void
    {
        self::assertSame(10, PaintHouse::minCost([
            [17, 2, 17],
            [16, 16, 5],
            [14, 3, 19],
        ]));
        self::assertSame(13, PaintHouse::minCost([
            [1, 2, 1],
            [4, 5, 5],
            [7, 8, 9]
        ]));
    }

    public function testMinCost2(): void
    {
        self::assertSame(10, PaintHouse::minCost2([
            [17, 2, 17],
            [16, 16, 5],
            [14, 3, 19],
        ]));
        self::assertSame(13, PaintHouse::minCost([
            [1, 2, 1],
            [4, 5, 5],
            [7, 8, 9]
        ]));
    }
}
