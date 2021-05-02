<?php

declare(strict_types=1);

namespace leetcode;

class MaximumProductOfThreeNumbers
{
    public static function maximumProduct(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $max1 = $max2 = $max3 = PHP_INT_MIN;
        $min1 = $min2 = PHP_INT_MAX;
        foreach ($nums as $num) {
            if ($num < $min1) {
                [$min2, $min1] = [$min1, $num];
            } elseif ($num < $min2) {
                $min2 = $num;
            }

            if ($num > $max1) {
                [$max3, $max2, $max1] = [$max2, $max1, $num];
            } elseif ($num > $max2) {
                [$max3, $max2] = [$max2, $num];
            } elseif ($num > $max3) {
                $max3 = $num;
            }
        }

        return max($min1 * $min2 * $max1, $max1 * $max2 * $max3);
    }

    public static function maximumProduct2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        sort($nums);
        $n = count($nums);
        $x = $nums[$n - 1] * $nums[$n - 2] * $nums[$n - 3];
        $y = $nums[0] * $nums[1] * $nums[2];

        return max($x, $y);
    }
}
