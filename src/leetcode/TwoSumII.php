<?php

declare(strict_types=1);

namespace leetcode;

class TwoSumII
{
    public static function twoSum(array $nums, int $target): array
    {
        $ans = [];
        if (empty($nums)) {
            return $ans;
        }
        [$left, $right] = [0, count($nums) - 1];
        while ($left <= $right) {
            $num = $nums[$left] + $nums[$right];
            if ($target === $num) {
                $ans = [$left + 1, $right + 1];
                break;
            } elseif ($target > $num) {
                $left++;
            } else {
                $right--;
            }
        }

        return $ans;
    }

    public static function twoSum2(array $nums, int $target): array
    {
        $ans = [];
        if (empty($nums)) {
            return $ans;
        }
        $map = [];
        foreach ($nums as $key => $num) {
            if (isset($map[$target - $num])) {
                $ans = [$map[$target - $num] + 1, $key + 1];
                break;
            }
            $map[$num] = $key;
        }

        return $ans;
    }

    public static function twoSum3(array $nums, int $target): array
    {
        $ans = [];
        if (empty($nums)) {
            return $ans;
        }
        for ($i = 0, $n = count($nums); $i < $n; $i++) {
            [$left, $right] = [$i + 1, $n - 1];
            $tmp = $target - $nums[$i];
            while ($left <= $right) {
                $mid = $left + (int)(($right - $left) / 2);
                if ($nums[$mid] < $tmp) {
                    $left++;
                } elseif ($nums[$mid] > $tmp) {
                    $right--;
                } else {
                    $ans = [$i + 1, $mid + 1];
                    break;
                }
            }
        }

        return $ans;
    }
}
