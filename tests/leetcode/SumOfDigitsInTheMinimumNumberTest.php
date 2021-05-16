<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SumOfDigitsInTheMinimumNumber;

class SumOfDigitsInTheMinimumNumberTest extends TestCase
{
    public function testSumOfDigits(): void
    {
        self::assertSame(0, SumOfDigitsInTheMinimumNumber::sumOfDigits([34, 23, 1, 24, 75, 33, 54, 8]));
        self::assertSame(1, SumOfDigitsInTheMinimumNumber::sumOfDigits([99, 77, 33, 66, 55]));
    }
}
