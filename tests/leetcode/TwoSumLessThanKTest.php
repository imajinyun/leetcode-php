<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\TwoSumLessThanK;

class TwoSumLessThanKTest extends TestCase
{
    public function testTwoSumLessThanK(): void
    {
        self::assertSame(58, TwoSumLessThanK::twoSumLessThanK([34, 23, 1, 24, 75, 33, 54, 8], 60));
        self::assertSame(-1, TwoSumLessThanK::twoSumLessThanK([10, 20, 30], 15));
    }

    public function testTwoSumLessThanK2(): void
    {
        self::assertSame(58, TwoSumLessThanK::twoSumLessThanK2([34, 23, 1, 24, 75, 33, 54, 8], 60));
        self::assertSame(-1, TwoSumLessThanK::twoSumLessThanK2([10, 20, 30], 15));
    }
}
