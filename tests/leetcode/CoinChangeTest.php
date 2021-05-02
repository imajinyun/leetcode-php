<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\CoinChange;
use PHPUnit\Framework\TestCase;

class CoinChangeTest extends TestCase
{
    public function testCoinChange(): void
    {
        self::assertSame(3, CoinChange::coinChange([1, 2, 5], 11));
        self::assertSame(-1, CoinChange::coinChange([2], 3));
    }

    public function testCoinChange2(): void
    {
        self::assertSame(3, CoinChange::coinChange2([1, 2, 5], 11));
        self::assertSame(-1, CoinChange::coinChange2([2], 3));
    }
}
