<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\NumberOfEquivalentDominoPairs;

class NumberOfEquivalentDominoPairsTest extends TestCase
{
    public function testNumEquivDominoPairs(): void
    {
        self::assertSame(1, NumberOfEquivalentDominoPairs::numEquivDominoPairs([[1, 2], [2, 1], [3, 4], [5, 6]]));
    }
}
