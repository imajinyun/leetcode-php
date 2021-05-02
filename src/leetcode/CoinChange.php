<?php

declare(strict_types=1);

namespace leetcode;

use SplFixedArray;

class CoinChange
{
    public static function coinChange(array $coins, int $amount): int
    {
        [$m, $n] = [$amount + 1, count($coins)];
        if ($amount <= 0 || $n <= 0) {
            return 0;
        }
        [$dp, $dp[0]] = [array_fill(0, $m, $m), 0];
        for ($i = 1; $i < $m; ++$i) {
            for ($j = 0; $j < $n; ++$j) {
                $coin = $coins[$j];
                if ($coin <= $i) {
                    $dp[$i] = min($dp[$i], $dp[$i - $coin] + 1);
                }
            }
        }

        return $dp[$amount] > $amount ? -1 : $dp[$amount];
    }

    public static function coinChange2(array $coins, int $amount): int
    {
        [$m, $n] = [$amount + 1, count($coins)];
        if ($amount <= 0 || $n <= 0) {
            return 0;
        }
        [$dp, $max] = [array_fill(0, $m, 0), PHP_INT_MAX];
        for ($i = 1; $i < $m; ++$i) {
            $dp[$i] = $max;
            foreach ($coins as $coin) {
                if ($coin <= $i && $dp[$i - $coin] !== $max) {
                    $dp[$i] = min($dp[$i], $dp[$i - $coin] + 1);
                }
            }
        }

        return $dp[$amount] === $max ? -1 : $dp[$amount];
    }
}
