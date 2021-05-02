<?php

declare(strict_types=1);

namespace leetcode;

use PHPUnit\Framework\TestCase;

class DecodeWaysTest extends TestCase
{
    public function testNumDecodings(): void
    {
        self::assertSame(0, DecodeWays::numDecodings(''));
        self::assertSame(0, DecodeWays::numDecodings('0'));
        self::assertSame(0, DecodeWays::numDecodings('013'));
        self::assertSame(1, DecodeWays::numDecodings('10'));
        self::assertSame(1, DecodeWays::numDecodings('27'));
        self::assertSame(2, DecodeWays::numDecodings('12'));
        self::assertSame(3, DecodeWays::numDecodings('226'));
        self::assertSame(0, DecodeWays::numDecodings('1001'));
    }

    public function testNumDecodings2(): void
    {
        self::assertSame(0, DecodeWays::numDecodings(''));
        self::assertSame(0, DecodeWays::numDecodings('0'));
        self::assertSame(0, DecodeWays::numDecodings('03'));
        self::assertSame(1, DecodeWays::numDecodings2('10'));
        self::assertSame(1, DecodeWays::numDecodings2('27'));
        self::assertSame(2, DecodeWays::numDecodings2('12'));
        self::assertSame(3, DecodeWays::numDecodings2('226'));
        self::assertSame(0, DecodeWays::numDecodings2('1001'));
    }
}
