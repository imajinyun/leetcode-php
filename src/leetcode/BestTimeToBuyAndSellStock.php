<?php

declare(strict_types=1);

namespace leetcode;

class BestTimeToBuyAndSellStock
{
    public static function maxProfit(array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, array_fill(0, $n, [0, 0]));
        foreach ($prices as $i => $price) {
            if ($i - 1 < 0) {
                $dp[0][0] = 0;
                $dp[0][1] = -$price;
            } else {
                $dp[$i][0] = max($dp[$i - 1][0], $dp[$i - 1][1] + $price);
                $dp[$i][1] = max($dp[$i - 1][1], -$price);
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
        [$maxProfit, $minPrice] = [0, -$prices[0]];
        foreach ($prices as $i => $price) {
            $maxProfit = max($maxProfit, $minPrice + $price);
            $minPrice = max($minPrice, -$price);
        }

        return $maxProfit;
    }
}
