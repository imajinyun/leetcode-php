<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\LargestUniqueNumber;

class LargestUniqueNumberTest extends TestCase
{
    public function testLargestUniqueNumber(): void
    {
        self::assertSame(8, LargestUniqueNumber::largestUniqueNumber([5, 7, 3, 9, 4, 9, 8, 3, 1]));
        self::assertSame(-1, LargestUniqueNumber::largestUniqueNumber([9, 9, 8, 8]));
    }

    public function testLargestUniqueNumber2(): void
    {
        self::assertSame(8, LargestUniqueNumber::largestUniqueNumber2([5, 7, 3, 9, 4, 9, 8, 3, 1]));
        self::assertSame(-1, LargestUniqueNumber::largestUniqueNumber2([9, 9, 8, 8]));
    }
}
