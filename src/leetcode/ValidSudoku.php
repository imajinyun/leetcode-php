<?php

declare(strict_types=1);

namespace leetcode;

class ValidSudoku
{
    public static function isValidSudoku(array $board): bool
    {
        [$m, $n] = [count($board), count($board[0])];
        if ($m === 0 || $n === 0) {
            return false;
        }
        $helper = static function (array &$array, int $k, int $v) {
            $array[$k][$v] = isset($array[$k][$v]) ? $array[$k][$v] + 1 : 1;
        };
        $row = $col = $box = array_fill(0, $m, array_fill(0, $n, 0));
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ('.' !== $v = $board[$i][$j]) {
                    [$v, $k] = [(int) $v, (int) (floor($i / 3) * 3 + floor($j / 3))];
                    $helper($row, $i, $v);
                    $helper($col, $j, $v);
                    $helper($box, $k, $v);
                    if ($row[$i][$v] > 1 || $col[$j][$v] > 1 || $box[$k][$v] > 1) {
                        return false;
                    }
                }
            }
        }

        return true;
    }
}
