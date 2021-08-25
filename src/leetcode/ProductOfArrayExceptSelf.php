<?php

declare(strict_types=1);

namespace leetcode;

class ProductOfArrayExceptSelf
{
    public static function productExceptSelf(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        $ans = $left = $right = array_fill(0, $n, 0);
        $left[0] = $right[$n - 1] = 1;

        for ($i = 1; $i < $n; $i++) {
            $left[$i] = $left[$i - 1] * $nums[$i - 1];
        }
        for ($i = $n - 2; $i >= 0; $i--) {
            $right[$i] = $right[$i + 1] * $nums[$i + 1];
        }
        for ($i = 0; $i < $n; $i++) {
            $ans[$i] = $left[$i] * $right[$i];
        }

        return $ans;
    }

    public static function productExceptSelf2(array $nums): array
    {
        if (empty($nums)) {
            return [];
        }
        $n = count($nums);
        $ans = array_fill(0, $n, 0);
        for ($i = 0, $tmp = 1; $i < $n; $i++) {
            $ans[$i] = $tmp;
            $tmp *= $nums[$i];
        }
        for ($i = $n - 1, $tmp = 1; $i >= 0; $i--) {
            $ans[$i] *= $tmp;
            $tmp *= $nums[$i];
        }

        return $ans;
    }
}
