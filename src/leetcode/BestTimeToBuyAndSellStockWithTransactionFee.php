<?php

declare(strict_types=1);

namespace leetcode;

class BestTimeToBuyAndSellStockWithTransactionFee
{
    public static function maxProfit(array $prices, int $fee): int
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
                $dp[$i][0] = max($dp[$i - 1][0], $dp[$i - 1][1] + $price - $fee);
                $dp[$i][1] = max($dp[$i - 1][1], $dp[$i - 1][0] - $price);
            }
        }

        return $dp[$n - 1][0];
    }

    public static function maxProfit2(array $prices, int $fee): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        [$cash, $hold] = [0, -$prices[0] - $fee];
        foreach ($prices as $i => $price) {
            $cash = max($cash, $hold + $price - $fee);
            $hold = max($hold, $cash - $price);
        }

        return $cash;
    }
}
