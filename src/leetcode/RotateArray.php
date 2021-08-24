<?php

declare(strict_types=1);

namespace leetcode;

class RotateArray
{
    public static function rotate(array &$nums, int $k): void
    {
        if (empty($nums) || $k <= 0) {
            return;
        }
        [$ans, $n] = [[], count($nums)];
        foreach ($nums as $i => $num) {
            $ans[($i + $k) % $n] = $num;
        }
        ksort($ans);
        $nums = $ans;
    }

    public static function rotate2(array &$nums, int $k): void
    {
        if (empty($nums) || $k <= 0) {
            return;
        }
        $n = count($nums);
        $k = $k % $n;
        $nums = array_merge(
            array_slice($nums, $n - $k, $n),
            array_slice($nums, 0, $n - $k)
        );
    }

    public static function rotate3(array &$nums, int $k): void
    {
        if (empty($nums) || $k <= 0) {
            return;
        }

        $n = count($nums);
        $k = $k % $n;
        if ($k) {
            self::helper($nums, 0, $n - 1);
            self::helper($nums, 0, $k - 1);
            self::helper($nums, $k, $n - 1);
        }
    }

    private static function helper(array &$nums, int $i, int $j): void
    {
        while ($i < $j) {
            [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];
            $i++;
            $j--;
        }
    }
}
