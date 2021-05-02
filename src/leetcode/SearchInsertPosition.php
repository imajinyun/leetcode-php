<?php

declare(strict_types=1);

namespace leetcode;

class SearchInsertPosition
{
    public static function searchInsert(array $nums, int $target)
    {
        if (($n = count($nums)) === 0) {
            return 0;
        }
        [$low, $high] = [0, $n - 1];
        while ($low <= $high) {
            $mid = (int) (($high + $low) / 2);
            if ($target === $nums[$mid]) {
                return $mid;
            } elseif ($target < $nums[$mid]) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return $low;
    }
}
