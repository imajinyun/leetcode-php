<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BestTimeToBuyAndSellStock;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockTest extends TestCase
{
    public function testMaxProfit(): void
    {
        self::assertEquals(5, BestTimeToBuyAndSellStock::maxProfit([7, 1, 5, 3, 6, 4]));
        self::assertEquals(0, BestTimeToBuyAndSellStock::maxProfit([7, 6, 4, 3, 1]));
        self::assertEquals(4, BestTimeToBuyAndSellStock::maxProfit([1, 2, 3, 4, 5]));
    }

    public function testMaxProfit2(): void
    {
        self::assertEquals(5, BestTimeToBuyAndSellStock::maxProfit2([7, 1, 5, 3, 6, 4]));
        self::assertEquals(0, BestTimeToBuyAndSellStock::maxProfit2([7, 6, 4, 3, 1]));
        self::assertEquals(4, BestTimeToBuyAndSellStock::maxProfit2([1, 2, 3, 4, 5]));
    }
}
