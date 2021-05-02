<?php

declare(strict_types=1);

namespace leetcode;

class AvailableCapturesForRook
{
    public static function numRookCaptures(array $board): int
    {
        [$m, $n] = [count($board), empty($board[0]) ? 0 : count($board[0])];
        if ($m === 0 || $n === 0) {
            return 0;
        }
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($board[$i][$j] === 'R') {
                    return self::helper($board, $i, $j, 0, 1)
                        + self::helper($board, $i, $j, 0, -1)
                        + self::helper($board, $i, $j, 1, 0)
                        + self::helper($board, $i, $j, -1, 0);
                }
            }
        }

        return 0;
    }

    private static function helper(array $board, int $x, int $y, int $dx, int $dy): int
    {
        [$m, $n] = [count($board), empty($board[0]) ? 0 : count($board[0])];
        while ($x >= 0 && $x < $m && $y >= 0 && $y < $n && $board[$x][$y] !== 'B') {
            if ($board[$x][$y] === 'p') {
                return 1;
            }
            [$x, $y] = [$x + $dx, $y + $dy];
        }

        return 0;
    }
}
