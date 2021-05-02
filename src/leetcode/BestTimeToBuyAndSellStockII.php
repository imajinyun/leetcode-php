<?php

declare(strict_types=1);

namespace leetcode;

class BestTimeToBuyAndSellStockII
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
                $dp[$i][1] = max($dp[$i - 1][1], $dp[$i - 1][0] - $price);
            }
        }

        return $dp[$n - 1][0];
    }

    public static function maxProfit2(array $prices): int
    {
        if (count($prices) <= 0) {
            return 0;
        }
        [$maxProfit, $minPrice] = [0, -$prices[0]];
        foreach ($prices as $price) {
            $maxProfit = max($maxProfit, $minPrice + $price);
            $minPrice = max($minPrice, $maxProfit - $price);
        }

        return $maxProfit;
    }

    public static function maxProfit3(array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $ans = [];
        for ($i = $n - 2; $i >= 0; --$i) {
            $ans[] = max($prices[$i + 1] - $prices[$i], 0);
        }

        return array_sum($ans);
    }

    public static function maxProfit4(array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $ans = 0;
        for ($i = 1; $i < $n; ++$i) {
            $ans += max(0, $prices[$i] - $prices[$i - 1]);
        }

        return $ans;
    }
}
