<?php

declare(strict_types=1);

namespace leetcode;

class TwoSumLessThanK
{
    public static function twoSumLessThanK(array $nums, int $k): int
    {
        $ans = -1;
        if (empty($nums)) {
            return $ans;
        }
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $sum = $nums[$i] + $nums[$j];
                if ($sum < $k) {
                    $ans = max($ans, $sum);
                }
            }
        }

        return $ans;
    }

    public static function twoSumLessThanK2(array $nums, int $k): int
    {
        $ans = -1;
        if (empty($nums)) {
            return $ans;
        }
        sort($nums);
        [$ans, $l, $r] = [-1, 0, count($nums) - 1];
        while ($l <= $r) {
            $sum = $nums[$l] + $nums[$r];
            if ($sum < $k) {
                $ans = max($ans, $sum);
                $l++;
            } else {
                $r--;
            }
        }

        return $ans;
    }
}
