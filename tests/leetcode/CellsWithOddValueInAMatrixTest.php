<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\CellsWithOddValueInAMatrix;

class CellsWithOddValueInAMatrixTest extends TestCase
{
    public function testOddCells(): void
    {
        self::assertSame(6, CellsWithOddValueInAMatrix::oddCells(2, 3, [[0, 1], [1, 1]]));
        self::assertSame(0, CellsWithOddValueInAMatrix::oddCells(2, 2, [[1, 1], [0, 0]]));
    }

    public function testOddCells2(): void
    {
        self::assertSame(6, CellsWithOddValueInAMatrix::oddCells2(2, 3, [[0, 1], [1, 1]]));
        self::assertSame(0, CellsWithOddValueInAMatrix::oddCells2(2, 2, [[1, 1], [0, 0]]));
    }
}
