<?php

declare(strict_types=1);

namespace leetcode;

class FindPeakElement
{
    public static function findPeakElement(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        $max = $nums[0];
        foreach ($nums as $i => $num) {
            $max = max($max, $num);
        }

        return array_flip($nums)[$max];
    }

    public static function findPeakElement2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$left, $right] = [0, count($nums) - 1];
        while ($left < $right) {
            $mid = $left + (int)(($right - $left) / 2);
            if ($nums[$mid] < $nums[$mid + 1]) {
                $left = $mid + 1;
            } else {
                $right = $mid;
            }
        }

        return $left;
    }
}
