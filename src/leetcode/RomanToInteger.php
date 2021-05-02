<?php

declare(strict_types=1);

namespace leetcode;

class RomanToInteger
{
    public static function romanToInt(string $s): int
    {
        [$res, $len] = [0, strlen($s)];
        if ($len === 0) {
            return $res;
        }
        $map = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
        for ($i = 0, $j = 1; $j < $len; $i++, $j++) {
            if ($map[$s[$i]] >= $map[$s[$j]]) {
                $res += $map[$s[$i]];
            } else {
                $res -= $map[$s[$i]];
            }
        }

        return $res + $map[$s[$i]];
    }
}
