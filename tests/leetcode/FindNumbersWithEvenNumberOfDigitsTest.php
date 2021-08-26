<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\FindNumbersWithEvenNumberOfDigits;

class FindNumbersWithEvenNumberOfDigitsTest extends TestCase
{
    public function testFindNumbers(): void
    {
        self::assertSame(2, FindNumbersWithEvenNumberOfDigits::findNumbers([12, 345, 2, 6, 7896]));
        self::assertSame(1, FindNumbersWithEvenNumberOfDigits::findNumbers([555, 901, 482, 1771]));
    }

    public function testFindNumbers2(): void
    {
        self::assertSame(2, FindNumbersWithEvenNumberOfDigits::findNumbers2([12, 345, 2, 6, 7896]));
        self::assertSame(1, FindNumbersWithEvenNumberOfDigits::findNumbers2([555, 901, 482, 1771]));
    }
}
