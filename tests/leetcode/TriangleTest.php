<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\Triangle;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    public function testMininumTotal(): void
    {
        $triangle = [
            [2],
            [3, 4],
            [6, 5, 7],
            [4, 1, 8, 3]
        ];
        self::assertSame(11, Triangle::minimumTotal($triangle));
    }

    public function testMininumTotal2(): void
    {
        $triangle = [
            [2],
            [3, 4],
            [6, 5, 7],
            [4, 1, 8, 3]
        ];
        self::assertSame(11, Triangle::minimumTotal2($triangle));
    }
}
