<?php

declare(strict_types=1);

namespace leetcode;

class BestTimeToBuyAndSellStockWithCooldown
{
    public static function maxProfit(array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, [0, 0]);
        foreach ($prices as $i => $price) {
            if ($i - 1 < 0) {
                $dp[0][0] = 0;
                $dp[0][1] = -$price;
            } else {
                $dp[$i][0] = max($dp[$i - 1][0], $dp[$i - 1][1] + $price);
                $dp[$i][1] = max($dp[$i - 1][1], ($dp[$i - 2][0] ?? 0) - $price);
            }
        }

        return $dp[$n - 1][0];
    }

    public static function maxProfit2(array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, [0, 0, 0]);
        foreach ($prices as $i => $price) {
            if ($i - 1 < 0) {
                $dp[0][0] = 0;
                $dp[0][1] = -$price;
                $dp[0][2] = 0;
            } else {
                $dp[$i][0] = max($dp[$i - 1][0], $dp[$i - 1][1] + $price);
                $dp[$i][1] = max($dp[$i - 1][1], $dp[$i - 1][2] - $price);
                $dp[$i][2] = $dp[$i - 1][0];
            }
        }

        return max($dp[$n - 1][0], $dp[$n - 1][2]);
    }

    public static function maxProfit3(array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, 0);
        [$cash, $hold] = [0, -$prices[0]];
        foreach ($prices as $i => $price) {
            if ($i - 1 < 0) {
                [$dp[0], $dp[1], $dp[2]] = [0, -$price, 0];
            } else {
                $dp[0] = max($cash, $hold + $price);
                $dp[1] = max($hold, $dp[2] - $price);
                $dp[2] = $cash;
                [$cash, $hold] = [$dp[0], $dp[1]];
            }
        }

        return max($dp[0], $dp[2]);
    }
}
