<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\IntegerBreak;
use PHPUnit\Framework\TestCase;

class IntegerBreakTest extends TestCase
{
    public function testIntegerBreak(): void
    {
        self::assertSame(1, IntegerBreak::integerBreak(1));
        self::assertSame(1, IntegerBreak::integerBreak(2));
        self::assertSame(2, IntegerBreak::integerBreak(3));
        self::assertSame(4, IntegerBreak::integerBreak(4));
        self::assertSame(6, IntegerBreak::integerBreak(5));
        self::assertSame(36, IntegerBreak::integerBreak(10));
    }

    public function testIntegerBreak2(): void
    {
        self::assertSame(1, IntegerBreak::integerBreak2(1));
        self::assertSame(1, IntegerBreak::integerBreak2(2));
        self::assertSame(2, IntegerBreak::integerBreak2(3));
        self::assertSame(4, IntegerBreak::integerBreak2(4));
        self::assertSame(6, IntegerBreak::integerBreak(5));
        self::assertSame(36, IntegerBreak::integerBreak(10));
    }
}
