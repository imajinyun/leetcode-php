<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\CountingBits;
use PHPUnit\Framework\TestCase;

class CountingBitsTest extends TestCase
{
    public function testCountBits(): void
    {
        self::assertSame([0, 1, 1], CountingBits::countBits(2));
        self::assertSame([0, 1, 1, 2, 1, 2], CountingBits::countBits(5));
        self::assertSame([0, 1, 1, 2, 1, 2, 2, 3, 1], CountingBits::countBits(8));
    }

    public function testCountBits2(): void
    {
        self::assertSame([0, 1, 1], CountingBits::countBits2(2));
        self::assertSame([0, 1, 1, 2, 1, 2], CountingBits::countBits2(5));
        self::assertSame([0, 1, 1, 2, 1, 2, 2, 3, 1], CountingBits::countBits2(8));
    }

    public function testCountBits3(): void
    {
        self::assertSame([0, 1, 1], CountingBits::countBits3(2));
        self::assertSame([0, 1, 1, 2, 1, 2], CountingBits::countBits3(5));
        self::assertSame([0, 1, 1, 2, 1, 2, 2, 3, 1], CountingBits::countBits3(8));
    }

    public function testCountBits4(): void
    {
        self::assertSame([0, 1, 1], CountingBits::countBits4(2));
        self::assertSame([0, 1, 1, 2, 1, 2], CountingBits::countBits4(5));
        self::assertSame([0, 1, 1, 2, 1, 2, 2, 3, 1], CountingBits::countBits4(8));
    }
}
