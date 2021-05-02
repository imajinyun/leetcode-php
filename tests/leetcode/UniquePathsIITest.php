<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\UniquePathsII;
use PHPUnit\Framework\TestCase;

class UniquePathsIITest extends TestCase
{
    public function testUniquePathsWithObstacles(): void
    {
        $grids = [
            [0, 0, 0],
            [0, 1, 0],
            [0, 0, 0],
        ];
        self::assertSame(2, UniquePathsII::uniquePathsWithObstacles($grids));
    }

    public function testUniquePathsWithObstacles2(): void
    {
        $grids = [
            [0, 0, 0],
            [0, 1, 0],
            [0, 0, 0],
        ];
        self::assertSame(2, UniquePathsII::uniquePathsWithObstacles2($grids));
    }
}
