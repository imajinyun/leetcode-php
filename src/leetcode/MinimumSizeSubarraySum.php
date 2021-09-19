<?php

declare(strict_types=1);

namespace leetcode;

class MinimumSizeSubarraySum
{
    public static function minSubArrayLen(int $target, array $nums): int
    {
        if (empty($nums) || $target < 0) {
            return 0;
        }
        $i = $j = $sum = 0;
        [$n, $min] = [count($nums), PHP_INT_MAX];
        while ($i < $n) {
            $sum += $nums[$i++];
            while ($sum >= $target) {
                $min = min($min, $i - $j);
                $sum -= $nums[$j++];
            }
        }

        return $min === PHP_INT_MAX ? 0 : $min;
    }

    public static function minSubArrayLen2(int $target, array $nums): int
    {
        if (empty($nums) || $target < 0) {
            return 0;
        }
        [$n, $j, $sum, $min] = [count($nums), 0, 0, PHP_INT_MAX];
        for ($i = 0; $i < $n; $i++) {
            $sum += $nums[$i];
            for (; $j < $n && $sum >= $target; $j++) {
                $min = min($min, $i - $j + 1);
                $sum -= $nums[$j];
            }
        }

        return $min === PHP_INT_MAX ? 0 : $min;
    }
}
