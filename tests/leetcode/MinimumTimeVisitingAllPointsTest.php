<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use leetcode\MinimumTimeVisitingAllPoints;

class MinimumTimeVisitingAllPointsTest extends TestCase
{
    public function testMinTimeToVisitAllPoints(): void
    {
        self::assertSame(7, MinimumTimeVisitingAllPoints::minTimeToVisitAllPoints([[1, 1], [3, 4], [-1, 0]]));
        self::assertSame(5, MinimumTimeVisitingAllPoints::minTimeToVisitAllPoints([[3, 2], [-2, 2]]));
    }
}
