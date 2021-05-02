<?php

declare(strict_types=1);

namespace leetcode;

class MinimumPathSum
{
    public static function minPathSum(array $grids): int
    {
        [$m, $n] = [count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $m, array_fill(0, $n, $grids[0][0]));
        for ($i = 1; $i < $m; $i++) {
            $dp[$i][0] = $dp[$i - 1][0] + $grids[$i][0];
        }
        for ($j = 1; $j < $n; $j++) {
            $dp[0][$j] = $dp[0][$j - 1] + $grids[0][$j];
        }

        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $dp[$i][$j] = min($dp[$i - 1][$j], $dp[$i][$j - 1]) + $grids[$i][$j];
            }
        }

        return $dp[$m - 1][$n - 1];
    }

    public static function minPathSum2(array $grids): int
    {
        [$m, $n] = [count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $prev = $curr = array_fill(0, $n, 1);
        for ($i = 1; $i < $n; $i++) {
            $prev[$i] = $prev[$i - 1] + $grids[0][$i];
        }
        for ($i = 1; $i < $m; $i++) {
            $curr[0] = $prev[0] + $grids[$i][0];
            for ($j = 1; $j < $n; $j++) {
                $curr[$j] = min($prev[$j], $curr[$j - 1]) + $grids[$i][$j];
            }
            $temp = $prev;
            $prev = $curr;
            $curr = $temp;
        }

        return $prev[$n - 1];
    }

    public static function minPathSum3(array $grids): int
    {
        [$m, $n] = [count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, $grids[0][0]);
        for ($i = 1; $i < $n; $i++) {
            $dp[$i] = $dp[$i - 1] + $grids[0][$i];
        }
        for ($i = 1; $i < $m; $i++) {
            $dp[0] += $grids[0][$i];
            for ($j = 1; $j < $n; $j++) {
                $dp[$j] = min($dp[$j - 1], $dp[$j]) + $grids[$i][$j];
            }
        }

        return $dp[$n - 1];
    }

    public static function minPathSum4(array $grids)
    {
        [$m, $n] = [count($grids), count($grids[0])];
        if ($m <= 0 || $n <= 0) {
            return 0;
        }
        for ($i = 1; $i < $n; $i++) {
            $grids[0][$i] += $grids[0][$i - 1];
        }
        for ($i = 1; $i < $m; $i++) {
            $grids[$i][0] += $grids[$i - 1][0];
            for ($j = 1; $j < $n; $j++) {
                $grids[$i][$j] += min($grids[$i][$j - 1], $grids[$i - 1][$j]);
            }
        }

        return $grids[$m - 1][$n - 1];
    }
}
