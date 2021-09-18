<?php

declare(strict_types=1);

namespace leetcode;

class SearchInsertPosition
{
    public static function searchInsert(array $nums, int $target): int
    {
        if (empty($nums)) {
            return 0;
        }
        [$low, $high] = [0, count($nums) - 1];
        while ($low <= $high) {
            $mid = (int) (($high + $low) / 2);
            $mid = $low + intdiv($high - $low, 2);
            if ($nums[$mid] > $target) {
                $high = $mid - 1;
            } elseif ($nums[$mid] < $target) {
                $low = $mid + 1;
            } else {
                return $mid;
            }
        }

        return $low;
    }
}
