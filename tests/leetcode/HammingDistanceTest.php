<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\HammingDistance;

class HammingDistanceTest extends TestCase
{
    public function testHammingDistance(): void
    {
        self::assertSame(2, HammingDistance::hammingDistance(1, 4));
        self::assertSame(1, HammingDistance::hammingDistance(3, 1));
    }

    public function testHammingDistance2(): void
    {
        self::assertSame(2, HammingDistance::hammingDistance2(1, 4));
        self::assertSame(1, HammingDistance::hammingDistance2(3, 1));
    }
}
