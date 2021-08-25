<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\IntersectionOfTwoArraysII;

class IntersectionOfTwoArraysIITest extends TestCase
{
    public function testIntersect(): void
    {
        self::assertSame(
            [2, 2],
            IntersectionOfTwoArraysII::intersect([1, 2, 2, 1], [2, 2])
        );
        self::assertSame(
            [4, 9],
            IntersectionOfTwoArraysII::intersect([4, 9, 5], [9, 4, 9, 8, 4])
        );
    }

    public function testIntersect2(): void
    {
        self::assertSame(
            [2, 2],
            IntersectionOfTwoArraysII::intersect2([1, 2, 2, 1], [2, 2])
        );
        self::assertSame(
            [4, 9],
            IntersectionOfTwoArraysII::intersect2([4, 9, 5], [9, 4, 9, 8, 4])
        );
    }
}
