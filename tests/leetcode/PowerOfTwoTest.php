<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\PowerOfTwo;
use PHPUnit\Framework\TestCase;

class PowerOfTwoTest extends TestCase
{
    public function testIsPowerOfTwo(): void
    {
        self::assertTrue(PowerOfTwo::isPowerOfTwo(1));
        self::assertTrue(PowerOfTwo::isPowerOfTwo(16));
        self::assertFalse(PowerOfTwo::isPowerOfTwo(3));
        self::assertTrue(PowerOfTwo::isPowerOfTwo(4));
        self::assertFalse(PowerOfTwo::isPowerOfTwo(5));
        self::assertFalse(PowerOfTwo::isPowerOfTwo(218));
        self::assertTrue(PowerOfTwo::isPowerOfTwo(1024));
    }

    public function testIsPowerOfTwo2(): void
    {
        self::assertTrue(PowerOfTwo::isPowerOfTwo2(1));
        self::assertTrue(PowerOfTwo::isPowerOfTwo2(16));
        self::assertFalse(PowerOfTwo::isPowerOfTwo2(3));
        self::assertTrue(PowerOfTwo::isPowerOfTwo2(4));
        self::assertFalse(PowerOfTwo::isPowerOfTwo2(5));
        self::assertFalse(PowerOfTwo::isPowerOfTwo2(218));
        self::assertTrue(PowerOfTwo::isPowerOfTwo2(1024));
    }

    public function testIsPowerOfTwo3(): void
    {
        self::assertTrue(PowerOfTwo::isPowerOfTwo3(1));
        self::assertTrue(PowerOfTwo::isPowerOfTwo3(16));
        self::assertFalse(PowerOfTwo::isPowerOfTwo3(3));
        self::assertTrue(PowerOfTwo::isPowerOfTwo3(4));
        self::assertFalse(PowerOfTwo::isPowerOfTwo3(5));
        self::assertFalse(PowerOfTwo::isPowerOfTwo3(218));
        self::assertTrue(PowerOfTwo::isPowerOfTwo3(1024));
    }
}
