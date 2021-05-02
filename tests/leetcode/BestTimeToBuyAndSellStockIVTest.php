<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BestTimeToBuyAndSellStockIV;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockIVTest extends TestCase
{
    public function testMaxProfit(): void
    {
        self::assertSame(
            2,
            BestTimeToBuyAndSellStockIV::maxProfit(2, [2, 4, 1])
        );
        self::assertSame(
            7,
            BestTimeToBuyAndSellStockIV::maxProfit(2, [3, 2, 6, 5, 0, 3])
        );
        self::assertSame(
            0,
            BestTimeToBuyAndSellStockIV::maxProfit(0, [1, 3])
        );
    }

    public function testMaxProfit2(): void
    {
        self::assertSame(
            2,
            BestTimeToBuyAndSellStockIV::maxProfit2(2, [2, 4, 1])
        );
        self::assertSame(
            7,
            BestTimeToBuyAndSellStockIV::maxProfit2(2, [3, 2, 6, 5, 0, 3])
        );
        self::assertSame(
            0,
            BestTimeToBuyAndSellStockIV::maxProfit2(0, [1, 3])
        );
    }
}
