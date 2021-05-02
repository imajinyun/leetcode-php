<?php

declare(strict_types=1);

namespace leetcode;

class UniquePathsII
{
    public static function uniquePathsWithObstacles(array $grids): int
    {
        [$m, $n] = [count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $m, array_fill(0, $n, 0));
        $dp[0][1] = 1;
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $dp[$i][$j] = $dp[$i - 1][$j] + $dp[$i][$j - 1];
            }
        }

        return $dp[$m - 1][$n - 1];
    }

    public static function uniquePathsWithObstacles2(array $grids): int
    {
        [$m, $n] = [count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, 0);
        $dp[0] = 1;
        foreach ($grids as $grid) {
            for ($j = 1; $j < $n; $j++) {
                if ($grid[$j] === 1) {
                    $dp[$j] = 0;
                } else {
                    $dp[$j] += $dp[$j - 1];
                }
            }
        }

        return $dp[$n - 1];
    }
}
