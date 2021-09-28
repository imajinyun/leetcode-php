<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\IntersectionOfTwoArrays;

class IntersectionOfTwoArraysTest extends TestCase
{
    public function testIntersection(): void
    {
        self::assertSame([], IntersectionOfTwoArrays::intersection([], [2, 2]));
        self::assertSame([2], IntersectionOfTwoArrays::intersection([1, 2, 3, 1], [2, 2]));
        self::assertSame([9, 4], IntersectionOfTwoArrays::intersection([4, 9, 5], [9, 4, 9, 8, 4]));
    }

    public function testIntersection2(): void
    {
        self::assertSame([], IntersectionOfTwoArrays::intersection2([], [2, 2]));
        self::assertSame([2], IntersectionOfTwoArrays::intersection2([1, 2, 3, 1], [2, 2]));
        self::assertSame([4, 9], IntersectionOfTwoArrays::intersection2([4, 9, 5], [9, 4, 9, 8, 4]));
    }

    public function testIntersection3(): void
    {
        self::assertSame([], IntersectionOfTwoArrays::intersection3([], [2, 2]));
        self::assertSame([2], IntersectionOfTwoArrays::intersection3([1, 2, 3, 1], [2, 2]));
        self::assertSame([9, 4], IntersectionOfTwoArrays::intersection3([4, 9, 5], [9, 4, 9, 8, 4]));
    }
}
