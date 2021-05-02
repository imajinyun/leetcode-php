<?php

declare(strict_types=1);

namespace leetcode\tests;

use leetcode\NQueens;
use PHPUnit\Framework\TestCase;

class NQueensTest extends TestCase
{
    public function testSolveNQueens(): void
    {
        $n = 4;
        $result = NQueens::solveNQueens($n);

        $expect = [
            ['.Q..', '...Q', 'Q...', '..Q.'],
            ['..Q.', 'Q...', '...Q', '.Q..'],
        ];

        $one = $two = [];
        /** @var \leetcode\util\Position $position */
        foreach ($result as $position) {
            $col = $position->col;
            $str1 = '';
            for ($i = 0; $i < $n; $i++) {
                $str1 .= $col === $i ? 'Q' : '.';
            }
            $one[] = $str1;
            $two[] = strrev($str1);
        }
        $actual = [$one, $two];
        self::assertSame($expect, $actual);
    }
}
