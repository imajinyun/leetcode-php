<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\BestTimeToBuyAndSellStockWithTransactionFee;
use PHPUnit\Framework\TestCase;

class BestTimeToBuyAndSellStockWithTransactionFeeTest extends TestCase
{
    public function testMaxProfit(): void
    {
        self::assertSame(
            8,
            BestTimeToBuyAndSellStockWithTransactionFee::maxProfit([1, 3, 2, 8, 4, 9], 2)
        );
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockWithTransactionFee::maxProfit([1, 3, 7, 5, 10, 3], 3)
        );
    }

    public function testMaxProfit2(): void
    {
        self::assertSame(
            8,
            BestTimeToBuyAndSellStockWithTransactionFee::maxProfit2([1, 3, 2, 8, 4, 9], 2)
        );
        self::assertSame(
            6,
            BestTimeToBuyAndSellStockWithTransactionFee::maxProfit2([1, 3, 7, 5, 10, 3], 3)
        );
    }
}
