<?php

declare(strict_types=1);

namespace leetcode;

class PerfectSquares
{
    public static function numSquares(int $n): int
    {
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n + 1, PHP_INT_MAX);
        $dp[0] = 0;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j * $j <= $i; $j++) {
                $dp[$i] = min($dp[$i], $dp[$i - $j * $j] + 1);
            }
        }

        return array_pop($dp);
    }

    public static function numSquares2(int $n): int
    {
        if ($n <= 0) {
            return 0;
        }
        $dp = [0];
        while (count($dp) <= $n) {
            $cnt = count($dp);
            $tmp = PHP_INT_MAX;
            for ($i = 1; $i * $i <= $cnt; $i++) {
                $tmp = min($tmp, $dp[$cnt - $i * $i] + 1);
            }
            $dp[] = $tmp;
        }

        return $dp[$n];
    }
}
