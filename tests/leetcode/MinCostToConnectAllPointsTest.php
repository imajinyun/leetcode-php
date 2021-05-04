<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MinCostToConnectAllPoints;
use PHPUnit\Framework\TestCase;

class MinCostToConnectAllPointsTest extends TestCase
{
    public function testMinCostConnectPoints(): void
    {
        self::assertSame(
            20,
            MinCostToConnectAllPoints::minCostConnectPoints([[0, 0], [2, 2], [3, 10], [5, 2], [7, 0]])
        );
        self::assertSame(
            18,
            MinCostToConnectAllPoints::minCostConnectPoints([[3, 12], [-2, 5], [-4, 1]])
        );
        self::assertSame(
            4,
            MinCostToConnectAllPoints::minCostConnectPoints([[0, 0], [1, 1], [1, 0], [-1, 1]])
        );
        self::assertSame(
            4000000,
            MinCostToConnectAllPoints::minCostConnectPoints([[-1000000, -1000000], [1000000, 1000000]])
        );
        self::assertSame(0, MinCostToConnectAllPoints::minCostConnectPoints([[0, 0]]));
    }
}
