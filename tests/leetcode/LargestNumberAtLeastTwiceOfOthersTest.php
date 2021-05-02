<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\LargestNumberAtLeastTwiceOfOthers;

class LargestNumberAtLeastTwiceOfOthersTest extends TestCase
{
    public function testDominantIndex(): void
    {
        self::assertSame(1, LargestNumberAtLeastTwiceOfOthers::dominantIndex([3, 6, 1, 0]));
        self::assertSame(-1, LargestNumberAtLeastTwiceOfOthers::dominantIndex([1, 2, 3, 4]));
    }

    public function testDominantIndex2(): void
    {
        self::assertSame(1, LargestNumberAtLeastTwiceOfOthers::dominantIndex2([3, 6, 1, 0]));
        self::assertSame(-1, LargestNumberAtLeastTwiceOfOthers::dominantIndex2([1, 2, 3, 4]));
    }
}
