<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\NQueensII;
use PHPUnit\Framework\TestCase;

class NQueensIITest extends TestCase
{
    public function testTotalNQueens(): void
    {
        self::assertSame(1, NQueensII::totalNQueens(1));
        self::assertSame(0, NQueensII::totalNQueens(2));
        self::assertSame(0, NQueensII::totalNQueens(3));
        self::assertSame(2, NQueensII::totalNQueens(4));
        self::assertSame(10, NQueensII::totalNQueens(5));
        self::assertSame(4, NQueensII::totalNQueens(6));
        self::assertSame(40, NQueensII::totalNQueens(7));
        self::assertSame(92, NQueensII::totalNQueens(8));
    }
}
