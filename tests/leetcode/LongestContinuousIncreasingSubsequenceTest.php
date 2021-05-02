<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\LongestContinuousIncreasingSubsequence;
use PHPUnit\Framework\TestCase;

class LongestContinuousIncreasingSubsequenceTest extends TestCase
{
    public function testFindLengthOfLCIS(): void
    {
        self::assertSame(3, LongestContinuousIncreasingSubsequence::findLengthOfLCIS([1, 3, 5, 4, 7]));
        self::assertSame(1, LongestContinuousIncreasingSubsequence::findLengthOfLCIS([2, 2, 2, 2, 2]));
    }

    public function testFindLengthOfLCIS2(): void
    {
        self::assertSame(3, LongestContinuousIncreasingSubsequence::findLengthOfLCIS2([1, 3, 5, 4, 7]));
        self::assertSame(1, LongestContinuousIncreasingSubsequence::findLengthOfLCIS2([2, 2, 2, 2, 2]));
    }
}
