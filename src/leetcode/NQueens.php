<?php

declare(strict_types=1);

namespace leetcode;

use leetcode\util\Position;

class NQueens
{
    public static function solveNQueens(int $n): array
    {
        if ($n == 0) {
            return [];
        }
        $positions = [];
        for ($i = 0; $i < $n; $i++) {
            $positions[$i] = new Position();
        }

        if (self::isAttackedRange($n, 0, $positions)) {
            return $positions;
        }

        return $positions;
    }

    private static function isAttackedRange(int $n, int $row, &$positions): bool
    {
        if ($n === $row) {
            return true;
        }

        for ($col = 0; $col < $n; $col++) {
            $isSafe = true;
            for ($queen = 0; $queen < $row; $queen++) {
                if ($positions[$queen]->col === $col
                    || $positions[$queen]->row - $positions[$queen]->col === $row - $col
                    || $positions[$queen]->row + $positions[$queen]->col === $row + $col) {
                    $isSafe = false;
                    break;
                }
            }

            if ($isSafe) {
                $positions[$row] = new Position($row, $col);
                if (self::isAttackedRange($n, $row + 1, $positions)) {
                    return true;
                }
            }
        }

        return false;
    }
}
