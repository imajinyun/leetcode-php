<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ReshapeTheMatrix;

class ReshapeTheMatrixTest extends TestCase
{
    public function testMatrixReshape(): void
    {
        self::assertSame([[]], ReshapeTheMatrix::matrixReshape([[]], 1, 3));
        self::assertSame([[1, 2, 3, 4]], ReshapeTheMatrix::matrixReshape([[1, 2], [3, 4]], 1, 4));
        self::assertSame([[1, 2], [3, 4]], ReshapeTheMatrix::matrixReshape([[1, 2], [3, 4]], 2, 4));
    }
}
