<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\MinimumFallingPathSumII;

class MinimumFallingPathSumIITest extends TestCase
{
    public function testMinFallingPathSum(): void
    {
        $arr1 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        self::assertSame(13, MinimumFallingPathSumII::minFallingPathSum($arr1));

        $arr2 = [[7]];
        self::assertSame(7, MinimumFallingPathSumII::minFallingPathSum($arr2));
    }
}
