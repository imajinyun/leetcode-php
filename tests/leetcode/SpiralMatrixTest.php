<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\SpiralMatrix;
use PHPUnit\Framework\TestCase;

class SpiralMatrixTest extends TestCase
{
    public function testSpiralOrder(): void
    {
        self::assertSame(
            [1, 2, 3, 6, 9, 8, 7, 4, 5],
            SpiralMatrix::spiralOrder([[1, 2, 3], [4, 5, 6], [7, 8, 9]])
        );
        self::assertSame(
            [1, 2, 3, 4, 8, 12, 11, 10, 9, 5, 6, 7],
            SpiralMatrix::spiralOrder([[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]])
        );
    }

    public function testSpiralOrder2(): void
    {
        self::assertSame(
            [1, 2, 3, 6, 9, 8, 7, 4, 5],
            SpiralMatrix::spiralOrder2([[1, 2, 3], [4, 5, 6], [7, 8, 9]])
        );
        self::assertSame(
            [1, 2, 3, 4, 8, 12, 11, 10, 9, 5, 6, 7],
            SpiralMatrix::spiralOrder2([[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]])
        );
    }
}
