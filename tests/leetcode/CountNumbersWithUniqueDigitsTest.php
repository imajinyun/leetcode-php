<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\CountNumbersWithUniqueDigits;
use PHPUnit\Framework\TestCase;

class CountNumbersWithUniqueDigitsTest extends TestCase
{
    public function testCountNumbersWithUniqueDigits(): void
    {
        self::assertSame(
            91,
            CountNumbersWithUniqueDigits::countNumbersWithUniqueDigits(2)
        );
    }

    public function testCountNumbersWithUniqueDigits2(): void
    {
        self::assertSame(
            91,
            CountNumbersWithUniqueDigits::countNumbersWithUniqueDigits2(2)
        );
    }
}
