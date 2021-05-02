<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BestTimeToBuyAndSellStockWithCooldown;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockWithCooldownTest extends TestCase
{
    public function testMaxProfit(): void
    {
        self::assertSame(
            3,
            BestTimeToBuyAndSellStockWithCooldown::maxProfit([1, 2, 3, 0, 2])
        );
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockWithCooldown::maxProfit([6, 1, 3, 2, 4, 7])
        );
    }

    public function testMaxProfit2(): void
    {
        self::assertSame(
            3,
            BestTimeToBuyAndSellStockWithCooldown::maxProfit2([1, 2, 3, 0, 2])
        );
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockWithCooldown::maxProfit2([6, 1, 3, 2, 4, 7])
        );
    }

    public function testMaxProfit3(): void
    {
        self::assertSame(
            3,
            BestTimeToBuyAndSellStockWithCooldown::maxProfit3([1, 2, 3, 0, 2])
        );
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockWithCooldown::maxProfit3([6, 1, 3, 2, 4, 7])
        );
    }
}
