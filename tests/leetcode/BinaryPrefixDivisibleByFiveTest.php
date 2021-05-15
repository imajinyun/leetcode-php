<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\BinaryPrefixDivisibleByFive;

class BinaryPrefixDivisibleByFiveTest extends TestCase
{
    public function testPrefixesDivByFive(): void
    {
        self::assertSame(
            [true, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive([0, 1, 1])
        );
        self::assertSame(
            [false, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive([1, 1, 1])
        );
        self::assertSame(
            [true, false, false, false, true, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive([0, 1, 1, 1, 1, 1])
        );
        self::assertSame(
            [false, false, false, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive([1, 1, 1, 0, 1])
        );
    }

    public function testPrefixesDivByFive2(): void
    {
        self::assertSame(
            [true, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive2([0, 1, 1])
        );
        self::assertSame(
            [false, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive2([1, 1, 1])
        );
        self::assertSame(
            [true, false, false, false, true, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive2([0, 1, 1, 1, 1, 1])
        );
        self::assertSame(
            [false, false, false, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive2([1, 1, 1, 0, 1])
        );
    }

    public function testPrefixesDivByFive3(): void
    {
        self::assertSame(
            [true, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive3([0, 1, 1])
        );
        self::assertSame(
            [false, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive3([1, 1, 1])
        );
        self::assertSame(
            [true, false, false, false, true, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive3([0, 1, 1, 1, 1, 1])
        );
        self::assertSame(
            [false, false, false, false, false],
            BinaryPrefixDivisibleByFive::prefixesDivByFive3([1, 1, 1, 0, 1])
        );
    }
}
