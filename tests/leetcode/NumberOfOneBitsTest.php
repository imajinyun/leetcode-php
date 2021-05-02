<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\NumberOfOneBits;

class NumberOfOneBitsTest extends TestCase
{
    public function testHammingWeight(): void
    {
        self::assertSame(3, NumberOfOneBits::hammingWeight(bindec('00000000000000000000000000001011')));
        self::assertSame(1, NumberOfOneBits::hammingWeight(bindec('00000000000000000000000010000000')));
        self::assertSame(31, NumberOfOneBits::hammingWeight(bindec('11111111111111111111111111111101')));
        self::assertSame(63, NumberOfOneBits::hammingWeight(PHP_INT_MAX));
    }

    public function testHammingWeight2(): void
    {
        self::assertSame(3, NumberOfOneBits::hammingWeight2(bindec('00000000000000000000000000001011')));
        self::assertSame(1, NumberOfOneBits::hammingWeight2(bindec('00000000000000000000000010000000')));
        self::assertSame(31, NumberOfOneBits::hammingWeight2(bindec('11111111111111111111111111111101')));
        self::assertSame(63, NumberOfOneBits::hammingWeight2(PHP_INT_MAX));
    }
}
