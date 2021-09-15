<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\DivideTwoIntegers;

class DivideTwoIntegersTest extends TestCase
{
    public function testDivide(): void
    {
        self::assertSame(3, DivideTwoIntegers::divide(10, 3));
        self::assertSame(-2, DivideTwoIntegers::divide(7, -3));
        self::assertSame(0, DivideTwoIntegers::divide(0, 1));
        self::assertSame(1, DivideTwoIntegers::divide(1, 1));
        self::assertSame(715827882, DivideTwoIntegers::divide(-2147483648, -3));
    }

    public function testDivide2(): void
    {
        self::assertSame(3, DivideTwoIntegers::divide2(10, 3));
        self::assertSame(-2, DivideTwoIntegers::divide2(7, -3));
        self::assertSame(0, DivideTwoIntegers::divide2(0, 1));
        self::assertSame(1, DivideTwoIntegers::divide2(1, 1));
        self::assertSame(715827882, DivideTwoIntegers::divide2(-2147483648, -3));
    }
}
