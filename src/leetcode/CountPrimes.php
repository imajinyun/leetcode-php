<?php

declare(strict_types=1);

namespace leetcode;

class CountPrimes
{
    public static function countPrimes(int $n): int
    {
        if ($n <= 1) {
            return 0;
        }
        [$cnt, $arr] = [0, array_fill(0, $n, false)];
        for ($i = 2; $i < $n; $i++) {
            if (!$arr[$i]) {
                $cnt++;
                for ($j = 2; $i * $j < $n; $j++) {
                    $arr[$i * $j] = true;
                }
            }
        }

        return $cnt;
    }

    public static function countPrimes2(int $n): int
    {
        if ($n <= 2) {
            return 0;
        }
        $dp = array_fill(0, $n, 1);
        $dp[0] = $dp[1] = 0;
        for ($i = 2; $i < $n; $i++) {
            if ($dp[$i]) {
                for ($j = $i * $i; $j < $n; $j += $i) {
                    $dp[$j] = 0;
                }
            }
        }

        return array_sum($dp);
    }
}
