<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\ReverseInteger;
use PHPUnit\Framework\TestCase;

class ReverseIntegerTest extends TestCase
{
    public function testReverse(): void
    {
        self::assertSame(0, ReverseInteger::reverse(PHP_INT_MAX));
        self::assertSame(0, ReverseInteger::reverse(PHP_INT_MIN));
        self::assertSame(321, ReverseInteger::reverse(123));
        self::assertSame(-321, ReverseInteger::reverse(-123));
        self::assertSame(21, ReverseInteger::reverse(120));
    }
}
