<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\RomanToInteger;
use PHPUnit\Framework\TestCase;

class RomanToIntegerTest extends TestCase
{
    public function testRomanToInteger(): void
    {
        self::assertSame(3, RomanToInteger::romanToInt('III'));
        self::assertSame(4, RomanToInteger::romanToInt('IV'));
        self::assertSame(9, RomanToInteger::romanToInt('IX'));
        self::assertSame(58, RomanToInteger::romanToInt('LVIII'));
        self::assertSame(1994, RomanToInteger::romanToInt('MCMXCIV'));
    }

    public function testRomanToInteger2(): void
    {
        self::assertSame(3, RomanToInteger::romanToInt2('III'));
        self::assertSame(4, RomanToInteger::romanToInt2('IV'));
        self::assertSame(9, RomanToInteger::romanToInt2('IX'));
        self::assertSame(58, RomanToInteger::romanToInt2('LVIII'));
        self::assertSame(1994, RomanToInteger::romanToInt2('MCMXCIV'));
    }
}
