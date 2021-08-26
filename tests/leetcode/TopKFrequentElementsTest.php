<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\TopKFrequentElements;

class TopKFrequentElementsTest extends TestCase
{
    public function testTopKFrequent(): void
    {
        self::assertSame([1, 2], TopKFrequentElements::topKFrequent([1, 1, 1, 2, 2, 3], 2));
        self::assertSame([0], TopKFrequentElements::topKFrequent([3, 0, 1, 0], 1));
        self::assertSame([1], TopKFrequentElements::topKFrequent([1], 1));
    }

    public function testTopKFrequent2(): void
    {
        self::assertSame([1, 2], TopKFrequentElements::topKFrequent2([1, 1, 1, 2, 2, 3], 2));
        self::assertSame([0], TopKFrequentElements::topKFrequent2([3, 0, 1, 0], 1));
        self::assertSame([1], TopKFrequentElements::topKFrequent2([1], 1));
    }
}
