<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\FairCandySwap;
use PHPUnit\Framework\TestCase;

class FairCandySwapTest extends TestCase
{
    public function testFairCandySwap(): void
    {
        self::assertSame([1, 2], FairCandySwap::fairCandySwap([1, 1], [2, 2]));
        self::assertSame([1, 2], FairCandySwap::fairCandySwap([1, 2], [2, 3]));
        self::assertSame([2, 3], FairCandySwap::fairCandySwap([2], [1, 3]));
        self::assertSame([5, 4], FairCandySwap::fairCandySwap([1, 2, 5], [2, 4]));
    }

    public function testFairCandySwap2(): void
    {
        self::assertSame([1, 2], FairCandySwap::fairCandySwap2([1, 1], [2, 2]));
        self::assertSame([1, 2], FairCandySwap::fairCandySwap2([1, 2], [2, 3]));
        self::assertSame([2, 3], FairCandySwap::fairCandySwap2([2], [1, 3]));
        self::assertSame([5, 4], FairCandySwap::fairCandySwap2([1, 2, 5], [2, 4]));
    }
}
