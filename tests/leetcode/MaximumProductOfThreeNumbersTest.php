<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MaximumProductOfThreeNumbers;

class MaximumProductOfThreeNumbersTest extends TestCase
{
    public function testMaximumProduct(): void
    {
        self::assertSame(6, MaximumProductOfThreeNumbers::maximumProduct([1, 2, 3]));
        self::assertSame(24, MaximumProductOfThreeNumbers::maximumProduct([1, 2, 3, 4]));
        self::assertSame(-6, MaximumProductOfThreeNumbers::maximumProduct([-1, -2, -3]));
    }

    public function testMaximumProduct2(): void
    {
        self::assertSame(6, MaximumProductOfThreeNumbers::maximumProduct2([1, 2, 3]));
        self::assertSame(24, MaximumProductOfThreeNumbers::maximumProduct2([1, 2, 3, 4]));
        self::assertSame(-6, MaximumProductOfThreeNumbers::maximumProduct2([-1, -2, -3]));
    }
}
