<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\SpiralMatrixII;
use PHPUnit\Framework\TestCase;

class SpiralMatrixIITest extends TestCase
{
    public function testGenerateMatrix(): void
    {
        self::assertSame(
            [[1, 2, 3], [8, 9, 4], [7, 6, 5]],
            SpiralMatrixII::generateMatrix(3)
        );
        self::assertSame(
            [[1]],
            SpiralMatrixII::generateMatrix(1)
        );
    }

    public function testGenerateMatrix2(): void
    {
        self::assertSame(
            [[1, 2, 3], [8, 9, 4], [7, 6, 5]],
            SpiralMatrixII::generateMatrix2(3)
        );
        self::assertSame(
            [[1]],
            SpiralMatrixII::generateMatrix2(1)
        );
    }
}
