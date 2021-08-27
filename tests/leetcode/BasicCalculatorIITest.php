<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BasicCalculatorII;

class BasicCalculatorIITest extends TestCase
{
    public function testCalculate(): void
    {
        self::assertSame(7, BasicCalculatorII::calculate('3+2*2'));
        self::assertSame(1, BasicCalculatorII::calculate(' 3/2 '));
        self::assertSame(5, BasicCalculatorII::calculate(' 3+5 / 2 '));
    }

    public function testCalculate2(): void
    {
        self::assertSame(7, BasicCalculatorII::calculate2('3+2*2'));
        self::assertSame(1, BasicCalculatorII::calculate2(' 3/2 '));
        self::assertSame(5, BasicCalculatorII::calculate2(' 3+5 / 2 '));
    }
}
