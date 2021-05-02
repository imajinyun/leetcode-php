<?php

declare(strict_types=1);

namespace leetcode;

class MaximumProductSubarray
{
    public static function maxProduct(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        $ans = $min = $max = $nums[0];
        for ($i = 1; $i < $n; $i++) {
            $num = $nums[$i];
            if ($num < 0) {
                $tmp = $max;
                $max = $min;
                $min = $tmp;
            }
            $max = max($max * $num, $num);
            $min = min($min * $num, $num);
            $ans = max($ans, $max);
        }

        return $ans;
    }

    public static function maxProduct2(array $nums): int
    {
        $n = count($nums);
        if ($n <= 0) {
            return 0;
        }
        $ans = $nums[0];
        $min = $max = 0;
        for ($i = 0; $i < $n; $i++) {
            $min = ($min === 0 ? 1 : $min) * $nums[$i];
            $max = ($max === 0 ? 1 : $max) * $nums[$i];
            $ans = max($ans, max($min, $max));
        }

        return $ans;
    }
}
