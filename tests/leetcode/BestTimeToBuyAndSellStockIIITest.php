<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BestTimeToBuyAndSellStockIII;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockIIITest extends TestCase
{
    public function testMaxProfit(): void
    {
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockIII::maxProfit([3, 3, 5, 0, 0, 3, 1, 4])
        );
        self::assertSame(
            4,
            BestTimeToBuyAndSellStockIII::maxProfit([1, 2, 3, 4, 5])
        );
        self::assertSame(
            0,
            BestTimeToBuyAndSellStockIII::maxProfit([7, 6, 4, 3, 1])
        );
    }

    public function testMaxProfit2(): void
    {
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockIII::maxProfit2([3, 3, 5, 0, 0, 3, 1, 4])
        );
        self::assertSame(
            4,
            BestTimeToBuyAndSellStockIII::maxProfit2([1, 2, 3, 4, 5])
        );
        self::assertSame(
            0,
            BestTimeToBuyAndSellStockIII::maxProfit2([7, 6, 4, 3, 1])
        );
    }

    public function testMaxProfit3(): void
    {
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockIII::maxProfit3([3, 3, 5, 0, 0, 3, 1, 4])
        );
        self::assertSame(
            4,
            BestTimeToBuyAndSellStockIII::maxProfit3([1, 2, 3, 4, 5])
        );
        self::assertSame(
            0,
            BestTimeToBuyAndSellStockIII::maxProfit3([7, 6, 4, 3, 1])
        );
    }
}
