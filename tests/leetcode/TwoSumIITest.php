<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\TwoSumII;

class TwoSumIITest extends TestCase
{
    public function testTwoSum(): void
    {
        self::assertSame([1, 2], TwoSumII::twoSum([2, 7, 11, 15], 9));
        self::assertSame([1, 3], TwoSumII::twoSum([2, 3, 4], 6));
        self::assertSame([1, 2], TwoSumII::twoSum([-1, 0], -1));
    }

    public function testTwoSum2(): void
    {
        self::assertSame([1, 2], TwoSumII::twoSum2([2, 7, 11, 15], 9));
        self::assertSame([1, 3], TwoSumII::twoSum2([2, 3, 4], 6));
        self::assertSame([1, 2], TwoSumII::twoSum2([-1, 0], -1));
    }

    public function testTwoSum3(): void
    {
        self::assertSame([1, 2], TwoSumII::twoSum3([2, 7, 11, 15], 9));
        self::assertSame([1, 3], TwoSumII::twoSum3([2, 3, 4], 6));
        self::assertSame([1, 2], TwoSumII::twoSum3([-1, 0], -1));
    }
}
