<?php

declare(strict_types=1);

namespace leetcode;

class FindPivotIndex
{
    public static function pivotIndex(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$left, $right]= [0, array_sum($nums)];
        foreach ($nums as $key => $num) {
            $right -= $num;
            if ($left === $right) {
                return $key;
            }
            $left += $num;
        }

        return -1;
    }

    public static function pivotIndex2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }

        [$n, $sum, $total] = [count($nums), 0, array_sum($nums)];
        for ($i = 0; $i < $n; $sum += $nums[$i++]) {
            if ($sum * 2 === $total - $nums[$i]) {
                return $i;
            }
        }

        return -1;
    }

    public static function pivotIndex3(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$n, $sum, $total] = [count($nums), 0, array_sum($nums)];
        for ($i = 0; $i < $n; $i++) {
            if ($i !== 0) {
                $sum += $nums[$i - 1];
            }
            if ($total - $sum - $nums[$i] === $sum) {
                return $i;
            }
        }

        return -1;
    }
}
