<?php

declare(strict_types=1);

namespace leetcode\tests;

use PHPUnit\Framework\TestCase;
use leetcode\ToeplitzMatrix;

class ToeplitzMatrixTest extends TestCase
{
    public function testIsToeplitzMatrix(): void
    {
        self::assertTrue(ToeplitzMatrix::isToeplitzMatrix([[1, 2, 3, 4], [5, 1, 2, 3], [9, 5, 1, 2]]));
        self::assertFalse(ToeplitzMatrix::isToeplitzMatrix([[1, 2], [2, 2]]));
    }
}
