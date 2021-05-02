<?php

declare(strict_types=1);

namespace leetcode;

class Triangle
{
    public static function minimumTotal(array $triangle)
    {
        if (0 === $n = count($triangle)) {
            return $n;
        }
        $dp = [];
        for ($i = 0; $i < count($triangle[$n - 1]); $i++) {
            $dp[$i] = $triangle[$n - 1][$i];
        }
        for ($i = $n - 2; $i >= 0; $i--) {
            for ($j = 0; $j <= $i; $j++) {
                $dp[$j] = min($dp[$j], $dp[$j + 1]) + $triangle[$i][$j];
            }
        }

        return $dp[0];
    }

    public static function minimumTotal2(array $triangle)
    {
        if (0 === $n = count($triangle)) {
            return $n;
        }

        $ans = $triangle[$n - 1];
        for ($i = $n - 2; $i >= 0; $i--) {
            for ($j = 0; $j <= $i; $j++) {
                $ans[$j] = $triangle[$i][$j] + min($ans[$j], $ans[$j + 1]);
            }
        }

        return $ans[0];
    }
}
