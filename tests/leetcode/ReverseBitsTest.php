<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ReverseBits;

class ReverseBitsTest extends TestCase
{
    public function testReverseBits(): void
    {
        self::assertSame(964176192, ReverseBits::reverseBits(0b00000010100101000001111010011100));
        self::assertSame(3221225471, ReverseBits::reverseBits(0b11111111111111111111111111111101));
    }

    public function testReverseBits2(): void
    {
        self::assertSame(964176192, ReverseBits::reverseBits2(0b00000010100101000001111010011100));
        self::assertSame(3221225471, ReverseBits::reverseBits2(0b11111111111111111111111111111101));
    }
}
