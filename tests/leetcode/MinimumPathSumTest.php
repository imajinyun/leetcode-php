<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MinimumPathSum;
use PHPUnit\Framework\TestCase;

class MinimumPathSumTest extends TestCase
{
    public function testMinPathSum(): void
    {
        $grids = [
            [1, 3, 1],
            [1, 5, 1],
            [4, 2, 1],
        ];
        self::assertSame(7, MinimumPathSum::minPathSum($grids));
    }

    public function testMinPathSum2(): void
    {
        $grids = [
            [1, 3, 1],
            [1, 5, 1],
            [4, 2, 1],
        ];
        self::assertSame(7, MinimumPathSum::minPathSum2($grids));
    }

    public function testMinPathSum3(): void
    {
        $grids = [
            [1, 3, 1],
            [1, 5, 1],
            [4, 2, 1],
        ];
        self::assertSame(7, MinimumPathSum::minPathSum3($grids));
    }

    public function testMinPathSum4(): void
    {
        $grids = [
            [1, 3, 1],
            [1, 5, 1],
            [4, 2, 1],
        ];
        self::assertSame(7, MinimumPathSum::minPathSum4($grids));
    }
}
