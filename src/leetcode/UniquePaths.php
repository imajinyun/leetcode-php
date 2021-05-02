<?php

declare(strict_types=1);

namespace leetcode;

class UniquePaths
{
    public static function uniquePaths(int $m, int $n): int
    {
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $m, array_fill(0, $n, 1));
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $dp[$i][$j] = $dp[$i - 1][$j] + $dp[$i][$j - 1];
            }
        }

        return $dp[$m - 1][$n - 1];
    }

    public static function uniquePaths2(int $m, int $n): int
    {
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $prev = $curr = array_fill(0, $n, 1);
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $curr[$j] = $prev[$j] + $curr[$j - 1];
            }
            $temp = $prev;
            $prev = $curr;
            $curr = $temp;
        }

        return $prev[$n - 1];
    }

    public static function uniquePaths3(int $m, int $n): int
    {
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, 1);
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $dp[$j] += $dp[$j - 1];
            }
        }

        return $dp[$n - 1];
    }
}
