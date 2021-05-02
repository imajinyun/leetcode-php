<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\MaximalSquare;
use PHPUnit\Framework\TestCase;

class MaximalSquareTest extends TestCase
{
    private array $matrix;

    protected function setUp(): void
    {
        $this->matrix1 = [
            [1, 0, 1, 0, 0],
            [1, 0, 1, 1, 1],
            [1, 1, 1, 1, 1],
            [1, 0, 0, 1, 0],
        ];
        $this->matrix2 = [
            [1, 0, 1, 0, 0],
            [1, 0, 1, 1, 1],
            [1, 1, 1, 1, 1],
            [1, 0, 1, 1, 1],
        ];
    }

    public function testMaximalSquare(): void
    {
        self::assertEquals(4, MaximalSquare::maximalSquare($this->matrix1));
        self::assertEquals(9, MaximalSquare::maximalSquare($this->matrix2));
    }

    public function testMaximalSquare2(): void
    {
        self::assertEquals(4, MaximalSquare::maximalSquare2($this->matrix1));
        self::assertEquals(9, MaximalSquare::maximalSquare2($this->matrix2));
    }

    public function testMaximalSquare3(): void
    {
        self::assertEquals(4, MaximalSquare::maximalSquare3($this->matrix1));
        self::assertEquals(9, MaximalSquare::maximalSquare3($this->matrix2));
    }
}
