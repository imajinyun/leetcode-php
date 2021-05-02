<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MissingNumber;
use PHPUnit\Framework\TestCase;

class MissingNumberTest extends TestCase
{
    public function testMissingNumber(): void
    {
        self::assertSame(2, MissingNumber::missingNumber([3, 0, 1]));
        self::assertSame(2, MissingNumber::missingNumber([0, 1]));
        self::assertSame(8, MissingNumber::missingNumber([9, 6, 4, 2, 3, 5, 7, 0, 1]));
        self::assertSame(1, MissingNumber::missingNumber([0]));
    }

    public function testMissingNumber2(): void
    {
        self::assertSame(2, MissingNumber::missingNumber2([3, 0, 1]));
        self::assertSame(2, MissingNumber::missingNumber2([0, 1]));
        self::assertSame(8, MissingNumber::missingNumber2([9, 6, 4, 2, 3, 5, 7, 0, 1]));
        self::assertSame(1, MissingNumber::missingNumber2([0]));
    }

    public function testMissingNumber3(): void
    {
        self::assertSame(2, MissingNumber::missingNumber3([3, 0, 1]));
        self::assertSame(2, MissingNumber::missingNumber3([0, 1]));
        self::assertSame(8, MissingNumber::missingNumber3([9, 6, 4, 2, 3, 5, 7, 0, 1]));
        self::assertSame(1, MissingNumber::missingNumber3([0]));
    }
}
