<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SummaryRanges;

class SummaryRangesTest extends TestCase
{
    public function testSummaryRanges(): void
    {
        self::assertSame(['0->2', '4->5', '7'], SummaryRanges::summaryRanges([0, 1, 2, 4, 5, 7]));
        self::assertSame(['0', '2->4', '6', '8->9'], SummaryRanges::summaryRanges([0, 2, 3, 4, 6, 8, 9]));
        self::assertSame([], SummaryRanges::summaryRanges([]));
        self::assertSame(['-1'], SummaryRanges::summaryRanges([-1]));
        self::assertSame(['0'], SummaryRanges::summaryRanges([0]));
    }
}
