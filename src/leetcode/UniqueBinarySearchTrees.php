<?php

declare(strict_types=1);

namespace leetcode;

class UniqueBinarySearchTrees
{
    public static function numTrees(int $n): int
    {
        if ($n === 0 || $n === 1) {
            return 1;
        }
        $dp = array_fill(0, $n + 1, 0);
        $dp[0] = $dp[1] = 1;
        for ($i = 2; $i <= $n; ++$i) {
            for ($j = 1; $j <= $i; ++$j) {
                $dp[$i] += $dp[$j - 1] * $dp[$i - $j];
            }
        }

        return $dp[$n];
    }

    public static function numTrees2(int $n): int
    {
        $ans = 1;
        if ($n === 0 || $n === 1) {
            return $ans;
        }
        for ($i = 1; $i <= $n; ++$i) {
            $ans = $ans * ($i + $n) / $i;
        }

        return $ans / $i;
    }
}
