<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\LargestNumber;

class LargestNumberTest extends TestCase
{
    public function testLargestNumber(): void
    {
        self::assertSame('210', LargestNumber::largestNumber([10, 2]));
        self::assertSame('9534330', LargestNumber::largestNumber([3, 30, 34, 5, 9]));
        self::assertSame('1', LargestNumber::largestNumber([1]));
        self::assertSame('10', LargestNumber::largestNumber([10]));
    }

    public function testLargestNumber2(): void
    {
        self::assertSame('210', LargestNumber::largestNumber2([10, 2]));
        self::assertSame('9534330', LargestNumber::largestNumber2([3, 30, 34, 5, 9]));
        self::assertSame('1', LargestNumber::largestNumber2([1]));
        self::assertSame('10', LargestNumber::largestNumber2([10]));
    }
}
