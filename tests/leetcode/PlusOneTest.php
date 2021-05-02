<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\PlusOne;

class PlusOneTest extends TestCase
{
    public function testPlusOne(): void
    {
        self::assertSame([1, 2, 4], PlusOne::plusOne([1, 2, 3]));
        self::assertSame([4, 3, 2, 2], PlusOne::plusOne([4, 3, 2, 1]));
        self::assertSame([1], PlusOne::plusOne([0]));
    }

    public function testPlusOne2(): void
    {
        self::assertSame([1, 2, 4], PlusOne::plusOne2([1, 2, 3]));
        self::assertSame([4, 3, 2, 2], PlusOne::plusOne2([4, 3, 2, 1]));
        self::assertSame([1], PlusOne::plusOne2([0]));
    }
}
