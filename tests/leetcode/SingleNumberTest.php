<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\SingleNumber;
use PHPUnit\Framework\TestCase;

class SingleNumberTest extends TestCase
{
    public function testSingleNumber(): void
    {
        self::assertSame(1, SingleNumber::singleNumber([2, 2, 1]));
        self::assertSame(4, SingleNumber::singleNumber([4, 1, 2, 1, 2]));
        self::assertSame(1, SingleNumber::singleNumber([1]));
        self::assertSame(10, SingleNumber::singleNumber([11, 33, 0, 0, 10, 33, 11]));
    }

    public function testSingleNumber2(): void
    {
        self::assertSame(1, SingleNumber::singleNumber2([2, 2, 1]));
        self::assertSame(4, SingleNumber::singleNumber2([4, 1, 2, 1, 2]));
        self::assertSame(1, SingleNumber::singleNumber2([1]));
        self::assertSame(10, SingleNumber::singleNumber2([11, 33, 0, 0, 10, 33, 11]));
    }
}
