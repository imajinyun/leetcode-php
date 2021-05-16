<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\FixedPoint;
use PHPUnit\Framework\TestCase;

class FixedPointTest extends TestCase
{
    public function testFixedPoint(): void
    {
        self::assertSame(3, FixedPoint::fixedPoint([-10, -5, 0, 3, 7]));
        self::assertSame(-1, FixedPoint::fixedPoint([-10, -5, 3, 4, 7, 9]));
    }

    public function testFixedPoint2(): void
    {
        self::assertSame(3, FixedPoint::fixedPoint2([-10, -5, 0, 3, 7]));
        self::assertSame(-1, FixedPoint::fixedPoint2([-10, -5, 3, 4, 7, 9]));
    }
}
