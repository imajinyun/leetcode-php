<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\UglyNumberII;
use PHPUnit\Framework\TestCase;

class UglyNumberIITest extends TestCase
{
    public function testNthUglyNumber(): void
    {
        self::assertSame(6, UglyNumberII::nthUglyNumber(6));
        self::assertSame(8, UglyNumberII::nthUglyNumber(7));
        self::assertSame(9, UglyNumberII::nthUglyNumber(8));
        self::assertSame(10, UglyNumberII::nthUglyNumber(9));
        self::assertSame(12, UglyNumberII::nthUglyNumber(10));
        self::assertSame(15, UglyNumberII::nthUglyNumber(11));
    }

    public function testNthUglyNumber2(): void
    {
        self::assertSame(6, UglyNumberII::nthUglyNumber2(6));
        self::assertSame(8, UglyNumberII::nthUglyNumber2(7));
        self::assertSame(9, UglyNumberII::nthUglyNumber2(8));
        self::assertSame(10, UglyNumberII::nthUglyNumber2(9));
        self::assertSame(12, UglyNumberII::nthUglyNumber2(10));
        self::assertSame(15, UglyNumberII::nthUglyNumber2(11));
    }
}
