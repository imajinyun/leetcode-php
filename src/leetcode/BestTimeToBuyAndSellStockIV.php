<?php

declare(strict_types=1);

namespace leetcode;

class BestTimeToBuyAndSellStockIV
{
    public static function maxProfit(int $k, array $prices)
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $helper = static function () use ($prices) {
            [$buy, $sell] = [0, -$prices[0]];
            foreach ($prices as $i => $price) {
                $tmp = $buy - $price;
                $buy = max($buy, $sell + $price);
                $sell = max($sell, $tmp);
            }

            return $buy;
        };
        if ($k > $n / 2) {
            return $helper();
        }

        $dp = array_fill(0, $n, array_fill(0, $n, [0, 0, 0]));
        foreach ($prices as $i => $price) {
            for ($j = $k; $j > 0; $j--) {
                if ($i - 1 < 0) {
                    $dp[$i][$j][0] = 0;
                    $dp[$i][$j][1] = -$price;
                } else {
                    $dp[$i][$j][0] = max($dp[$i - 1][$j][0], $dp[$i - 1][$j][1] + $price);
                    $dp[$i][$j][1] = max($dp[$i - 1][$j][1], $dp[$i - 1][$j - 1][0] - $price);
                }
            }
        }

        return $dp[$n - 1][$k][0];
    }

    public static function maxProfit2(int $k, array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        $helper = static function () use ($prices) {
            [$n, $maxProfit] = [count($prices), 0];
            for ($i = 1; $i < $n; $i++) {
                if ($prices[$i] > $prices[$i - 1]) {
                    $maxProfit += max(0, $prices[$i] - $prices[$i - 1]);
                }
            }

            return $maxProfit;
        };

        if ($k > $n / 2) {
            return $helper();
        }
        $dp = array_fill(0, $n, array_fill(0, $n, [0, 0]));
        foreach ($prices as $i => $price) {
            foreach (range($k + 1, 1) as $j) {
                if ($i - 1 < 0) {
                    $dp[$i][$j][0] = 0;
                    $dp[$i][$j][1] = -$price;
                } else {
                    $dp[$i][$j][0] = max($dp[$i - 1][$j][0], $dp[$i - 1][$j][1] + $price);
                    $dp[$i][$j][1] = max($dp[$i - 1][$j][1], $dp[$i - 1][$j - 1][0] - $price);
                }
            }
        }

        return $dp[$n - 1][$k][0];
    }
}
