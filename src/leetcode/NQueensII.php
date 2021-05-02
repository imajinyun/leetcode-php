<?php

declare(strict_types=1);

namespace leetcode;

class NQueensII
{
    public static function totalNQueens(int $n): int
    {
        $num = 0;
        $chessboard = array_fill(0, $n, 0);

        return self::helper($chessboard, 0, $num);
    }

    private static function helper(array &$chessboard, int $row, int &$num): int
    {
        if ($row === $count = count($chessboard)) {
            ++$num;
        }

        for ($col = 0; $col < $count; $col++) {
            if (self::isAttackedRange($chessboard, $row, $col)) {
                $chessboard[$row] = $col;
                self::helper($chessboard, $row + 1, $num);
                $chessboard[$row] = 0;
            }
        }

        return $num;
    }

    public static function isAttackedRange(array &$chessboard, int $row, int $col): bool
    {
        for ($i = 0; $i < $row; $i++) {
            if ($col === $chessboard[$i] || abs($row - $i) === abs($col - $chessboard[$i])) {
                return false;
            }
        }

        return true;
    }
}
