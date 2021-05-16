<?php

declare(strict_types=1);

namespace leetcode;

class FixedPoint
{
    public static function fixedPoint(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }

        foreach ($nums as $key => $val) {
            if ($key === $val) {
                return $key;
            }
        }

        return -1;
    }

    public static function fixedPoint2(array $nums): int
    {
        if (empty($nums)) {
            return 0;
        }

        [$low, $high] = [0, $nums[count($nums) - 1]];
        while ($low <= $high) {
            $mid = (int) ($low + ($high - $low) / 2);
            if ($nums[$mid] === $mid) {
                return $mid;
            } elseif ($mid > $nums[$mid]) {
                $low++;
            } else {
                $high--;
            }
        }

        return -1;
    }
}
