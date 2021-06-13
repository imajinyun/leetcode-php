<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\Shift2DGrid;

class Shift2DGridTest extends TestCase
{
    public function testShiftGrid(): void
    {
        self::assertSame([[100]], Shift2DGrid::shiftGrid([[100]], 0));
        self::assertSame(
            [[9, 1, 2], [3, 4, 5], [6, 7, 8]],
            Shift2DGrid::shiftGrid([[1, 2, 3], [4, 5, 6], [7, 8, 9]], 1)
        );
        self::assertSame(
            [[12, 0, 21, 13], [3, 8, 1, 9], [19, 7, 2, 5], [4, 6, 11, 10]],
            Shift2DGrid::shiftGrid([[3, 8, 1, 9], [19, 7, 2, 5], [4, 6, 11, 10], [12, 0, 21, 13]], 4)
        );
        self::assertSame(
            [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
            Shift2DGrid::shiftGrid([[1, 2, 3], [4, 5, 6], [7, 8, 9]], 9)
        );
    }
}
