<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\SquaresOfASortedArray;

class SquaresOfASortedArrayTest extends TestCase
{
    public function testSortedSquares(): void
    {
        self::assertSame(
            [0, 1, 9, 16, 100],
            SquaresOfASortedArray::sortedSquares([-4, -1, 0, 3, 10])
        );
        self::assertSame(
            [4, 9, 9, 49, 121],
            SquaresOfASortedArray::sortedSquares([-7, -3, 2, 3, 11])
        );
    }

    public function testSortedSquares2(): void
    {
        self::assertSame(
            [0, 1, 9, 16, 100],
            SquaresOfASortedArray::sortedSquares2([-4, -1, 0, 3, 10])
        );
        self::assertSame(
            [4, 9, 9, 49, 121],
            SquaresOfASortedArray::sortedSquares2([-7, -3, 2, 3, 11])
        );
    }
}
