<?php

declare(strict_types=1);

namespace leetcode\tests\TwoSum;

use leetcode\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    public function testTwoSum1(): void
    {
        $target = 9;
        $nums = [2, 7, 11, 15];

        $expect = [0, 1];
        $actual = TwoSum::twoSum($nums, $target);
        self::assertEquals($expect, $actual);
    }

    public function testTwoSum2(): void
    {
        $actual = TwoSum::twoSum2([2, 7, 11, 15], 9);
        self::assertEquals([0, 1], $actual);
    }
}
