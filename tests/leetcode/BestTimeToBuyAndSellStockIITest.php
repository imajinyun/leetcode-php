<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BestTimeToBuyAndSellStockII;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockIITest extends TestCase
{
    public function testMaxProfit(): void
    {
        self::assertSame(7, BestTimeToBuyAndSellStockII::maxProfit([7, 1, 5, 3, 6, 4]));
        self::assertSame(4, BestTimeToBuyAndSellStockII::maxProfit([1, 2, 3, 4, 5]));
        self::assertSame(0, BestTimeToBuyAndSellStockII::maxProfit([7, 6, 4, 3, 1]));
    }

    public function testMaxProfit2(): void
    {
        self::assertSame(7, BestTimeToBuyAndSellStockII::maxProfit2([7, 1, 5, 3, 6, 4]));
        self::assertSame(4, BestTimeToBuyAndSellStockII::maxProfit2([1, 2, 3, 4, 5]));
        self::assertSame(0, BestTimeToBuyAndSellStockII::maxProfit2([7, 6, 4, 3, 1]));
    }

    public function testMaxProfit3(): void
    {
        self::assertSame(7, BestTimeToBuyAndSellStockII::maxProfit3([7, 1, 5, 3, 6, 4]));
        self::assertSame(4, BestTimeToBuyAndSellStockII::maxProfit3([1, 2, 3, 4, 5]));
        self::assertSame(0, BestTimeToBuyAndSellStockII::maxProfit3([7, 6, 4, 3, 1]));
    }

    public function testMaxProfit4(): void
    {
        self::assertSame(7, BestTimeToBuyAndSellStockII::maxProfit4([7, 1, 5, 3, 6, 4]));
        self::assertSame(4, BestTimeToBuyAndSellStockII::maxProfit4([1, 2, 3, 4, 5]));
        self::assertSame(0, BestTimeToBuyAndSellStockII::maxProfit4([7, 6, 4, 3, 1]));
    }
}
