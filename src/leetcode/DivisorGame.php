<?php

declare(strict_types=1);

namespace leetcode;

class DivisorGame
{
    public static function divisorGame(int $n): bool
    {
        if ($n <= 0) {
            return false;
        }

        return $n % 2 === 0;
    }

    public static function divisorGame2(int $n): bool
    {
        if ($n <= 0) {
            return false;
        }

        $dp = array_fill(0, $n + 1, false);
        $dp[1] = false;
        $dp[2] = true;
        for ($i = 3; $i <= $n; $i++) {
            for ($j = 1; $j < $i; $j++) {
                if ($i % $j === 0 && !$dp[$i - $j]) {
                    $dp[$i] = true;
                    break;
                }
            }
        }

        return $dp[$n];
    }
}
