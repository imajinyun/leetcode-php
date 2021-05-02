<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\StringToInteger;
use PHPUnit\Framework\TestCase;

class StringToIntegerTest extends TestCase
{
    public function testMyAtoi(): void
    {
        self::assertSame(42, StringToInteger::myAtoi('42'));
        self::assertSame(-42, StringToInteger::myAtoi('  -42'));
        self::assertSame(4193, StringToInteger::myAtoi('4193 with words'));
        self::assertSame(0, StringToInteger::myAtoi('words and 987'));
        self::assertSame(-2147483648, StringToInteger::myAtoi('-91283472332'));
        self::assertSame(2147483647, StringToInteger::myAtoi('91283472332'));
        self::assertSame(1, StringToInteger::myAtoi('1.844674407370955e19'));
        self::assertSame(3, StringToInteger::myAtoi('3.1415926'));
        self::assertSame(-12, StringToInteger::myAtoi(' -12 '));
        self::assertSame(10086, StringToInteger::myAtoi('+10086(65536)'));
    }
}
