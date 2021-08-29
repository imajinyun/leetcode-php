<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\IntegerToRoman;
use PHPUnit\Framework\TestCase;

class IntegerToRomanTest extends TestCase
{
    public function testIntegerToRoman(): void
    {
        self::assertSame('III', IntegerToRoman::intToRoman(3));
        self::assertSame('IV', IntegerToRoman::intToRoman(4));
        self::assertSame('IX', IntegerToRoman::intToRoman(9));
        self::assertSame('LVIII', IntegerToRoman::intToRoman(58));
        self::assertSame('MCMXCIV', IntegerToRoman::intToRoman(1994));
    }
}
