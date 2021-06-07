<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MinimumCostToMoveChipsToTheSamePosition;

class MinimumCostToMoveChipsToTheSamePositionTest extends TestCase
{
    public static function testMinCostToMoveChips(): void
    {
        self::assertSame(1, MinimumCostToMoveChipsToTheSamePosition::minCostToMoveChips([1, 2, 3]));
        self::assertSame(2, MinimumCostToMoveChipsToTheSamePosition::minCostToMoveChips([2, 2, 2, 3, 3]));
        self::assertSame(1, MinimumCostToMoveChipsToTheSamePosition::minCostToMoveChips([1, 1000000000]));
    }
}
