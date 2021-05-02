<?php

declare(strict_types=1);

namespace leetcode;

class IntegerBreak
{
    public static function integerBreak(int $n): int
    {
        if ($n <= 0) {
            return 0;
        }
        if ($n === 2 || $n === 3) {
            return $n - 1;
        }
        $ans = 1;
        while ($n > 4) {
            $n = $n - 3;
            $ans = $ans * 3;
        }

        return $n * $ans;
    }

    public static function integerBreak2(int $n): int
    {
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n + 1, 0);
        $dp[1] = 1;
        for ($i = 2; $i <= $n; $i++) {
            for ($j = 1; $j < $i; $j++) {
                $dp[$i] = max($dp[$i], (max($j, $dp[$j])) * max($i - $j, $dp[$i - $j]));
            }
        }

        return $dp[$n];
    }
}
