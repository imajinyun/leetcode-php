<?php

declare(strict_types=1);

namespace leetcode;

class MaximumAverageSubarrayI
{
    public static function findMaxAverage(array $nums, int $k): float
    {
        if (empty($nums)) {
            return 0;
        }
        $sum = 0;
        for ($i = 0; $i < $k; $i++) {
            $sum += $nums[$i];
        }
        $max = $sum;
        for ($i = $k, $n = count($nums); $i < $n; $i++) {
            $sum += $nums[$i] - $nums[$i - $k];
            $max = max($max, $sum);
        }

        return $max / $k;
    }

    public static function findMaxAverage2(array $nums, int $k): float
    {
        if (empty($nums)) {
            return 0;
        }
        [$ans, $sum] = [PHP_INT_MIN, 0];
        for ($i = 0, $n = count($nums); $i < $n; $i++) {
            if ($i < $k) {
                $sum += $nums[$i];
            } else {
                $ans = max($ans, $sum);
                $sum += $nums[$i] - $nums[$i - $k];
            }
        }

        return max($ans, $sum) / $k;
    }
}
