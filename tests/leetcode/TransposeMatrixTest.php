<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\TransposeMatrix;
use PHPUnit\Framework\TestCase;

class TransposeMatrixTest extends TestCase
{
    public function testTranspose(): void
    {
        self::assertSame(
            [[1, 4, 7], [2, 5, 8], [3, 6, 9]],
            TransposeMatrix::transpose([[1, 2, 3], [4, 5, 6], [7, 8, 9]])
        );

        self::assertSame(
            [[1, 2, 3], [4, 5, 6]],
            TransposeMatrix::transpose([[1, 4], [2, 5], [3, 6]])
        );
    }
}
