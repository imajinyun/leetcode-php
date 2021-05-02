<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\LongestIncreasingSubsequence;
use PHPUnit\Framework\TestCase;

class LongestIncreasingSubsequenceTest extends TestCase
{
    public function testLengthOfLIS(): void
    {
        self::assertSame(
            4,
            LongestIncreasingSubsequence::lengthOfLIS([10, 9, 2, 5, 3, 7, 101, 18])
        );
        self::assertSame(
            6,
            LongestIncreasingSubsequence::lengthOfLIS([90, 1, 80, 9, 2, 7, 70, 30, 10, 3, 15, 20])
        );
    }

    public function testLengthOfLIS2(): void
    {
        self::assertSame(
            4,
            LongestIncreasingSubsequence::lengthOfLIS2([10, 9, 2, 5, 3, 7, 101, 18])
        );
        self::assertSame(
            6,
            LongestIncreasingSubsequence::lengthOfLIS2([90, 1, 80, 9, 2, 7, 70, 30, 10, 3, 15, 20])
        );
    }

    public function testLengthOfLIS3(): void
    {
        self::assertSame(
            4,
            LongestIncreasingSubsequence::lengthOfLIS3([10, 9, 2, 5, 3, 7, 101, 18])
        );
        self::assertSame(
            6,
            LongestIncreasingSubsequence::lengthOfLIS3([90, 1, 80, 9, 2, 7, 70, 30, 10, 3, 15, 20])
        );
    }
}
