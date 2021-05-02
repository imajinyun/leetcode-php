<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\NumberOfIslands;

class NumberOfIslandsTest extends TestCase
{
    public function testNumIslands(): void
    {
        [$grid1, $grid2] = [
            [
                [1, 1, 1, 1, 0],
                [1, 1, 0, 1, 0],
                [1, 1, 0, 0, 0],
                [0, 0, 0, 0, 0],
            ],
            [
                [1, 1, 0, 0, 0],
                [1, 1, 0, 0, 0],
                [0, 0, 1, 0, 0],
                [0, 0, 0, 1, 1],
            ],
        ];
        self::assertEquals(1, NumberOfIslands::numIslands($grid1));
        self::assertEquals(3, NumberOfIslands::numIslands($grid2));
    }
}
