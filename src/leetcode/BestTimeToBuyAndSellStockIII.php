<?php

declare(strict_types=1);

namespace leetcode;

class BestTimeToBuyAndSellStockIII
{
    public static function maxProfit(array $prices): int
    {
        [$n, $k] = [count($prices), 3];
        if ($n <= 0) {
            return 0;
        }
        $dp = array_fill(0, $n, array_fill(0, $k, [0, 0, 0]));
        foreach ($prices as $i => $price) {
            for ($j = 1; $j < $k; ++$j) {
                if ($i - 1 < 0) {
                    $dp[$i][$j][0] = 0;
                    $dp[$i][$j][1] = -$price;
                } else {
                    $dp[$i][$j][0] = max($dp[$i - 1][$j][0], $dp[$i - 1][$j][1] + $price);
                    $dp[$i][$j][1] = max($dp[$i - 1][$j][1], $dp[$i - 1][$j - 1][0] - $price);
                }
            }
        }

        return $dp[$n - 1][$k - 1][0];
    }

    public static function maxProfit2(array $prices): int
    {
        $n = count($prices);
        if ($n <= 0) {
            return 0;
        }
        [$buy1, $buy2, $sell1, $sell2] = [-$prices[0], -$prices[0], 0, 0];
        foreach ($prices as $price) {
            $buy1 = max($buy1, -$price);
            $sell1 = max($sell1, $buy1 + $price);
            $buy2 = max($buy2, $sell1 - $price);
            $sell2 = max($sell2, $buy2 + $price);
        }

        return max(0, $sell1, $sell2);
    }

    public static function maxProfit3(array $prices): int
    {
        [$n, $ans] = [count($prices), 0];
        if ($n <= 0) {
            return 0;
        }
        [$x, $y] = [array_pad([], $n, 0), array_pad([], $n, 0)];

        for ($i = 1, $min = $prices[0]; $i < $n; ++$i) {
            $min = min($min, $prices[$i]);
            $x[$i] = max($x[$i - 1], $prices[$i] - $min);
        }

        for ($i = $n - 2, $max = $prices[$n - 1]; $i > 0; --$i) {
            $max = max($max, $prices[$i]);
            $y[$i] = max($y[$i + 1], $max - $prices[$i]);
        }

        for ($i = 0; $i < $n; ++$i) {
            $ans = max($ans, $x[$i] + $y[$i]);
        }

        return $ans;
    }
}
